<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManageResourcesStyle.css">
    <style>
        /* Add CSS styles for the buttons */
        button.confirm {
            background-color: green;
            color: white;
        }

        button.cancel {
            background-color: red;
            color: white;
        }

        /* Style for the alert */
        .custom-alert {
            position: fixed;
            top: 10%;
            left: 80%;
            height: 100px;
            width: 300px;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 128, 0, 0.8); /* Light green background */
            color: white;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }
    </style>
</head>
<body>
<nav>
    <div class="logo">
        <p>FitFusion</p>
    </div>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">AboutUs</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="login">Logout</a></li>
    </ul>
</nav>
<div class="maincontainer">
    <div class="tbl">
        <table>
            <thead>
            <tr>
                <td scope="col"></td>
                <td scope="col">Member ID</td>
                <td scope="col">Name</td>
                <td scope="col">Email</td>
                <td scope="col">Actions</td>
            </tr>
            </thead>
            <tbody>
            <?php
            for ($x = 0; $x < count($data); $x++) {
                $row = $data[$x];
                $id = $row->id;
                $name = $row->name;
                $email = $row->email;
                // Use htmlspecialchars to escape special characters
                echo '<tr>
                            <th></th>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="email" value="' . $email . '">
                                    <button type="submit" class="confirm" name="submit">confirm</button>
                                    <button type="button" class="cancel" onclick="deactivateConfirmButton(this)">cancel</button>
                                </form>
                            </td>
                        </tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<!-- PHP code to handle email sending -->
<?php
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;


if (isset($_POST['submit'])) {
    
   
    require 'C:/xampp/htdocs/FitFusion/public/assets/PHPMailer/src/Exception.php';
    require 'C:/xampp/htdocs/FitFusion/public/assets/PHPMailer/src/PHPMailer.php';
    require 'C:/xampp/htdocs/FitFusion/public/assets/PHPMailer/src/SMTP.php';
    require 'C:/xampp/htdocs/FitFusion/public/assets/mailconfig.php';

    $email = $_POST['email'];
    $subject = 'Confirmation Email';
    $message = 'Your confirmation message here.';

    require 'C:/xampp/htdocs/FitFusion/public/assets/PHPMailer/src/PHPMailer.php';
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = MAILHOST;
    $mail->Username = USERNAME;
    $mail->Password = PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->setFrom(SEND_FROM, SEND_FROM_NAME);
    $mail->addAddress($email);
    $mail->addReplyTo(REPLY_TO, REPLY_TO_NAME);
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = $message;

    if (!$mail->send()) {
        // Handle email sending failure
        echo 'Error sending email';
    } else {
        // Handle email sending success
        echo 'Email sent successfully';
    }
}
?>
    
 <script>
    function deactivateConfirmButton(button) {
        button.textContent = 'Cancelled';
        // Change color of the cancel button
        button.style.backgroundColor = 'lightcoral';
        // Deactivate the confirm button
        var confirmButton = button.parentNode.querySelector('.confirm');
        confirmButton.disabled = true;
    }
</script>


</body>
</html>
