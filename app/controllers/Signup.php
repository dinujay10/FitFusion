<?php

class Signup {
    use Controller;

    public function index() {
        if(isset($_SESSION['email'])){
            redirect('gymmanagerdash');
            die();
        }
        
        $data = [];

        if ($_SERVER['REQUEST_METHOD']=='POST') {
            if($_POST['usertype']=='member') {
                $user = new Member;
            } else if($_POST['usertype']=='gyminstructor') {
                $user = new Gyminstructor; 
            } else if($_POST['usertype']=='nutritionist') {
                $user = new Nutritionist;
            }
            // } else if($_POST['usertype']=='gymmanager') {
            //     $user = new Gymmanager;
            // } else if($_POST['usertype']=='gymowner') {
            //     $user = new Gymowner;
            // }
            
            $usertable = new User;

            if($user->validate($_POST) && $usertable->unique($_POST)){
                if($_POST['password']==$_POST['passwordConfirm']) {
                    $enc_password=password_hash($_POST['password'],PASSWORD_DEFAULT);
                    $_POST['password']=$enc_password;
                    $_POST['passwordConfirm']=$enc_password;
                    $user->insert($_POST);
                    $usertable->insert($_POST);
                    redirect('login');
                }
            }

            $data['errors'] = $user->errors;
        }

        $this->view('signup', $data);
    }

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}