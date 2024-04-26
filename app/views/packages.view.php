<html>
    <head>
        <title>FitFusion</title>
        <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/style.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/packagesStyle.css">
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
    <div class="maincontainer">
    <div class="tbl">
    <table>
        <?php
            if(!empty($data)){
                echo'
                <thead>
                <tr>
                    <td scope=cole></td>
                  
                    <td scope=cole>package type</td>
                    <td scope=cole>description</td>
                    <td scope=cole>payment period (months)</td>
                    <td scope=cole>amount</td>
                    <td scope=cole>package group</td>
                </tr>
                </thead>
                ';
            }
        ?>

        <tbody>
            <?php
            if(!empty($data)){
                for ($x = 0; $x < count($data)-1; $x++) {
                    $row = $data[$x];
                    $id = $row->id;
                    $packagetype = $row->packagetype;
                    $description = $row->description;
                    $paymentperiod = $row->paymentperiod;
                    $amount = $row->amount;
                    $packagegroup = $row->packagegroup;
    
                    echo ' <tr>
                            <th scope="row"></th>
                            <td>' . $packagetype . '</td>
                            <td>' . $description . '</td>
                            <td>' . $paymentperiod . '</td>
                            <td>' . $amount . '</td>
                            <td>' . $packagegroup. '</td>
                            <td>
                                <button><a href="">Update</a></button>
                                
                            </td>
                            <br>
                        </tr> ';
                }
            }

            //<button><a href="packages?deleteid=' . $id . '">Remove</a></button>
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
    <div class="secondcontainer">
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
                    <input type="text" name="description" id="description">
                </div>
                <div class="inputBx">
                    <span>Payment period (months)</span>
                    <input type="number" name="paymentperiod" id="paymentperiod">
                </div>

                <div class="inputBx">
                    <span>Amount</span>
                    <input type="number" name="amount" id="amount">
                </div>
                <div class="inputBx">
                    <span>Package Group</span>
                    <select name="packagegroup" id="packagegroup">
                        <option value="instr">Instructor only Package</option>
                        <option value="instrnutri">Instructor and Nutritionists package</option>
                    </select>
                </div>
                <?php if(!empty($errors)):?>
                    <div class="alert">
                        <?= implode("<br>", $errors)?>
                    </div>
                <?php endif ;?>
                <div class="inputBx">
                    <input type="submit" value="submit">
                </div>

            </form>
        </div>

    </div>
    </div>
    </div>
        </div>
</div>
</body>

</html>