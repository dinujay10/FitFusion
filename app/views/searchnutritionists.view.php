<!DOCTYPE html>

<html>
    <head>
        <title>FitFusion</title>
        <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/style.css">

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <header>
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
        </header>

        <section class="search-container">
            <form action="" class="search-bar">
                <input type="text" placeholder="Seach for a Nutritionist" name="search">
                <button type="submit"><img src="<?=ROOT?>/assets/images/search-btn.png" alt="search"></button>
            </form>
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
    </body>
</html>