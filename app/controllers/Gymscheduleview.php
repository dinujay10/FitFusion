<?php

class Gymscheduleview {
    use Controller;

        
        public function index() {
            $data = [];     

            $user = new User;
            $arr1['email'] = $_SESSION['email'];
            $memberdeets = $user->first($arr1);
            $data['firstname'] = $memberdeets->name;
            $data['lastname'] = $memberdeets->lastname;

            // print_r($memberdeets);
            
            


            if ($_SERVER['REQUEST_METHOD']=='POST') {

               
               

            }

            

            $this->view('Member/gymscheduleview', $data);
        }

        
        
   

}