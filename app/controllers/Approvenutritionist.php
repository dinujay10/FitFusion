<?php

class Approvenutritionist{
    use Controller;

   
       

        public function index() {

            if(!isset($_SESSION['email'])){
                redirect('login');
             }

            $data = [];
            $instructordetails = new Nutritionistdetails;
            $specialization=new Nutritionistspecialization;
            $banckaccount=new Nutritionistbanckaccount;
            $qualification=new Nutritionistqualification;

            

            if(isset($_GET['instructorid'])){
                $arr['id']=$_GET['instructorid'];
                $instructordata=$instructordetails->first($arr);
                // $data['name']=$instructordata->name;
                // $data['birthdate']=$instructordata->birthdate;
                // $data['gender']=$instructordata->gender;
                // $data['experience']=$instructordata->experience;
                // $data['registered']=$instructordata->registered;
                // $data['memail']=$instructordata->memail;
                // $data['imageurl']=$instructordata->imageurl;
                $data[0]=$instructordata;
                //print_r($instructordata);

                //get specialization data
                $arr2['nemail']=$instructordata->nemail;
                $specializationdata=$specialization->where($arr2);
                //print_r($instructordata);

                $i=0;
                foreach($specializationdata as $sp){
                    $data['specialization'][$i]=$sp->specialization;
                    $i++;
                }
                

                //get banck account details
                $arr2['nemail']=$instructordata->nemail;
                $banckaccountdata=$banckaccount->first($arr2);
                $data['banckname']=$banckaccountdata->banckname;
                $data['accno']=$banckaccountdata->accno;

                //get qualifications
                $arr2['nemail']=$instructordata->nemail;
                $qualificationdata=$qualification->where($arr2);
                //print_r($qualificationdata);
               
                $i=0;
                if($qualificationdata!=0){
                    foreach($qualificationdata as $qd){
                        $data['qualifiaction'][$i]=$qd->filename;
                        $i++;
                    }
                }
                //$data="";
                //$data=$instructordata;
                //print_r($data);
                $this->view('approvenutritionist',$data);
                



            }
            //print_r($data);
          

            
    
            
        }
   

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}