<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Sidebar.css"> 
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/MemberStyles.css"> 
    
    <!-- <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarnew.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarfinal.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/scheduleAppointRe.css"> -->
</head>

<body>

    <!-- //////////////////////////// -->
    <div class="container-left">
        <div class="side-menu">
            <div class="brand-name">
                <h1>FIT FUSION</h1>
            </div>
            <!-- <div class="center-image">
                <img src="<?=ROOT?>/assets/images/LogoFinal.png" alt="logo">
            </div> -->
            <ul>
                <a href="memberdash"><li>&nbsp; <h5>Dashboard</h5> </li></a>
                <a href="memberprofile"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>My Profile</h6> </li></a>
                <a href="taskList"><li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Task List</h6> </li></a>
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Attendance</h6> </li></a>

                <a href="scheduleInstrAppointReq"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Meetings</h6> </li></a>
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Complaints</h6> </li></a>
                <a href="makereviewgym"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Reviews</h6> </li></a>
                <!-- <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Payments</h6></li></a> -->
                <a href="scheduleinterface"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>My schedule</h6></li></a>
                <a href="memberviewmealplan"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Meal Plan</h6> </li></a>
 
                <a href="logout"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Logout</h6> </li></a>

            </ul>
        </div>
    </div>
    
    <!-- //////////////////////////// -->

    
    <div class="container-right">
        <!-- <div class="content"> -->
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>My Gym</h1>
                        <h3>Gym1</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>My Package</h1>
                        <!-- link the below to package editing page -- comment this properly -->
                        <a href="#" id="changePackageLink">
                            <h3>
                                <?php 
                                    echo $data['packagetype'] . " Package";
                                ?>
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>My Instructor</h1>
                        <h3>Instructor1</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>My Nutritionist</h1>
                        <h3>Nutritionist1</h3>
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2></h2>
                        
                    </div>
                    <table>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2></h2>
                    </div>
                    <table>
                    </table>
                </div>
            </div>
        <!-- </div> -->
    </div>
    
    <script>
        // Function to show the popup
        function showPackagePopup() {
            // You can customize the style and content of the popup
            var popupContent = "<h2>Choose a New Package</h2>";
            // Add other packages dynamically based on your data
            popupContent += "<ul>";
            popupContent += "<li><a href='#'>Package 1</a></li>";
            popupContent += "<li><a href='#'>Package 2</a></li>";
            // Add more packages as needed
            popupContent += "</ul>";

            // Create a new div element for the popup
            var popupDiv = document.createElement("div");
            popupDiv.innerHTML = popupContent;
            popupDiv.className = "package-popup";

            // Append the popup to the body
            document.body.appendChild(popupDiv);
        }

        // Add a click event listener to the package link
        document.getElementById("changePackageLink").addEventListener("click", function (event) {
            // Prevent the default behavior of the link
            event.preventDefault();
            // Show the package popup
            showPackagePopup();
        });
    </script>

</body>

</html>