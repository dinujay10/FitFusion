<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ApproveinstructorStyle.css" />
  </head>
  <body>
    <nav>
            <div class = "logo">
                <p>FitFusion</p>
            </div>

            <ul>
                <li><a href ="#">Home</a></li>
                <li><a href ="#">AboutUs</a></li>
                <li><a href ="#">Services</a></li>
                <li><a href ="login">Logout</a></li>
            </ul>
    </nav>
    <div class="container">
      <h1 class="form-title">Instructor Application</h1>
      <form action="#">
        <div class="main-user-info">
          <div class="user-input-box">
        
          </div>
          <div class="user-input-box">
            <img src="<?=ROOT?>/assets/uploadinstructorimages/<?= $data[0]->imageurl ?>" alt="">
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
                    value="<?= $data[0]->iemail ?>"/>
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
                    echo'<a href="viewinstructorapplication?filename='.$qa.'">'.$qa.'</a><br>';
                }
            }
            else{
                echo '<h5>No Certificates available</h5>';
            }
               
                
            ?>
          </div>
        </div>
        <div class="form-submit-btn">
            <a href="instructoragreementform?instructorid=<?= $data[0]->id ?>"><input type="button" value="Approve"></a>
        </div>

      </form>
    </div>
  </body>
</html>