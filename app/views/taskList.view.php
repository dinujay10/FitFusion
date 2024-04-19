<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/Sidebar.css"> 
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/MemberStyles.css"> 

    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarnew.css"> -->
    <!-- <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">  -->
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/sidebarfinal.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/scheduleAppointRe.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/tasklist.css"> -->
   
</head>

<body>

    <!-- //////////////////////////// -->
    <div class="container-left">
        <div class="side-menu">
            <div class="brand-name">
                <h1>FIT FUSION</h1>
            </div>
            <ul>
                <a href="memberdash"><li>&nbsp; <h5>Dashboard</h5> </li></a>
                <a href="memberprofile"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>My Profile</h6> </li></a>
                <a href="taskList"><li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Task List</h6> </li></a>
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Attendance</h6> </li></a>

                <a href="scheduleInstrAppointReq"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Meetings</h6> </li></a>
                <a href="makeComplaint"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Complaints</h6> </li></a>
                <a href="makereviewgym"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Reviews</h6> </li></a>
                <!-- <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Payments</h6></li></a> -->
                <a href="#"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Logout</h6> </li></a>

            </ul>
        </div>
    </div>
        <!-- //////////////////////////// -->


 <!-- ADDED THE CONTAINER CLASS -->
    <div class="container-right">

        <div class="form">
            <div class="form-content">
                    <p>Task List</p>
            </div>

        <!-- <div class="form-item">
            <input type="checkbox" id="machine1" name="machine1" value="machine1">
            <p>Treadmill</p>
        </div>
        <div class="form-item">
            <input type="checkbox" id="machine2" name="machine2" value="machine2">
            <p>Leg Extension</p>
        </div>
        <div class="form-item">
            <input type="checkbox" id="machine3" name="machine3" value="machine3">
            <p>Chest Press</p>
        </div>
        <div class="form-item">
            <input type="checkbox" id="machine4" name="machine4" value="machine4">
            <p>Leg Curl</p>
        </div> -->

        <!-- <div class="container"> -->
                <div id="newtask">
                    <input type="text" placeholder="Add Tasks">
                    <button id="push">Add</button>
                </div>
                <div id="tasks"></div>

                    <script>
                        document.querySelector('#push').onclick = function(){
                            if(document.querySelector('#newtask input').value.length == 0){
                                alert("Kindly Enter Task Name!!!!")
                            }

                            else{
                                document.querySelector('#tasks').innerHTML += `
                                    <div class="task">
                                        <span id="taskname">
                                            ${document.querySelector('#newtask input').value}
                                        </span>
                                        <button class="delete">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                `;

                                var current_tasks = document.querySelectorAll(".delete");
                                for(var i=0; i<current_tasks.length; i++){
                                    current_tasks[i].onclick = function(){
                                        this.parentNode.remove();
                                    }
                                }
                            }
                        }
                    </script>

                </div>

        <!-- </div> -->
    </div>
</body>

</html>