<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/HandleMemberComplaintStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">
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

                <a class="side-bar-tile-link" href="nutritionistdash">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Dashboard
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="createmealplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           Create Meal Plan
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="nutritionistviewmealplan">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           View Meal Plan
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                fitness_center
                            </span>
                        </div>
                        <div class="sb-tab-content">
                            Meetings
                        </div>
                    </li>
                </a>
                <a class="side-bar-tile-link" href="nutritionistunavailable">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                home
                            </span>
                        </div>
                        <div class="sb-tab-content">
                           Unavailable Times
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                deployed_code
                            </span>
                        </div>
                        <div class="sb-tab-content">
                        Complaints
                        </div>
                    </li>
                </a>

                <a class="side-bar-tile-link" href="addfooditems">
                    <li class="side-bar-tile">
                        <div class="sb-tab-content">
                            <span class="material-symbols-outlined">
                                groups
                            </span>
                        </div>
                        <div class="sb-tab-content">
                         Add Food Items
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
    <div class="container">
    <div class="body-header">
                <div class="pfp">
                    <!-- LET THE INSTRUCTOR UPLOAD A PFP, OR KEEP A DEFAULT IMAGE -->
                    <img src="#" alt="">
                </div>
                <div class="welcome-user">
                    <!-- TODO - SHOW LOGGED IN INSTRUCTOR'S NAME -->
                    Welcome, InstructorName
                </div>
            </div>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Meeting Requests from Member</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="<?=ROOT?>/assets/images/search-btn.png" alt="" alt="">
            </div>
 
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        
                    
                        <th> Gym Email<span class="icon-arrow">&UpArrow;</span></th>
                        <th>Date<span class="icon-arrow">&UpArrow;</span></th>
                        <th>Timeslot<span class="icon-arrow">&UpArrow;</span></th>
                        <th>Member Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Member Age<span class="icon-arrow"></span></th>
                        <th>Height(cm) <span class="icon-arrow"></span></th>
                        <th>Weight(kg) <span class="icon-arrow"></span></th>
                        <th> Allergies<span class="icon-arrow">&UpArrow;</span></th>
                        <th>Status <span class="icon-arrow"></span></th>
                        <th>Action <span class="icon-arrow"></span></th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($data as $x){
                    
                    echo '
                    <tr>
                    
                        <td> '.$x->gymemail.'  </td>
                        <td>  '.$x->date.' </td>
                        <td>'.$x->timeslot.'</td>
                        <td>'.$x->memberemail.'</td>
                        <td>'.$x->memberage.'</td>
                        <td>'.$x->height.'</td>
                        <td>'.$x->weight.'</td>
                        <td>'.$x->allergies.'</td>
                        <td>'.$x->status.'</td>
                        <td>';
                        if($x->status=="Pending"){
                            echo'
                            <form method="post">
                                <button type="submit" class="confirm" name="submit"><a href="nutrisendemail?email='.$x->memberemail.' & id='.$x->id.' & status=confirm">confirm</a></button>
                                <button type="button" class="cancel" onclick="deactivateConfirmButton(this)"><a href="nutrisendemail?email='.$x->memberemail.' & id='.$x->id.'&status=cancel">cancel</button>
                            </form>
                            ';
                        }echo '
                       
                        </td>
                    </tr>
                    ';
                }
                ?>
                    
                    
                </tbody>
            </table>
        </section>
    </main>
    </div>
    <script src="<?=ROOT?>/assets/js/replymembercomplaint.js"></script>
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
</div>
</body>
</html>