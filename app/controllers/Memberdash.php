<?php

class Memberdash {
    use Controller;

    public function index() {
        
        if(isset($_SESSION['email'])){
            if($_SESSION['usertype']=="member") {
               // redirect('memberdash');
               
            } else if($_SESSION['usertype']=="gyminstructor") {
                redirect('gyminstructordash');
                die();
               
            } else if($_SESSION['usertype']=="nutritionist") {
                redirect('nutritionistdash');
                die();
               
            } else if($_SESSION['usertype']=="gymmanager") {
                redirect('gymmanagerdash');
                die();
               
            } else if($_SESSION['usertype']=="gymowner") {
                redirect('gymownerdash');
                die();
               
            } else if($_SESSION['usertype']=="admin") {
                redirect('admindash');
                die();
               
            }
        }
        else{
            redirect("login");
        }

        $gym = new Gym;
        $address=new Address;
        $gymimages=new Gymimages;

        $gymdata = $gym->findAll();
        for($x=0;$x<count($gymdata);$x++){
            $data[$x]['gymName']=$gymdata[$x]->gymName;
            $data[$x]['id']=$gymdata[$x]->id;

            $arr3['gymName']= $data[$x]['gymName'];
            $locationdata=$address->first($arr3);
    
            $data[$x]['location1']=$locationdata->location1;
            $data[$x]['location2']=$locationdata->location2;
            $data[$x]['location3']=$locationdata->location3;

            //get images
            $arr4['manageremail']=$gymdata[$x]->manageremail;
            $gymimagesdata=$gymimages->first($arr4);
            $data[$x]['gymimages']=$gymimagesdata->image_url;
            //print_r($gymimagesdata);
        }

       
        
        //$data['image']=$img->image_url;
      
       
        
        

       

        // show($gymdata);
        // show("from the index function");
        $this->view('memberdash',$data);
    }

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}