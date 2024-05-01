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
        .schedule-tile {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            /* background-color: #27374D; */
            background-color: #F5F5F5;
            width: 60%;
            height: 80%;
            border-radius: 20px;
            box-shadow: 5px 5px 5px 0 rgba(0, 0, 0, 0.3);
        }

        .schedule-topic-bar {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            /* background-color: aqua; */
            width: 95%;
            height: 10%;
            border-bottom: 1px solid #27374D;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .schedule-headings-bar {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* background-color: aqua; */
            width: 95%;
            height: 10%;
            font-weight: 600;
        }

        .schedule-heading {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* background-color: aqua; */
            width: 95%;
            height: 100%;
        }

        .schedule-content-tile {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            /* background-color: #27374D; */
            width: 100%;
            height: 65%;
            border-radius: 20px;
            gap: 1rem;
        }

        .schedule-buttons-bar {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* background-color: aqua; */
            width: 95%;
            height: 15%;
        }

        .schedule-button {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* background-color: aqua; */
            width: 30%;
            height: 60%;
            border-radius: 20px;
            font-size: 1rem;
            border: 1px solid #27374D;
        }

        .schedule-button:hover {
            cursor: pointer;
            background-color: #27374D;
            color: white;
        }

        .schedule-content-bar {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* background-color: aqua; */
            width: 95%;
            height: 15%;
        }

        .schedule-content {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* background-color: aqua; */
            width: 95%;
            height: 100%;
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
                    <li class="current-side-bar-tile">
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
            <div class="body-content" style="flex-direction: column;">

                <?php
                // echo '<pre>';
                // var_dump($data);
                // echo '</pre>';
                ?>

                <div class="schedule-tile">
                    <div class="schedule-topic-bar">
                        MY SCHEDULE -
                        <?php
                        echo $data['date'];
                        ?>
                    </div>
                    <div class="schedule-headings-bar">
                        <div class="schedule-heading">Machine</div>
                        <div class="schedule-heading">Starting Time</div>

                    </div>
                    <div class="schedule-content-tile">

                        <?php

                        for ($x = count($data['allmachines']) - 1; $x >= 0; $x--) {
                            echo '<div class="schedule-content-bar">
                                <div class="schedule-content">
                                    ' . $data['allmachines'][$x] . '
                                </div>
                                <div class="schedule-content">
                                    ' . $data['alltimes'][$x] . '
                                </div>
                                </div>
                                ';
                        }

                        ?>

                    </div>
                    <form class="schedule-buttons-bar" method="POST" action="Gymscheduleview/redirectToSchedule">
                        <input type="submit" value="Make New Schedule" class="schedule-button">
                    </form>

                    <?php
                    // if ($data['errors'] == 1) {
                    //     echo "<script>alert('The time entered by the user is wrong.');</script>";
                    // }
                    // else {

                    // }
                    ?>
                </div>

            </div>
        </div>
    </div>


</body>

</html>