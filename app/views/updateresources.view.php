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
            <li><a href ="#">Home</a></li>
            <li><a href ="#">AboutUs</a></li>
            <li><a href ="#">Services</a></li>
            <li><a href ="login">Logout</a></li>
        </ul>
    </nav>
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
                            <h2>Update Machine</h2>
                            <form method="post">
                                <div class="inputBx">
                                    <span>Machine Type</span>
                                    <input type="text" name="machineType" id="machineType" value="<?= $machineType?>">
                                </div>
                                <div class="inputBx">
                                    
                                    <input type="hidden" name="id" id="id" value="<?= $id?>">
                                </div>
                                <div class="inputBx">
                                    <span>Price</span>
                                    <input type="" name="price" id="price" value="<?= $price?>">
                                </div>
                                <div class="inputBx">
                                    <span>Warranty</span>
                                    <input type="" name="warranty" id="warranty" value="<?= $warranty?>">
                                </div>
                                
                                <div class="inputBx">
                                    <span>Adjustability</span>
                                    <input type="" name="adjustability" id="adjustability" value="<?= $adjustability?>">
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