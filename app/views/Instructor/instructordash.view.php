<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="" href="<?= ROOT ?>/assets/css/Instructor/instr-main-template.css">
    <link rel="stylesheet" type="" href="<?= ROOT ?>/assets/css/Instructor/instr-body-template.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body>
    <?php $data ?>
    <div class="main-container">
        <?php $data ?>
        <div class="side-bar-container">
            <div class="logo-tab">
                FITFUSION
            </div>
            <ul class="side-bar-content">


                <a class="side-bar-tile-link" href="instructrdash">
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
                </a>

                <a class="side-bar-tile-link" href="viewworkoutplans">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                fitness_center
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Workout Plans
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="createworkoutplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                feedback
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Create a plan
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="instructormeetings">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                groups
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Meetings
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="login">
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
                    <!-- LET THE INSTRUCTOR UPLOAD A PFP, OR KEEP A DEFAULT IMAGE -->
                    <img src="" alt="">
                </div>
                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN INSTRUCTOR'S NAME -->
                    Welcome, <?php echo $data['instr']['name'] ?>

                </div>
            </div>
            <div class="body-content">

                <div class="content-tile-column">
                    <div class="tall-tile">
                        <?php $data['instr'] ?>
                        <div class="pfp-tile">
                            <div class="pfp-big"><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg"></div>
                            <div class="db-button-tile">
                                <a class="db-edit-button-link" href="instrprofile">
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                    Profile
                                </a>
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">My email:</div>
                            <div class="profile-info-value"><?php
                            echo $data['instr']['email'];
                            ?></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Manager email:</div>
                            <div class="profile-info-value"><?= $data['instr']['manageremail'] ?></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Gym email:</div>
                            <div class="profile-info-value"><?= $data['instr']['gymemail'] ?></div>
                        </div>

                    </div>
                </div>
                <div class="content-tile-column">
                    <div class="tall-tile">
                        <?php $data['gym'] ?>
                        <h1>My Gym</h1>
                        <div class="profile-info">
                            <div class="profile-info-key">Gym Name:</div>
                            <div class="profile-info-value"><?= $data['gym']['name'] ?></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Gym email:</div>
                            <div class="profile-info-value"><?= $data['gym']['email'] ?></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Manageremail:</div>
                            <div class="profile-info-value"><?= $data['gym']['manageremail'] ?></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-info-key">Description:</div>
                            <div class="profile-info-value"><?= $data['gym']['description'] ?></div>
                        </div>

                    </div>
                </div>
                <div class="content-tile-column">
                    <div class="tall-tile">
                    <h1>My Members</h1>
                        <?php foreach ($data['membernames'] as $value): ?>
                            <div class="profile-info">
                                <div class="profile-info-value"><?= $value ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

             
            </div>
        </div>
    </div>
</body>

</html>



<!-- USE THIS FOR A BUTTON. this is not the same as the edit button next to the profile circle-->
<!-- <button class="db-link-button">Change Gym</button> -->