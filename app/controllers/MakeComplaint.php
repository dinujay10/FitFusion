<?php

class MakeComplaint{
    use Controller;
        public function index() {
            $data = [];

            if ($_SERVER['REQUEST_METHOD']=='POST') {
                
                $complaint = new Complaint;
    
                $resArray = [
                    "memberEmail" => $_SESSION['email'],
                    "type" => $_POST['complainttype'],
                    "complaint" => $_POST['complaint'],
                ];

                $complaint->insert($resArray);
                // if($complaint->validate($_POST)){
                //     // $complaint->insert($_POST);
                //     redirect('makeComplaint');
                // }
    
                $data['errors'] = $complaint->errors;
            }
    
            $this->view('makeComplaint', $data);
        }
}