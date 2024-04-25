<?php

class Gymschedule {
    use Controller;

        public function index() {
            $data = [];     

            $user = new User;
            $arr2['email'] = $_SESSION['email'];
            $memberdeets = $user->first($arr2);
            $data['firstname'] = $memberdeets->name;
            $data['lastname'] = $memberdeets->lastname;
            
            if ($_SERVER['REQUEST_METHOD']=='POST') {

            }

            $this->view('Member/gymschedule', $data);
        }
   

}