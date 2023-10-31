<?php

class Addgym {
    use Controller;
 
    public function index() {
        $data = [];

        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $gym = new Gym;

            if($gym->validate($_POST) && $gym->unique($_POST)){
                $gym->insert($_POST);
                redirect('gymmanagerdash');
            }
    
            $data['errors'] = $gym->errors;
        }

        $this->view('addgym');
    }

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}