<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="" href="<?=ROOT?>/assets/css/Manager/manager-main-template.css">
    <link rel="stylesheet" type="" href="<?=ROOT?>/assets/css/Manager/manager-body-template.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>
    <div class="main-container">
        <div class="side-bar-container">
            <div class="logo-tab">
                FITFUSION
            </div>
            <ul class="side-bar-content">
                
                <!-- <li class="current-side-bar-tile">
                    <div class="sb-tab-content">
                        <span class="material-symbols-outlined">
                            dashboard
                        </span>
                    </div>
                    <div class="sb-tab-content">
                        Dashboard
                    </div>
                </li> -->

                <a class="side-bar-tile-link" href="managerdash">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Gym
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="newmembersreport">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           Reports
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="manageresources">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                fitness_center
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Machines
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="packages">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                deployed_code
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Packages
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="appliedinstructors">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                groups
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Instructors
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="appliednutritionists">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                groups
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Nutritionists
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="attendancememberlist">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                qr_code
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Assign QR
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="markattendance">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                person_add
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Attendance
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="handlemembercomplaint">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                report
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Complaint Handling
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
                <div class="user">    
                    <button onclick="toggleDropdown()">
                        <span class="counter" id="counter"></span>
                        <img src="<?=ROOT?>/assets/images/dashboards/notification.jpeg" alt="">
                    </button>
                    <ul class="dropdownList" id="dropdownList">
                        
                    </ul> 
                </div>
                <div class="pfp">
                    <!-- LET THE INSTRUCTOR UPLOAD A PFP, OR KEEP A DEFAULT IMAGE -->
                    <img src="#" alt="">
                </div>
                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN INSTRUCTOR'S NAME -->
                    Welcome, Manager
                </div>
            </div>
            <div class="body-content">
            <div class="container">



        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>754</h1>
                        <h3>Members</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>12</h1>
                        <h3>Nutritionists</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2</h1>
                        <h3>Instructors</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Package</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Premium</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Premium</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Premium</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Premium</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Premium</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Premium</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Members</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="<?=ROOT?>/assets/images/dashboards/m1.jpeg" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="<?=ROOT?>/assets/images/dashboards/m2.jpeg" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="<?=ROOT?>/assets/images/dashboards/m3.jpeg" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="<?=ROOT?>/assets/images/dashboards/m4.jpeg" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script>
        function toggleDropdown() {
            // Get the dropdown list element
            //alert("this is an alert");
            let baselink = window.location.origin
            let link = `${baselink}/FitFusion/public/managerdash/notification`
            console.log(link)
            fetch(link)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    // Parse the JSON in the response
                    return response.json();
                })
                .then(data => {
                    // // Display the notifications
                    // alert("Hey");
                   showNotifications(data);
                    console.log(data);
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                });

            
            

            var dropdown = document.getElementById('dropdownList');
           
            // Toggle the display property based on the current state
           // dropdown.style.display = (dropdown.style.display === 'none') ? 'block' : 'none';
            dropdown.style.display = 'block' ;
        }
        
        function showNotifications(notifications) {
                // alert("hey");
                var counter=0;
            // Get the notification list element
                const notificationList = document.getElementById('dropdownList');

                // Clear existing notifications
                notificationList.innerHTML = '';

                // Display each notification in the list
                notifications.forEach(notification => {
                    const listItem = document.createElement('li');
                    listItem.textContent = notification.nmsg;
                    notificationList.appendChild(listItem);
                    counter++;
                });
                var cnt = document.getElementById('counter');
                cnt.innerHTML=counter;

                // If there are no notifications, display a message
                if (notifications.length === 0) {
                    const noNotificationsMessage = document.createElement('li');
                    noNotificationsMessage.textContent = 'No new notifications';
                    notificationList.appendChild(noNotificationsMessage);
                }
        }

        var specificArea = document.querySelector('.user');
        document.addEventListener('click', function(event) {
            if (!specificArea.contains(event.target)) {
                var dropdown = document.getElementById('dropdownList');
                dropdown.style.display = 'none';
                console.log("fail");
            }
        });

        function updatecount() {
            // Get the dropdown list element
            //alert("this is an alert");
            let baselink = window.location.origin
            let link = `${baselink}/FitFusion/public/managerdash/notification`
            console.log(link)
            fetch(link)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    // Parse the JSON in the response
                    return response.json();
                })
                .then(data => {
                    // // Display the notifications
                    // alert("Hey");
                    var cnt = document.getElementById('counter');
                    cnt.innerHTML=data.length;
                    console.log(data);
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                });

        }
        document.addEventListener("DOMContentLoaded", function() {
            updatecount();
        });

    </script>
</html>



<!-- USE THIS FOR A BUTTON. this is not the same as the edit button next to the profile circle-->
<!-- <button class="db-link-button">Change Gym</button> -->