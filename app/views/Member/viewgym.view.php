<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Main/main-styles.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Member/before-db-styles.css">
    <!-- <link rel="stylesheet" type="" href="../css/Main/main-styles.css"> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    

    



</head>
<body>
    <?php 
    // echo '<pre>';
    // var_dump($data);
    // echo '</pre>';
    ?>
    <div class="common-template" style="gap: 1rem;">
        <div class="common-header-gym">
            <div class="common-logo-tab">
                FITFUSION
            </div>
            <div class="common-heading-bar">
                <div class="current-tab">Select Your Gym</div>
                <div class="next-tab">Next Up : Select Package</div>
            </div>
        </div>
        <div class="common-body-gym">
            <div class="detailed-gym-tile">
                <div class="gym-bar-1">
                    <div class="gym-imgs-main-tile">
                        <img class="main-gym-img" src="<?=ROOT?>/assets/uploadgymimages/<?=$data['image'][0]?>" alt="">
                        <div class="small-gym-img-bar">
                            <?php
                            $x=0;
                            foreach($data['image'] as $im){
                                //echo $im;
                                echo '<img class="small-gym-img" src="' . ROOT . '/assets/uploadgymimages/' . $data['image'][$x+1] . '" alt="">';
                                $x=$x+1;
                                if($x==3){
                                    break;
                                }

                            }
                            ?>
                        </div>
                    </div>
                    <div class="gym-description">
                        <?=$data['description']?>
                    </div>
                </div>
                <div class="gym-bar-1">
                    <div class="gym-details">
                        <div class="gym-location-tile">
                            <span class="material-symbols-outlined">
                                location_on
                            </span>
                            <?=$data['location1']?> ,<?=$data['location2']?> ,<?=$data['location3']?>
                        </div>
                        <div class="gym-openhours-tile">
                            <div class="openhour-bar">
                                <div class="openhour-part">
                                    <span class="material-symbols-outlined">
                                        access_time
                                    </span>
                                    Weekdays
                                </div>
                                <div class="openhour-part">
                                    <?=$data['openhourswf']?> - <?=$data['openhourswt']?>
                                </div>
                            </div>
                            <div class="openhour-bar">
                                <div class="openhour-part">
                                    <span class="material-symbols-outlined">
                                        access_time
                                    </span>
                                    Saturdays
                                </div>
                                <div class="openhour-part">
                                    <?=$data['openhourssaf']?> - <?=$data['openhourssat']?>                                
                                </div>
                            </div>
                            <div class="openhour-bar">
                                <div class="openhour-part">
                                    <span class="material-symbols-outlined">
                                        access_time
                                    </span>
                                    Sundays
                                </div>
                                <div class="openhour-part">
                                    <?=$data['openhourssuf']?> - <?=$data['openhourssut']?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gym-details">
                        <div class="gym-facilities-tile">
                            <div class="facilities-bar">Facilities</div>
                            <div class="facilities-content">
                            <?php
                                for($x=count($data['allfacilities'])-1;$x>=0;$x--)
                                    echo '<div class="facility-part">
                                        <span class="material-symbols-outlined">
                                            check_circle
                                        </span>
                                        '. $data['allfacilities'][$x] .'
                                    
                                    </div>';
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gym-bar-2">
                    <div class="gym-details">
                        <div class="gym-machines-tile">
                            <div class="machines-bar">Equipment</div>
                            <div class="machine-content">
                                <?php
                                    for($x=count($data['allmachines'])-1;$x>=0;$x--)
                                        echo '<div class="machines-content-box">
                                            <div class="machine-part">
                                                <span class="material-symbols-outlined">
                                                    fitness_center
                                                </span>
                                                '. $data['allmachines'][$x] .'
                                            
                                            </div>
                                            </div>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="gym-details" style="border: none;">
                        <div class="gym-links-tile">
                            <a class="gym-link-button" href="#">Apply as an Instructor</a>
                            <a class="gym-link-button" href="#">Apply as a Nutritionist</a>
                            <?php
                            echo '<a class="gym-link-button" href="selectpackage?id='.$data['id'].'">View Gym Packages</a>'
                            ?>
                        </div>
                    </div>

                </div>
                <div class="gym-bar-3">
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>