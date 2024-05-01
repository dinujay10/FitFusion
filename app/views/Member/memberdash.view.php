<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/Member/main-template.css">

    <link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/Member/body-template.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <?php
    // echo '<pre>';
    // var_dump($data);
    // echo '</pre>';
    ?>
    <div class="main-container">
        <div class="side-bar-container">
            <div class="logo-tab">
                FITFUSION
            </div>
            <ul class="side-bar-content">

                <li class="current-side-bar-tile">
                    <div class="sb-tab-content">
                        <span class="material-symbols-outlined">
                            dashboard
                        </span>
                    </div>
                    <div class="sb-tab-content">
                        Dashboard
                    </div>
                </li>

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
                <div class="content-tile-column">
                    <div class="tall-tile">

                        <div class="profile-info">
                            <div class="profile-info-key">First Name:</div>
                            <div class="profile-info-value">
                                <?php
                                echo $data['firstname'];
                                ?>
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Last Name:</div>
                            <div class="profile-info-value">
                                <?php
                                echo $data['lastname'];
                                ?>
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Age:</div>
                            <div class="profile-info-value">
                                <?php
                                echo $data['age'] . ' Years';
                                ?>
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Height:</div>
                            <div class="profile-info-value">
                                <?php
                                if ($data['height']) {
                                    echo $data['height'] . 'cm';
                                } else {
                                    echo 'Add Height';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Weight:</div>
                            <div class="profile-info-value">
                                <?php
                                if ($data['weight']) {
                                    echo $data['weight'] . 'kg';
                                } else {
                                    echo 'Add Weight';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Goal:</div>
                            <div class="profile-info-value">
                                <?php
                                echo $data['goal'];
                                ?>
                            </div>
                        </div>
                        <div class="pfp-tile">
                            <div class="db-button-tile">
                                <!-- <button class="db-button"> -->
                                <a class="db-edit-button-link" href="editmemberprofile">
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                    Edit
                                </a>
                                <!-- </button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-tile-column">
                    <div class="content-tile" style="height: 70%;">
                        <div class="content-info">
                            <div class="content-info-key">Registered Gym:</div>
                            <div class="content-info-value"><?php echo $data['gymname']; ?></div>
                        </div>
                        <div class="content-info">
                            <div class="content-info-key">Gym Email:</div>
                            <div class="content-info-value"><?php echo $data['gymemail']; ?></div>
                        </div>
                        <div class="content-info">
                            <div class="content-info-key">Gym Location:</div>
                            <div class="content-info-value"><?php echo $data['location1'] . ', ' . $data['location2'] . ', ' . $data['location3']; ?></div>
                        </div>
                        <!-- <button class="db-link-button">Change Gym</button> -->
                    </div>

                </div>
                <div class="content-tile-column">
                    <div class="content-tile" style="height: 70%;">
                        <div class="content-info">
                            <div class="content-info-key">Selected Package:</div>
                            <div class="content-info-value">
                                <!-- add a colum named STATUS and only get the current package that the member has. NOT the cancelled ones -->
                                <?php
                                echo $data['packagetype'];
                                ?>
                            </div>
                        </div>
                        <div class="content-info">
                            <div class="content-info-key">Package Group:</div>
                            <div class="content-info-value">
                                <!-- add a colum named STATUS and only get the current package that the member has. NOT the cancelled ones -->
                                <?php
                                if ($data['packagetype'] == 'instructor') {
                                    echo 'Instructor';
                                } else {
                                    echo 'Instructor & Nutritionist';
                                }

                                ?>
                            </div>
                        </div>
                        <div class="content-info">
                            <div class="content-info-key">Package Expiry Date:</div>
                            <div class="content-info-value">Backend data</div>
                        </div>
                        <!-- <button class="db-link-button">Change Package</button> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>