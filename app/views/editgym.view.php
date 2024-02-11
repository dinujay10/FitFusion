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
   
    <form method="POST">
        <?php if(!empty($errors)):?>
        <div class="alert">
            <?= implode("<br>", $errors)?>
        </div>
        <?php endif ;?>
        <div class="title">
            <h5>Edit Gym</h5>
        </div>
        <div class="nameAndEmail">
            <div class="inputBx">
                
                <input type="hidden" name="gymName" id="gymName" value="<?= $data['gymName']?>" required>
            </div>
            <div class="inputBx">
                <span>Gym Email</span>
                <input type="email" name="email" id="email" value="<?= $data['email']?>" required>         
            </div>
        </div>
        
        <div class="inputBx">
            <span>Description</span>
            <textarea name="description" id="description" cols="50" rows="7" ><?= $data['description']?></textarea>
            
        </div>
        <div class="inputBx">
            <span>Location</span>
            <input type="text" name="location1" id="location1" placeholder="first line" value="<?= $data['location1']?>" required>
            <input type="text" name="location2" id="location2" placeholder="second line" value="<?= $data['location2']?>" required>
            <input type="text" name="location3" id="location3" placeholder="third line"
            value="<?= $data['location3']?>" required>
        </div>
        <div class="openhours">
            <span>Open Hours</span><br><br>
            <span>Weekdays</span>
            <span>From</span>&nbsp;&nbsp;
            <input type="time" name="openhourswf" id="openhourswf" value="<?= $data['openhourswf']?>" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span>To</span>
            <input type="time" name="openhourswt" id="openhourswt" value="<?= $data['openhourswt']?>" required><br><br>
            <span>Saturday</span>
            <span>From</span>&nbsp;&nbsp;
            <input type="time" name="openhourssaf" id="openhourssaf" value="<?= $data['openhourssaf']?>" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span>To</span>
            <input type="time" name="openhourssat" id="openhourssat" value="<?= $data['openhourssat']?>" required><br><br>
            <span>Sunday</span>
            <span>From</span>&nbsp;&nbsp;
            <input type="time" name="openhourssuf" id="openhourssuf" value="<?= $data['openhourssuf']?>" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span>To</span>
            <input type="time" name="openhourssut" id="openhourssut" value="<?= $data['openhourssut']?>" required><br><br>
        </div>
     
       <div class="facilities">
        <span>Facilities</span><br><br><br>
        <div class="fac1">
            <input type="checkbox" id="wifi" name="wifi" value="wifi" <?= $data['wifi']?> >
            <label for="wifi"> Wifi</label><br>
            <input type="checkbox" id="carparking" name="carparking" value="Car" <?= $data['Car']?>>
            <label for="carparking"> Car Parking</label><br>
            <input type="checkbox" id="washrooms" name="washrooms" value="wroom" <?= $data['wroom']?>>
            <label for="washrooms"> Wash Rooms</label><br>     
            <input type="checkbox" id="changingrooms" name="changingrooms" value="croom" <?= $data['croom']?>>
            <label for="changingrooms"> Changing Rooms</label><br>
        </div>
        <div class="fac2">
            
            <input type="checkbox" id="locker" name="locker" value="locker" <?= $data['locker']?>>
            <label for="locker"> Personal Lockers</label><br>  
            <input type="checkbox" id="water" name="water" value="water" <?= $data['water']?>>
            <label for="water">Water Despenser</label><br>  
            <input type="checkbox" id="ac" name="ac" value="ac" <?= $data['ac']?>>
            <label for="ac">Air Conditioned</label><br>  
        </div>
           
            
        </div>
       
        
        <div class="inputBx">
            <input type="submit" value="Add Gym">
        </div>
    </form>
</body>
</html>