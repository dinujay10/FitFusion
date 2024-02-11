<?php

class Gymmanagerdash {
    use Controller;

    public function index() {
        //echo "user session id =".$_SESSION['email'];
        if(!isset($_SESSION['email'])){
           redirect('login');
        }
        $data=[];

         $notifications = new Managernotifications;
         $arr['manageremail'] = $_SESSION['email'];
         $notificationsdata=$notifications->where($arr);
         foreach($notificationsdata as $nt){
            $arr2['nmsg']=$nt->nmsg;
            $arr2['nsub']=$nt->nsub;
            array_push($data,$arr2);

         }

         $notifications = array(
            array('id' => 1, 'message' => 'New message 1'),
            array('id' => 2, 'message' => 'New message 2'),
            // ... add more notifications as needed
        );
         echo json_encode($notifications);
        // $arr['age'] = 30;

        // $result = $user->findAll();

        // show($result);
        // show("from the index function");
        $this->view('gymmanagerdash');
    }

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}