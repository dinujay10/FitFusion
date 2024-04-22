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
            $user = new User;
            $arr['email'] = $_POST['email'];

            $row = $user->first($arr);

            if($row) {
                // echo "hello";
            
                //$this->createUserSession($row);
                if(password_verify($_POST['password'],
                $row->password)){
                    $_SESSION['USER'] = $row;
                    $_SESSION['email'] = $row->email;
                    $_SESSION['usertype'] = $row->usertype;
                    if($row->usertype=="member") {

                        $member = new Registeredmembers;
                        $memberarr1['memberemail'] = $_POST['email'];
                        $checkmember = $member->first($memberarr1);
                        // print_r($checkmember);

                        if($checkmember) {
                            $checkworkout = $checkmember->workoutid;
                            // print($checkworkout);
                            if($checkworkout!=0) {
                                $checkmealplan = $checkmember->mealplanname;
                                // print_r($checkmealplan);
                                if($checkmealplan!=0) {
                                    redirect('memberdash');
                                }
                                elseif($checkmember->packagegroup=='instructor') {
                                    // print_r($checkmember->packagegroup);
                                    redirect('memberdash');
                                }
                                else {
                                    redirect('schedulenutriappointreq');
                                }
                            }
                            else {
                                redirect('scheduleinstrmeeting');
                            }
                        }
                        else {
                            redirect('selectgym');
                        }

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

        $this->view('Main/login', $data);
    }
   
}