<?php

class Instructormeetings{
    use Controller;


        public function index() {

            if(!isset($_SESSION['email'])){
                redirect('login');
            }
            
            $data = [];
            $meetingtable = new Instructormeeting ;
        
            $meetingrequests = $meetingtable->findAll();
            
            foreach($meetingrequests as $request){
                $data[] = $request;
            }

           
            $this->view('instructormeetings', $data);

           
          
            if(!isset($data['errors'])){
                $data['errors']='';
            }
           
 
        }

        public function confirmMeeting($email) {
            // Call the function to send an email
            $subject = "Meeting Confirmation";
            $message = "Your meeting has been confirmed.";
            $result = $this->sendEmail($email, $subject, $message);
    
            if ($result) {
                // Email sent successfully
                // Handle any additional logic, such as updating the database, etc.
                return true;
            } else {
                // Failed to send email
                return false;
            }
        }
        
        public function sendEmail($to, $subject, $message) {
            $headers = "From: your_email@example.com\r\n";
            $headers .= "Reply-To: your_email@example.com\r\n";
            $headers .= "Content-type: text/html\r\n";
    
            // Attempt to send the email
            if (mail($to, $subject, $message, $headers)) {
                return true; // Email sent successfully
            } else {
                return false; // Failed to send email
            }
        }
    }