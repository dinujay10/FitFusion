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
                        <input type="button" class="submit-button" value="CREATE ACCOUNT" id="createAccountBtn">
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
                        <input type="hidden" class="common-input-box" name="semail" id="semail">
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


  
    document.getElementById('cancel').addEventListener('click', function() {
        document.getElementById('signupForm').style.display = 'block';
        document.getElementById('otpForm').style.display = 'none';
        clearTimeout(timeoutId); // Cancel the timeout
    });




    ///////////////////////////////////////////////////////////////////////////
    document.getElementById('createAccountBtn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Serialize form data
        const formData = new FormData(document.getElementById('signupForm'));

        // Create an XMLHttpRequest object
        const xhr = new XMLHttpRequest();
        let baselink = window.location.origin
        let link = `${baselink}/FitFusion/public/signup/submitform`;
        // Configure the request
        xhr.open('POST', link);

        // Set up a callback function to handle the response
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Form submitted successfully
                console.log('Form submitted successfully');
                // Handle any further actions after successful form submission
                var responseData = JSON.parse(xhr.responseText);
                console.log(responseData);
                document.getElementById('semail').value=responseData['email'];
            } else {
                // Form submission failed
                console.error('Form submission failed');
            }
        };

        // Set up a callback function to handle errors
        xhr.onerror = function() {
            // Error occurred during form submission
            console.error('Error occurred during form submission');
        };

        // Send the request with form data
        xhr.send(formData);

        // Hide the signup form and show the OTP form
        document.getElementById('signupForm').style.display = 'none';
        document.getElementById('otpForm').style.display = 'block';

        // Set a timeout to hide the OTP form after 2 minutes
        setTimeout(function() {
            document.getElementById('signupForm').style.display = 'block';
            document.getElementById('otpForm').style.display = 'none';
        }, 120000); // 2 minutes delay
});



</script>

</body>
</html>
