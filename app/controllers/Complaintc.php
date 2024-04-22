<?php

class Complaintc{
    use Controller;

   
       

        public function index() {
            $data = [];
            $usertable = new Complaint;
            $data=$usertable->findAll();
            if($data==false){
                $data = [];
            }
            /////////////////////////////////////
            if(isset($_GET['deleteid'])){
                $idd=$_GET['deleteid'];

                $s=$usertable->deletecomplaint($idd);
                redirect('complaintc');
            }
            ////////////////////////////////

            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $usertable->insert($_POST);
                $data = $usertable->findAll();
                redirect('complaintc');
               // $data['errors'] = $usertable->errors;
            }
            // if($_SERVER['REQUEST_METHOD']=='GET'){
            //     if(isset($_GET['deleteid'])){
            //         $idd=$_GET['deleteid'];

            //         //$s=$usertable->delete($idd);
            //         redirect('manageresources');
            //     }
            // }
    
            $this->view('complaintc', $data);
        }
   

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}