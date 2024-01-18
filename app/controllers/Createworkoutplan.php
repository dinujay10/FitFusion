<?php

class Createworkoutplan
{
    use Controller;
   

    public function index()
    {
        if(!isset($_SESSION['email'])){
            redirect('login');
        }

        $data = [];
        $usertable1 = new Workoutplans;
        $usertable2 = new Workoutsuppliments;
        $usertable3 = new Workoutequipments;


        $data1=[];
        $data2=[];
        $data3=[];

       //print_r($data);
        /////////////////////////////////////
        // if (isset($_GET['deleteid'])) {
          
        // }
        // print_r($data);
        ////////////////////////////////

        if($_SERVER['REQUEST_METHOD']=='POST'){

            $data1['id']=$_POST['id'];
            $data1['iemail']=$_SESSION['email'];
            $data1['maingoal']=$_POST['Main_Goal'];
            $data1['workouttype']=$_POST['workoutType'];
            $data1['traininglevel']=$_POST['Training_Level'];
            $data1['programduration']=$_POST['Program_Duration'];
            $data1['daysperweek']=$_POST['Days_per_week'];
            $data1['targetgender']=$_POST['Target_Gender'];

            $usertable1->insert($data1);

           
            $temp=["protein","creatine","bcaa","multivitamin"];
            foreach($temp as $x){
                if(isset($_POST[$x])){
                    $data2['id']=$_POST['id'];
                    $data2['suppliment']=$_POST[$x];
                    //print_r($facility);
                    $usertable2->insert($data2);
                    // unset($data2['facility']);
                        
                }
            }
            
            $temp=["Dumbell","Tredmil","squat","ball"];
            foreach($temp as $x){
                if(isset($_POST[$x])){
                    $data3['id']=$_POST['id'];
                    $data3['equipment']=$_POST[$x];
                    //print_r($facility);
                    $usertable3->insert($data3);
                    // unset($data2['facility']);
                        
                }
            }
          
                // print_r($_POST);

                // if( !empty($_POST['Main Goal']) && !empty($_POST['Workout'])){
                     
                //      $usertable1->insert($_POST);

                     
                //     redirect('gyminstructordash');
               
                //    }
                //  else{
                //      $data['errors']='Please fill all the fields';
                //  }
                }    

        
        // if($_SERVER['REQUEST_METHOD']=='GET'){
        //     if(isset($_GET['deleteid'])){
        //         $idd=$_GET['deleteid'];

        //         //$s=$usertable->delete($idd);
        //         redirect('manageresources');
        //     }
        // }
        $this->view('createworkoutplan',$data);
        // $this->view('createworkoutplan', $data);
    }


    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}