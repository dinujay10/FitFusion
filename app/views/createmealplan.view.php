<!DOCTYPE html>
<html>
<head>
    <title>Meal Plan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        .food-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .food-item input[type="text"],
        .food-item input[type="number"],select,input {
            width: calc(50% - 10px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .food-item input[type="number"] {
            margin-left: 10px;
        }

        button[type="button"], input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button[type="button"]:hover, input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        // JavaScript function to dynamically add input fields for food items and quantities
        function addFoodItem(mealTime) {
            var container = document.getElementById(mealTime + '-container');
            var foodItemWrapper = document.createElement('div');
            foodItemWrapper.classList.add('food-item');
            
            var inputName = document.createElement('input');
            var inputQuantity = document.createElement('input');

            inputName.type = 'text';
            inputName.name = mealTime + '_name[]';
            inputName.placeholder = 'Food item';

            inputQuantity.type = 'text';
            inputQuantity.name = mealTime + '_quantity[]';
            inputQuantity.placeholder = 'Quantity';

            foodItemWrapper.appendChild(inputName);
            foodItemWrapper.appendChild(inputQuantity);
            container.appendChild(foodItemWrapper);
        }
    </script>
</head>
<body>

<h2>Create Your Meal Plan</h2>

<form action="" method="post">
    <label for="mememail">Select Member:</label><br>
    <select id="mememail" name="mememail" class="mememail">
        <?php
        foreach ($data['mememail'] as $mememail) {
            echo "<option value=\"$mememail\">$mememail</option>";
        }
        ?>
    </select>
    <br><br>

    <label for="planname">Meal Plan Name:</label><br>
    <input type="text" name="planname" placeholder="Meal Plan Name"><br><br>

    <label for="day">Select Day:</label><br>
    <select id="day" name="day" class="day">
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wendsday">Wendsday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
    </select>
    <br><br>

    <label for="breakfast">Breakfast:</label><br>
    <div id="breakfast-container">
        <!-- Initial input fields for breakfast -->
        <div class="food-item">
            <input type="text" name="breakfast_name[]" placeholder="Food item">
            <input type="text" name="breakfast_quantity[]" placeholder="Quantity">
        </div>
    </div>
    <button type="button" onclick="addFoodItem('breakfast')">Add Food Item</button><br><br>

    <label for="snack1">Snack 1:</label><br>
    <div id="snack1-container">
        <!-- Initial input fields for snack1 -->
        <div class="food-item">
            <input type="text" name="snack1_name[]" placeholder="Food item">
            <input type="text" name="snack1_quantity[]" placeholder="Quantity">
        </div>
    </div>
    <button type="button" onclick="addFoodItem('snack1')">Add Food Item</button><br><br>

    <label for="lunch">Lunch:</label><br>
    <div id="lunch-container">
        <!-- Initial input fields for lunch -->
        <div class="food-item">
            <input type="text" name="lunch_name[]" placeholder="Food item">
            <input type="text" name="lunch_quantity[]" placeholder="Quantity">
        </div>
    </div>
    <button type="button" onclick="addFoodItem('lunch')">Add Food Item</button><br><br>

    <label for="snack2">Snack 2:</label><br>
    <div id="snack2-container">
        <!-- Initial input fields for snack2 -->
        <div class="food-item">
            <input type="text" name="snack2_name[]" placeholder="Food item">
            <input type="text" name="snack2_quantity[]" placeholder="Quantity">
        </div>
    </div>
    <button type="button" onclick="addFoodItem('snack2')">Add Food Item</button><br><br>

    <label for="dinner">Dinner:</label><br>
    <div id="dinner-container">
        <!-- Initial input fields for dinner -->
        <div class="food-item">
            <input type="text" name="dinner_name[]" placeholder="Food item">
            <input type="text" name="dinner_quantity[]" placeholder="Quantity">
        </div>
    </div>
    <button type="button" onclick="addFoodItem('dinner')">Add Food Item</button><br><br>
    <!-- Add similar sections for other meal times -->

    <input type="submit" value="Submit">
</form>

</body>
</html>
