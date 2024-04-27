<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Sidebar.css"> 
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/MemberStyles.css"> 

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="container-left">
        <div class="side-menu">
            <div class="brand-name">
                <h1>FIT FUSION</h1>
            </div>
            <ul>
                <a href="memberdash"><li>&nbsp; <h5>Dashboard</h5> </li></a>
                <a href="memberprofile"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>My Profile</h6> </li></a>
                <a href="taskList"><li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Task List</h6> </li></a>
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Attendance</h6> </li></a>

                <a href="scheduleInstrAppointReq"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Meetings</h6> </li></a>
                <a href="makeComplaint"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Complaints</h6> </li></a>
                <a href="makereviewgym"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Reviews</h6> </li></a>
                <!-- <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Payments</h6></li></a> -->
                <a href="scheduleinterface"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>My schedule</h6></li></a>
                <a href="memberviewmealplan"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Meal Plan</h6> </li></a>
 
                <a href="logout"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Logout</h6> </li></a>

            </ul>
        </div>
    </div>
    
    <!-- //////////////////////////// -->

    <div class="container-right">

                <div class="container-tabs-bar">
                    <div class="tab">
                        <a href="makereviewgym"><button>Gym</button></a>
                    </div>
                    <div class="tab">
                        <a href="makereviewinstructor"><button>Instructor</button></a>
                    </div>
                    <div class="tab">
                        <a href="makereviewnutritionist"><button class="current-button">Nutritionist</button></a>
                    </div>
                </div>
    
                <div class="form">
                    <!-- <form method="POST"> -->
                        <div class="form-content">
                            <label>Give your review about your nutritionist: "Nutritionist Name"</label>
                        </div>

                        <div class="form-content">
                            <textarea name="review" id="review" cols="87" rows="10" placeholder="Type your review here"></textarea>
                        </div>


                        <div class="form-content">
                            <center><input type="submit" value="Submit Review"></center>
                        </div>
                    </form>
                </div>
    </div>


</body>

</html>