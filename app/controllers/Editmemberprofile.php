<?php

class Editmemberprofile{
    use Controller;
        public function index() {
            $data = [];

            if(isset($_SESSION['email'])){
                if($_SESSION['usertype']=="member") {
                    // redirect('memberdash');
                    // die();
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

            $nutrischedule = new Nutritionistschedule;
            $arr1['memberemail'] = $_SESSION['email'];
            // print_r($arr1['email']);

            $nutrideets = $nutrischedule->first($arr1);
            $data['height'] = $nutrideets->height;
            $data['weight'] = $nutrideets->weight;

            // print_r($arr1['email']);

            $instrschedule = new InstrSchedule;
            $instrdeets = $instrschedule->first($arr1);
            $data['goal'] = $instrdeets->goal;
            $data['age'] = $instrdeets->memberage;

            $user = new User;
            $arr2['email'] = $_SESSION['email'];
            $memberdeets = $user->first($arr2);
            $data['firstname'] = $memberdeets->name;
            $data['lastname'] = $memberdeets->lastname;

             
            if ($_SERVER['REQUEST_METHOD']=='POST') {

                // print_r($_POST);
                $memberemail = $_SESSION['email'];
                // print_r($memberemail);

                $membertable = new Registeredmembers;
                $memberarr['age'] = $_POST['age']; 
                $memberarr['height'] = $_POST['height']; 
                $memberarr['weight'] = $_POST['weight']; 
                $membertable->update($memberemail,$memberarr,'memberemail');    

                $usertable = new User;
                $userarr['name'] = $_POST['name'];
                $userarr['lastname'] = $_POST['lastname'];
                $usertable->update($memberemail,$userarr,'email');
                
                $nutrischedule = new Nutritionistschedule;
                $nutriarr['height'] = $_POST['height'];
                $nutriarr['weight'] = $_POST['weight'];
                $nutrischedule->update($memberemail,$nutriarr,'memberemail');

                $instrschedule = new InstrSchedule;
                $instrarr['memberage'] = $_POST['age'];
                $instrschedule->update($memberemail,$instrarr,'memberemail');

                $data['name'] = $_POST['name'];
                $data['lastname'] = $_POST['lastname'];
                $data['age'] = $_POST['age'];
                $data['height'] = $_POST['height'];
                $data['weight'] = $_POST['weight'];

                redirect('editmemberprofile');
                    

                // $data['errors'] = $user->errors;
            }

            
            
            $this->view('Member/editmemberprofile', $data);
        }

        public function uploadUserImage()
        {


            if (!isset($_SESSION['email'])) {
                die("You must be logged in to upload a photo.");
            }

            $email = $_SESSION['email'];
            $uploadDir = 'images/profilePhotos/'; // Ensure path is correctly specified without double slashes
            $allowedTypes = ['jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png'];

            // if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
            //     $fileTmpPath = $_FILES['photo']['tmp_name'];
            //     $fileType = $_FILES['photo']['type'];
            //     $fileSize = $_FILES['photo']['size'];
            //     $fileName = $_FILES['photo']['name'];
            //     $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            //     if (!array_key_exists($fileExt, $allowedTypes) || !in_array($fileType, $allowedTypes)) {
            //         echo "Error: Only JPG, JPEG, and PNG files are allowed.";
            //     } elseif ($fileSize > 5000000) { // 5MB limit
            //         echo "Error: File size is too large.";
            //     } else {
            //         $newFileName = $email . '_' . time() . '.' . $fileExt;
            //         $destination = $uploadDir . $newFileName;

            //         if (move_uploaded_file($fileTmpPath, $destination)) {

            //             if ($this->customerModel->updateProfilePhoto($email, $newFileName)) {
            //                 $_SESSION['profile_picture'] = $newFileName;
            //                 $_SESSION['success_message'] = 'Profile picture updated successfully.';
            //                 redirect('customers/profile');
            //             }
            //         } else {
            //             echo "Error uploading the file.";
            //         }
            //     }
            // } else {
            //     // Use this opportunity to handle other potential upload errors
            //     echo "Error: " . $this->fileUploadError($_FILES['photo']['error']);
            // }
        }


        private function fileUploadError($error_code)
        {
            $errors = [
                UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
                UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
                UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded.',
                UPLOAD_ERR_NO_FILE => 'No file was uploaded.',
                UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder.',
                UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
                UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload.',
            ];

            return $errors[$error_code] ?? 'Unknown upload error.';
        }
}