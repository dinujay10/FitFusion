<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Member/main-template.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Member/body-template.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <style>
       

        

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

                <a class="side-bar-tile-link" href="scheduleinterface">
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

                <a class="side-bar-tile-link" href="scheduleinterface">
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
                <div class="pfp">
                    <!-- LET THE MEMBER UPLOAD A PFP, OR KEEP A DEFAULT IMAGE -->
                    <img src="#" alt="">
                </div>
                <div class="welcome-user">
                    Welcome, 
                    <?php
                    echo $data['firstname'] . " " . $data['lastname'];
                    ?>
                </div>
            </div>
            <div class="body-content" style="flex-direction: column;">  
            
                <?php 
                echo '<pre>';
                var_dump($data);
                echo '</pre>';
                ?>

                <form method="POST" style="height: 40%;">
                    <div class="content-tile" style="height: 20%; flex-direction: row;">
                        <input class="date-box" type="date" id="date" name="date" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" max="<?php echo date('Y-m-d', strtotime('+1 month')); ?>"/>
                        <!-- //TODO have to limit the time within gym hours -->
                        <label for="timePicker">Choose a time:</label>
                        <input type="time" id="timePicker" name="time" min="00:00" max="23:55" step="300" onchange=validateTime()>
                    </div>
                    <div class="content-tile" style="height: 20%; flex-direction: row;">
                        <input class="db-link-button" style="width: 20%; height: 30%" type="submit" value="submit">
                    </div>
                </form>


                <div class="content-tile" style="height: 20%; flex-direction: row;">
                
                    <?php
                        // loop through all the machines in $data
                        foreach($data['allmachines'] as $machine) {
                            echo '<div class="machine-container">';
                            echo '<div class="machine-name">';
                            echo $machine;
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>

                </div>
                



                
            </div>
        </div>
    </div>

    <script>
        function validateTime() {
            var input = document.getElementById('timePicker');
            var time = input.value;
            var parts = time.split(':');
            var hours = parseInt(parts[0], 10);
            var minutes = parseInt(parts[1], 10);

            // Check if minutes are multiples of 5
            if (minutes % 5 !== 0) {
                alert('Please select a time that is in 5-minute increments.');
                input.value = ''; // Reset the input value
                return false;
            }
            return true;
        }
    </script>

</body>
</html>