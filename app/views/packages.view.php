<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/packagesStyle.css">
</head>

<body>
    <nav>
        <div class="logo">
            <p>FitFusion</p>
        </div>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">AboutUs</a></li>
            <li><a href="#">Services</a></li>
        </ul>
    </nav>

    <div class="maincontainer">
    <div class="tbl">
    <table>
        <thead>
            <tr>
                <td scope=cole></td>
              
                <td scope=cole>packagetype</td>
                <td scope=cole>description</td>
                <td scope=cole>paymentperiod</td>
                <td scope=cole>amount</td>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($x = 0; $x < count($data); $x++) {
                $row = $data[$x];
                $id = $row->id;
                $packagetype = $row->packagetype;
                $description = $row->description;
                $paymentperiod = $row->paymentperiod;
                $amount = $row->amount;

                echo ' <tr>
                        <th scope="row"></th>
                        <td>' . $packagetype . '</td>
                        <td>' . $description . '</td>
                        <td>' . $paymentperiod . '</td>
                        <td>' . $amount . '</td>
                        <td>
                            <button><a href="">Update</a></button>
                            <button><a href="packages?deleteid=' . $id . '">Remove</a></button>
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


    <div class="frm">
    <div class="container">
        <div class="addMachine">
            <h2>Add Package</h2>
            <form method="post">
                <input type="hidden" name="manageremail" id="manageremail" value="<?= $_SESSION['email']?>">
                <div class="inputBx">
                    <span>Package Type</span>
                    <input type="text" name="packagetype" id="packagetype">
                </div>
                <div class="inputBx">
                    <span>Description</span>
                    <input type="" name="description" id="description">
                </div>
                <div class="inputBx">
                    <span>Payment period</span>
                    <input type="" name="paymentperiod" id="paymentperiod">
                </div>

                <div class="inputBx">
                    <span>Amount</span>
                    <input type="" name="amount" id="amount">
                </div>
                <div class="inputBx">
                    <input type="submit" value="submit">
                </div>

            </form>
        </div>
    </div>
    </div>
    </div>

</body>

</html>