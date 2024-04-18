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
                <td scope="col">id</td>
                <td scope="col">Instructor email</td>
                <td scope="col">Date</td>
                <td scope="col">Timeslot</td>
                <td scope="col">Memberemail</td>
                <td scope="col">Membername</td>
                <td scope="col">Memberage</td>
                <td scope="col">Goal</td>
                <td scope="col">Illness</td>
                <td scope="col">Status</td>
            </tr>
            </thead>
            <tbody>
            <?php
            for ($x = 0; $x < count($data); $x++) {
                $row = $data[$x];
                $id = $row->id;
                $instructoremail = $row->instructoremail ;
                $date = $row->date;
                $timeslot = $row->timeslot;
                $memberemail =  $row->memberemail;
                $membername = $row->membername;
                $memberage = $row->memberage;
                $goal = $row->goal ;
                $illness = $row->illness;
                $status = $row->status;
                // Use htmlspecialchars to escape special characters
                echo '<tr>
                            <th></th>
                            <td>' . $id  . '</td>
                            <td>' . $instructoremail  . '</td>
                            <td>' . $date . '</td>
                            <td>' . $timeslot . '</td>
                            <td>' . $memberemail . '</td>
                            <td>' . $membername . '</td>
                            <td>' . $memberage . '</td>
                            <td>' . $goal . '</td>
                            <td>' . $illness . '</td>
                            <td>' . $status . '</td>
                            <td>
                                <form method="post">
                               <button type="submit" class="confirm" name="submit"><a href="sendmemberemail?email='.$memberemail.' & id='.$id.'">confirm</a></button>
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

    
<script>
        function deactivateConfirmButton(button) {

            var form = button.parentNode; // Get the parent form element
            var confirmButton = form.querySelector('.confirm'); // Find the confirm button within the form
            confirmButton.style.backgroundColor = 'lightgreen'; // Change the color of the cancel button
            confirmButton.disabled = true; // Disable the confirm button

            button.textContent = 'Cancelled'; // Change the text of the cancel button
            button.style.backgroundColor = 'lightcoral'; // Change the color of the cancel button
            button.disabled = true; // Disable the cancel button

        }
    </script>


</body>
</html>
