<?php

class Logout {
    use Controller;

    public function index() {
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        unset($_SESSION['username']);
        session_destroy();
        redirect('login');

        $this->view('logout');
    }
}