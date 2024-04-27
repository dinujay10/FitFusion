<?php

class Memberviewworkoutplan{
    use Controller;

        public function index() {
            $data = [];     

            $user = new User;
            $arr1['email'] = $_SESSION['email'];
            $memberdeets = $user->first($arr1);
            $data['firstname'] = $memberdeets->name;
            $data['lastname'] = $memberdeets->lastname;

            //get the workoutid of the member in the registeredmembers table
            $regmember = new Registeredmembers;
            $arr2['memberemail'] = $_SESSION['email'];
            $regmemberdeets = $regmember->where($arr2);
            print_r($regmemberdeets);
            //if the workoutid is 0, store the flag as false
            

            //if the workoutid is 1
                // store the flag as 1
                // get the workoutplanid from the workoutplans table
                // get the workoutplan from the workoutplans table
                // get the workoutequipments from the workoutequipments table
                // get the equipment from the equipments table
            
            

            $this->view('Member/memberviewworkoutplan', $data);
        }
   

}