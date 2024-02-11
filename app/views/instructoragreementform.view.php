<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title></title>
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
      <h1 class="form-title">Instructor Agreement</h1>
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
          <input type="submit" value="Add Instructor">
        </div>
      </form>
    </div>
  </body>
</html>