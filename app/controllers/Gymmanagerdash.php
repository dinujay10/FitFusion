<?php

class Gymmanagerdash {
    use Controller;

    public function index() {
        // $member = new Member;
        // $arr['name'] = "Mary";
        // $arr['age'] = 30;

        // $result = $user->findAll();

        // show($result);
        // show("from the index function");
        $this->view('gymmanagerdash');
    }

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}