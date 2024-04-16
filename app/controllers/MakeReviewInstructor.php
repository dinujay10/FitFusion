<?php

class MakeReviewInstructor{
    use Controller;
        public function index() {
            $data = [];
            
            $this->view('Reviews/makereviewinstructor', $data);
        }
}