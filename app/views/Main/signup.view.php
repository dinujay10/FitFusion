<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Main/main-styles.css">
    <!-- <link rel="stylesheet" type="" href="../css/Main/main-styles.css"> -->
    
</head>
<body>
    <div class="common-template">
        <div class="common-header">
            <div class="common-logo-tab">
                FITFUSION
            </div>
            <div class="common-heading-bar">
                <div class="current-tab">Create Your Account</div>
                <div class="next-tab">Next Up : Select Your Gym</div>
            </div>
        </div>
        <div class="common-body">
            <div class="common-img-container">
                <img class="signuplogin-img" src="<?=ROOT?>/assets/images/main/signuplogin-img.jpg" alt="">
            </div>
            <form class="common-form-container" method="POST">
                <!-- <?php if(!empty($errors)):?>
                <div class="alert">
                    <?= implode("<br>", $errors)?>
                </div>
                <?php endif ;?> -->
                <div class="common-form-heading">
                    SIGN UP
                </div>
                <div class="common-form-content-signup">
                    <div class="common-form-data">
                        <div class="common-input-label">First Name:</div> 
                        <input type="text" class="common-input-box" name="name" id="name">
                    </div>
                    <div class="common-form-data">
                        <div class="common-input-label">Last Name:</div> 
                        <input type="text" class="common-input-box" name="lastname" id="lastname">
                    </div>
                    <div class="common-form-data">
                        <div class="common-input-label">Email:</div> 
                        <input type="text" class="common-input-box" name="email" id="email">
                    </div>
                    <div class="common-form-data">
                        <div class="common-input-label">Password:</div> 
                        <input type="password" class="common-input-box" name="password" id="password">
                    </div>
                    <div class="common-form-data">
                        <div class="common-input-label">Confirm Password:</div> 
                        <input type="password" class="common-input-box" name="passwordConfirm" id="passwordConfirm">
                    </div>
                    <div class="common-form-text">Already have an account? <a class="common-link" href="login"> Log In</a></div>
                    <div class="common-form-data">
                        <input type="submit" class="submit-button" value="CREATE ACCOUNT">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>