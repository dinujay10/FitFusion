<?php

class Addgymowner {
    use Controller;

    public function index() {
        $data = [];
        $user = new Gymowner;
        $usertable = new User;
        $data = $user->findAll();
        if($data==false){
            $data = [];
        }

        if(isset($_GET['deleteowner'])) {
            $email = $_GET['deleteowner'];
            $user->deleteByEmail($email);
            $usertable->deleteByEmail($email);
            redirect('addgymowner');
        }
        
        if ($_SERVER['REQUEST_METHOD']=='POST') {

            if($user->validate($_POST) && $usertable->unique($_POST)){
                    $user->insert($_POST);
                    $usertable->insert($_POST);
                    $data = $user->findAll();
            }
    
            $data['errors'] = $user->errors;
            redirect('addgymowner');
        }

        $this->view('addgymowner', $data);
    }
}