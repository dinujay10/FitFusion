<?php

class MakeReview{
    use Controller;
        public function index() {
            $this->view('makereview', $data);
        }
}