<?php

class MemberPackages{
    use Controller;
        public function index() {
            $this->view('memberpackages', $data);
        }
}