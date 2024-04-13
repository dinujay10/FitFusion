<?php

class Payhereprocess
{
    use Controller;

    public function index()
    {
        $data = [];
  
        $this->view('Member/payhereprocess', $data);
    }

}