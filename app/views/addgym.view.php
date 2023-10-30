<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/SignUpStyle.css">
</head>
<body>
    <form method="POST">
        <?php if(!empty($errors)):?>
        <div class="alert">
            <?= implode("<br>", $errors)?>
        </div>
        <?php endif ;?>

        <div class="inputBx">
            <span>Name</span>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="inputBx">
            <span>Description</span>
            <input type="text" name="description" id="description" required>
        </div>
        <div class="inputBx">
            <span>Location</span>
            <input type="text" name="location" id="location" required>
        </div>
        <div class="inputBx">
            <span>Open Hours</span>
            <input type="text" name="openhours" id="openhours" required>
        </div>
        <div class="inputBx">
            <span>Equipment</span>
            <input type="text" name="equipment" id="equipment" required>
        </div>
        <div class="inputBx">
            <span>Facilities</span>
            <input type="text" name="facilities" id="facilities" required>         
        </div>
        <div class="inputBx">
            <span>Gym Email</span>
            <input type="text" name="email" id="email" required>         
        </div>
        <div class="inputBx">
            <input type="submit" value="Add Gym">
        </div>
    </form>
</body>
</html>