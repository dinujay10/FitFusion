<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Main/main-styles.css">
    <!-- <link rel="stylesheet" type="" href="../css/Main/main-styles.css"> -->
    
    <style>
        /* Hide the OTP form initially */
        .otp {
            display: none;
        }
        /* Show the signup form by default */
        #signupForm {
            display: block;
        }
    </style>
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
            <form class="common-form-container" method="POST" id="signupForm">
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
                        <input type="submit" class="submit-button" value="CREATE ACCOUNT" id="createAccountBtn">
                    </div>
                </div>
            </form>

            <!-- OTP Form -->
            <form class="common-form-container otp" method="POST" id="otpForm">
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
                        <div class="common-input-label">Enter OTP Code sent to your email:</div> 
                        <input type="text" class="common-input-box" name="otp" id="otp">
                    </div>
                    <div class="common-form-data"> 
                        <input type="hidden" class="common-input-box" name="email" id="email" value="<?php echo $data['email'];?>">
                    </div>
                    <div class="common-form-data">
                        <input type="submit" class="submit-button" value="Submit">
                        <input type="submit" class="submit-button" value="Cancel" id="cancel">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
    let timeoutId; // Variable to store the timeout ID

    // JavaScript to toggle OTP form visibility and hide it after 2 minutes
    document.getElementById('createAccountBtn').addEventListener('click', function() {
        document.getElementById('signupForm').style.display = 'none';
        document.getElementById('otpForm').style.display = 'block';

        timeoutId = setTimeout(function() {
            document.getElementById('signupForm').style.display = 'block';
            document.getElementById('otpForm').style.display = 'none';
        }, 120000); // 2 minutes delay
    });

    // Cancel the timeout when the form is submitted
    document.getElementById('signupForm').addEventListener('submit', function() {
        clearTimeout(timeoutId); // Cancel the timeout
    });

    // Event listener for the cancel button
    document.getElementById('cancel').addEventListener('click', function() {
        document.getElementById('signupForm').style.display = 'block';
        document.getElementById('otpForm').style.display = 'none';
        clearTimeout(timeoutId); // Cancel the timeout
    });
</script>

</body>
</html>
