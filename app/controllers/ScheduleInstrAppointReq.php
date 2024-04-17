<?php

class ScheduleInstrAppointReq{
    use Controller;
        public function index() {
            $data = [];
            

            // print_r("hiiiiiiiii");
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $instrschedule = new Instrschedule; // table content -> instructorID, timeSlot

                // if($instrschedule->exists($_POST)) {
                //     $data['errors'] = $instrschedule->errors;    
                // } else {
                    
                // }

                // $data['errors'] = $user->errors;
            }

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
                // $selectedInstructor = $_POST['selectedName'];
                // print_r($selectedInstructor);
                // echo "Selected Name: " . $selectedInstructor;
            }

            // $selectedInstructor = $_POST['selectedName'];
            // print_r($selectedInstructor);
            // print_r("hiiiiii");

            //add all the needed stuff and insert to the DB
            $finaldata = [];
            // print_r($_POST);
            


            $this->view('Appointments/scheduleInstrAppointReq', $data);
        }

       
        public function getDate() {
            $data = json_decode(file_get_contents('php://input'), true);

            $date = $data[0]['date'];
            $instrname = $data[0]['instructorname'];

    
            echo json_encode($date);
            echo json_encode($instrname);

            $this->getTimeSlots($date,$instrname);

        }

        public function getInstructorName() {
            $data = json_decode(file_get_contents('php://input'), true);

            $instrname = $data[0]['instructorname'];
    
            // echo json_encode($instrname);
        }

        public function getTimeSlots() {

        }

}