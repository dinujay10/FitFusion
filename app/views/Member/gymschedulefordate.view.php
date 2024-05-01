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
        .error-schedule {
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

        .scheduled-slot-button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .normal-slot-button {
            background-color: #27374D;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .table-fixed {
            width: 70%;
            height: 40%;
            border-collapse: collapse;
            /* border: var(--brandgreen) solid 4px; */
            border-radius: 10px;
        }

        tr {
            height: 5%;
        }

        td {
            /* border: var(--brandgreen) solid 1px; */
            text-align: center;
            padding: 5px;
        }

        .th-style {
            /* border: var(--brandgreen) solid 1px; */
            text-align: center;
            padding: 10px;
            /* background-color: #27374D; */
            /* color: white; */
            border: 1px solid #27374D;
            /* border-radius: 20px; */
        }

        .schedule-form {
            display: flex;
            flex-direction: column;
        }

        .schedule-submit-button {
            background-color: #27374D;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            height: 100%;
        }

        .schedule-submit-button-1 {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #27374D;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            height: 25%;
            font-size: 105%;
            text-decoration: none;
        }

        .schedule-submit-button-1:disabled {
            background-color: #A9A9A9; /* Grayed out */
            color: #777; /* Dark gray text */
            cursor: not-allowed; /* Cursor to indicate not allowed action */
            opacity: 0.6; /* Slightly transparent */
        }

        .schedule-form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .time {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* background-color: aqua; */
            width: 50%;
            height: 15%;
            border: 1px solid #27374D;
            border-radius: 20px;
        }
    </style>

</head>

<body>
    <?php
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
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
        <div class="body-container" style="overflow-y:auto">
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
            <div class="body-content" style="flex-direction: row;">
                <?php if ($data['flag'] == 1) : ?>
                    <!-- <div class="content-tile" style="height: 20%; flex-direction: row;">
                        <?php foreach ($data['allmachines'] as $machine) : ?>
                            <div class="machine-container">
                                <div class="machine-name"><?= $machine; ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div> -->
                    <div class="content-tile-column" style="height: 60%; width: 40%; flex-direction: column; margin:10px">
                        <div class="content-tile-1" style="height: 20%; width: 50%; flex-direction: column; gap: 1rem">
                            <div class="schedule-form" style="height: 40%; gap: 1rem">

                                <button class="schedule-submit-button" style="background-color: #27374D">Available</button>
                                <button class="schedule-submit-button" style="background-color: red;">Scheduled</button>
                            </div>
                        </div>
                        <!-- <div class="content-tile-1" style="height: 50%; width: 50%; flex-direction: row; margin:10px; gap: 1rem"> -->
                        <form class="schedule-form" method="POST" style="height: 50%; width: 80%; gap: 1rem;">
                            <label for="timePicker">Choose a time:</label>
                            <input class="time" type="time" id="timePicker" name="time" min="00:00" max="23:55" step="300" onchange="validateTime()">
                            <input type="submit" class="schedule-submit-button-1" value="Get Schedule">
                            <a href="gymschedule" class="schedule-submit-button-1">Change Date</a>
                        </form>
                        <!-- </div> -->
                    </div>
                    <div class="reply-tile" style="display:flex; flex-direction:column; overflow:hidden; height:100%; overflow-y:auto; overflow-x:auto; width:100%;">
                        <table class="table-fixed">
                            <tr>
                                <th></th>
                                <?php

                                foreach ($data['allmachines'] as $machine) {
                                    echo '<th class="th-style">
                                        ' . $machine . '
                                        </th>';
                                }
                                ?>
                            </tr>

                            <?php
                            for ($time = $data['opentime']; $time < $data['closetime']; $time++) {
                            ?>
                                <tr>
                                    <td>
                                        <?php
                                        if ($time < 12) {
                                            echo $time . ':00 AM';
                                        } elseif ($time == 12) {
                                            echo $time . ':00 PM';
                                        } else {
                                            echo ($time - 12) . ':00 PM';
                                        } ?></td>
                                    <?php
                                    // if ($data['scheduledeets']) {
                                    foreach ($data['allmachines'] as $machine) {
                                        $check = [$machine, $time];
                                        if (in_array($check, $data['scheduledeets'])) {
                                            echo '<td><button class="scheduled-slot-button">
                                                        
                                                    </button></td>';
                                        } else {
                                            echo '<td><button class="normal-slot-button">
                                                        
                                                    </button></td>';
                                        }
                                    }
                                    // }
                                    ?>
                                </tr>
                            <?php
                            }
                            ?>

                        </table>
                    </div>
                <?php else : ?>
                    <div class="error-schedule">You do not have a workout plan yet to schedule your time!</div>
                <?php endif; ?>
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

        document.addEventListener('DOMContentLoaded', function() {
            var timeInput = document.getElementById('timePicker');
            var submitBtn = document.getElementById('submitBtn');

            // Function to check if the selected time is valid and enable/disable the submit button
            function updateTimeStatus() {
                var timeValue = timeInput.value;
                if (timeValue) { // Checks if any time is entered
                    // check if the time is in between 6AM and 7PM
                    var openTime = $data['opentime'];
                    var closeTime = $data['closetime'];
                    if (hours >= openTime && hours <= closeTime) {
                        submitBtn.disabled = false; // Enable the submit button
                    } else {
                        //show a window alert
                    }
                    submitBtn.disabled = false; // Enable the submit button
                } else {
                    submitBtn.disabled = true; // Keep the submit button disabled
                    //show a window alert
                }
            }

            // Event listener for time input changes
            timeInput.addEventListener('change', updateTimeStatus);

            // Initially check
            updateTimeStatus();
        });

        // function sendDateToServer() {
        //     console.log('Sending date to server');
        //     var datePicker = document.getElementById('datePicker');
        //     var date = datePicker.value;
        //     console.log(date);
        //     var array = [
        //         {
        //             "date": date
        //         }
        //     ]

        //     var array = JSON.stringify(array);

        //     var xhr = new XMLHttpRequest();
        //     xhr.open('POST', 'Gymschedule/getDate', true);
        //     xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
        //     xhr.onreadystatechange = function() {
        //         if (xhr.readyState == 4 && xhr.status == 200) {
        //             var response = JSON.parse(xhr.responseText);
        //             if (response.error) {

        //                 console.error(response.error);
        //             } else {
        //             console.log (response);
        //                 console.log('Open Time: ' + response.openTime + ', Close Time: ' + response.closeTime);
        //                 // Optionally, update the UI with these times
        //                 // Example: document.getElementById('displayOpenTime').textContent = 'Open Time: ' + response.openTime;
        //             }
        //         } else {
        //             console.error('Failed to fetch data: ' + xhr.status);
        //         }
        //     };
        //     xhr.send(array);
        // }

        $(document).ready(function() {
            $('.reply-tile').scrollTop(10); // Adjusts initial scroll position slightly to test visibility
        });
    </script>

</body>

</html>