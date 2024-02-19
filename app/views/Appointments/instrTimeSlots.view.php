<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarfinal.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/scheduleAppointRe.css">
</head>

<body>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="nav-container">
            <div class="top-container">
                <div class="center-image">
                    <img src="<?=ROOT?>/assets/images/LogoFinal.png" alt="logo">
                </div>
                <div style="width: 100%">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="menu-title">My Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="memberpackages">
                                <span class="menu-title">Packages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                    <a class="current-nav-link" href="#">
                        <span class="menu-title">Meetings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="makeComplaint">
                        <span class="menu-title">Complaints</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="makereview">
                        <span class="menu-title">Reviews</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="menu-title">Payments</span>
                    </a>
                </li>
                    </ul>
                </div>
            </div>
            <div class="bottom-container">
                <button class="logout-button">
                    <a  href="#">
                        <span>Logout</span>
                    </a>
                </button>
            </div>
        </div>
    </nav>


    <div class="form" style="margin-left:16%">
            <div class="form-item">
                <p>Choose your time slot</p>
                <select name="timeslot" id="timeslot">
                        <option value="initial">Time Slot 1</option>
                        <option value="progress">Time Slot 2</option>
                    </select>
            </div>
            
            <!-- <div class="form-item">
                <p>Choose a date for the Appointment</p>
                <input type="date" id="date" name="date" value="2023-12-10" min="2023-12-10" max="2024-12-31" />
            </div> -->

            <div class="bottom-container">
                <button class="next-button">
                    <a  href="#">
                        <span>Send Request</span>
                    </a>
                </button>
            </div>
           
        </div>
</body>

</html>