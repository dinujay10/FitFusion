<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Sidebar.css"> 
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/MemberStyles.css"> 

    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarnew.css"> -->
    <!-- <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarfinal.css"> -->
    
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/scheduleAppointRe.css"> -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</head>

<body>

    <!-- //////////////////////////// -->
    <div class="container-left">
        <div class="side-menu">
            <div class="brand-name">
                <h1>FIT FUSION</h1>
            </div>
            <ul>
                <a href="memberdash"><li>&nbsp; <h5>Dashboard</h5> </li></a>
                <a href="memberprofile"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>My Profile</h6> </li></a>
                <a href="taskList"><li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Task List</h6> </li></a>
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Attendance</h6> </li></a>

                <a href="scheduleInstrAppointReq"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Meetings</h6> </li></a>
                <a href="makeComplaint"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Complaints</h6> </li></a>
                <a href="makereviewgym"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Reviews</h6> </li></a>
                <!-- <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Payments</h6></li></a> -->
                <a href="scheduleinterface"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>My schedule</h6></li></a>
                <a href="memberviewmealplan"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Meal Plan</h6> </li></a>
 
                <a href="logout"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Logout</h6> </li></a>

            </ul>
        </div>
    </div>
    <!-- //////////////////////////// -->


    <!-- ADDED THE CONTAINER CLASS -->
    <div class="container-right">

        <div class="container-tabs-bar">
            <div class="tab">
                <a href="scheduleInstrAppointReq"><button class="current-button">Instructor</button></a>
            </div>
            <div class="tab">
                <a href="#"><button>Nutritionist</button></a>
            </div>
        </div>

        <div class="form">
            <form method="POST">
                <div class="form-content">
                    <!-- <p>Choose the Instructor:   </p> -->
                    Choose the Instructor:

                            <select class="select-box" name="InstrName" id="instrname" onchange="sendInstructorAndEnableDate()">
                                <option value="Select an instructor" disabled selected>Instructor</option>
                                <?php 
                                // echo $data['instructorlist'];
                                for($x = 0; $x < count($data['instructorlist']); $x++) {
                                    echo '<option value="' . $data['instructorlist'][$x] . '">' . $data['instructorlist'][$x] . '</option>';
                                }
                                ?>
                            </select>
                </div>
            
                <div class="form-content">
                    <div class="select-container">
                        Choose a date for the Appointment:  
                            <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+1 month')); ?>" onchange="sendDate()" disabled/>
                    </div>
                </div>

                <input type="hidden" name="timeslot" id="timeslot" value="">

                <div class="form-content">
                    <div class="select-container">
                        
                        Choose your time slot:
                        <br>
                        <div id="slot09" class="timeslot" onclick="selectTimeSlot(this)">09:00am</div>
                        <div id="slot10" class="timeslot" onclick="selectTimeSlot(this)">10:00am</div>
                        <div id="slot11" class="timeslot" onclick="selectTimeSlot(this)">11:00am</div>
                        <div id="slot12" class="timeslot" onclick="selectTimeSlot(this)">12:00pm</div>
                        <div id="slot13" class="timeslot" onclick="selectTimeSlot(this)">13:00pm</div>
                        <div id="slot14" class="timeslot" onclick="selectTimeSlot(this)">14:00pm</div>
                        <div id="slot15" class="timeslot" onclick="selectTimeSlot(this)">15:00pm</div>
                        <div id="slot16" class="timeslot" onclick="selectTimeSlot(this)">16:00pm</div>
                        <div id="slot17" class="timeslot" onclick="selectTimeSlot(this)">17:00pm</div>
                    </div>
                </div>


                <div class="form-content">
                    <div class="select-container">
                        Your Name:  
                        <input type="text" id="membername" name="membername"/>
                    </div>
                </div>

                <div class="form-content">
                    <div class="select-container">
                        Your Age:   
                        <input type="text" id="memberage" name="memberage"/>
                    </div>
                </div>

                <div class="form-content">
                    <div class="select-container">
                        Your Goal:
                        <select class="select-box" name="goal" id="goal">
                                <option value="LoseWeight">Lose Weight</option>
                                <option value="GainWeight">Gain Weight</option>
                                <option value="ToneBody">Tone Body</option>
                                <option value="TrainForSport">Training for a Sport</option>
                                <option value="GainMuscles">Gain Muscles</option>
                        </select>
                        <!-- <div class="select-arrow">&#9660;</div> -->
                    </div>
                </div>

                <div class="form-content">
                    <div class="select-container">
                        Mention any illnesses that you have (Ex: Asthma, Scoliosis, etc.):   
                        <input type="text" id="illness" name="illness"/>
                    </div>
                </div>

                <div class="form-content">
                        <center><input type="submit" value="Submit Request"></center>
                </div>
            </form>
            
        
        </div>
    </div>

    <!-- JAVASCRIPT -->

    <script>
        function sendSelectedName() {
            // Get the selected value
            var selectedName = $("#InstrName").val();

            // Send the selected value to the controller using Ajax
            $.ajax({
                type: "POST",
                url: "ScheduleInstrAppointReq.php", // Update with your controller file path
                data: { selectedName: selectedName },
                success: function(response) {
                    // Handle the response from the controller if needed
                    console.log(response);
                }
            });
        }

        var instructorselected = "Dinu";

        function sendInstructorName() {
            var myElement = document.getElementById("instrname");
            var instrname = myElement.value;
            instructorselected = instrname;

            var array = [
                {
                    "instructorname": instrname
                }
            ];

            var array = JSON.stringify(array);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "ScheduleInstrAppointReq/getInstructorName", true);
            xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // alert(xhr.responseText); //sends an alert
                    console.log(xhr.responseText);
                }
            }
            xhr.send(array);
        }

        // var timeslotsArray;
        function sendDate() {
            var myElement = document.getElementById("date");
            var date = myElement.value;

            var array = [
                {
                    "date": date,
                    "instructorname": instructorselected,
                }
            ];

            var array = JSON.stringify(array);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "ScheduleInstrAppointReq/getDate", true);
            xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // alert(xhr.responseText); //sends an alert
                    var timeslotsJson = xhr.responseText;
                    console.log(xhr.responseText);
                    timeslotsArray = JSON.parse(timeslotsJson);

                    // Now, you can use timeslotsArray to display the timeslots in your view
                    // For example:
                    timeslotsArray.forEach(function (slot) {
                        // console.log(slot); // Do whatever you need with the timeslots
                        var slotid =  slot.slice(0, 2);
                        // console.log(slotid);
                        var myElement = document.getElementById("slot"+slotid);
                        myElement.classList.add("disabled");
                    });
                }
            }
            xhr.send(array);
        }

        function enableDate() {
            // Enable the date input when an instructor is selected
            document.getElementById('date').disabled = false;
        }

        function sendInstructorAndEnableDate() {
            sendInstructorName(); // Call the sendInstructorName() function
            enableDate(); // Call the enableDate() function
        }

        var selectedTimeSlot = null;

        function selectTimeSlot(element) {
            // Check if the clicked slot is disabled
            if (element.classList.contains('disabled')) {
                return; // Exit the function if the slot is disabled
            }
            
            // If a time slot was previously selected, remove the 'selected' class
            if (selectedTimeSlot !== null) {
                selectedTimeSlot.classList.remove('selected');
            }

            // Mark the clicked time slot as selected
            element.classList.add('selected');
            selectedTimeSlot = element;

            document.getElementById("timeslot").value = element.textContent;
        }



    </script>


</body>

</html>