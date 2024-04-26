<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManageResourcesStyle.css">
</head>
<body>
            <div class="side-menu">
                <div class="brand-name">  
                    <h1>FIT FUSION</h1>
                </div>
                <ul>
                    <li>&nbsp; <h5>Dashboard</h5> </li>
                    <a href="gymmanagerdash"><li><img src="<?=ROOT?>/assets/images/dashboards/home.jpg" alt="">&nbsp;<h6>Home</h6> </li></a>
                    <a href="packages"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>Packages</h6> </li></a>
                    <a href="handlemembercomplaint"><li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Member complaints</h6> </li></a>
                    <a href="addgym"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Add Gym</h6> </li></a>
                    <a href="manageresources"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Manage Gym Resources</h6> </li></a>
                    <a href="editgym"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Edit Gym</h6> </li></a>
                    <a href="appliednutritionists"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Approve Nutritionists</h6> </li>
                    <a href="appliedinstructors"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Approve Instructors</h6> </li>
                    <a href="attendancememberlist"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Assign QR Code</h6> </li></a>
                    <a href="markattendance"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Mark Member Attendence</h6> </li></a>
                    <a href="newmembersreport"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Reports</h6> </li></a>
                    <a href="logout"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Logout</h6></li></a>

                </ul>
            </div>
            <div class="maincontainer">
               
                    <?php
                
                  
                        $id=$data['id'];
                        $machineType=$data['machineType'];
                        $price=$data['price'];
                        $warranty=$data['warranty'];
                        $adjustability=$data['adjustability'];
                       
                    
                    //$raw= mysqli_fetch_assoc($data);
                    //echo '<pre>'; print_r($data); echo '</pre>';
                    //var_dump($data[0]);

                    ?>
              
   
              
                <div class="frm">
                                <div class="container">
                        <div class="addMachine">
                            <h2>Update Machine Status</h2>
                            <form method="POST">
                                <div class="inputBx">
                                    <span>Machine Type</span>
                                    <input type="text" name="machineType" id="machineType" value="<?= $machineType?>" readonly>
                                </div>
                                <div class="inputBx">
                                    <span>Machine Id</span>
                                    <input type="text" name="id" id="id" value="<?= $id?>" readonly>
                                </div>
                                <div class="inputBx">   
                                    <input type="hidden" name="price" id="price" value="<?= $price?>" >
                                </div>
                                <div class="inputBx">
                                    <input type="hidden" name="warranty" id="warranty" value="<?= $warranty?>">
                                </div>
                                
                                <div class="inputBx">
                                    <span>Status</span>
                                    <select name="adjustability" id="adjustability">
                                        <option value="broken">Broken Machine</option>
                                        <option value="working">Working Machine</option>
                                    </select>
                                    <!-- <input type="text" name="adjustability" id="adjustability" value="<?= $adjustability?>"> -->
                                </div>
                                <div class="inputBx">
                                    <input type="submit" value="Submit">
                                </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
                        
                </div>
            
       
            
           
            <!-- <div class="machine">
                <div class="c1">
                    <img src="../CSS/ma1.jpeg" alt=""><br><br>  
                </div>
                <div class="c2">
                    <h4>Machine Id : s100</h4><br>
                    <h4>Description : Soozier 100 lb stack Multi </h4><br>
                    <h4>Status : working</h4>
                    <input type="submit" value="Update">
                    <input type="submit" value="Remove">
                </div>   
            </div> -->

            
            
         

</body>
</html>