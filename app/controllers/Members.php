<?php

class Members{
    use Controller;


        public function index() {

            if(!isset($_SESSION['email'])){
                redirect('login');
            }
            
            $data = [];
            $membertable = new Member ;
        
            $members = $membertable->findAll();
            
            foreach($members as $member){
                $data[] = $member;
            }

           
            $this->view('members', $data);

           
          
            if(!isset($data['errors'])){
                $data['errors']='';
            }
           
 
        }
   

    
}