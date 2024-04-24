<?php

class Memberviewworkoutplan{
    use Controller;

        public function index() {
            $data = [];     

            
            
            if ($_SERVER['REQUEST_METHOD']=='POST') {

                $regmems=new Registeredmembers;
                $mealplans=new Mealplans;
                $arr1['memberemail']=$_SESSION['email'];
                $member=$regmems->where($arr1);
                $mealplanname=$member[0]->mealplanname;
                $arr2['mealplanname']=$mealplanname;
                $arr2['day']=$_POST['day'];
                $mealplandetails=$mealplans->where($arr2);
                //print_r($mealplandetails);
                $data=$mealplandetails;
                


            }

    //print_r($data['mememail']);
            $this->view('Member/memberviewworkoutplan', $data);
        }
   

}