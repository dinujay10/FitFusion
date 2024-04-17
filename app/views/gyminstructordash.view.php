<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/InstructorDashBoardStyle.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>FIT FUSION</h1>
        </div>
        <ul>
          
            <a href="profile">
                <li><img src="<?= ROOT ?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>My Profile</h6>
                </li>
            </a>
            <li><img src="<?= ROOT ?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Gym Schedule</h6>
            </li>
            <a href="createworkoutplan">
                <li><img src="<?= ROOT ?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Create Workout Plan</h6>
                </li>
            </a>
            <a href="workoutcategory">
                <li><img src="<?= ROOT ?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Available Categories
                    </h6>
                </li>
            </a>
            <a href="machinefailure">
                <li><img src="<?= ROOT ?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Report Machine Failure
                    </h6>
                </li>
            </a>
            <a href="memberfeed">
                <li><img src="<?= ROOT ?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Feedbacks</h6>
                </li>
            </a>
            <a href="instructormeetings">
                <li><img src="<?= ROOT ?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Meetings</h6>
                </li>
            </a>
            <a href="logout">
                <li><img src="<?= ROOT ?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Logout</h6>
                </li>
            </a>
            <li><img src="<?= ROOT ?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Settings</h6>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="<?= ROOT ?>/assets/images/dashboards/location.jpeg" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <img src="<?= ROOT ?>/assets/images/dashboards/notification.jpeg" alt="">
                    <div class="img-case">
                        <img src="<?= ROOT ?>/assets/images/dashboards/workout.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="gymAndNutritionist">

            <h3>Search For Members</h3>
            <div class="gyms">
                <div class="gym">
                    <img src="<?= ROOT ?>/assets/images/dashboards/g1.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>


                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>

                <div class="gym">
                    <img src="<?= ROOT ?>/assets/images/dashboards/g2.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>


                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?= ROOT ?>/assets/images/dashboards/g3.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>


                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?= ROOT ?>/assets/images/dashboards/g4.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>


                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?= ROOT ?>/assets/images/dashboards/g5.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>


                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?= ROOT ?>/assets/images/dashboards/g6.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>


                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?= ROOT ?>/assets/images/dashboards/g7.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>


                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="gym">
                    <img src="<?= ROOT ?>/assets/images/dashboards/g8.jpeg" alt="">
                    <br>
                    <h5>Fitness first</h5>
                    <h6>Colombo 001000</h6>


                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
            </div>

            <div class="nutritionists">

                <div class="nutritionist">
                    <img src="<?= ROOT ?>/assets/images/dashboards/m1.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5>
                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?= ROOT ?>/assets/images/dashboards/m2.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5>
                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?= ROOT ?>/assets/images/dashboards/m3.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5>
                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?= ROOT ?>/assets/images/dashboards/m4.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5>
                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?= ROOT ?>/assets/images/dashboards/m5.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5>
                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?= ROOT ?>/assets/images/dashboards/m6.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5>
                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
                <div class="nutritionist">
                    <img src="<?= ROOT ?>/assets/images/dashboards/m7.jpeg" alt="">
                    <br>
                    <h5>Supun Bandara</h5>
                    <div class="inp">
                        <img src="<?= ROOT ?>/assets/images/dashboards/rating.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <footer>
    <p>&copy; 2024 Gym Instructor Dashboard</p>
</footer>

    </div>
  
</body>
 

</html>