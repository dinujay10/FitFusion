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
      <h1 class="form-title">Nutritionist Agreement</h1>
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="main-user-info">
          
          
        
          <div class="user-input-box">
            <label for="registereddate">Registered Date</label>
            <input type="date"
                    id="registereddate"
                    name="registereddate"
                    required
            />
          </div>
          <div class="user-input-box">
            <label for="agreementduration">Agreement Closing Date</label>
            <input type="date"
                    id="agreementduration"
                    name="agreementduration"
                    required
            />
          </div>
          <div class="user-input-box">
            <label for="pdfFile">Select Agreement PDF File</label>
                        <input type="file" name="pdfFile"  id="pdfFile" required>
          </div>
          <input type="hidden"
                    id="instructorid"
                    name="instructorid"
                    value="<?= $data['instructorid']?>"
                    required
            />
        </div>
        
        <div class="form-submit-btn">
          <input type="submit" value="Add Nutritionist">
        </div>
      </form>
    </div>
    </div>
  </body>
</html>