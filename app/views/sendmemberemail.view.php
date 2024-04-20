<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ApproveinstructorStyle.css" />
    
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">
  </head>
  <body>
      <div class="side-menu">
        <div class="brand-name">
            <h1>FIT FUSION</h1>
        </div>
        <ul>
        <li><img src="<?=ROOT?>/assets/images/dashboards/g2.jpeg" alt="">&nbsp; <h5>Dashboard</h5> </li>
        <a href="profile"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>My Profile</h6> </li></a>
            <li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Gym Schedule</h6> </li>
            <a href="createworkoutplan"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Create Workout Plan</h6> </li></a>
            <a href="workoutcategory"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Available Categories</h6> </li></a>
            <a href="machinefailure"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Report Machine Failure</h6> </li></a>
            <a href="memberfeed"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Feedbacks</h6> </li></a>
            <a href="instructormeetings"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Meetings</h6> </li></a>
            <a href="logout"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Logout</h6></li></a>
            <li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Settings</h6> </li>
        </ul>
    </div>
    <div class="container">
    <div class="containera">
      <h1 class="form-title">Send Email to Member </h1>
      <form action="#" method="POST" >
        <div class="main-user-info">
          
          
        
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?= isset($data['email']) ? $data['email'] : '' ?>" />

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
  </body>
</html>