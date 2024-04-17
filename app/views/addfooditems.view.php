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
            inputName.name = 'item_name[]';
            inputName.placeholder = 'Food item';

            inputQuantity.type = 'number';
            inputQuantity.name = "calories[]";
            inputQuantity.placeholder = 'Quantity';

            foodItemWrapper.appendChild(inputName);
            foodItemWrapper.appendChild(inputQuantity);
            container.appendChild(foodItemWrapper);
        }
    </script>
</head>
<body>

<h2>Add Food Items</h2>

<form action="" method="post">

    <div id="breakfast-container">
        <div class="food-item">
            <input type="text" name="item_name[]" placeholder="Food item">
            <input type="number" name="calories[]" placeholder="Calories">
        </div>
    </div>
    <button type="button" onclick="addFoodItem('breakfast')">Add Food Item</button><br><br>

    
    <input type="submit" value="Submit">
</form>

</body>
</html>
