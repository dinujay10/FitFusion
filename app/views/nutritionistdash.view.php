<!DOCTYPE html>


<html>
    <head>
        <title>FitFusion</title>
      
        <!-- <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css"> -->
        <link rel="stylesheet" type="" href="<?= ROOT ?>/assets/css/Instructor/instr-main-template.css">
    <link rel="stylesheet" type="" href="<?= ROOT ?>/assets/css/Instructor/instr-body-template.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    </head>
    <body>
        <!-- <header> -->
            <!-- <a href="#" class = "logo">
                <img src="<?=ROOT?>/assets/images/LogoFinal.png" alt="logo">
            </a> -->
            <!-- <ul class="navmenu"> -->
                <!-- <li><a href ="home">Home</a></li>
                <li><a href ="signup">Sign Up</a></li> -->
                <!-- <li><a href ="home">Log Out</a></li>
            </ul> -->

            <!-- <div class="nav-icon"> -->
                <!-- <a href="#"><i class='bx bx-search-alt'></i></a>
                <a href="searchgyms"><i class='bx bx-dumbbell' ></i></a>
                <a href="searchnutritionists"><i class='bx bxs-bowl-rice'></i></a> -->

                <!-- <div class="bx bx-menu" id="menu-icon"></div> -->
                <!-- <label for="check" class="checkbtn">
                    <i class="fa fa-bars"></i>
                </label>
            </div>
        </header> -->

        <!-- <nav>
            <ul>
                <li>
                    <a href="#" class="sidebar-logo">
                    <img src="<?=ROOT?>/assets/images/Logo.png" alt="">
                    <span class="nav-item">Member Dashboard</span>
                </a>
                </li>
                <li>
                    <a href="#">
                        <span class="material-symbols-outlined">account_circle</span>
                        <span class="nav-item">Profile</span>                    
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="material-symbols-outlined">schedule</span> 
                        <span class="nav-item">Gym Schedule</span>
                    </a>
                </li>
                <li>
                    <a href="scheduleinterface">
                        <span class="material-symbols-outlined">schedule</span> 
                        <span class="nav-item">My Schedule</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="material-symbols-outlined">monitoring</span> 
                        <span class="nav-item">My Progress</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="material-symbols-outlined">task</span> 
                        <span class="nav-item">Task List</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="material-symbols-outlined">groups</span> 
                        <span class="nav-item">Meetings</span>
                    </a>
                </li>
                <li>
                    <a href="complaintc">
                        <span class="material-symbols-outlined">star</span> 
                        <span class="nav-item">Make Complaints</span>
                    </a>
                </li>
                <li>
                    <a href="logout" class="logout">
                        <span class="material-symbols-outlined">logout</span> 
                        <span class="nav-item">Logout</span>
                    </a>
                </li>
            </ul>
        </nav> -->


        <!-- //////////////////////////// -->

        <!-- //////////////////////////// -->

        <!-- ADDED THE CONTAINER CLASS -->
<div class="main-container">
<div class="side-bar-container">
            <div class="logo-tab">
                FITFUSION
            </div>
            <ul class="side-bar-content">
                
                <!-- <li class="current-side-bar-tile">
                    <div class="sb-tab-content">
                        <span class="material-symbols-outlined">
                            dashboard
                        </span>
                    </div>
                    <div class="sb-tab-content">
                        Dashboard
                    </div>
                </li> -->

                <a class="side-bar-tile-link" href="nutritionistdash">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Dashboard
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="createmealplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           Create Meal Plan
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="nutritionistviewmealplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           View Meal Plan
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="nutritionistmeetings">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                fitness_center
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Meetings
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="nutritionistunavailable">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           Unavailable Times
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="nutrifeed">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                deployed_code
                            </span>
                        </div>
                        <div class="sb-tab-content">
                        Complaints
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="addfooditems">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                groups
                            </span>
                        </div>
                        <div class="sb-tab-content">
                         Add Food Items
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="logout">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                        </div>
                        <div class="sb-tab-content">Logout</div>
                    </li>
                </a>

            </ul>
        </div>
        <div class="body-container">

            <div class="body-header">
                <div class="pfp">
                    <!-- LET THE INSTRUCTOR UPLOAD A PFP, OR KEEP A DEFAULT IMAGE -->
                    <img src="" alt="">
                </div>
                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN INSTRUCTOR'S NAME -->
                    Welcome, <?php echo $data['nutri']['name'] ?>

                </div>
            </div>
            <div class="body-content">

                <div class="content-tile-column">
                    <div class="tall-tile">
                        <?php $data['nutri'] ?>
                        <div class="pfp-tile">
                            <div class="pfp-big"><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg"></div>
                            <div class="db-button-tile">
                                <a class="db-edit-button-link" href="nutriprofile">
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                    Profile
                                </a>
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">My email:</div>
                            <div class="profile-info-value"><?php
                            echo $data['nutri']['email'];
                            ?></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Manager email:</div>
                            <div class="profile-info-value"><?= $data['nutri']['manageremail'] ?></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Gym email:</div>
                            <div class="profile-info-value"><?= $data['nutri']['gymemail'] ?></div>
                        </div>

                    </div>
                </div>
                <div class="content-tile-column">
                    <div class="tall-tile">
                        <?php $data['gym'] ?>
                        <h1>My Gym</h1>
                        <div class="profile-info">
                            <div class="profile-info-key">Gym Name:</div>
                            <div class="profile-info-value"><?= $data['gym']['name'] ?></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Gym email:</div>
                            <div class="profile-info-value"><?= $data['gym']['email'] ?></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Manageremail:</div>
                            <div class="profile-info-value"><?= $data['gym']['manageremail'] ?></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Description:</div>
                            <div class="profile-info-value"><?= $data['gym']['description'] ?></div>
                        </div>

                    </div>
                </div>
                <div class="content-tile-column">
                    <div class="tall-tile">
                    <h1>My Members</h1>
                        <?php foreach ($data['membernames'] as $value): ?>
                            <div class="profile-info">
                                <div class="profile-info-value"><?= $value ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

             
            </div>
        </div>
 
</div>
    </body>
</html>