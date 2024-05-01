<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ReplymembercomplaintStyle.css">
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
    <div class="container">
        
        <div class="right">
            <h2>Member Complaint</h2>
            <?php
             
                    if($data[0]->reply!='' and !isset($data['deleteid']) and  isset($data['viewid'])){
                        
                        echo'
                    <div class="complaint">
            
                        <h5>Complaint: '.$data[0]->description.'</h5><br>
                      
                        <h5>Member Email:'.$data[0]->memberemail.'</h5><br>
                        <h5>Reply:'.$data[0]->reply.'</h5><br>
                        

                        <form method="POST">
                            <textarea id="reply" name="reply" cols="40" rows="8"></textarea>

                            
                            <input type="hidden" id="id" name="id" value="'.$data[0]->id.'">
                            <input type="hidden" id="description" name="description" value="'.$data[0]->description.'">
                            <input type="hidden" id="towhom" name="towhom" value="'.$data[0]->type.'">
                            <input type="hidden" id="memberemail" name="memberemail" value="'.$data[0]->memberemail.'">
                            <br>
                            <input type="submit" value="Edit">
                        </form>
                    
                        
                     </div>
                    ';
                    }
                    elseif($data[0]->reply!='' and !isset($data['deleteid'])){
                        echo '
                            <h1>Already Replied</h1>
                        ';
                    }
                    elseif($data[0]->reply!='' and isset($data['deleteid']) and !isset($data['replyid'])){
                        echo'
                        <div class="complaint delete">
                
                            <h5>Complaint: '.$data[0]->description.'</h5><br>
                           
                            <h5>Member Email:'.$data[0]->memberemail.'</h5><br>
                            <h5>Reply:'.$data[0]->reply.'</h5><br>
                            
    
                            <form method="Post">
                                <input type="hidden" id="deleteid" name="deleteid" value="'.$data[0]->id.'">
                                <div class="delete">
                                    <input type="submit"  value="Confirm Deletion">
                                </div>
                            </form>
                        
                            
                         </div>
                        ';
                    }
                    elseif($data[0]->reply=='' and !isset($data['deleteid']) and isset($data['replyid'])){
                           
                            echo'
                        <div class="complaint">
                
                            <h5>Complaint: '.$data[0]->description.'</h5><br>
                          
                            <h5>Member Email:'.$data[0]->memberemail.'</h5><br>
                        
                            <form method="POST">
                                <textarea id="reply" name="reply" cols="40" rows="8"></textarea>
                                
                                <input type="hidden" id="id" name="id" value="'.$data[0]->id.'">
                                <input type="hidden" id="description" name="description" value="'.$data[0]->description.'">
                                <input type="hidden" id="towhom" name="towhom" value="'.$data[0]->type.'">
                                <input type="hidden" id="memberemail" name="memberemail" value="'.$data[0]->memberemail.'">
                                <br>
                                <input type="submit" value="Reply">
                            </form>
                        
                            
                         </div>
                        ';
                        
                    }
                    else{
                        echo '
                        <h1>No reply provided</h1>
                        ';
                    }
                    
                
            ?>
        </div>
          
    </div>
    </div>
</body>
</html>