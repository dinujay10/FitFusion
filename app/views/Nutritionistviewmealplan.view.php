<!DOCTYPE html>
<html>
<head>
    <title>Meal Plan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
           
        }

        .meal{
            background-color:#27496A;
            height:100vh;
            width:80vw;
            overflow:auto;
        }

        .meal h2 {
            text-align: center;
            color: white;
            padding-top:10px;
            padding-bottom:30px;
            margin-left:75px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            margin-left:300px;
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
            flex-direction:row;
        }

        .food-item input[type="text"],
        .food-item input[type="number"],select,input {
            width: calc(50% - 10px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin:7px;
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
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
 
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

                <a class="side-bar-tile-link" href="nutritionistmeetings">
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
<div class="meal">
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
<h2>View Member Meal Plan</h2>
<form action="" method="POST">
    <!-- <label for="day">Select Day:</label><br>
    <select id="day" name="day" class="day">
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wendsday">Wendsday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
    </select> -->
    <br><br><label for="day">Select Email:</label><br>
    <select id="email" name="email" class="email">
        <?php
        foreach($data['members'] as $x){
            echo'
                <option value="'.$x.'">'.$x.'</option>
            ';
        }
        ?>
    </select>

    <input type="submit" value="Select"><br><br>
</form>
<?php
if(!empty($data['mealplandetails'])){


echo '
<form action="" method="">
   
    <label for="planname">Meal Plan Name:</label><br>
    <input type="text" name="planname" placeholder="Meal Plan Name" value='.$data['mealplandetails'][0]->mealplanname.' disabled><br><br>

    <label for="breakfast">Breakfast:</label><br><br>
    <div id="breakfast-container">
        <!-- Initial input fields for breakfast -->
        <label for="Food Item">Food Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="Quantity">Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
        <label for="Calories">Calories:</label>
        <div class="food-item">
          ';
            if(!empty($data['mealplandetails'])){
                foreach($data['mealplandetails'] as $row){
                    if($row->mealtime=="breakfast"){
                        echo '
                        <div class="food">
                            <input type="text" name="breakfast_name[]" placeholder="Food item" value="' . $row->mealitem . '" disabled>
                            <input type="text" name="breakfast_quantity[]" placeholder="Quantity" value="' . $row->quantity . '" disabled>
                            <input type="text" name="breakfast_calories[]" placeholder="Calories" value="' . $row->calories . '" disabled>
                       </div>';
                    }
                }
            }
            
            echo '
            
        </div>

    </div>
   

    <label for="snack1">Snack 1:</label><br><br>
    <div id="snack1-container">
        <!-- Initial input fields for snack1 -->
        <label for="Food Item">Food Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="Quantity">Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
        <label for="Calories">Calories:</label>
        <div class="food-item">
        ';
        if(!empty($data['mealplandetails'])){
            foreach($data['mealplandetails'] as $row){
                if($row->mealtime=="snack1"){
                    echo '
                    <div class="food">
                        <input type="text" name="snack1_name[]" placeholder="Food item" value="' . $row->mealitem . '" disabled>
                        <input type="text" name="snack1_quantity[]" placeholder="Quantity" value="' . $row->quantity . '" disabled>
                        <input type="text" name="snack1_calories[]" placeholder="Calories" value="' . $row->calories . '" disabled>
                   </div>';
                }
            }
        }

         echo'
        </div>
    </div>
   

    <label for="lunch">Lunch:</label><br><br>
    <div id="lunch-container">
        <!-- Initial input fields for lunch -->
        <label for="Food Item">Food Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="Quantity">Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
        <label for="Calories">Calories:</label>
        <div class="food-item">
        ';
       
        if(!empty($data['mealplandetails'])){
            foreach($data['mealplandetails'] as $row){
                if($row->mealtime=="lunch"){
                    echo '
                    <div class="food">
                        <input type="text" name="lunch_name[]" placeholder="Food item" value="' . $row->mealitem . '" disabled>
                        <input type="text" name="lunch_quantity[]" placeholder="Quantity" value="' . $row->quantity . '" disabled>
                        <input type="text" name="lunch_calories[]" placeholder="Calories" value="' . $row->calories . '" disabled>
                   </div>';
                }
            }
        }

           echo '
        </div>
    </div>
    

    <label for="snack2">Snack 2:</label><br><br>
    <div id="snack2-container">
        <!-- Initial input fields for snack2 -->
        <label for="Food Item">Food Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="Quantity">Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
        <label for="Calories">Calories:</label>
        <div class="food-item">
        ';
    
        if(!empty($data['mealplandetails'])){
            foreach($data['mealplandetails'] as $row){
                if($row->mealtime=="snack2"){
                    echo '
                    <div class="food">
                        <input type="text" name="snack2_name[]" placeholder="Food item" value="' . $row->mealitem . '" disabled>
                        <input type="text" name="snack2_quantity[]" placeholder="Quantity" value="' . $row->quantity . '" disabled>
                        <input type="text" name="snack2_calories[]" placeholder="Calories" value="' . $row->calories . '" disabled>
                   </div>';
                }
            }
        }

           echo '
        </div>
    </div>
    

    <label for="dinner">Dinner:</label><br><br>
    <div id="dinner-container">
        <!-- Initial input fields for dinner -->
        <label for="Food Item">Food Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <label for="Quantity">Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
        <label for="Calories">Calories:</label>
        <div class="food-item">
        ';
        if(!empty($data['mealplandetails'])){
            foreach($data['mealplandetails'] as $row){
                if($row->mealtime=="dinner"){
                    echo '
                    <div class="food">
                        <input type="text" name="dinner_name[]" placeholder="Food item" value="' . $row->mealitem . '" disabled>
                        <input type="text" name="dinner_quantity[]" placeholder="Quantity" value="' . $row->quantity . '" disabled>
                        <input type="text" name="dinner_calories[]" placeholder="Calories" value="' . $row->calories . '" disabled>
                   </div>';
                }
            }
        }

           echo '
        </div>
    </div>
    

</form>';
}
?>

</div>
</div>
</body>
</html>
