<?php

class Memberviewmealplan{
    use Controller;

        public function index() {
            $data = [];     

            $user = new User;
            $arr2['email'] = $_SESSION['email'];
            $memberdeets = $user->first($arr2);
            $data['firstname'] = $memberdeets->name;
            $data['lastname'] = $memberdeets->lastname;
            
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
            $this->view('Member/memberviewmealplan', $data);
        }
   

}