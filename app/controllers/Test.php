<?php

class Test{
    use Controller;
        public function index() {
            $this->view('test', $data);
        }
}