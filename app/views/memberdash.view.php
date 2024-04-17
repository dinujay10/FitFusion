<!DOCTYPE html>


<html>
    <head>
        <title>FitFusion</title>
        <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarnew.css">
        <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /> 
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <!-- //////////////////////////// -->
        <div class="side-menu">
            <div class="brand-name">
                <h1>FIT FUSION</h1>
            </div>
            <ul>
            <a href="memberdash"><li>&nbsp; <h5>Dashboard</h5> </li></a>
                <a href="memberprofile"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>My Profile</h6> </li></a>
                <a href="taskList"><li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Task List</h6> </li></a>
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Attendance</h6> </li></a>

                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Packages</h6> </li></a>
                <a href="scheduleInstrAppointReq"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Meetings</h6> </li></a>
                <a href="scheduleinterface"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h7>My schedule</li></a>
                <a href="memberviewmealplan"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h7>Meal Plan</h7> </li></a>
                <a href="makeComplaint"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Complaints</h6> </li></a>
                <a href="makereviewgym"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Reviews</h6> </li></a>
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Payments</h6></li></a>
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Logout</h6> </li></a>

            </ul>
        </div>
        <div class="container">
            <section class="search-container">
                <form action="" class="search-bar">
                    <input type="text" placeholder="Seach for a Gym or a Nutritionist" name="search">
                    <button type="submit"><img src="<?=ROOT?>/assets/images/search-btn.png" alt="search"></button>
                </form>
            </section>

            <!-- Gyms section -->
            <section class="gym" id="gym">
                <div class="gym-list">
                    <!-- GYM 1 -->
            
                    <?php



                        for($x=0;$x<count($data);$x++){
                        echo '<a href="gympagetest?id='.$data[$x]['id'].'">
                        <div class="gym-row">
                        <img src="'.ROOT.'/assets/uploadgymimages/'.$data[$x]['gymimages'].'" alt="">
                        
                        <div class="gym-text">
                            <h5>'.$data[$x]['location2'].' ,'.$data[$x]['location3'].'</h5>
                        </div>
                        
                        <div class="rating">
                            <i class="bx bx-star" ></i>
                            <i class="bx bx-star" ></i>
                            <i class="bx bx-star" ></i>
                            <i class="bx bx-star" ></i>
                            <i class="bx bx-star" ></i>

                        </div>
                        <div class="price">
                            <h4>'.$data[$x]['gymName'].'</h4>
                            <p>Rs. 3000 onwards</p>
                        </div>
                    </div>   </a> '  ;
                        }
                    ?>
                    

                
                </div>
            </section>

            <!-- Nutritionist List -->
            <section class="nutritionist" id="nutritionist">
                <div class="nutri-list">
                    <!-- NUTRI 1 -->
                    <div class="nutri-row">
                        <img src="<?=ROOT?>/assets/images/nutri1.jpg" alt="">
                        
                        <!-- <div class="nutri-text">
                            <h5>Nugegoda, Colombo</h5>
                        </div> -->
                        <div class="heart-icon">
                            <i class='bx bx-heart'></i>
                        </div>
                        <div class="rating">
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                        </div>
                        <div class="price">
                            <h4>Nutritionist1</h4>
                            <p>Rs. 3000 onwards</p>
                        </div>
                    </div>

                    <!-- GYM 2 -->
                    <div class="nutri-row">
                        <img src="<?=ROOT?>/assets/images/nutri2.jpg" alt="">
                        <!-- <div class="nutri-text">
                            <h5>Nugegoda, Colombo</h5>
                        </div> -->
                        <div class="heart-icon">
                            <i class='bx bx-heart'></i>
                        </div>
                        <div class="rating">
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                        </div>

                        <div class="price">
                            <h4>Nutritionist2</h4>
                            <p>Rs. 3000 onwards</p>
                        </div>
                    </div>

                    <!-- GYM 3 -->
                    <div class="nutri-row">
                        <img src="<?=ROOT?>/assets/images/nutri3.jpg" alt="">
                        
                        <!-- <div class="nutri-text">
                            <h5>Nugegoda, Colombo</h5>
                        </div> -->
                        <div class="heart-icon">
                            <i class='bx bx-heart'></i>
                        </div>
                        <div class="rating">
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                        </div>

                        <div class="price">
                            <h4>Nutritionist3</h4>
                            <p>Rs. 3000 onwards</p>
                        </div>
                    </div>

                    <!-- GYM 4 -->
                    <div class="nutri-row">
                        <img src="<?=ROOT?>/assets/images/nutri4.jpg" alt="">
                        
                        <!-- <div class="nutri-text">
                            <h5>Nugegoda, Colombo</h5>
                        </div> -->
                        <div class="heart-icon">
                            <i class='bx bx-heart'></i>
                        </div>
                        <div class="rating">
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                        </div>

                        <div class="price">
                            <h4>Nutritionist4</h4>
                            <p>Rs. 3000 onwards</p>
                        </div>
                    </div>

                    <!-- GYM 5 -->
                    <div class="nutri-row">
                        <img src="<?=ROOT?>/assets/images/nutri5.jpg" alt="">
                        
                        <!-- <div class="nutri-text">
                            <h5>Nugegoda, Colombo</h5>
                        </div> -->
                        <div class="heart-icon">
                            <i class='bx bx-heart'></i>
                        </div>
                        <div class="rating">
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                        </div>

                        <div class="price">
                            <h4>Nutritionist5</h4>
                            <p>Rs. 3000 onwards</p>
                        </div>
                    </div>

                    <!-- GYM 6 -->
                    <div class="nutri-row">
                        <img src="<?=ROOT?>/assets/images/nutri6.jpg" alt="">
                        <!-- <div class="nutri-text">
                            <h5>Nugegoda, Colombo</h5>
                        </div> -->
                        <div class="heart-icon">
                            <i class='bx bx-heart'></i>
                        </div>
                        <div class="rating">
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                            <i class='bx bx-star' ></i>
                        </div>

                        <div class="price">
                            <h4>Nutritionist6</h4>
                            <p>Rs. 3000 onwards</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- footer -->
            <section class="footer">
            <div class="footer-info">
                <img src="<?=ROOT?>/assets/images/LogoFinal.png" alt="logo">
            </div>
            </section>

            <script src="<?=ROOT?>/assets/js/java.js"></script>

        </div>
        

    </body>
</html>