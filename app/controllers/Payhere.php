<?php

class Payhere
{
    use Controller;

    public function index()
    {
        $data = [];
  
        $this->view('Member/payhere', $data);
    }

}