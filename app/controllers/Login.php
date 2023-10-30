<?php

class Login {
    use Controller;

    public function index() {
        $data = [];

        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $user = new User;
            $arr['username'] = $_POST['username'];

            $row = $user->first($arr);

            if($row) {
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
                    }
                }
            }
            // set session to row
            $user->errors['username'] = "Incorrect username or password";
            $data['errors'] = $user->errors;
        }

        $this->view('login', $data);
    }

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}