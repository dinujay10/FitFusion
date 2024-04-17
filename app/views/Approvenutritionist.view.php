<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
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
            <li>&nbsp; <h5>Dashboard</h5> </li>
            <a href="packages"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>Packages</h6> </li></a>
            <a href="handlemembercomplaint"><li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Member complaints</h6> </li></a>
            <a href="addgym"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Add Gym</h6> </li></a>

            <a href="manageresources"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Manage Gym Resources</h6> </li></a>

            <a href="editgym"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Edit Gym</h6> </li></a>
            <a href="appliedinstructors"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Approve Instructors</h6> </li>
            <a href="logout"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Logout</h6></li></a>
            <a href="newmembersreport"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Reports</h6> </li></a>
        </ul>
    </div>
    <div class="container">
    <div class="containera">
      <h1 class="form-title">Nutritionist Application</h1>
      <form action="#">
        <div class="main-user-info">
          <div class="user-input-box">
        
          </div>
          <div class="user-input-box">
            <img src="<?=ROOT?>/assets/uploadnutritionistimages/<?= $data[0]->imageurl ?>" alt="">
          </div>
          
          <div class="user-input-box">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" value="<?= $data[0]->name ?>" />
          </div>
          <div class="user-input-box">
            <label for="experience">Experience in Years</label>
            <input type="text"
                    id="experience"
                    name="experience"
                    value="<?= $data[0]->experience ?> Years"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    value="<?= $data[0]->nemail ?>"/>
          </div>
          <?php
            $text="";
            foreach($data['specialization'] as $sp){
                $text=$sp.", ".$text;
            }
          ?>
          <div class="user-input-box">
            <label for="specialization">specialization</label>
            <input type="text"
                    id="specialization"
                    name="specialization"
                    value="<?=$text?>"/>
          </div>
          <div class="user-input-box">
            <label for="banckandaccno">Banck Name  and Acc No</label>
            <input type="banckandaccno"
                    id="banckandaccno"
                    name="banckandaccno"
                    value="<?= $data['banckname']." ".$data['accno']?>">
          </div>
          <div class="user-input-box">
            <label for="birthdate">Birth Date</label>
            <input type="text"
                    id="birthdate"
                    name="birthdate"
                    value="<?= $data[0]->birthdate ?>">
          </div>
          <div class="user-input-box">
            <label for="gender">Gender</label>
            <input type="text"
                    id="gender"
                    name="gender"
                    value="<?= $data[0]->gender ?>"/>
          </div>
        </div>
        <div class="gender-details-box">
          <span class="gender-title">Certificates</span>
          <div class="gender-category">
            <?php
            if(isset($data['qualifiaction'])){
                foreach($data['qualifiaction'] as $qa){
                    echo'<a href="viewnutritionistapplication?filename='.$qa.'">'.$qa.'</a><br>';
                }
            }
            else{
                echo '<h5>No Certificates available</h5>';
            }
               
                
            ?>
          </div>
        </div>
        <!-- <div class="form-submit-btn">
            <a href="instructoragreementform?instructorid=<?= $data[0]->id ?>"><input type="button" value="Approve"></a>
        </div> -->

      </form>
    </div>
    </div>
  </body>
</html>