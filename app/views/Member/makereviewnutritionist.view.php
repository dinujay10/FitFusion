<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Member/main-template.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Member/body-template.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> -->
    <style>

        
        
    </style>
</head>
<body>
    <div class="main-container">
        <div class="side-bar-container">
            <div class="logo-tab">
                FITFUSION
            </div>
            <ul class="side-bar-content">
                
                <a class="side-bar-tile-link" href="memberdash">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                dashboard
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Dashboard
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="gymschedule">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            My Schedule
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="memberviewworkoutplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                fitness_center
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Workout Plan
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="memberviewmealplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                skillet
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Meal Plan
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="makeComplaint">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                mood_bad
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Complaints
                        </div>
                    </li>
                </a>

                <li class="current-side-bar-tile">
                    <div class="sb-tab-content">
                        <span class="material-symbols-outlined">
                            editor_choice
                        </span>
                    </div>
                    <div class="sb-tab-content">
                        Reviews
                    </div>
                </li>

                <a class="side-bar-tile-link" href="#">
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
                    <!-- LET THE MEMBER UPLOAD A PFP, OR KEEP A DEFAULT IMAGE -->
                    <img src="#" alt="">
                </div>
                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN MEMBER'S NAME -->
                    Welcome, MemberName
                </div>
            </div>
            <div class="body-content">
                    <form class="form-tile" method="POST">
                            <div class="form-tile-content">
                                <div class="form-tab-bar">
                                    <div class="form-heading">Give Reviews</div>
                                    <a class="tab-link" href="makereviewgym">
                                        <div class="form-tab">Gym</div>
                                    </a>
                                    <a class="tab-link" href="makereviewinstructor">
                                        <div class="form-tab">Instructor</div>
                                    </a>
                                    <a class="tab-link" href="makereviewnutritionist">
                                        <div class="current-form-tab">Nutritionist</div>
                                    </a>
                                </div>
                                <hr class="form-divider">
                                <div class="form-content">
                                    <div class="form-content-bar-text">
                                        You can give your review on your Nutritionist: 
                                        <!-- display the nutrionist name -->
                                        <!-- <?php 
                                            echo $data["gymname"];
                                        ?> -->
                                    </div>
                                    <div class="form-content-bar">
                                        
                                    </div>
                                    <div class="form-content-textarea-bar">
                                        <!-- limit the number of characters!!!!! -->
                                        <textarea class="textarea-tile" name="review" id="review" cols="87" rows="10" placeholder="Type your review here"></textarea>
                                    </div>
                                    <div class="form-content-bar">
                                        <input class="submit-button" type="submit" value="Submit Review">
                                    </div>
                                </div>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>