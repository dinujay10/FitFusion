
<?php

class Signup {
    use Controller;

    public function index() {
        if(isset($_SESSION['email'])){
            if($_SESSION['usertype']=="member") {
                redirect('memberdash');
                die();
            } else if($_SESSION['usertype']=="gyminstructor") {
                redirect('gyminstructordash');
                die();
            } else if($_SESSION['usertype']=="nutritionist") {
                redirect('nutritionistdash');
                die();
            } else if($_SESSION['usertype']=="gymmanager") {
                redirect('gymmanagerdash');
                die();
            } else if($_SESSION['usertype']=="gymowner") {
                redirect('gymownerdash');
                die();
            } else if($_SESSION['usertype']=="admin") {
                redirect('admindash');
                die();
            }
        }
        
        $data = [];

        if ($_SERVER['REQUEST_METHOD']=='POST') {
            // if($_POST['usertype']=='member') {
            //     $user = new Member;
            // } else if($_POST['usertype']=='gyminstructor') {
            //     $user = new Gyminstructor; 
            // } else if($_POST['usertype']=='nutritionist') {
            //     $user = new Nutritionist;
            // }
            // } else if($_POST['usertype']=='gymmanager') {
            //     $user = new Gymmanager;
            // } else if($_POST['usertype']=='gymowner') {
            //     $user = new Gymowner;
            // }
            
            $user = new User;

            if($user->validate($_POST) && $user->unique($_POST)){
                if($_POST['password']==$_POST['passwordConfirm']) {
                    $enc_password=password_hash($_POST['password'],PASSWORD_DEFAULT);
                    $_POST['usertype']="member";
                    $_POST['password']=$enc_password;
                    $_POST['passwordConfirm']=$enc_password;
                    $user->insert($_POST);
                   // $usertable->insert($_POST);
                    redirect('login');
                }
            }

            $data['errors'] = $user->errors;
        }

        $this->view('Main/signup', $data);
    }

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}