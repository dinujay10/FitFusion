<?php

class Instructormeetings{
    use Controller;


        public function index() {

            if(!isset($_SESSION['email'])){
                redirect('login');
            }
            
            $data = [];
            $meetingtable = new Instructormeeting ;

            $meetingrequests = $meetingtable->where(['instructoremail' => $_SESSION['email']]);
  
            foreach($meetingrequests as $request){
                $data[] = $request;
            }

           
            $this->view('instructormeetings', $data);

           
          
            if(!isset($data['errors'])){
                $data['errors']='';
            }
            
             
        //     if ($_SERVER['REQUEST_METHOD']=='GET') {
        //         // Get the ID of the row to update
        //     $id = $_GET['id'];
            
        //     $arr['status'] = 'confirmed';
        //     // Update the status of the row in the database
        //     $meetingtable->update($id, $arr);
            
        //     // Redirect or reload the page to reflect the changes
        //    // redirect('instructormeetings');
        

        //      }



           // $this->view('instructormeetings', $data);
          

 
        }

 
        
       
        
       
    }