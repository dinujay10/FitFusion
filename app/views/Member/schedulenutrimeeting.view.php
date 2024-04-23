<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Main/main-styles.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Member/before-db-styles.css">
    <!-- <link rel="stylesheet" type="" href="../css/Main/main-styles.css"> -->
    
    <style>
        

    </style>

</head>
<body>
    <div class="common-template">
        <div class="common-header">
            <div class="common-logo-tab">
                FITFUSION
            </div>
            <div class="common-heading-bar">
                <div class="current-tab">Nutritionist Meeting</div>
                <div class="next-tab">Next Up : Go To Account</div>
            </div>
        </div>
        <div class="common-body">
            <form class="form-tile" method="POST" style="height: 95%;">
                <div class="form-tile-content">
                    <div class="form-tab-bar">
                        <div class="form-heading">Schedule Nutriotnist Meeting</div>
                    </div>
                    <hr class="form-divider">
                    <div class="form-content">
                        <div class="form-content-bar">
                            <div class="form-content-bar-value">Choose Nutritionist:</div>
                            <div class="form-content-bar-value">
                                <select class="select-box-meetings" name="NutriName" id="nutriname" onchange="sendNutritionistAndEnableDate()">
                                    <option value="Select a nutritionist" disabled selected>Nutritionist</option>
                                    <?php 
                                    // echo $data['nutritionistlist'];
                                    for($x = 0; $x < count($data['nutritionistlist']); $x++) {
                                        echo '<option value="' . $data['nutritionistlist'][$x] . '">' . $data['nutritionistlist'][$x] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-content-bar">
                            <div class="form-content-bar-value">Choose Date:</div>
                            <div class="form-content-bar-value">
                                <input class="date-box" type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+1 month')); ?>" onchange="sendDateAndEnableTImeslot()" disabled/>
                            </div>
                        </div>
                        <input type="hidden" id="timeslot" name="timeslot" value="">
                        <div class="form-content-timeslot-bar" id="timeslot-bar">
                            <div id="slot09" class="timeslot disabled" onclick="selectTimeSlot(this)">09:00am</div>
                            <div id="slot10" class="timeslot disabled" onclick="selectTimeSlot(this)">10:00am</div>
                            <div id="slot11" class="timeslot disabled" onclick="selectTimeSlot(this)">11:00am</div>
                            <div id="slot12" class="timeslot disabled" onclick="selectTimeSlot(this)">12:00pm</div>
                            <div id="slot13" class="timeslot disabled" onclick="selectTimeSlot(this)">13:00pm</div>
                            <div id="slot14" class="timeslot disabled" onclick="selectTimeSlot(this)">14:00pm</div>
                            <div id="slot15" class="timeslot disabled" onclick="selectTimeSlot(this)">15:00pm</div>
                            <div id="slot16" class="timeslot disabled" onclick="selectTimeSlot(this)">16:00pm</div>
                            <div id="slot17" class="timeslot disabled" onclick="selectTimeSlot(this)">17:00pm</div>
                        </div>
                        <div class="form-content-bar">
                            <div class="form-content-bar-value">Your Name:</div>
                            <div class="form-content-bar-value">
                                <input class="input-box" type="text" id="membername" name="membername">
                            </div>
                        </div>
                        <div class="form-content-bar">
                            <div class="form-content-bar-value">Your Age:</div>
                            <div class="form-content-bar-value">
                                <input class="input-box" type="text" id="memberage" name="memberage">
                            </div>
                        </div>
                        <div class="form-content-bar">
                            <div class="form-content-bar-value">Your Height:</div>
                            <div class="form-content-bar-value">
                                <input class="input-box" type="text" id="height" name="height">
                            </div>
                        </div>
                        <div class="form-content-bar">
                            <div class="form-content-bar-value">Your Weight:</div>
                            <div class="form-content-bar-value">
                                <input class="input-box" type="text" id="weight" name="weight">
                            </div>
                        </div>
                        <div class="form-content-bar">
                            <div class="form-content-bar-value">Any Food Allergies:</div>
                            <div class="form-content-bar-value">
                                <input class="input-box" type="text" id="allergies" name="allergies">
                            </div>
                        </div>
                        <div class="form-content-bar">
                            <input class="submit-button" type="submit" value="Schedule Meeting" onclick="meetingAlert()">
                        </div>
                    </div>
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

        var nutritionistselected = "Dinu";

        function sendNutritionistName() {
            var myElement = document.getElementById("nutriname");
            var nutriname = myElement.value;
            nutritionistselected = nutriname;

            var array = [
                {
                    "nutritionistname": nutriname
                }
            ];

            var array = JSON.stringify(array);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "Schedulenutrimeeting/getNutritionistName", true);
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
                    "nutritionistname": nutritionistselected,
                }
            ];

            var array = JSON.stringify(array);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "Schedulenutrimeeting/getDate", true);
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

        function sendNutritionistAndEnableDate() {
            sendNutritionistName(); // Call the sendInstructorName() function
            enableDate(); // Call the enableDate() function
        }

        function enableTimeslot() {
            // Enable the date input when an instructor is selected
            var timeslots = document.getElementsByClassName('timeslot');
            for (var i = 0; i < timeslots.length; i++) {
                timeslots[i].classList.remove('disabled');
            }
        }

        function sendDateAndEnableTImeslot() {
            sendDate(); 
            enableTimeslot(); 
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

            document.getElementById("timeslot").value = element.textContent.trim();
        }

        function meetingAlert() {
            alert("Meeting Scheduled!");
        }

    </script>
</body>
</html>