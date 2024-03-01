<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarnew.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarfinal.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/scheduleAppointRe.css">
</head>

<body>
    <!-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="nav-container">
            <div class="top-container">
                <div class="center-image">
                    <img src="<?=ROOT?>/assets/images/LogoFinal.png" alt="logo">
                </div>
                <div style="width: 100%">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="menu-title">My Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="current-nav-link" href="memberpackages">
                                <span class="menu-title">Packages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="scheduleInstrAppointReq">
                            <span class="menu-title">Meetings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="makeComplaint">
                                <span class="menu-title">Complaints</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="makereview">
                                <span class="menu-title">Reviews</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="menu-title">Payments</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bottom-container">
                <button class="logout-button">
                    <a  href="home">
                        <span>Logout</span>
                    </a>
                </button>
            </div>
        </div>
    </nav> -->

    <!-- //////////////////////////// -->
    <div class="side-menu">
        <div class="center-image">
                <img src="<?=ROOT?>/assets/images/LogoFinal.png" alt="logo">
        </div>
        <ul>
            <a href="memberdash"><li>&nbsp; <h5>Dashboard</h5> </li></a>
            <a href="memberprofile"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>My Profile</h6> </li></a>
            <a href="taskList"><li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Task List</h6> </li></a>
            <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Attendance</h6> </li></a>

            <a href="scheduleInstrAppointReq"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Meetings</h6> </li></a>
            <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Complaints</h6> </li></a>
            <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Reviews</h6> </li></a>
            <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Payments</h6></li></a>
            <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Logout</h6> </li></a>

        </ul>
    </div>
    <!-- //////////////////////////// -->

    <div class="container">
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>My Gym</h1>
                        <h3>Gym1</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>My Package</h1>
                        <!-- link the below to package editing page -->
                        <a href="#">
                            <h3>
                                <?php 
                                    echo $data['packagetype'];
                                ?>
                            </h3>
                        </a>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>My Instructor</h1>
                        <h3>Instructor1</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>My Nutritionist</h1>
                        <h3>Nutritionist1</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2></h2>
                        
                    </div>
                    <table>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2></h2>
                    </div>
                    <table>

                    </table>
                </div>
            </div>
        </div>
    </div>
    

    <!-- <div class="form" style="margin-left:16%">

            <div class="form-item">
                <textarea rows="4" placeholder="Write your review here..."></textarea>
            </div>

            <div class="bottom-container">
                <button class="next-button">
                    <a  href="#">
                        <span>Submit Review</span>
                    </a>
                </button>
            </div>
           
        </div> -->
</body>

</html>