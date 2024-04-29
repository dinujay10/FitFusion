<!DOCTYPE html>
<html>
<head>
    <title>Workout Plan</title>

    <link rel="stylesheet" type="" href="<?= ROOT ?>/assets/css/Instructor/instr-main-template.css">
    <link rel="stylesheet" type="" href="<?= ROOT ?>/assets/css/Instructor/instr-body-template.css">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        .workout{
       
            background-color:#27496A;
            /* padding-top:40px; */
            width:80vw;
            overflow:auto;
            height:100vh;
            
        }
        .workout body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #5C8EB4;

        }
        .workout h1 {
            text-align: center;
            color: #0C243D;
        }
        .workout h2{
            margin-left:200px;
            color:#0C243D;
        }
        .workout form {
           
            max-width: 600px;
            margin: 0 auto;
            margin-top:40px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         
        }
        .workout fieldset {
            border: none;
            margin-bottom: 20px;
        }
        .workout legend {
            font-size: 1.2em;
            font-weight: bold;
            color: #0C243D;
            margin-bottom: 10px;
        }
        .workout label {
            display: block;
            margin-bottom: 5px;
            color:black;
        }
        .workout input[type="text"],
        input[type="number"],
        select {
            width: 90%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        .workout input[type="submit"],
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .workout input[type="submit"]:hover,
        button:hover {
            background-color: #45a049;
        }
        .workout table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        .workout th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .workout th {
            background-color: #f2f2f2;
        }
        .workout .add-btn {
            display: inline-block;
            background-color: #008CBA;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }
    </style>
 
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

                <a class="side-bar-tile-link" href="instructordash">
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
                <a class="side-bar-tile-link" href="createworkoutplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           Create Workout Plan
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="viewworkoutplans">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           View Workout Plan
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="machinefailure">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                fitness_center
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Machine Failure
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="instructormeetings">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                deployed_code
                            </span>
                        </div>
                        <div class="sb-tab-content">
                        Meetings
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="memberfeed">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                groups
                            </span>
                        </div>
                        <div class="sb-tab-content">
                         Feedbacks
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

<div class="workout">
<div class="body-header">
                <div class="pfp">
                    <!-- LET THE INSTRUCTOR UPLOAD A PFP, OR KEEP A DEFAULT IMAGE -->
                    <img src="#" alt="">
                </div>
                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN INSTRUCTOR'S NAME -->
                    Welcome, InstructorName
                </div>
    </div>
<form action="" method="POST">
    <h2>View Workout Plans</h2>
    <br><br><label for="day">Select Workout Type:</label><br>
    <select id="workouttype" name="workouttype" class="workouttype">
        <?php
        foreach($data['workouttype'] as $x){
            echo'
                <option value="'.$x.'">'.$x.'</option>
            ';
        }
        ?>
    </select>

    <br><br><label for="day">Select Workout Name:</label><br>
    <select id="workoutname" name="workoutname" class="workoutname">
        <option value=""></option>
       
    </select>
    <hr style="color: black;">

    <!-- <input type="submit" value="Select"><br><br> -->
</form>

<form>
    <fieldset>
      <legend>Workout Details</legend>
      <label for="workoutName">Workout Name:</label>
      <input type="text" id="workoutName" name="workoutName"><br>
      
      <label for="workoutType">Workout Type:</label>
      <input type="text" id="workoutType" name="workoutType"><br>
      
      <label for="programDuration">Program Duration:</label>
      <input type="text" id="programDuration" name="programDuration"><br>
      
      <label for="daysPerWeek">Days Per Week:</label>
      <input type="text" id="daysPerWeek" name="daysPerWeek"><br>
      
      <label for="trainingLevel">Training Level:</label>
      <input type="text" id="trainingLevel" name="trainingLevel"><br>
      
      <label for="targetGender">Target Gender:</label>
      <input type="text" id="targetGender" name="targetGender"><br>
    </fieldset>
    
    <fieldset>
      <legend>Exercises</legend>
      <table id="exerciseTable">
        <thead>
          <tr>
            <th>Exercise Name</th>
            <th>Machine</th>
            <th>Sets</th>
            <th>Reps</th>
            <th>Time</th>
            <th>Rest</th>
          </tr>
        </thead>
        <tbody>
          <!-- <tr>
            <td><input type="text" name="exerciseName[]"></td>
            <td><input type="text" name="machine[]"></td>
            <td><input type="text" name="time[]"></td>
            <td><input type="text" name="rest[]"></td>
          </tr> -->
        </tbody>
      </table>
    </fieldset>
    
    <br>
    <a id="link" href="">Assign This Workout To a Member</a>
    
</form>
</div>


<script>
    document.getElementById("workouttype").addEventListener("change", function() {
    var selectedValue = this.value;
    
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    
    // Configure it: GET-request for the URL /your-backend-endpoint
    let baselink = window.location.origin
    let link = `${baselink}/FitFusion/public/viewworkoutplans/selectworkout?selectedValue=`+selectedValue;
    xhr.open('GET', link, true);
    
    // Set up a function to handle the response
    xhr.onload = function() {
        if (xhr.status === 200) {
        // Request was successful
        var responseData = JSON.parse(xhr.responseText);
            //console.log('Response from backend:', responseData);
            
            // Clear existing options
            var selectElement = document.getElementById("workoutname");
            selectElement.innerHTML = "";
            
            // Create new options based on response data
            responseData.forEach(function(optionValue) {
                var option = document.createElement("option");
                option.value = optionValue;
                option.text = optionValue;
                selectElement.appendChild(option);
            });

        
        // You can further process the response here
        } else {
        // Request failed
        console.log('Error sending value to backend');
        }
    };
    
    // Send the request
    xhr.send();
    });


/////////////////////////////////////////////////////////
//////////////////////change in workout name////////////////////

document.getElementById("workoutname").addEventListener("change", function() {
    var selectedValue = this.value;
    
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    
    // Configure it: GET-request for the URL /your-backend-endpoint
    let baselink = window.location.origin
    let link = `${baselink}/FitFusion/public/viewworkoutplans/getworkoutdetails?selectedValue=`+selectedValue;
    xhr.open('GET', link, true);
    
    // Set up a function to handle the response
    xhr.onload = function() {
        if (xhr.status === 200) {
        // Request was successful
        var responseData = JSON.parse(xhr.responseText);
        console.log('Response from backend:', responseData);
              
        // You can further process the response here
        var workoutName = document.getElementById("workoutName");
        workoutName.value = responseData[0]['workoutname'];
        var workoutType = document.getElementById("workoutType");
        workoutType.value = responseData[0]['workouttype'];
        var programDuration = document.getElementById("programDuration");
        programDuration.value = responseData[0]['programduration'];
        var daysPerWeek = document.getElementById("daysPerWeek");
        daysPerWeek.value = responseData[0]['daysperweek'];
        var trainingLevel = document.getElementById("trainingLevel");
        trainingLevel.value = responseData[0]['traininglevel'];
        var targetGender = document.getElementById("targetGender");
        targetGender.value = responseData[0]['targetgender'];
        var link = document.getElementById("link");
        link.href = "assignworkout?id="+responseData[0]['id'];

        const table = document.getElementById("exerciseTable");

        // Remove all rows except the first one (header row)
        const rowCount = table.rows.length;
        for (let i = rowCount - 1; i > 0; i--) {
        table.deleteRow(i);
        }
        //var exercisecount=0;
        responseData.forEach(function(exercise) {
            addExercise(exercise);
            //console.log(number);
            //exercisecount++;
        });
        } else {
        // Request failed
        console.log('Error sending value to backend');
        }
    };
    
    // Send the request
    xhr.send();
    });

    function addExercise(exercise) {
      const table = document.getElementById('exerciseTable').getElementsByTagName('tbody')[0];
      const newRow = table.insertRow(table.rows.length);
      //const cols = 4;
      
      const cell1 = newRow.insertCell(0);
      cell1.innerHTML = exercise['exercise'];
      const cell2 = newRow.insertCell(1);
      cell2.innerHTML = exercise['machine'];
      const cell3 = newRow.insertCell(2);
      cell3.innerHTML = exercise['sets'];
      const cell4 = newRow.insertCell(3);
      cell4.innerHTML = exercise['reps'];
      const cell5 = newRow.insertCell(4);
      cell5.innerHTML = exercise['time'];
      const cell6 = newRow.insertCell(5);
      cell6.innerHTML = exercise['rest'];            
      
    }

</script>
</div>
</body>
</html>
