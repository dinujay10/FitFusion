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
            <img src="<?=ROOT?>/assets/images/gym pic 2.jpg" alt="">
        </div>
        <div class="contentBx">
            <div class="formBx"> 
                <h2>Login</h2>
                <form method="POST">
                    <?php if(!empty($errors)):?>
                    <div class="alert">
                        <?= implode("<br>", $errors)?>
                    </div>
                    <?php endif ;?>
                    
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Login">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account? <a href="signup">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>