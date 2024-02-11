<html>
    <head>
        <title>FitFusion</title>
        <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/style.css">

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <header>
            <a href="#" class = "logo">
                <img src="<?=ROOT?>/assets/images/LogoFinal.png" alt="logo">
            </a>
            <ul class="navmenu">
                <li><a href ="gymmanagerdash">Dashboard</a></li>
                <li><a href ="home">Log Out</a></li>
            </ul>

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