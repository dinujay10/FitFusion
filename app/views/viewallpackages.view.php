<!DOCTYPE html>


<html>
    <head>
        <title>FitFusion</title>
        <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/GympagetestStyle.css">
    <!-- <link rel="stylesheet" href="<?=ROOT?>/assets/css/Sidebar.css">  -->
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /> 
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <style>
    .mainpackage {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
}

.pkg {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 10px;
    max-width: 300px;
    text-align: center;
}

.pkg h3 {
    color: #333;
    font-size: 20px;
    margin-bottom: 10px;
}

.pkg p {
    color: #666;
    margin-bottom: 15px;
}

.pkg h5 {
    color: #333;
    font-size: 16px;
}
</style>

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

        <nav>
            <ul>
                <li>
                    <a href="memberdash" class="sidebar-logo">
                    <img src="<?=ROOT?>/assets/images/Logo.png" alt="">
                    <span class="nav-item">Member Dashboard</span>
                </a>
                </li>
                <li>
                    <a href="memberprofile">
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
                    <a href="#">
                        <span class="material-symbols-outlined">star</span> 
                        <span class="nav-item">Rate and Review</span>
                    </a>
                </li>
                <li>
                    <a href="logout" class="logout">
                        <span class="material-symbols-outlined">logout</span> 
                        <span class="nav-item">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- //////////////////////////// -->
   

        <section class="search-container"">
            <form action="" class="search-bar">
                <input type="text" placeholder="Seach " name="search">
                <button type="submit"><img src="<?=ROOT?>/assets/images/search-btn.png" alt="search"></button>
            </form>
        </section>
        <div class="mainpackage">
            <?php
                foreach($data['packages'] as $pkg){
                    echo '
                        <div class="pkg">
                            <h3>'.$pkg->packagetype.'</h3>
                            <p>'.$pkg->description.'</p>
                            <h5>Package Period: '.$pkg->paymentperiod.'</h5>
                            <h5>Ammount: '.$pkg->amount.'</h5>
                        </div>
                    ';
                }
            ?>

        </div>

        <div class="form-content">
            <div>
                <center><input type="submit" value="Make Payment" id="proceed-to-pay" class = "payment"></center>
            </div>
        </div>

        
        <!-- footer -->
        <!-- <section class="footer">
        <div class="footer-info">
            <img src="<?=ROOT?>/assets/images/LogoFinal.png" alt="logo">
        </div>
        </section> -->

        <script src="<?=ROOT?>/assets/js/java.js"></script>

    </body>
</html>