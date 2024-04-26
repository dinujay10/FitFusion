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
    <div class="common-template" style="gap: 1rem;">
        <div class="common-header" style="z-index: 10;">
            <div class="common-logo-tab">
                FITFUSION
            </div>
            <div class="common-heading-bar">
                <div class="current-tab">Select Your Gym</div>
                <div class="next-tab">Next Up : Instructor Meeting</div>
            </div>
        </div>
        <div class="common-body">
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
                                    <?=$data['openhourssaf']?> - <?=$data['openhourssat']?>                                </div>
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
                            
                        </div>
                    </div>
                </div>
                <div class="gym-bar"></div>
                <div class="gym-bar"></div>
            </div>
        </div>
    </div>
</body>
</html>