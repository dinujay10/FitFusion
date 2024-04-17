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
            flex-direction:column;
            margin-bottom: 10px;
        }
        .food{
            display:flex;
            flex=direction:row;
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
 
</head>
<body>

<h2>View Your Meal Plan</h2>
<form action="" method="POST">
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
    <input type="submit" value="Select"><br><br>
</form>

<form action="" method="">
   
    <label for="planname">Meal Plan Name:</label><br>
    <input type="text" name="planname" placeholder="Meal Plan Name" value=<?php if(!empty($data)){echo $data[0]->mealplanname;} ?>><br><br>

    <label for="breakfast">Breakfast:</label><br><br>
    <div id="breakfast-container">
        <!-- Initial input fields for breakfast -->
        <label for="Food Item">Food Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="Quantity">Quantity:</label>  
        <div class="food-item">
            <?php
            if(!empty($data)){
                foreach($data as $row){
                    if($row->mealtime=="breakfast"){
                        echo '
                        <div class="food">
                            <input type="text" name="breakfast_name[]" placeholder="Food item" value="' . $row->mealitem . '">
                            <input type="text" name="breakfast_quantity[]" placeholder="Quantity" value="' . $row->quantity . '">
                       </div>';
                    }
                }
            }
            
            ?>
            
        </div>

    </div>
   

    <label for="snack1">Snack 1:</label><br><br>
    <div id="snack1-container">
        <!-- Initial input fields for snack1 -->
        <label for="Food Item">Food Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="Quantity">Quantity:</label>  
        <div class="food-item">
        <?php
        if(!empty($data)){
            foreach($data as $row){
                if($row->mealtime=="snack1"){
                    echo '
                    <div class="food">
                        <input type="text" name="snack1_name[]" placeholder="Food item" value="' . $row->mealitem . '">
                        <input type="text" name="snack1_quantity[]" placeholder="Quantity" value="' . $row->quantity . '">
                   </div>';
                }
            }
        }

            ?>
        </div>
    </div>
   

    <label for="lunch">Lunch:</label><br><br>
    <div id="lunch-container">
        <!-- Initial input fields for lunch -->
        <label for="Food Item">Food Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="Quantity">Quantity:</label>  
        <div class="food-item">
        <?php
        if(!empty($data)){
            foreach($data as $row){
                if($row->mealtime=="lunch"){
                    echo '
                    <div class="food">
                        <input type="text" name="lunch_name[]" placeholder="Food item" value="' . $row->mealitem . '">
                        <input type="text" name="lunch_quantity[]" placeholder="Quantity" value="' . $row->quantity . '">
                   </div>';
                }
            }
        }

            ?>
        </div>
    </div>
    

    <label for="snack2">Snack 2:</label><br><br>
    <div id="snack2-container">
        <!-- Initial input fields for snack2 -->
        <label for="Food Item">Food Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="Quantity">Quantity:</label>  
        <div class="food-item">
        <?php
        if(!empty($data)){
            foreach($data as $row){
                if($row->mealtime=="snack2"){
                    echo '
                    <div class="food">
                        <input type="text" name="snack2_name[]" placeholder="Food item" value="' . $row->mealitem . '">
                        <input type="text" name="snack2_quantity[]" placeholder="Quantity" value="' . $row->quantity . '">
                   </div>';
                }
            }
        }

            ?>
        </div>
    </div>
    

    <label for="dinner">Dinner:</label><br><br>
    <div id="dinner-container">
        <!-- Initial input fields for dinner -->
        <label for="Food Item">Food Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="Quantity">Quantity:</label>  
        <div class="food-item">
        <?php
        if(!empty($data)){
            foreach($data as $row){
                if($row->mealtime=="dinner"){
                    echo '
                    <div class="food">
                        <input type="text" name="dinner_name[]" placeholder="Food item" value="' . $row->mealitem . '">
                        <input type="text" name="dinner_quantity[]" placeholder="Quantity" value="' . $row->quantity . '">
                   </div>';
                }
            }
        }

            ?>
        </div>
    </div>
    

</form>

</body>
</html>
