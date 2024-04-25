<?php

class Gymschedule {
    use Controller;

        public function index() {
            $data = [];     

            $user = new User;
            $arr1['email'] = $_SESSION['email'];
            $memberdeets = $user->first($arr1);
            $data['firstname'] = $memberdeets->name;
            $data['lastname'] = $memberdeets->lastname;

            // print_r($memberdeets);
            
            // SHOW THE EQUIPMENT OF THE MEMBER

            // step 1 -> get the workout ID
            $regmember = new Registeredmembers;
            $arr2['memberemail'] = $_SESSION['email'];
            // print_r($arr2['memberemail']);
            $regmemberdeets = $regmember->first($arr2);

            // print_r($regmemberdeets);
            $data['workoutid'] = $regmemberdeets->workoutid;
            // print_r($data['workoutid']);

            // step 2 -> get the workout plan rows
            $workoutplantable = new Workoutplans;
            $arr3['id'] = $data['workoutid'];
            $allworkoutplandeets = $workoutplantable->where($arr3);
            // print_r($allworkoutplandeets);

            // step 3 -> get all the machines into an array
            $allmachines = [];
            for ($i=0; $i < count($allworkoutplandeets); $i++) { 
                array_push($allmachines, $allworkoutplandeets[$i]->machine);
            }
            // print_r($allmachines);

            // step 4 -> add the machines array to the $data
            $data['allmachines'] = $allmachines;
            print_r($data);


            if ($_SERVER['REQUEST_METHOD']=='POST') {

            }

            $this->view('Member/gymschedule', $data);
        }
   

}