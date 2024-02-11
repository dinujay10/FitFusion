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
      <h1 class="form-title">Generate new members report</h1>
      <form action="#" method="POST">
        <div class="main-user-info">
          
    
          <div class="user-input-box">
            <label for="startdate">Start Date</label>
            <input type="date"
                    id="startdate"
                    name="startdate"
                    required
            />
          </div>
          <div class="user-input-box">
            <label for="enddate">End  Date</label>
            <input type="date"
                    id="enddate"
                    name="enddate"
                    required
            />
          </div>
           
        </div>
        
        <div class="form-submit-btn">
          <input type="submit" value="Generate Report">
          <a href="newmemberspdf?startdate=<?=$data['startdate']?>&enddate=<?=$data['enddate']?>">click here</a>
        </div>
      </form>
    </div>
  </body>
</html>