<?php

class Nutritionistconfirmmeeting{
    use Controller;
        public function index() {
            $data=[];
            new Nutritionistscedule;

            if ($_SERVER['REQUEST_METHOD']=='POST') {


            }



            $this->view('nutritionistconfirmmeeting', $data);
        }
}