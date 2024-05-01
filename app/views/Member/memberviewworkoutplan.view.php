<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/Member/main-template.css">
    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/Member/body-template.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <style>
        .error-workout {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* background-color: aqua; */
            width: 80%;
            height: 60%;
            font-size: 120%;
            border: 1px solid #27374D;
        }
    </style>
</head>

<body>

    <div class="main-container">
        <div class="side-bar-container" style="position: relative;">
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


                <li class="current-side-bar-tile">
                    <div class="sb-tab-content">
                        <span class="material-symbols-outlined">
                            fitness_center
                        </span>
                    </div>
                    <div class="sb-tab-content">
                        Workout Plan
                    </div>
                </li>


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

                <a class="side-bar-tile-link" href="makereviewgym">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                editor_choice
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Reviews
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
                
            <a href="viewqrcode">
                    <div class="qr-scan"><span class="material-symbols-outlined">
                            qr_code_scanner
                        </span></div>
                </a>
                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN MEMBER'S NAME -->
                    Welcome,
                    <?php
                    echo $data['firstname'] . " " . $data['lastname'];
                    ?>
                </div>
            </div>
            <div class="body-content">
                <div class="content-tile-column" style="height: 95%; width: 90%;">

                    <div class="content-tile" style="height: 95%; justify-content: flex-start;">
                        <div class="workout-plan-bar">
                            <div class="workout-plan-heading">My Workout Plan</div>
                        </div>
                        <div class="workout-plan-bar">
                            <div class="workout-plan-mini-heading">Machine</div>
                            <div class="workout-plan-mini-heading">Exercise</div>
                            <div class="workout-plan-mini-heading">Reps</div>
                            <div class="workout-plan-mini-heading">Sets</div>
                            <div class="workout-plan-mini-heading">Max. Time</div>
                        </div>

                        <!-- have to run this on loop -->
                        <?php
                        if ($data['flag']==1) {
                            for ($x = count($data['allmachines']) - 1; $x >= 0; $x--) {
                                echo '<div class="workout-plan-bar">
                                <div class="workout-plan-mini-content">
                                    ' . $data['allmachines'][$x] . '
                                </div>
                                <div class="workout-plan-mini-content">
                                    ' . $data['allexercises'][$x] . '
                                </div>
                                <div class="workout-plan-mini-content">
                                    ' . $data['allreps'][$x] . '
                                </div>
                                <div class="workout-plan-mini-content">
                                    ' . $data['allsets'][$x] . '
                                </div>
                                <div class="workout-plan-mini-content">
                                    ' . $data['allmaxtimes'][$x] . '
                                </div>
                                </div>';
                            }
                        }
                        else {
                            echo '<div class="error-workout">You do not have a Workout Plan yet!</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>