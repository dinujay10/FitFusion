<?php

class Scheduleinstrmeeting{
    use Controller;
        public function index() {
            $data = [];

            $regmembers = new Registeredmembers;
            $arr['memberemail'] = $_SESSION['email'];
            $memberdetails = $regmembers->where($arr);
            $gymemail = $memberdetails[0]->gymemail;
            $data['gymemail'] = $gymemail;

            $reginstructors = new Registeredinstructor;
            // print_r($reginstructors);
            $arr2['gymemail'] = $gymemail;
            // print_r($arr2['gymemail']);
            $instructordetails = $reginstructors->where($arr2); // array of details are here

            // echo $instructordetails;
            // echo "hiiiii";
            // $instructoremails = [];
            $instrnamelist = [];
            for ($i=0; $i < count($instructordetails); $i++) { 

                $instructoremails = $instructordetails[$i]->instructoremail;
                // print_r($instructoremails);
                $data['instructoremail'] = $instructoremails;
                // print_r($data['instructoremail']);

                $instructors = new Gyminstructor;
                // print_r($instructors);
                $arr3['email'] = $instructoremails;
                // print_r($arr3['email']);
                $instrdetails = $instructors->where($arr3);
                $instrnames = $instrdetails[0]->name;
                // print_r($instrnames);
                // print_r($instrdetails);
                // print_r($instructors->where($arr3));
                array_push($instrnamelist, $instrnames);
            }

            $data['instructorlist'] = $instrnamelist;

            // print_r($instrnamelist);
            // print_r($data['instructorlist']);

            // SEND THE TIMESLOTS USING AJAX
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                
                // print_r($_POST);
                // print_r($_POST['InstrName']);

                $instructorname = $_POST['InstrName'];

                $instructor = new Gyminstructor;
                // print_r($instructors);
                $instrdeets['name'] = $instructorname;
                // print_r($arr3['email']);
                $instrdetails = $instructor->where($instrdeets);
                $instructoremail = $instrdetails[0]->email; /////////////////
                // print_r($instructoremail);

                $date = $_POST['date'];////////////////
                $timeslot = $_POST['timeslot'];////////////////////
                $memberemail = $_SESSION['email'];//////////

                $membername = $_POST['membername'];
                $memberage = $_POST['memberage'];
                $goal = $_POST['goal'];
                $illness = $_POST['illness'];

                $status = "Pending";

                // print_r($status);

                //add all the needed stuff and insert to the DB
            $resArray = [
                "instructoremail" => $instructoremail,
                "date" => $date,
                "timeslot" => $timeslot,
                "memberemail" => $memberemail,
                "membername" => $membername,
                "memberage" => $memberage,
                "goal" => $goal,
                "illness" => $illness,
                "status" => $status
            ];
            // print_r($resArray);

            $instrschedule = new Instrschedule; 
            $instrschedule->insert($resArray);
            }
            

            $this->view('Member/scheduleinstrmeeting', $data);
        }

       
        public function getDate() {
            $data = json_decode(file_get_contents('php://input'), true);

            $date = $data[0]['date'];
            $instrname = $data[0]['instructorname'];

    
            // echo json_encode($date);
            // echo json_encode($instrname);

            $this->getTimeSlots($date,$instrname);

        }

        public function getInstructorName() {
            $data = json_decode(file_get_contents('php://input'), true);

            $instrname = $data[0]['instructorname'];
    
            // echo json_encode($instrname);
        }

        public function getTimeSlots($date,$instructorname) {
            $instrschedule = new InstrSchedule;
            $detailarr['date'] = $date;
            // $detailarr['instructorname'] = $instructorname;

            $instructor = new GymInstructor;
            $array['name'] = $instructorname;
            // echo json_encode($array);

            $instrdetails = $instructor->where($array);
            $detailarr['instructoremail'] = $instrdetails[0]->email;
            // echo json_encode($detailarr);

            $scheduledetails = $instrschedule->where($detailarr);
            // echo json_encode($scheduledetails);

            $timeslots = [];
            for ($i=0; $i < count($scheduledetails); $i++) { 
                // $timeslots = $scheduledetails[$i]->timeslot;
                array_push($timeslots, $scheduledetails[$i]->timeslot);
            }
            echo json_encode($timeslots);
        }
        
}