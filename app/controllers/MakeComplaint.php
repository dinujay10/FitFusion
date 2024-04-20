<?php

class MakeComplaint{
    use Controller;
        public function index() {
            $data = [];

            

            $newcomplaint = new Complaint;

            $arr['memberEmail'] = $_SESSION['email'];
            // print_r($_SESSION);
            $arr['status'] = "replied";
            $allcomplaintdeets = $newcomplaint->where($arr);

            // print_r($allcomplaintdeets);

            $complaintarr = [];
            $replyarr = [];
            for ($i=0; $i < count($allcomplaintdeets); $i++) {
                $complaintcontent = $allcomplaintdeets[$i]->complaint;
                // print_r($complaintcontent);
                array_push($complaintarr,$complaintcontent);
                // print_r($complaintarr['complaintsSent']);

                $replycontent = $allcomplaintdeets[$i]->reply;
                // print($replycontent);
                array_push($replyarr,$replycontent);
                // print_r($replyarr['repliesSent']);
            }

            $data['allcomplaints'] = $complaintarr;
            $data['allreplies'] = $replyarr;

            // print_r($data);

            if ($_SERVER['REQUEST_METHOD']=='POST') {
                
                $complaint = new Complaint;
    
                $resArray = [
                    "memberEmail" => $_SESSION['email'],
                    "type" => $_POST['complainttype'],
                    "complaint" => $_POST['complaint'],
                    "status" => "pending",
                    "reply" => "not replied"
                ];

                $complaint->insert($resArray);
    
                $data['errors'] = $complaint->errors;
            }
    
            $this->view('Member/makeComplaint', $data);
        }

        // public function getAllReplies {

        // }
}