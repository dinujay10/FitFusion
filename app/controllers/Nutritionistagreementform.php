<?php

class Nutritionistagreementform{
    use Controller;

   
       

        public function index() {

            if(!isset($_SESSION['email'])){
                redirect('login');
             }

            $data = [];
            $instructordetails = new Nutritionistdetails;
            $insagr=new Nutritionistagreement;
            

            

            if(isset($_GET['instructorid'])){
                $data['instructorid']=$_GET['instructorid'];
        
            }
            //print_r($data);
            if ($_SERVER['REQUEST_METHOD']=='POST'){

                $arr['id']=$_POST['instructorid'];
                $instructordata=$instructordetails->first($arr);
                //print_r($instructordata);
                $email=$instructordata->nemail;

                $_POST['nemail']=$email;
                

                //upload agreement pdf 
                $targetDir="C:/xa/htdocs/FitFusion/public/assets/nutritionistagreement/";
                $targetfile=$targetDir.basename($_FILES["pdfFile"]["name"]);
                $filetype=strtolower(pathinfo($targetfile,PATHINFO_EXTENSION));

                if($filetype!="pdf" || $_FILES["pdfFile"]["size"]>2000000){
                    echo "Error: Only PDF files less than 2 MB are allowed to upload";
                }
                else{
                    if(move_uploaded_file($_FILES["pdfFile"]["tmp_name"],$targetfile)){
                        $filename=$_FILES["pdfFile"]["name"];
                        $folder_path=$targetDir;
                        
                        $_POST['agreementurl']=$filename;
                    }
                    else{
                        echo "Error uploading file";
                    }
                }
                
                
                if($insagr->unique($_POST)){
                    $arr2['registered']=true;
                    $instructordetails->update($_POST['instructorid'],$arr2);

                    //////////////////////////

                    unset($_POST['instructorid']);
                    $insagr->insert($_POST);
                    redirect("appliednutritionists");

                    
                    
                    //print_r($_POST);
                }
                
            }
          
            $this->view('nutritionistagreementform',$data);
            
    
            
        }
   

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}