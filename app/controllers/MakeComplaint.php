<?php

class MakeComplaint{
    use Controller;
        public function index() {
            $data = [];

            if ($_SERVER['REQUEST_METHOD']=='POST') {
                
                $complaint = new Complaint;
    
                if($complaint->validate($_POST)){
                    $complaint->insert($_POST);
                    redirect('makeComplaint');
                }
    
                $data['errors'] = $user->errors;
            }
    
            $this->view('makeComplaint', $data);
        }
}