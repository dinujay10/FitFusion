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
    <nav>
        <div class = "logo">
            <p>FitFusion</p>
        </div>

        <ul>
            <li><a href ="home">Home</a></li>
            <li><a href ="#">AboutUs</a></li>
            <li><a href ="#">Services</a></li>
        </ul>

    </nav>
    <section>
        <div class="imgBx">
            <img src="<?=ROOT?>/assets/images/gym pic 2.jpg" alt="">
        </div>
        <div class="contentBx">
            <div class="formBx"> 
                <h2>Sign Up</h2>
                <form method="POST">
                    <?php if(!empty($errors)):?>
                    <div class="alert">
                        <?= implode("<br>", $errors)?>
                    </div>
                    <?php endif ;?>

                    <div class="inputBx">
                        <span>Name</span>
                        <input type="text" name="name" id="name" >
                    </div>
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="inputBx">
                        <span>Confirm Password</span>
                        <input type="password" name="passwordConfirm" id="passwordConfirm">
                    </div>
                    <div class="selectType">
                        <span>Who are you signing up as?</span>
                        <select name="usertype" id="usertype">
                            <option value="member">Member</option>
                            <option value="gyminstructor">Gym Instructor</option>
                            <option value="nutritionist">Nutritionist</option>
                            <option value="gymmanager">Gym Manager (Manages 1 gym)</option>
                            <option value="gymowner">Gym Owner (Manages more than 1 gym)</option>
                        </select>                    
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign Up">
                    </div>
                    <div class="inputBx">
                        <p>Already have an account? <a href="login">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>