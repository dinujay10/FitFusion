<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManageResourcesStyle.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManagerDashBoardStyle.css">
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>FIT FUSION</h1>
        </div>
        <ul>
            <li>&nbsp; <h5>Dashboard</h5> </li>
            <a href="packages"><li><img src="<?=ROOT?>/assets/images/dashboards/profile.jpeg" alt="">&nbsp;<h6>Packages</h6> </li></a>
            <a href="handlemembercomplaint"><li><img src="<?=ROOT?>/assets/images/dashboards/schedule.jpeg" alt="">&nbsp;<h6>Member complaints</h6> </li></a>
            <a href="addgym"><li><img src="<?=ROOT?>/assets/images/dashboards/workout.jpeg" alt="">&nbsp;<h6>Add Gym</h6> </li></a>

            <a href="manageresources"><li><img src="<?=ROOT?>/assets/images/dashboards/failure.jpeg" alt="">&nbsp;<h6>Manage Gym Resources</h6> </li></a>

            <a href="editgym"><li><img src="<?=ROOT?>/assets/images/dashboards/task list.jpeg" alt="">&nbsp;<h6>Edit Gym</h6> </li></a>
            <a href="appliedinstructors"><li><img src="<?=ROOT?>/assets/images/dashboards/meeting.jpeg" alt="">&nbsp;<h6>Approve Instructors</h6> </li>
            <a href="logout"><li><img src="<?=ROOT?>/assets/images/dashboards/help.jpeg" alt="">&nbsp; <h6>Logout</h6></li></a>
            <a href="newmembersreport"><li><img src="<?=ROOT?>/assets/images/dashboards/setting.png" alt="">&nbsp;<h6>Reports</h6> </li></a>
        </ul>
    </div>
    <div class="container">
            <div class="maincontainer">
                <div class="tbl">
                <table>
                <thead>
                    <tr>
                        <td scope=cole></td>
                        <td scope=cole>MachineID</td>
                        <td scope=cole>Machinetype</td>
                        <td scope=cole>Price</td>
                        <td scope=cole>Warranty</td>
                        <td scope=cole>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for($x=0;$x<count($data)-2;$x++){
                        $row=$data[$x];
                        $id=$row->id;
                        $machineType=$row->machineType;
                        $price=$row->price;
                        $warranty=$row->warranty;
                        $adjustability=$row->adjustability;

                        echo ' <tr>
                        <th scope="row"></th>
                        <td>'.$id.'</td>
                        <td>'.$machineType.'</td>
                        <td>'.$price.'</td>
                        <td>'.$warranty.'</td>
                        <td>'.$adjustability.'</td>
                        <td>
                            <button><a href="updateresources?updateid='.$id.'">Update</a></button>
                            <button><a href="manageresources?deleteid='.$id.'">Remove</a></button>
                        </td>
                        <br>
                    </tr> ';
                    }
                    //$raw= mysqli_fetch_assoc($data);
                    //echo '<pre>'; print_r($data); echo '</pre>';
                    //var_dump($data[0]);

                    ?>
                </tbody>
            </table>
                </div>
                <div class="frm">
                                <div class="secondcontainer">
                        <div class="addMachine">
                            <h2>Add Machine</h2>
                            <form method="post">
                                <input type="hidden" name="manageremail" id="manageremail" value="<?= $_SESSION['email']?>">
                                <div class="inputBx">
                                    <span>Machine Type</span>
                                    <input type="text" name="machineType" id="machineType" value="<?= $data['post']['machineType']?>">
                                </div>
                                <div class="inputBx">
                                    <span>Machine ID</span>
                                    <input type="" name="id" id="id" value="<?= $data['post']['id']?>">
                                </div>
                                <div class="inputBx">
                                    <span>Price</span>
                                    <input type="" name="price" id="price" value="<?= $data['post']['price']?>">
                                </div>
                                <div class="inputBx">
                                    <span>Warranty</span>
                                    <input type="" name="warranty" id="warranty" value="<?= $data['post']['warranty']?>">
                                </div>
                                
                                <div class="inputBx">

                                    <span>Adjustability</span>
                                    <input type="" name="adjustability" id="adjustability" value="<?= $data['post']['adjustability']?>">
                                </div>
                                <div>
                                    <?php
                                        if($data['errors']!=''){
                                            for($x=0;$x<count($data['errors']);$x++){
                                                echo '<h5 style="color: red; font-family: Arial; ">'.array_values($data['errors'])[$x].'</h5>';
                                            }
                                            //print_r(array_values($data['errors']));
                                        }
                                    ?>

                                </div>
                                <div class="inputBx">
                                    <input type="submit" value="Submit">
                                </div>
                            
                            </form>
                        </div>
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