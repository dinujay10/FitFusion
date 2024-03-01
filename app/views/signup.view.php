<!DOCTYPE html>

<html>
    <head>
        <title>FitFusion</title>
        <link rel="stylesheet" href="<?=ROOT?>/assets/css/SignUpStyle.css">
        <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/style.css"> -->

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

    </head>
    <body>
    <nav>
        <a href="#" class = "logo">
            <img src="<?=ROOT?>/assets/images/LogoFinal.png" alt="logo">
        </a>
        <ul class="navmenu">
            <li><a href ="home">Home</a></li>
            <li><a href ="signup">Sign Up</a></li>
            <li><a href ="login">Log In</a></li>
        </ul>
        <div class="nav-icon">
                <a href="#"><i class='bx bx-search-alt'></i></a>
                <a href="searchgyms"><i class='bx bx-dumbbell' ></i></a>
                <a href="searchnutritionists"><i class='bx bxs-bowl-rice'></i></a>

                <!-- <div class="bx bx-menu" id="menu-icon"></div> -->
                <label for="check" class="checkbtn">
                    <i class="fa fa-bars"></i>
                </label>
        </div>
    </nav>

        <section>
            <div class="imgBx">
                <img src="<?=ROOT?>/assets/images/gymLogin.jpg" alt="">
            </div>
            <div class="contentBx">
                <div class="formBx"> 
                    <h2>Sign Up</h2>
                    <form method="POST">
                        <?php if(!empty($errors)):?>
                        <div class="alert">
                            <?= implode("<br>", $errors)?>
                        </div>
                        <?php endif ;?>

                        <div class="inputBx">
                            <span>Name</span>
                            <input type="text" name="name" id="name" >
                        </div>
                        <div class="inputBx">
                            <span>Email</span>
                            <input type="text" name="email" id="email">
                        </div>
                        <div class="inputBx">
                            <span>Username</span>
                            <input type="text" name="username" id="username">
                        </div>
                        <div class="inputBx">
                            <span>Password</span>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="inputBx">
                            <span>Confirm Password</span>
                            <input type="password" name="passwordConfirm" id="passwordConfirm">
                        </div>
                        <div class="selectType">
                            <span>Who are you signing up as?</span>
                            <select name="usertype" id="usertype">
                                <option value="member">Member</option>
                                <option value="gyminstructor">Gym Instructor</option>
                                <option value="nutritionist">Nutritionist</option>
                                <!-- <option value="gymmanager">Gym Manager (Manages 1 gym)</option>
                                <option value="gymowner">Gym Owner (Manages more than 1 gym)</option> -->
                            </select>                    
                        </div>
                        <div class="inputBx">
                            <input type="submit" value="Sign Up">
                        </div>
                        <div class="inputBx">
                            <p>Already have an account? <a href="login">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- footer -->
        <!-- <section class="footer">
            <div class="footer-info">
                <img src="<?=ROOT?>/assets/images/LogoFinal.png" alt="logo">
            </div>
        </section> -->

        <!-- <script src="<?=ROOT?>/assets/js/java.js"></script> -->
    
</body>
</html>