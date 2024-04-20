<?php

class MakeReviewNutritionist{
    use Controller;
        public function index() {
            $data = [];
            
            $this->view('Reviews/makereviewnutritionist', $data);
        }
}