<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/AddGymStyle.css">
</head>
<body>
    <nav>
            <div class = "logo">
                <p>FitFusion</p>
            </div>

            <ul>
                <li><a href ="#">Home</a></li>
                <li><a href ="#">AboutUs</a></li>
                <li><a href ="#">Services</a></li>
                <li><a href ="login">Logout</a></li>
            </ul>
    </nav>
    <form method="POST" enctype="multipart/form-data">
        <?php if(!empty($errors)):?>
        <div class="alert">
            <?= implode("<br>", $errors)?>
        </div>
        <?php endif ;?>
        <div class="title">
            <h5>Add a Gym</h5>
        </div>
        <div class="nameAndEmail">
            <div class="inputBx">
                <span>Gym Name</span>
                <input type="text" name="gymName" id="gymName" required>
            </div>
            <div class="inputBx">
                <span>Gym Email</span>
                <input type="email" name="email" id="email" required>         
            </div>
        </div>
        <input type="hidden" name="manageremail" id="manageremail" value="<?= $_SESSION['email']?>">
        
        <div class="inputBx">
            <span>Description</span>
            <textarea name="description" id="description" cols="50" rows="7"></textarea>
            
        </div>
        <div class="inputBx">
            <span>Location</span>
            <input type="text" name="location1" id="location1" placeholder="first line" required>
            <input type="text" name="location2" id="location2" placeholder="second line" required>
            <input type="text" name="location3" id="location3" placeholder="third line" required>
        </div>
        <div class="openhours">
            <span>Open Hours</span><br><br>
            <span>Weekdays</span>
            <span>From</span>
            <input type="time" name="openhourswf" id="openhourswf" required>
            <span>To</span>
            <input type="time" name="openhourswt" id="openhourswt" required><br><br>
            <span>Saturday</span>
            <span>From</span>
            <input type="time" name="openhourssaf" id="openhourssaf" required>
            <span>To</span>
            <input type="time" name="openhourssat" id="openhourssat" required><br><br>
            <span>Sunday</span>
            <span>From</span>
            <input type="time" name="openhourssuf" id="openhourssuf" required>
            <span>To</span>
            <input type="time" name="openhourssut" id="openhourssut" required><br><br>
        </div>
     
       <div class="facilities">
        <span>Facilities</span><br><br><br>
        <div class="fac1">
            <input type="checkbox" id="wifi" name="wifi" value="wifi">
            <label for="wifi"> Wifi</label><br>
            <input type="checkbox" id="carparking" name="carparking" value="Car">
            <label for="carparking"> Car Parking</label><br>
            <input type="checkbox" id="washrooms" name="washrooms" value="wroom">
            <label for="washrooms"> Wash Rooms</label><br>     
            <input type="checkbox" id="changingrooms" name="changingrooms" value="croom">
            <label for="changingrooms"> Changing Rooms</label><br>
        </div>
        <div class="fac2">
            
            <input type="checkbox" id="locker" name="locker" value="locker">
            <label for="locker"> Personal Lockers</label><br>  
            <input type="checkbox" id="water" name="water" value="water">
            <label for="water">Water Despenser</label><br>  
            <input type="checkbox" id="ac" name="ac" value="ac">
            <label for="ac">Air Conditioned</label><br>  
        </div>

        </div>
        <div class="gymimage">
            <input type="file" name="firstimage">
        </div>
        
        <div class="inputBx">
            <input type="submit" value="Add Gym">
        </div>
    </form>
</body>
</html>