<?php

class Manageresources{
    use Controller;

   
       

        public function index() {
            $data = [];
            $usertable = new Machine;
            $data=$usertable->findAll();
            if($data==false){
                $data = [];
            }
            /////////////////////////////////////
            if(isset($_GET['deleteid'])){
                $idd=$_GET['deleteid'];

                $s=$usertable->deletemachine($idd);
                redirect('manageresources');
            }
            ////////////////////////////////

            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $usertable->insert($_POST);
                $data = $usertable->findAll();
                redirect('manageresources');
               // $data['errors'] = $usertable->errors;
            }
            // if($_SERVER['REQUEST_METHOD']=='GET'){
            //     if(isset($_GET['deleteid'])){
            //         $idd=$_GET['deleteid'];

            //         //$s=$usertable->delete($idd);
            //         redirect('manageresources');
            //     }
            // }
    
            $this->view('manageresources', $data);
        }
   

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}