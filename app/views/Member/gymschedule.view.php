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
    </style>

</head>

<body>
    <?php
    // echo '<pre>';
    // var_dump($_SESSION);
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

                <div class="welcome-user">
                    Welcome,
                    <?php
                    echo $data['firstname'] . " " . $data['lastname'];
                    ?>
                </div>
            </div>
            <div class="body-content" style="flex-direction: column;">
                <?php if ($data['flag'] == 1) : ?>
                    <div class="content-tile" style="height: 20%; flex-direction: row;">
                        <?php foreach ($data['allmachines'] as $machine) : ?>
                            <div class="machine-container">
                                <div class="machine-name"><?= $machine; ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="content-tile" style="height: 20%; flex-direction: row;">
                        <form class="schedule-form" method="POST" style="height: 40%;">
                            <input class="date-box" type="date" id="datePicker" name="date" min="<?= date('Y-m-d', strtotime('+1 day')) ?>" max="<?= date('Y-m-d', strtotime('+1 month')) ?>" onchange="sendDateToServer()">
                            <label for="timePicker">Choose a time:</label>
                            <input type="time" id="timePicker" name="time" min="00:00" max="23:55" step="300">
                            <button type="submit" class="schedule-submit-button">Submit</button>
                        </form>
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

        function sendDateToServer() {
            var datePicker = document.getElementById('datePicker');
            var date = datePicker.value;

            var array = [
                {
                    "date": date
                }
            ]

            var array = JSON.stringify(array);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'Gymschedule/getDate', true);
            xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.error) {
                        console.error(response.error);
                    } else {
                        console.log('Open Time: ' + response.openTime + ', Close Time: ' + response.closeTime);
                        // Optionally, update the UI with these times
                        // Example: document.getElementById('displayOpenTime').textContent = 'Open Time: ' + response.openTime;
                    }
                } else {
                    console.error('Failed to fetch data: ' + xhr.status);
                }
            };
            xhr.send();
        }
    </script>

</body>

</html>