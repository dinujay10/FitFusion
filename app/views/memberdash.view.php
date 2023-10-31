<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/MemberDashBoardStyle.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FitFusion</title>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>FIT FUSION</h1>
        </div>
        <ul>
        <!-- <img src="<?=ROOT?>/assets/images/dashboards/dashboard (2).png" alt="">&nbsp; -->
            <li> <h5>Dashboard</h5> </li>
            <li><a href="#"><i class='bx bx-user'></i><h6>My Profile</h6></a></li>
            <li><a href="#"><i class='bx bxs-time-five'></i><h6>Gym Schedule</h6></a></li>
            <li><a href="#"><i class='bx bx-line-chart'></i><h6>My Progress</h6></a></li>
            <li><a href="#"><i class='bx bx-task'></i><h6>Task List</h6></a></li>
            <li><a href="#"><i class='bx bxl-zoom'></i><h6>Meetings</h6></a></li>
            <li><a href="searchgyms"><i class='bx bx-dumbbell' ></i><h6>Search for a Gym</h6></a></li>
            <li><a href="searchnutritionists"><i class='bx bxs-bowl-rice'></i><h6>Search for a Nutritionist</h6></a></li>

            <li>Logout</li>
            <!-- <li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Settings</h6> </li> -->
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="<?=ROOT?>/assets/images/search-btn.png" alt=""></button>
                </div>
                <div class="user">
                    <!-- <a href="#" class="btn">Add New</a> -->
                    <img src="<?=ROOT?>/assets/images/dashboards/notif-btn.png" alt="">
                    <div class="img-case">
                        <!-- <img src="<?=ROOT?>/assets/images/dashboards/user.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="gymAndNutritionist">
           
            <h3>Search For Gyms</h3>
            <div class="gyms">
                <div class="gym">
                    <img src="<?=ROOT?>/assets/images/gym1.jpg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>

                   
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>

                <div class="gym">
                    <img src="<?=ROOT?>/assets/images/dashboards/g2.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>

                   
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?=ROOT?>/assets/images/dashboards/g3.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>

                   
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?=ROOT?>/assets/images/dashboards/g4.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>

                   
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?=ROOT?>/assets/images/dashboards/g5.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>

                   
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?=ROOT?>/assets/images/dashboards/g6.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>

                   
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?=ROOT?>/assets/images/dashboards/g7.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>

                   
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?=ROOT?>/assets/images/dashboards/g8.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>

                   
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
            </div>
            
            <div class="nutritionists">
               
                <div class="nutritionist">
                    <img src="<?=ROOT?>/assets/images/dashboards/m1.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5> 
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?=ROOT?>/assets/images/dashboards/m2.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5> 
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?=ROOT?>/assets/images/dashboards/m3.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5> 
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?=ROOT?>/assets/images/dashboards/m4.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5> 
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?=ROOT?>/assets/images/dashboards/m5.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5> 
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?=ROOT?>/assets/images/dashboards/m6.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5> 
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?=ROOT?>/assets/images/dashboards/m7.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5> 
                    <div class="inp">
                        <img src="<?=ROOT?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    
</body>
</html>