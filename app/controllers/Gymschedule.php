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
            // print_r($data);


            if ($_SERVER['REQUEST_METHOD']=='POST') {

                // print_r('hiiiiiiii');
                // check what day the selected date is
                $dateInput = $_POST['date'];                
                $date = new DateTime($dateInput);
                $dayOfWeek = $date->format('N');
        
                if ($dayOfWeek >= 1 && $dayOfWeek <= 5) {
                    $dayType = "Weekday";
                } elseif ($dayOfWeek == 6) {
                    $dayType = "Saturday";
                } elseif ($dayOfWeek == 7) {
                    $dayType = "Sunday";
                }
                // print_r("The day is a " . $dayType);

                // check the daytype and get the openhours of the gym
                $gymtable = new Gym;

                $arr4['email'] = $regmemberdeets->gymemail;
                $gymdeets = $gymtable->where($arr4);
                // print_r($arr4['email']);
                // print_r($gymdeets);

                $openhrstable = new Openhours;
                $arr5['gymName'] = $gymdeets[0]->gymName;
                // print_r($gymdeets[0]->gymName);
                $openhoursdeets = $openhrstable->first($arr5);
                // print_r($openhoursdeets);

                

                if ($dayType == 'Weekday') {
                    $opentime = $openhoursdeets->openhourswf;
                    $closetime = $openhoursdeets->openhourswt;
                }
                elseif ($dayType == 'Saturday') {
                    $opentime = $openhoursdeets->openhourssaf;
                    $closetime = $openhoursdeets->openhourssat;
                }
                elseif ($dayType == 'Sunday') {
                    $opentime = $openhoursdeets->openhourssuf;
                    $closetime = $openhoursdeets->openhourssut;
                }

                print_r($opentime);
                print_r($closetime);


                
            }

            

            $this->view('Member/gymschedule', $data);
        }

        
        
   

}