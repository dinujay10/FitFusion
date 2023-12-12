<?php

class Nutritionistdash {
    use Controller;

    public function index() {

        if(!isset($_SESSION['email'])){
            redirect('login');
         }
        // $member = new Member;
        // $arr['name'] = "Mary";
        // $arr['age'] = 30;

        // $result = $user->findAll();

        // show($result);
        // show("from the index function");
        $this->view('nutritionistdash');
    }

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}