<?php

class MakeReview{
    use Controller;
        public function index() {
            $data = [];
            
            $this->view('makereview', $data);
        }
}