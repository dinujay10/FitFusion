<?php

class Attendance{
    use Controller;
        public function index() {
            $this->view('attendance', $data);
        }
}