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
            <li><a href="home">Home</a></li>
            <li><a href="#">AboutUs</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="login">Logout</a></li>
        </ul>
    </nav>
    <h2><b>Basic Flexibility Plans</b></h2>

    <div class="maincontainer">

        <?php foreach ($data['flexibilityPlans'] as $flexibilityPlan): ?>



            <div class="frm">

                <div class="container">

                    <div class="addMachine">
                        <h2><u>Plan</u></h2>
                        <form method="post">

                            <div class="inputBx">
                                <span><b>id</b></span>
                                <input type="text" name="id" id="id" value="<?= $flexibilityPlan['id'] ?>">
                            </div>

                            <div class="inputBx">
                                <span><b>Instructor email</b></span>
                                <input type="text" name="iemail" id="iemail" value="<?= $flexibilityPlan['iemail'] ?>">
                            </div>
                            <div class="inputBx">
                                <span><b>Main goal</b></span>
                                <input type="text" name="maingoal" id="maingoal"
                                    value="<?= $flexibilityPlan['maingoal'] ?>">
                            </div>
                            <div class="inputBx">
                                <span><b>Workouttype</b></span>
                                <input type="text" name="workouttype" id="workouttype"
                                    value="<?= $flexibilityPlan['workouttype'] ?>">
                            </div>
                            <div class="inputBx">
                                <span><b>Training Level</b></span>
                                <input type="text" name="traininglevel" id="traininglevel"
                                    value="<?= $flexibilityPlan['traininglevel'] ?>">
                            </div>
                            <div class="inputBx">
                                <span><b>Program Duration</b></span>
                                <input type="text" name="programduration" id="programduration"
                                    value="<?= $flexibilityPlan['programduration'] ?>">
                                <div class="inputBx">
                                    <span><b>DaysPerWeek</b></span>
                                    <input type="text" name="daysperweek" id="daysperweek"
                                        value="<?= $flexibilityPlan['daysperweek'] ?>">
                                </div>
                                <div class="inputBx">
                                    <span><b>Target Gender</b></span>
                                    <input type="text" name="targetgender" id="targetgender"
                                        value="<?= $flexibilityPlan['targetgender'] ?>">
                                </div>


                                <div class="inputBx">
                                    <span><b>Suppliments</b></span>
                                    <?php if (is_array($flexibilityPlan['suppliment'])): ?>
                                        <ul>
                                            <?php foreach ($flexibilityPlan['suppliment'] as $suppliment): ?>
                                                <li>
                                                    <?= $suppliment->suppliment ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <input type="text" name="suppliment" id="suppliment"
                                            value="<?= $flexibilityPlan['suppliment'] ?>">
                                    <?php endif; ?>
                                </div>



                                <h2>Exercise Data</h2>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Exercise</th>
                                            <th>Machine</th>
                                            <th>Sets</th>
                                            <th>Time (mins)</th>
                                            <th>Rest Time (mins)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($flexibilityPlan['exercises'] as $exercise): ?>
                                            <tr>
                                                <td><?= $exercise['exercise'] ?></td>
                                                <td><?= $exercise['machine'] ?></td>
                                                <td><?= $exercise['sets'] ?></td>
                                                <td><?= $exercise['time'] ?></td>
                                                <td><?= $exercise['rest'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <br>
                                <a href="members?planid=<?= $flexibilityPlan['id'] ?>"><u>Assign to a member</u></a>

                            </div>


 
                        </form>



                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>




</body>

</html>