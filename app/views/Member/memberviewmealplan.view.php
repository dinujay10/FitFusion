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
        .meal-plan-tile-bar {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* background-color: aqua; */
            width: 100%;
            height: 15%;
        }

        .meal-plan-heading {
            font-size: 120%;
            font-weight: 700;
            /* padding: 20px; */
        }

        .meal-plan-topic {
            display: flex;
            font-size: 105%;
            font-weight: 600;
            width: 30%;
            /* background-color: red; */
            align-items: center;
            justify-content: center;
        }

        .meal-plan-value {
            display: flex;
            font-size: 105%;
            /* font-weight: 600; */
            width: 30%;
            /* background-color: red; */
            align-items: center;
            justify-content: center;
        }

        .error-meal {
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
    <?php
    // echo '<pre>';
    // var_dump($data);
    // echo '</pre>';
    ?>

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

                <li class="current-side-bar-tile">
                    <div class="sb-tab-content">
                        <span class="material-symbols-outlined">
                            skillet
                        </span>
                    </div>
                    <div class="sb-tab-content">
                        Meal Plan
                    </div>
                </li>



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

                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN MEMBER'S NAME -->
                    Welcome,
                    <?php
                    echo $data['firstname'] . " " . $data['lastname'];
                    ?>
                </div>
            </div>
            <div class="body-content">
                <?php
                if ($data['flag']==1) {
                    ?>
                <div class="content-tile-column" style="height: 95%;">
                    <div class="content-tile" style="height: 60%; gap: 0.2rem; justify-content: flex-start;">
                        <div class="meal-plan-tile-bar">
                            <div class="meal-plan-heading">Breakfast</div>
                        </div>
                        <div class="meal-plan-tile-bar">
                            <div class="meal-plan-topic">Food</div>
                            <div class="meal-plan-topic">Quantity</div>
                            <div class="meal-plan-topic">Calories</div>
                        </div>

                        <?php
                        for ($x = count($data['allbreakfast']) - 1; $x >= 0; $x--) {
                        echo    '<div class="meal-plan-tile-bar">
                                <div class="meal-plan-value">'.$data['allbreakfast'][$x][0].'</div>
                                <div class="meal-plan-value">'.$data['allbreakfast'][$x][2].'</div>
                                <div class="meal-plan-value">'.$data['allbreakfast'][$x][1].' cal</div>
                            </div>';
                        }
                        ?>

                    </div>
                    <div class="content-tile" style="height: 60%; gap: 0.2rem; justify-content: flex-start;">
                        <div class=" meal-plan-tile-bar">
                            <div class="meal-plan-heading">Lunch</div>
                        </div>
                        <div class="meal-plan-tile-bar">
                            <div class="meal-plan-topic">Food</div>
                            <div class="meal-plan-topic">Quantity</div>
                            <div class="meal-plan-topic">Calories</div>
                        </div>

                        <?php
                        for ($x = count($data['alllunch']) - 1; $x >= 0; $x--) {
                        echo    '<div class="meal-plan-tile-bar">
                                <div class="meal-plan-value">'.$data['alllunch'][$x][0].'</div>
                                <div class="meal-plan-value">'.$data['alllunch'][$x][2].'</div>
                                <div class="meal-plan-value">'.$data['alllunch'][$x][1].' cal</div>
                            </div>';
                        }
                        ?>

                    </div>
                </div>
                <div class="content-tile-column" style="height: 95%;">
                    <div class="content-tile" style="height: 60%; gap: 0.2rem; justify-content: flex-start;">
                        <div class=" meal-plan-tile-bar">
                            <div class="meal-plan-heading">Dinner</div>
                        </div>
                        <div class="meal-plan-tile-bar">
                            <div class="meal-plan-topic">Food</div>
                            <div class="meal-plan-topic">Quantity</div>
                            <div class="meal-plan-topic">Calories</div>
                        </div>

                        <?php
                        for ($x = count($data['alldinner']) - 1; $x >= 0; $x--) {
                        echo    '<div class="meal-plan-tile-bar">
                                <div class="meal-plan-value">'.$data['alldinner'][$x][0].'</div>
                                <div class="meal-plan-value">'.$data['alldinner'][$x][2].'</div>
                                <div class="meal-plan-value">'.$data['alldinner'][$x][1].' cal</div>
                            </div>';
                        }
                        ?>

                    </div>
                    <div class="content-tile" style="height: 60%; gap: 0.2rem; justify-content: flex-start;">
                        <div class=" meal-plan-tile-bar">
                            <div class="meal-plan-heading">Snack 01</div>
                        </div>
                        <div class="meal-plan-tile-bar">
                            <div class="meal-plan-topic">Food</div>
                            <div class="meal-plan-topic">Quantity</div>
                            <div class="meal-plan-topic">Calories</div>
                        </div>

                        <?php
                        for ($x = count($data['allsnack1']) - 1; $x >= 0; $x--) {
                        echo    '<div class="meal-plan-tile-bar">
                                <div class="meal-plan-value">'.$data['allsnack1'][$x][0].'</div>
                                <div class="meal-plan-value">'.$data['allsnack1'][$x][2].'</div>
                                <div class="meal-plan-value">'.$data['allsnack1'][$x][1].' cal</div>
                            </div>';
                        }
                        ?>

                    </div>
                </div>
                <div class="content-tile-column" style="height: 95%;">
                    <div class="content-tile" style="height: 60%; gap: 0.2rem; justify-content: flex-start;">
                        <div class=" meal-plan-tile-bar">
                            <div class="meal-plan-heading">Snack 02</div>
                        </div>
                        <div class="meal-plan-tile-bar">
                            <div class="meal-plan-topic">Food</div>
                            <div class="meal-plan-topic">Quantity</div>
                            <div class="meal-plan-topic">Calories</div>
                        </div>

                        <?php
                        for ($x = count($data['allsnack2']) - 1; $x >= 0; $x--) {
                        echo    '<div class="meal-plan-tile-bar">
                                <div class="meal-plan-value">'.$data['allsnack2'][$x][0].'</div>
                                <div class="meal-plan-value">'.$data['allsnack2'][$x][2].'</div>
                                <div class="meal-plan-value">'.$data['allsnack2'][$x][1].' cal</div>
                            </div>';
                        }
                        ?>

                    </div>
                </div>
                <?php
                }
                else {
                    echo '<div class="error-meal">You do not have a Meal Plan yet!</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>