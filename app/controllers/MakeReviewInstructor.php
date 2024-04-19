<?php

class MakeReviewInstructor{
    use Controller;
        public function index() {
            $data = [];
            
            // $regmembers = new Registeredmembers;
            // $arr['memberemail'] = $_SESSION['email'];
            // $memberdetails = $regmembers->where($arr);
            // $gymname = $memberdetails[0]->gymname;
            // $data['gymname'] = $gymname;
            // print_r($data);

            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $review = new Review; // table content -> instructorID, timeSlot


                $memberemail = $_SESSION['email'];
                $reviewtype = "Instructor";
                // print_r($_POST);

                $resArray = [
                    "reviewcontent" => $_POST["review"],
                    "reviewtype" => $reviewtype,
                    "memberemail" => $memberemail
                ];
                // print_r($resArray);
                // array_push($resArray,$memberemail,$reviewtype);
                // print_r($resArray);
                $review->insert($resArray);

                $data['errors'] = $review->errors;
            }


            $this->view('Reviews/makereviewinstructor', $data);
        }
}