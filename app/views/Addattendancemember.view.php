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
      <h1 class="form-title">Assign QR Code To New Member</h1>
      <form action="#" method="POST" enctype="">
        <div class="main-user-info">
          <label for="email">Member Email</label>
          <select id="email" name="email" class="email">
            <?php
            foreach($data['noqrmembers'] as $x){
                echo'
                    <option value="'.$x.'">'.$x.'</option>
                ';
            }
            ?>
          </select>
          <input type="hidden" class="" id="generatedcode" name="generatedcode" required>
          <button type="button" class="qrbutton" onclick="generateQrCode()">Generate QR Code</button><br>
          <br>
          <img class="mb-4" src="" id="qrImg" alt="" style="width: 250px; height: 250px; border: 2px solid black; margin: 30px;">

          
        </div>
        
        <div class="form-submit-btn">
          <input type="submit" value="Assign">
        </div>
      </form>
    </div>
    </div>
    <script>
        function generateRandomCode(length) {
            const characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            let randomString = '';

            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                randomString += characters.charAt(randomIndex);
            }

            return randomString;
        }

        function generateQrCode() {
            const qrImg = document.getElementById('qrImg');

            let text = generateRandomCode(10);
            const geninput=document.getElementById('generatedcode');
            geninput.value=text;
            //$("#generatedcode").val(text);
            console.log(text);
            if (text === "") {
                alert("Please enter text to generate a QR code.");
                return;
            } else {
                const apiUrl = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${encodeURIComponent(text)}`;

                qrImg.src = apiUrl;
                // document.getElementById('studentName').style.pointerEvents = 'none';
                // document.getElementById('studentCourse').style.pointerEvents = 'none';
                // document.querySelector('.modal-close').style.display = '';
                // document.querySelector('.qr-con').style.display = '';
                // document.querySelector('.qr-generator').style.display = 'none';
            }
        }
    </script>
  </body>
</html>