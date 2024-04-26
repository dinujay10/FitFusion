<?php

class Login {
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
                        $gym=new Gym;
                        $arr['manageremail']=$_SESSION['email'];
                        $gymdata=$gym->where($arr);
                        if(isset($gymdata[0])){
                            //print_r($gymdata);
                           redirect('managerdash');
                        }else{
                           redirect('addgym');
                           
                        }
                        die();
                    } else if($_SESSION['usertype']=="gymowner") {
                        redirect('gymownerdash');
                        die();
                    } else if($_SESSION['usertype']=="admin") {
                        redirect('admindash');
                        die();
                    }
        }
        else{
        // redirect("login");
        }

        $data = [];

        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $user = new User;
            $arr['email'] = $_POST['email'];

            $row = $user->first($arr);

            if($row) {
                echo "hello";
            
                //$this->createUserSession($row);
                if(password_verify($_POST['password'],
                $row->password)){
                    $_SESSION['USER'] = $row;
                    $_SESSION['email'] = $row->email;
                    $_SESSION['usertype'] = $row->usertype;
                    if($row->usertype=="member") {
                        redirect('memberdash');
                    } else if($row->usertype=="gyminstructor") {
                        redirect('gyminstructordash');
                    } else if($row->usertype=="nutritionist") {
                        redirect('nutritionistdash');
                    } else if($row->usertype=="gymmanager") {
                        $gym=new Gym;
                        $managerarr['manageremail']=$_SESSION['email'];
                        $gymdata=$gym->where($managerarr);
                        //print_r($gymdata);
                        if(isset($gymdata[0])){
                            //print_r($gymdata);
                            redirect('managerdash');
                            // $gym->errors['email'] ="hello dmiik how au";
                          
                        }else{
                           redirect('addgym');
                        //    $gym->errors['email'] = "thelijj cetl collge";
                        }
                       
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
            // $data['errors'] = $gym->errors;
        }

        $this->view('login', $data);
    }

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }

    // public function createUserSession($user) {
    //     $_SESSION['id'] = $user->id;
    //     $_SESSION['email'] = $user->email;
    //     $_SESSION['username'] = $user->username;
    // }

   
}