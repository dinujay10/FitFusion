<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Member/main-template.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Member/body-template.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>
    <div class="main-container">
        <div class="side-bar-container">
            <div class="logo-tab">
                FITFUSION
            </div>
            <ul class="side-bar-content">
                
                <a class="side-bar-tile-link" href="memberdash">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                dashboard
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Dashboard
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="gymschedule">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                calendar_month
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            My Schedule
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="memberviewworkoutplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                fitness_center
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Workout Plan
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="memberviewmealplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                skillet
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Meal Plan
                        </div>
                    </li>
                </a>

                

                <li class="current-side-bar-tile">
                    <div class="sb-tab-content">
                        <span class="material-symbols-outlined">
                            mood_bad
                        </span>
                    </div>
                    <div class="sb-tab-content">
                        Complaints
                    </div>
                </li>

                <a class="side-bar-tile-link" href="makereviewgym">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                editor_choice
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Reviews
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="logout">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                        </div>
                        <div class="sb-tab-content">Logout</div>
                    </li>
                </a>

            </ul>
        </div>
        <div class="body-container">
            <div class="body-header">
            <a href="viewqrcode">
                    <div class="qr-scan"><span class="material-symbols-outlined">
                            qr_code_scanner
                        </span></div>
                </a>
                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN MEMBER'S NAME -->
                    Welcome,
                    <?php
                    echo $data['firstname'] . " " . $data['lastname'];
                    ?>
                </div>
            </div>
            <div class="body-content">
                    <form class="form-tile" method="POST">
                            <div class="form-tile-content">
                                <div class="form-tab-bar">
                                    <div class="form-heading">File Complaints</div>
                                </div>
                                <hr class="form-divider">
                                <div class="form-content">
                                    <div class="form-content-bar-text">
                                        Let us know your complaints. General complaints about the Gym, Instructors or Nutritionists will be sent to the Gym manager and any faults of the system will be sent to the Admin. Please make sure to include details of your complaint!
                                    </div>
                                    <div class="form-content-bar">
                                        <div class="form-content-bar-value">Complaint Type:</div>
                                        <div class="form-content-bar-value">
                                            <select class="select-box" name="complainttype" id="complainttype">
                                                <option value="General">General Complaint</option>
                                                <option value="System">System Complaint</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-content-textarea-bar">
                                        <!-- limit the number of characters!!!!! -->
                                        <textarea class="textarea-tile" name="complaint" id="complaint" cols="87" rows="10" placeholder="Type your complaints here"></textarea>
                                    </div>
                                    <div class="form-content-bar">
                                        <input class="submit-button" type="submit" value="Submit Complaint">
                                    </div>
                                </div>
                            </div>
                    </form>
                    <div class="content-tile-column">
                        <div class="tall-tile">
                        <?php 
                        // echo '<pre>';
                        // var_dump($data);
                        // echo '</pre>';
                         ?>
                            <div class="reply-heading">Replies</div>
                            <div class="all-replies" style="display:flex; flex-direction:column;  align-content:flex-end; width:80%; height:80%">

                                
                                <div class="reply-tile" style="display:flex; flex-direction:column; overflow:hidden; height:99%; overflow-y:scroll; width:100%; gap: 1rem">

                                                <?php 
                                                if ($data['flag']==1) {
                                                    for ($x=count($data['allcomplaints'])-1;$x>=0;$x--){ 
                                                        echo '<div class="notification" style="display:flex; flex-direction:column; border: 1px solid #27374D; border-radius: 20px; padding: 10px;">
            
                                                            <div class="notification-item">
                                                                <div class="info">
                                                                                                                    
                                                                    <p style="font-weight: 600;">Complaint: </p>
                                                                    ' . $data['allcomplaints'][$x] . ' 
                                                                    
                                                                    <p style="font-weight: 600;">Reply: </p>
                                                                    ' . $data['allreplies'][$x] . ' 

                                                                </div>
                                                            </div>
                                                        </div>';
                                                    }
                                                }
                                                else {
                                                    echo '<div>No replies yet</div>';
                                                }
                                                ?>
                                            
                                    
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <script>
        // function showComplaintDetails() {
        //     var selectBox = document.getElementById('complaint');
        //     var selectedIndex = selectBox.value;
        //     var complaintText = document.getElementById('selected-complaint-text');
        //     var replyText = document.getElementById('selected-reply-text');

        //     // Display the selected complaint
        //     complaintText.textContent = '<?= $data['allcomplaints']; ?>';

        //     // Display the corresponding reply
        //     replyText.textContent = '<?= $data['allreplies']; ?>';
        // }

        function sendComplaint() {
            var myElement = document.getElementById("complaint");
            var complaint = myElement.value;
            complaintselected = complaint;

            var array = [
                {
                    "complaint": complaint
                }
            ];

            var array = JSON.stringify(array);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "MakeComplaint/getcomplaint", true);
            xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // alert(xhr.responseText); //sends an alert
                    var response = JSON.parse(xhr.responseText);
                    if (response.status === 'success') {
                        // Update the DOM elements with the fetched data
                        document.getElementById('selected-complaint-text').textContent = response.data.complaint;
                        document.getElementById('selected-reply-text').textContent = response.data.reply;
                        
                        // Display the reply content
                        document.getElementById('reply-content').style.display = 'block';
                    } else {
                        console.error('Error:', response.message);
                    }
                }
            }
            xhr.send(array);
        }

        function enableReply() {
            var myElement = document.getElementById("reply");
            myElement.disabled = false;
        }

        function sendComplaintAndEnableReply() {
            sendComplaint();
            enableReply();
        }

    </script>

</body>
</html>