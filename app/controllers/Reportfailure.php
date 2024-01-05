<?php

class Reportfailure{
    use Controller;

   
        public function index() {
            $data = [];
            $usertable = new Machinefailure;
            //$data=$usertable->findAll();
            /////////////////////////////////////
            if(isset($_GET['machineid'])){
                $idd=$_GET['machineid'];
                $data['id'] = $idd;
               
                // $temp=$usertable->first($arr);
               
                // if($_SESSION['email']==$temp->manageremail){
                //     $data['id']=$temp->id;
                //     $data['failure']=$temp->failure;
                //     $data['notes']=$temp->notes;
                   
                //      print_r($data);

                //     $this->view('reportfailure', $data);
                // }
                // else{
                //     echo "UNAUTHORIZED ACCESS";
                // }
               
                }

            // $arr['id'] = $data['id'];
                        ////////////////////////////////
              $temp=$usertable->first($data);
            //   print_r($data);

              if($temp){

                // print_r($temp);
                  $data['id']=$temp->id;
                  $data['failure']=$temp->failure;
                  $data['notes']=$temp->notes;
                //   print_r($data);

                  $this->view('alreadyreported', $data);

              }
              else{
                       
                   
          //   if ($_SERVER['REQUEST_METHOD']=='POST') {
              
          //     $this->view('reportfailure',$data);
          //     print_r($_data);
          //     $_POST['id']=$_data['id'];

           
          //     if($usertable->unique($data)  && $usertable->validate($_POST))
          //     {
          //          print_r($_POST);


          //         if( !empty($_POST['failure']) && !empty($_POST['notes'])){
          //           //  $_POST['id']=$data['id'];
                    
          //   $usertable->insert($_POST['id'], $_POST);
          //   // this->view('machinefailure');
               
                 
          //   //       $usertable->insert($_POST);
          //         redirect('machinefailure');
          //     }
          //   }
          // }



            //     // $this->view('reportfailure',$data);
            //     if ($_SERVER['REQUEST_METHOD']=='GET') {
            //            $this->view('reportfailure',$data);
            //         // $this->view('reportfailure', $data);

            //         $_GET['id']=$data['id'];
            // //        redirect('reportfailure', $data);
            // // //    
            //         if( !empty($_GET['failure']) && !empty($_GET['notes'])){
            //                 //  $_POST['id']=$data['id'];
                            
            //         $usertable->insert($_GET['id'], $_GET);
            //         this->view('machinefailure');
                       
            //         // redirect('machinefailure');
            //     //    $data['errors'] = $usertable->errors;
            //     }
            //   }
        
          






            // if ($_SERVER['REQUEST_METHOD']=='POST') {
             
                //  redirect('reportfailure');
                $this->view('reportfailure',$data);

                if( !empty($_POST['failure']) && !empty($_POST['notes'])){
                     $_POST['id']=$data['id'];
                     $usertable->insert($_POST);

                     
                     redirect('machinefailure');
                 }
                 else{
                     $data['errors']='Please fill all the fields';
                 }
                 
                //  $usertable->update($_POST['id'],$_POST);
                //  redirect('machinefailure');
                // $data['errors'] = $usertable->errors;

                
                // this->view('reportfailure', $data);
            // } 
            // //   }

            


            // if ($_SERVER['REQUEST_METHOD']=='POST') {


                
            //    if( !empty($_POST['failure']) && !empty($_POST['notes'])){
            //         $_POST['id']=$data['id'];
            //         $usertable->insert($_POST);
            //         redirect('machinefailure');
            //     }
            //     else{
            //         $data['errors']='Please fill all the fields';
            //     }
                
            //     // $usertable->update($_POST['id'],$_POST);
            //     // redirect('machinefailure');
            //    // $data['errors'] = $usertable->errors;
            // }
            // if($_SERVER['REQUEST_METHOD']=='GET'){
            //     if(isset($_GET['deleteid'])){
            //         $idd=$_GET['deleteid'];

            //         //$s=$usertable->delete($idd);
            //         redirect('manageresources');
            //     }
            // }
            //  $this->view('reportfailure', $data);
           
        

         
   

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
    }
}
}
