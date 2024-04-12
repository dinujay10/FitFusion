<?php


class CreateWorkoutplan
{
    use Controller;


    public function index()
    {
        if (!isset($_SESSION['email'])) {
            redirect('login');
        }

        $data = [];
        $usertable1 = new Nutritionist;


        $data1 = [];


        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        //print_r($data);
        /////////////////////////////////////
        // if (isset($_GET['deleteid'])) {

        // }
        // print_r($data);
        ////////////////////////////////

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // $data1['id'] = $_POST['id'];
            $data1['iemail'] = $_SESSION['email'];
            $data1['maingoal'] = $_POST['main_goal'];
            $data1['workouttype'] = $_POST['workout_Type'];
            $data1['traininglevel'] = $_POST['training_level'];
            $data1['programduration'] = $_POST['program_duration'];
            $data1['daysperweek'] = $_POST['days_per_week'];
            $data1['targetgender'] = $_POST['target_gender'];

            // print_r($data1);

            $usertable1->insert($data1);
            $data5 = $usertable1->where($data1);

            echo "<pre>";
            print_r($data5[0]->id);
            echo "</pre>";


            // $temp = ["protein", "creatine", "bcaa", "multivitamin"];
            // foreach ($temp as $x) {
            //     if (isset($_POST[$x])) {

            //         $data2 = ['id' =>$data5[0]->id, 'suppliment' => $_POST[$x]];
            //         // unset($data2['facility']);

            //     }
            // }

            $data1 = [];
            $data1['suppliment'] = $_POST['supplements'];

            foreach ($data1['suppliment'] as $key => $value) {

                $insertData['id'] = $data5[0]->id;
                $insertData['suppliment'] = $value;

                $usertable2->insert($insertData);

                // echo "<pre>";
                // echo($value);
                // echo "</pre>";

            }
            // $usertable2->insert($data1); 

            $data1 = [];
            $data1['equipment'] = $_POST['equipments'];

            foreach ($data1['equipment'] as $key => $value) {

                $insertData['id'] = $data5[0]->id;
                $insertData['equipment'] = $value;

                $usertable3->insert($insertData);

                // echo "<pre>";
                // echo($value);
                // echo "</pre>";

            }





            // $temp = ["Dumbell", "Tredmil", "squat", "ball"];
            // foreach ($temp as $x) {
            //     if (isset($_POST[$x])) {
            //         //     $data3 = ['id' => $_POST['id'], 'equipment' => $_POST[$x]];
            //         // print_r($data3); // Debugging line
            //         // $usertable3->insert($data3);
            //         $data3['id'] = $data5[0]->id;
            //         $data3['equipment'] = $_POST[$x];
            //         //  print_r($facility);
            //         $usertable3->insert($data3);
            //         print_r($data3);
            //         //unset($data2['facility']);

            //     }
            // }



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
        //redirect('createworkoutplan');


        $this->view('createmealplan', $data);
    }

    // public function edit($a = '', $b = '', $c = '') {
    //     show("from the edit function");
    //     $this->view('home');
    // }
}


