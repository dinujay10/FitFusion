<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ManageResourcesStyle.css">
</head>
<body>
    <nav>
        <div class = "logo">
            <p>FitFusion</p>
        </div>

        <ul>
            <li><a href ="gymmanagerdash">Dashboard</a></li>
            <li><a href ="home">Logout</a></li>
        </ul>
    </nav>
            <div class="maincontainer">
                <div class="tbl">
                <table>
                <thead>
                    <tr>
                        <td scope=cole></td>
                        <td scope=cole>Machinetype</td>
                        <td scope=cole> MachineID</td>
                        <td scope=cole>Price</td>
                        <td scope=cole>Warranty</td>
                        <td scope=cole>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for($x=0;$x<count($data);$x++){
                        $row=$data[$x];
                        $id=$row->id;
                        $machineType=$row->machineType;
                        $price=$row->price;
                        $warranty=$row->warranty;
                        $status=$row->status;

                        echo ' <tr>
                        <th scope="row"></th>
                        <td>'.$id.'</td>
                        <td>'.$machineType.'</td>
                        <td>'.$price.'</td>
                        <td>'.$warranty.'</td>
                        <td>'.$status.'</td>
                        <td>
                            <button><a href="deletemachine">Update</a></button>
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
                                <div class="container">
                        <div class="addMachine">
                            <h2>Add Machine</h2>
                            <form method="post">
                                <div class="inputBx">
                                    <span>Machine Type</span>
                                    <input type="text" name="machineType" id="machineType">
                                </div>
                                <div class="inputBx">
                                    <span>Machine ID</span>
                                    <input type="" name="id" id="id">
                                </div>
                                <div class="inputBx">
                                    <span>Price</span>
                                    <input type="" name="price" id="price">
                                </div>
                                <div class="inputBx">
                                    <span>Warranty</span>
                                    <input type="" name="warranty" id="warranty">
                                </div>
                                
                                <div class="inputBx">
                                    <span>Status</span>
                                    <input type="" name="status" id="status">
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