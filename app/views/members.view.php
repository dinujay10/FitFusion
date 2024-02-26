

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManageResourcesStyle.css">
    <style>
        /* Add CSS styles for the feedback card */
        .feedback-card {
            display: none;
            height: 300px;
            width: 400px;
            padding: 50px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;
        }

        .feedback-card h3 {
            margin-bottom: 20px;
        }

        .feedback-card p {
            margin-bottom: 20px;
        }

        .feedback-card button {
            margin-top: 50px;
            padding: 10px 20px;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .feedback-card button:hover {
            background-color: #f55;
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
                <td scope="col">Member name</td>
                <td scope="col">Username</td>
                <td scope="col">Email</td>
                <td scope="col">Actions</td>
            </tr>
            </thead>
            <tbody>
            <?php
            for ($x = 0; $x < count($data); $x++) {
                $id = [$x]['id'];  
                $row = $data[$x];
                $name = $row->name;
                $username = $row->username;
                $email = $row->email;
                // Use htmlspecialchars to escape special characters
                echo '<tr>
                            <th></th>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $username . '</td>
                            <td>' . $email . '</td>
                            <td>
                                <button onclick="showFeedbackCard(' . $name . ')">View</button>
                            </td>
                        </tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>


 <div id="feedbackCard" class="feedback-card">
    <h3>Feedback</h3>
    <!-- Placeholder for feedback content -->
     <p id = "feedbackContent"></p>
    <button onclick="hideFeedbackCard()">Close</button>
</div> 

<!-- JavaScript to handle showing and hiding feedback card -->
 <script>
    function showFeedbackCard(id) {
        // Display the feedback card
        document.getElementById('feedbackCard').style.display = 'block';
        // Fetch feedback data using AJAX
        fetch('getFeedback.php?id=' + id)
            .then(response => response.text())
            .then(data => {
                // Set the fetched feedback content to the feedback card
                document.getElementById('feedbackContent').textContent = data;
            })
            .catch(error => {
                console.error('Error fetching feedback:', error);
            });
    }

    function hideFeedbackCard() {
        // Hide the feedback card
        document.getElementById('feedbackCard').style.display = 'none';
    }
</script>
</body>
</html>

