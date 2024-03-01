<?php

class MemberProfile{
    use Controller;
        public function index() {
            $data = [];

            if ($_SERVER['REQUEST_METHOD']=='POST') {

                $data['errors'] = $user->errors;
            }

            $regmembers = new Registeredmembers;
            $arr['memberemail'] = $_SESSION['email'];
            $memberdetails = $regmembers->where($arr);
            $packageid = $memberdetails[0]->packageid;
            // print_r($packageid);
            $data['packageid'] = $packageid;

            $package = new Package;
            $arr2['id'] = $packageid;
            // print_r($arr2);
            $packagedetails = $package->where($arr2);
            // print_r($packagedetails);
            $packagetype = $packagedetails[0]->packagetype;
            // print_r($packagetype);

            $data['packagetype'] = $packagetype;
            
            $this->view('memberprofile', $data);
        }
}