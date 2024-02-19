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

            $this->view('Appointments/scheduleInstrAppointReq', $data);
        }
}