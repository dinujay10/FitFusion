<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ApproveinstructorStyle.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css"/>
  </head>
  <body>
  <div class="main-container">
  <div class="side-bar-container">
            <div class="logo-tab">
                FITFUSION
            </div>
            <ul class="side-bar-content">
                
                <!-- <li class="current-side-bar-tile">
                    <div class="sb-tab-content">
                        <span class="material-symbols-outlined">
                            dashboard
                        </span>
                    </div>
                    <div class="sb-tab-content">
                        Dashboard
                    </div>
                </li> -->

                <a class="side-bar-tile-link" href="managerdash">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Gym
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="newmembersreport">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           Reports
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="manageresources">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                fitness_center
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Machines
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="packages">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                deployed_code
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Packages
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="appliedinstructors">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                groups
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Instructors
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="appliednutritionists">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                groups
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Nutritionists
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="attendancememberlist">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                qr_code
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Assign QR
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="markattendance">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                person_add
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Attendance
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="handlemembercomplaint">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                report
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Complaint Handling
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="logout">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                        </div>
                        <div class="sb-tab-content">Logout</div>
                    </li>
                </a>

            </ul>
        </div>
    <div class="container">
    <div class="body-header">
                <div class="pfp">
                    <!-- LET THE INSTRUCTOR UPLOAD A PFP, OR KEEP A DEFAULT IMAGE -->
                    <img src="#" alt="">
                </div>
                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN INSTRUCTOR'S NAME -->
                    Welcome, InstructorName
                </div>
            </div>
    <div class="containera">
      <h1 class="form-title">Send Email </h1>
      <form action="#" method="POST" >
        <div class="main-user-info">
          
          
        
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="text"
                    id="email"
                    name="email"
                    required
            />
          </div>
          <div class="user-input-box">
            <label for="subject">Enter a Subject</label>
            <input type="text"
                    id="subject"
                    name="subject"
                    required
            />
          </div>
          <div class="user-input-box">
            <label for="message">Enter the Message</label>
            <textarea id="message" name="message" rows="7" cols="33" required></textarea><br>
          </div>
          
          
        </div>
        
        <div class="form-submit-btn">
          <input type="submit" value="Send Email">
        </div>
      </form>
      <?php
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
       if(isset($_POST['email']))
        {
          
        require 'C:/xa/htdocs/FitFusion/public/assets/PHPMailer/src/Exception.php';
        require 'C:/xa/htdocs/FitFusion/public/assets/PHPMailer/src/PHPMailer.php';
        require 'C:/xa/htdocs/FitFusion/public/assets/PHPMailer/src/SMTP.php';
    
        require 'C:/xa/htdocs/FitFusion/public/assets/mailconfig.php';
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $mail=new PHPMailer(true);

        $mail->isSMTP();

        $mail->SMTPAuth=true;

        $mail->Host=MAILHOST;

        $mail->Username=USERNAME;

        $mail->Password=PASSWORD;

        $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;

        $mail->Port=587;

        $mail->setFrom(SEND_FROM,SEND_FROM_NAME);

        $mail->addAddress($email);
        $mail->addReplyTo(REPLY_TO,REPLY_TO_NAME);

        $mail->IsHTML(true);
        $mail->Subject=$subject;
        $mail->Body=$message;
        $mail->AltBody=$message;

        if(!$mail->send()){
            //return "Email not send.Please try again";
        }else{
            //return "Success";
        }

        }
    
      
      
      ?>
    </div>
    </div>
</div>
  </body>
</html>