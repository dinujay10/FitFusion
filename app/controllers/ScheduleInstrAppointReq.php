<?php

class ScheduleInstrAppointReq{
    use Controller;
        public function index() {
            $data = [];

            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $instrschedule = new Instrschedule; // table content -> instructorID, timeSlot

                if($instrschedule->exists($_POST)) {
                    $data['errors'] = $instrschedule->errors;    
                } else {
                    
                }

                $data['errors'] = $user->errors;
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
            $instructordetails = $reginstructors->where($arr2);
            $instructoremails = $instructordetails[0]->instructoremail;
            // $data['instructoremail'] = $instructoremail;
            // print_r($data['instructoremail']);

            $this->view('Appointments/scheduleInstrAppointReq', $data);
        }

}