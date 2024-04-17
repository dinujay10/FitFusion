<?php

class Addfooditems{
    use Controller;
        public function index() {
            $data=[];

            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $fooditems=new Fooditems;
                print_r($_POST);
                $count=0;
                foreach($_POST['item_name'] as $item){
                    $arr['fooditem']=$item;
                    $arr['calories']=$_POST['calories'][$count];
                    $fooditems->insert($arr);
                    $count++;
                }

            }



            $this->view('addfooditems', $data);
        }
}