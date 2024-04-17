<?php

class Viewallpackages{
    use Controller;
        public function index() {
            $data=[];

            if ($_SERVER['REQUEST_METHOD']=='GET') {
                $packages=new Package;
                 //get package details
                $arr1['manageremail'] = $_GET['memail'];
                $packagesdata=$packages->where($arr1);
                $data['packages']=$packagesdata;
            }



            $this->view('viewallpackages', $data);
        }
}