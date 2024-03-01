

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
                $feedback = $row->feedback;
                // Use htmlspecialchars to escape special characters
                echo '<tr>
                            <th></th>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>
                                <button onclick="showFeedbackCard(' . $id . ')">View</button>
                            </td>
                        </tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Feedback card -->
<div id="feedbackCard" class="feedback-card">
    <h3>Feedback</h3>
    <!-- Placeholder for feedback content -->
    <p id = "feedbackContent"></p>
    <button onclick="hideFeedbackCard()">Close</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- JavaScript to handle showing and hiding feedback card -->
<script>
    function showFeedbackCard(id) {
        //alert(id);
        // Display the feedback card
        const idd={
            i:id
        };
        let baselink=window.location.origin;
        let link=`${baselink}/Fitfusion/public/memberfeed/feedback`;
        document.getElementById('feedbackCard').style.display = 'block';
        // Fetch feedback data using AJAX
        //  fetch(link)
        //      .then(response => response.text(),{
        //             method: 'POST',
        //             headers: {
        //                 'Content-Type': 'application/json'
        //             },
        //             body: JSON.stringify(idd)
                
        //      })
        //      .then(data => {
        //          // Set the fetched feedback content to the feedback card
        //          console.log(data);
        //          document.getElementById('feedbackContent').textContent = data;
        //      })
        //      .catch(error => {
        //          console.error('Error fetching feedback:', error);
        //      });
        $.ajax({
                                type: "POST",
                                url: link,
                                data: idd,
                                cache: false,
                                success: function(res) {X=JSON.parse(res);
                                    console.log(X);
                                    // Set the fetched feedback content to the feedback card
                                    document.getElementById('feedbackContent').textContent = res;}
//  error: function(xhr, status, error) {
//                                     // return xhr;
//                                 }
})   

    }

//     function showFeedbackCard(feedback) {
//     // Display the feedback card
//     document.getElementById('feedbackCard').style.display = 'block';
//     // Set the feedback content to the feedback card
//     document.getElementById('feedbackContent').textContent = feedback;
// }

    function hideFeedbackCard() {
        // Hide the feedback card
        document.getElementById('feedbackCard').style.display = 'none';
    }
</script>
</body>
</html>

