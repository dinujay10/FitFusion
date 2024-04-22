<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarnew.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarfinal.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/scheduleAppointRe.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                                <a class="nav-link" href="taskList">
                                    <span class="menu-title">Task List</span>
                                </a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="attendance">
                                    <span class="menu-title">Attendance</span>
                                </a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="memberpackages">
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
                            <a class="current-nav-link" href="makereviews">
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
                    <a  href="#">
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
            <a href="makeComplaint"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Complaints</h6> </li></a>
            <a href="makereview"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Reviews</h6> </li></a>
            <!-- <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Payments</h6></li></a> -->
            <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Logout</h6> </li></a>

        </ul>
    </div>
    <!-- //////////////////////////// -->

    <div class="form" style="margin-left:26%">

            <div class="form-item">
                
            </div>

            <br>
            <div class="form-item">
            </div>
            
            <!-- <div class="form-item">
                <p>Choose a date for the Appointment</p>
                <input type="date" id="date" name="date" value="2023-12-10" min="2023-12-10" max="2024-12-31" />
            </div> -->

            <div class="bottom-container">
                <button class="next-button">
                    <a  href="#">
                        <input type="submit" value="Submit Review">
                        <!-- <span>Submit Review</span> -->
                    </a>
                </button>
            </div>
           
        </div>
</body>

</html>