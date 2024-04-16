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
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Logout</h6> </li></a>

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
                <a href="scheduleNutriAppointReq"><button>Nutritionist</button></a>
            </div>
        </div>

        <div class="form">
            <form method="POST">
                <div class="form-content">
                    <!-- <p>Choose the Instructor:   </p> -->
                    Choose the Instructor:

                        <!-- <div class="select-container"> -->
                            <select class="select-box" name="InstrName" id="InstrName" onchange="sendSelectedInstructor()">
                                <?php 
                                    // echo $data['instructorlist'];
                                    for($x = 0; $x < count($data['instructorlist']); $x++) {
                                        echo '<option value="instructor">' . $data['instructorlist'][$x] . '</option>';
                                    }
                                ?>
                            </select>

                            <!-- <div class="select-arrow">&#9660;</div> -->
                            <!-- no need??? -->
                            <!-- <ul class="select-dropdown">
                                <li class="select-option">Option 1</li>
                                <li class="select-option">Option 2</li>
                                <li class="select-option">Option 3</li>
                            </ul> -->

                        <!-- </div> -->
                </div>
            
                <div class="form-content">
                    <div class="select-container">
                        Choose a date for the Appointment:  
                        <input type="date" id="date" name="date" value="2023-12-10" min="2023-12-10" max="2024-12-31" />
                    </div>
                </div>
            
                <!-- <div class="form-item">
                    <p>Choose the type of appointment that you are planning to have</p>
                        <select name="appointType" id="appointType">
                            <option value="initial">Initial Meeting</option>
                            <option value="progress">Progress Meeting</option>
                        </select>
                </div> -->

                <div class="form-content">
                    <div class="select-container">
                        Choose your time slot:
                            <br/>
                        <div class="timeslot">09:00am</div>
                        <div class="timeslot">10:00am</div>
                        <div class="timeslot">11:00am</div>
                        <div class="timeslot">12:00pm</div>
                        <div class="timeslot">13:00pm</div>
                        <div class="timeslot">14:00pm</div>
                        <div class="timeslot">15:00pm</div>
                        <div class="timeslot">16:00pm</div>
                        <div class="timeslot">17:00pm</div>


                        <!-- <select class="select-box" name="timeslot" id="timeslot">
                                <option value="Time Slot 1">Time Slot 1</option>
                                <option value="Time Slot 2">Time Slot 2</option>
                        </select> -->
                        <!-- <div class="select-arrow">&#9660;</div> -->
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
    <!-- <script>
        function sendSelectedInstructor() {
            // Get the selected value
            var selectedInstructor = document.getElementById("InstrName").value;

            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure it: POST-request for the URL /your_controller.php
            xhr.open("POST", "ScheduleInstrAppointReq.php", true);

            // Set the request header
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            // Send the request with the selected name
            xhr.send("selectedInstr=" + selectedInstr);

            // This function will be called after the response is received
            xhr.onload = function () {
                if (xhr.status == 200) {
                    // Handle the response from the controller if needed
                    console.log(xhr.responseText);
                }
            };
        }
    </script> -->

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
    </script>


</body>

</html>