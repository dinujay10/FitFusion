<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Workout Plan</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/CreatedworkoutplansStyle.css">
    <style>
        /* Add CSS styles for the buttons */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        nav {
            padding: 20px;
            background-color: orange;
            width: 100%;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo p {
            font-size: 30px;
            font-weight: bold;
            color: black;
            text-transform: uppercase;
            cursor: pointer;
            margin: 0;
        }

        ul {
            list-style: none;
            display: flex;
            align-items: center;
        }

        li {
            margin-right: 20px;
        }

        li a {
            font-size: 16px;
            color: black;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        li a:hover {
            color: white;
        }

        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            width: 70%;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }

        h1 {
            margin-bottom: 30px;
            color: #333;
            font-size: 28px;
        }

        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }

        input[type="text"],
        select,
        button {
            width: 60%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        select {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"><path d="M7 10l5 5 5-5z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px top 50%;
            background-size: 18px auto;
            padding-right: 30px;
        }

        button[type="submit"] {
            margin-top: 20px;
            margin-left: 700px;
            width: 20%;
            background-color: grey;
            color: #fff;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: orange;
        }

        input[type="time"],
        select {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"],
        select {
            width: 70%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select[id="workout_type"] {
            width: 70%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .add-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-bottom: 20px;
            cursor: pointer;
            width: 5%;
            margin-left: 900px;
        }

        .add-row-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <p>FitFusion</p>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">AboutUs</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="login">Logout</a></li>
        </ul>
    </nav>

    <form id="workoutForm" method="POST">
        <h1>Create Workout Plan</h1>


        <label for="workout_id"><b>workout id:</b></label>
        <input type="text" id="workout_id" name="workout_id" required>

        <label for="main_goal"><b>Main Goal:</b></label>
        <input type="text" id="main_goal" name="main_goal" required>

        <label for="workout_Type"><b>Workout Type:</b></label>
        <select id="workout_Type" name="workout_Type" required>
            <option value="cardio">Cardio</option>
            <option value="strength">Strength Training</option>
            <option value="flexibility">Flexibility</option>
            <option value="other">Other</option>
        </select>

        <label for="training_level"><b>Training Level:</b></label>
        <select id="training_level" name="training_level" required>
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select>

        <label for="program_duration"><b>Program Duration:</b></label>
        <input type="text" id="program_duration" name="program_duration" required>

        <label for="days_per_week"><b>Days per week:</b></label>
        <input type="text" id="days_per_week" name="days_per_week" required>

        <label for="target_gender"><b>Target Gender:</b></label>
        <input type="text" id="target_gender" name="target_gender" required>

        <label for="supplements"><b>Recommended Supps:</b></label>
        <div style="display: flex; gap: 20px;">
            <div>
                <input type="checkbox" id="protein" name="supplements[]" value="protein">
                <label for="protein">Protein Powder</label>
            </div>
            <div>
                <input type="checkbox" id="creatine" name="supplements[]" value="creatine">
                <label for="creatine">Creatine</label>
            </div>
            <div>
                <input type="checkbox" id="bcaa" name="supplements[]" value="bcaa">
                <label for="bcaa">BCAA</label>
            </div>
            <div>
                <input type="checkbox" id="multivitamin" name="supplements[]" value="multivitamin">
                <label for="multivitamin">Multivitamin</label>
            </div>
        </div>

        <?php if (isset($data['errors'])): ?>
            <div style="color: red;"><?php echo $data['errors']; ?></div>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>Exercise</th>
                    <th>Machine</th>
                    <th>Sets</th>
                    <th>Time(mins)</th>
                    <th>Rest Time(mins)</th>
                </tr>
            </thead>
            <tbody>
                <label for="exercises"><b>Exercises:</b></label>
                <tr>

                    <td>
                        <select name="exercises[0][exercise]">
                            <option value="">Select exercise...</option>
                            <option value="pushups">Pushups</option>
                            <option value="squats">Squats</option>
                            <option value="plank">Plank</option>
                            <option value="lunges">Lunges</option>
                            <option value="deadlifts">Deadlifts</option>
                            <option value="burpees">Burpees</option>
                            <!-- Add more exercise options as needed -->
                        </select>
                    </td>
                    <td>
                        <select name="exercises[0][machine]">
                            <option value="">Select machine...</option>
                            <option value="1">Treadmill</option>
                            <option value="2">Bench Press</option>
                            <option value="3">Exercise Bike</option>
                            <option value="4">Leg Press Machine</option>
                            <option value="5">Rowing Machine</option>
                        </select>
                    </td>
                    <td>
                        <select name="exercises[0][sets]">
                            <option value="">Select sets...</option>
                            <option value="1">1 set</option>
                            <option value="2">2 sets</option>
                            <option value="3">3 sets</option>
                            <option value="4">4 sets</option>
                            <option value="5">5 sets</option>
                        </select>
                    </td>
                    <td>
                        <input type="int" name="exercises[0][time]">
                    </td>
                    <td>
                        <input type="int" name="exercises[0][rest_time]">
                    </td>
                </tr>

                <tr>
                    <td>
                        <select name="exercises[1][exercise]">
                            <option value="">Select exercise...</option>
                            <option value="pushups">Pushups</option>
                            <option value="squats">Squats</option>
                            <option value="plank">Plank</option>
                            <option value="lunges">Lunges</option>
                            <option value="deadlifts">Deadlifts</option>
                            <option value="burpees">Burpees</option>
                            <!-- Add more exercise options as needed -->
                        </select>
                    </td>
                    <td>
                        <select name="exercises[1][machine]">
                            <option value="">Select machine...</option>
                            <option value="1">Treadmill</option>
                            <option value="2">Bench Press</option>
                            <option value="3">Exercise Bike</option>
                            <option value="4">Leg Press Machine</option>
                            <option value="5">Rowing Machine</option>
                            <!-- Add more set options as needed -->
                        </select>
                    </td>
                    <td>
                        <select name="exercises[1][sets]">
                            <option value="">Select sets...</option>
                            <option value="1">1 set</option>
                            <option value="2">2 sets</option>
                            <option value="3">3 sets</option>
                            <option value="4">4 sets</option>
                            <option value="5">5 sets</option>
                            <!-- Add more set options as needed -->
                        </select>
                    </td>
                    <td>
                        <input type="int" name="exercises[1][time]">
                    </td>
                    <td>
                        <input type="int" name="exercises[1][rest_time]">
                    </td>
                </tr>

                <tr>
                    <td>
                        <select name="exercises[2][exercise]">
                            <option value="pushups">Pushups</option>
                            <option value="squats">Squats</option>
                            <option value="plank">Plank</option>
                            <option value="lunges">Lunges</option>
                            <option value="deadlifts">Deadlifts</option>
                            <option value="burpees">Burpees</option>
                            <!-- Add more exercise options as needed -->
                        </select>
                    </td>
                    <td>
                        <select name="exercises[2][machine]">
                            <option value="">Select machine...</option>
                            <option value="1">Treadmill</option>
                            <option value="2">Bench Press</option>
                            <option value="3">Exercise Bike</option>
                            <option value="4">Leg Press Machine</option>
                            <option value="5">Rowing Machine</option>
                            <!-- Add more set options as needed -->
                        </select>
                    </td>
                    <td>
                        <select name="exercises[2][sets]">
                            <option value="">Select sets...</option>
                            <option value="1">1 set</option>
                            <option value="2">2 sets</option>
                            <option value="3">3 sets</option>
                            <option value="4">4 sets</option>
                            <option value="5">5 sets</option>
                            <!-- Add more set options as needed -->
                        </select>
                    </td>
                    <td>
                        <input type="int" name="exercises[2][time]">
                    </td>
                    <td>
                        <input type="int" name="exercises[2][rest_time]">
                    </td>
                </tr>
                <!-- Add more rows for additional exercises -->
            </tbody>
        </table>



        <button class="add-btn" onclick="duplicateRow()">ADD</button>
        <button type="submit"><b>Create</b></button>
    </form>
    <script>
        function duplicateRow() {
            // Check if elements exist before using them
            const originalRow = document.getElementById('templateRow'); // Assuming the ID is changed
            const container = document.getElementById('cloned-rows-container');
            if (!originalRow || !container) {
                console.error("Error: Missing elements for row duplication");
                return;
            }

            const clonedRow = originalRow.cloneNode(true);

            // Clear the content of input boxes
            clonedRow.querySelectorAll('.input-box').forEach(function (input) {
                input.value = '';
            });

            // Reset selection state for checkboxes/radio buttons (if needed)
            clonedRow.querySelectorAll('input[type="checkbox"], input[type="radio"]')
                .forEach(input => input.checked = false);

            // Optionally copy event listeners from original row (if needed)

            // Append the cloned row to the container
            container.appendChild(clonedRow);
        }
    </script>


</body>

</html>