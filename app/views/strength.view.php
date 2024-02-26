<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/CreatedworkoutplansStyle.css">
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
            <li><a href="login">Logout</a></li>
        </ul>
    </nav>
    <h2><b>Basic Strength Plans</b></h2>
    <div class="maincontainer">
        <!-- //<h2><b>Workout Plans</b></h2> -->

        <?php foreach ($data['strengthPlans'] as $strengthPlan): ?>


            <!-- print_r($data);
                  
                $id=$data['id'];
                $iemail=$data['iemail'];
                $maingoal=$data['maingoal'];
                $workouttype=$data['workouttype'];
                $traininglevel=$data['traininglevel'];
                $programduration=$data['programduration'];
                $daysperweek=$data['daysperweek'];
                $targetgender=$data['targetgender'];
                $suppliment=$data['suppliment'];
                $equipment=$data['equipment'];
            
            //$raw= mysqli_fetch_assoc($data);
            //echo '<pre>'; print_r($data); echo '</pre>'; 
            //var_dump($data[0]);
              
            ?> -->

            <div class="frm">
                <div class="container">
                    <div class="addMachine">
                        <h2><u>Plan</u></h2>
                        <form method="post">

                            <div class="inputBx">
                                <span><b>id</b></span>
                                <input type="text" name="id" id="id" value="<?= $strengthPlan['id'] ?>">
                            </div>

                            <div class="inputBx">
                                <span><b>Instructor email</b></span>
                                <input type="text" name="iemail" id="iemail" value="<?= $strengthPlan['iemail'] ?>">
                            </div>
                            <div class="inputBx">
                                <span><b>Main goal</b></span>
                                <input type="text" name="maingoal" id="maingoal" value="<?= $strengthPlan['maingoal'] ?>">
                            </div>
                            <div class="inputBx">
                                <span><b>Workouttype</b></span>
                                <input type="text" name="workouttype" id="workouttype"
                                    value="<?= $strengthPlan['workouttype'] ?>">
                            </div>
                            <div class="inputBx">
                                <span><b>Training Level</b></span>
                                <input type="text" name="traininglevel" id="traininglevel"
                                    value="<?= $strengthPlan['traininglevel'] ?>">
                            </div>
                            <div class="inputBx">
                                <span><b>Program Duration</b></span>
                                <input type="text" name="programduration" id="programduration"
                                    value="<?= $strengthPlan['programduration'] ?>">
                            
                                <div class="inputBx">
                                    <span><b>DaysPerWeek</b></span>
                                    <input type="text" name="daysperweek" id="daysperweek"
                                        value="<?= $strengthPlan['daysperweek'] ?>">
                                </div>
                                <div class="inputBx">
                                    <span><b>Target Gender</b></span>
                                    <input type="text" name="targetgender" id="targetgender"
                                        value="<?= $strengthPlan['targetgender'] ?>">
                                </div>
                                <div class="inputBx">
                                    <span><b>Suppliments</b></span>
                                    <?php if (is_array($strengthPlan['suppliment'])): ?>
                                        <ul>
                                            <?php foreach ($strengthPlan['suppliment'] as $suppliment): ?>
                                                <li>
                                                    <?= $suppliment->suppliment ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <input type="text" name="suppliment" id="suppliment"
                                            value="<?= $strengthPlan['suppliment'] ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="inputBx">
                                    <span><b>Equipments</b></span>
                                    <?php if (is_array($strengthPlan['equipment'])): ?>
                                        <ul>
                                            <?php foreach ($strengthPlan['equipment'] as $equip): ?>
                                                <li>
                                                    <?= $equip->equipment ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <input type="text" name="equipment" id="equipment"
                                            value="<?= $strengthPlan['equipment'] ?>">
                                    <?php endif; ?>
                                </div>


                                <button type="submit" name="submit" value="submit">Assign to a member</button>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>




</body>

</html>