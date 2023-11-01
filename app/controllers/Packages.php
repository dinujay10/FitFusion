<?php

class Packages
{
    use Controller;

    public function index()
    {
        $data = [];
        $usertable = new Package;
        $data = $usertable->findAll();
        if($data==false){
            $data = [];
        }
        /////////////////////////////////////
        if (isset($_GET['deleteid'])) {
            $id = $_GET['deleteid'];

            $s = $usertable->deletepackage($id);
            redirect('packages');
        }
        ////////////////////////////////

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usertable->insert($_POST);
            $data = $usertable->findAll();
            redirect('packages');
            $data['errors'] = $usertable->errors;
        }
        // if($_SERVER['REQUEST_METHOD']=='GET'){
        //     if(isset($_GET['deleteid'])){
        //         $idd=$_GET['deleteid'];

        //         //$s=$usertable->delete($idd);
        //         redirect('manageresources');
        //     }
        // }

        $this->view('packages', $data);
    }


    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}