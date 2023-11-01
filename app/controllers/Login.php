<?php

class Login {
    use Controller;

    public function index() {
        $data = [];

        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $user = new User;
            $arr['email'] = $_POST['email'];

            $row = $user->first($arr);

            if($row) {
                $this->createUserSession($row);
                if($row->password===$_POST['password']){
                    $_SESSION['USER'] = $row;
                    if($row->usertype=="member") {
                        redirect('memberdash');
                    } else if($row->usertype=="gyminstructor") {
                        redirect('gyminstructordash');
                    } else if($row->usertype=="nutritionist") {
                        redirect('nutritionistdash');
                    } else if($row->usertype=="gymmanager") {
                        redirect('gymmanagerdash');
                    } else if($row->usertype=="gymowner") {
                        redirect('gymownerdash');
                    } else if($row->usertype=="admin") {
                        redirect('admindash');
                    }
                }
            }
            // set session to row

            $user->errors['email'] = "Incorrect email or password";
            $data['errors'] = $user->errors;
        }

        $this->view('login', $data);
    }

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }

    public function createUserSession($user) {
        $_SESSION['id'] = $user->id;
        $_SESSION['email'] = $user->email;
        $_SESSION['username'] = $user->username;
    }

    public function isLoggedIn() {
        if(isset($_SESSION['user_id'])) {
            return true;
        } else {
            return false;
        }
    }
}