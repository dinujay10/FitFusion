<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/SelectTimeSlotStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">
</head>
<body>
<div class="main-container">
<div class="side-bar-container">
            <div class="logo-tab">
                FITFUSION
            </div>
            <ul class="side-bar-content">
                
                <!-- <li class="current-side-bar-tile">
                    <div class="sb-tab-content">
                        <span class="material-symbols-outlined">
                            dashboard
                        </span>
                    </div>
                    <div class="sb-tab-content">
                        Dashboard
                    </div>
                </li> -->

                <a class="side-bar-tile-link" href="nutritionistdash">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Dashboard
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="createmealplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           Create Meal Plan
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="nutritionistviewmealplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           View Meal Plan
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                fitness_center
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Meetings
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="nutritionistunavailable">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           Unavailable Times
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                deployed_code
                            </span>
                        </div>
                        <div class="sb-tab-content">
                        Complaints
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="addfooditems">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                groups
                            </span>
                        </div>
                        <div class="sb-tab-content">
                         Add Food Items
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
    <div class="container">
            <div class="body-header">
                <div class="pfp">
                    <!-- LET THE INSTRUCTOR UPLOAD A PFP, OR KEEP A DEFAULT IMAGE -->
                    <img src="#" alt="">
                </div>
                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN INSTRUCTOR'S NAME -->
                    Welcome, Nutritionist
                </div>
            </div>
            <div class="main-slot">
                <h1>Select Your Unavailable Time Slots</h1>
                <div class="dateslot">
                    <input type="date">
                </div>
                <div class="timeslots">
                    <div class="timeslot" id="t9">
                        <b>09:00am</b>
                    </div>
                    <div class="timeslot" id="t10">
                        <b>10:00am</b>
                    </div>
                    <div class="timeslot" id="t11">
                        <b>11:00am</b>
                    </div>
                    <div class="timeslot" id="t12">
                        <b>12:00am</b>
                    </div>
                    <div class="timeslot" id="t13">
                        <b>13:00am</b>
                    </div>
                    <div class="timeslot" id="t14">
                        <b>14:00am</b>
                    </div>
                    <div class="timeslot" id="t15">
                        <b>15:00am</b>
                    </div>
                    <div class="timeslot" id="t16">
                        <b>16:00am</b>
                    </div>
                    <div class="timeslot" id="t17">
                        <b>17:00am</b>
                    </div>
                </div>
                <button>Submit</button>
            </div>
            <div id="popupMessage" class="popup-message"></div>


    </div>
    <script src="<?=ROOT?>/assets/js/replymembercomplaint.js"></script>
    <script>
 
        function toggleSelection(timeSlot) {
            timeSlot.classList.toggle('selected');
        }

        function handleSubmit() {
    
            const selectedDate = document.querySelector('.dateslot input[type="date"]').value;

            const selectedSlots = document.querySelectorAll('.timeslot.selected');

            const selectedTimes = Array.from(selectedSlots).map(slot => slot.textContent.trim());

            const formData = {
                date: selectedDate,
                timeslots: selectedTimes
            };

            let baselink = window.location.origin
            let link = `${baselink}/FitFusion/public/nutritionistunavailable/submitslots`;
            const xhr = new XMLHttpRequest();
            // const url = link; 

            const data = JSON.stringify(formData);
            //console.log(data);

            xhr.open('POST', link, true);
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 300) {
                    showPopupMessage('Data submitted successfully!', 'success');
                    // var responseData = JSON.parse(xhr.responseText);
                    // console.log('Response from backend:', responseData);
                } else {
                    showPopupMessage('Failed to submit data. Please try again later.', 'error');
                    console.error('Failed to send data:', xhr.statusText);
                }
            };

            xhr.onerror = function () {
                console.error('Failed to send data');
            };

            // Send the request
            xhr.send(data);
        }



        // Add event listeners to all time slots
        document.querySelectorAll('.timeslot').forEach(slot => {
            slot.addEventListener('click', () => toggleSelection(slot));
        });

        // Add event listener to the submit button
        document.querySelector('button').addEventListener('click', handleSubmit);

        function showPopupMessage(message, type) {
            const popupMessage = document.getElementById('popupMessage');
            popupMessage.textContent = message;
            popupMessage.classList.add(type); // Add CSS class based on message type
            popupMessage.style.display = 'block'; // Show the popup message

            // Hide the popup message after 3 seconds (adjust as needed)
            setTimeout(() => {
                popupMessage.style.display = 'none';
                popupMessage.classList.remove(type); // Remove CSS class
            }, 6000);
        }

    </script>

</div>
</body>
</html>