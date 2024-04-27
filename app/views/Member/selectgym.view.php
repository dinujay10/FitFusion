<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Main/main-styles.css">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/Member/before-db-styles.css">

    
</head>
<body>
    <div class="common-template">
        <div class="common-header">
            <div class="common-logo-tab">
                FITFUSION
            </div>
            <div class="common-heading-bar">
                <div class="current-tab">Select Your Gym</div>
                <div class="next-tab">Next Up : Select Package</div>
            </div>
        </div>
        <div class="common-body">
            <div class="body-tile">
                <?php
                    
                    for($x=0;$x<count($data);$x++){
                        echo '<a class="gym-tile" href="viewgym?id='.$data[$x]['id'].'">
                            <img class="gym-img" src="'.ROOT.'/assets/uploadgymimages/'.$data[$x]['gymimages'].'" alt="">
                        
                            <div class="gym-text">
                                '.$data[$x]['gymName'].'
                            </div>
                        
                        </a> '  ;
                    }
                    
                ?>
                
            </div>
            
        </div>
    </div>

</body>
</html>

<!-- echo '<a href="gympagetest?id='.$data[$x]['id'].'">
                        <div class="gym-tile">
                            <img class="gym-img" src="'.ROOT.'/assets/uploadgymimages/'.$data[$x]['gymimages'].'" alt="">
                        
                            <div class="gym-text">
                                '.$data[$x]['location2'].' ,'.$data[$x]['location3'].'
                            </div>
                        
                            <div class="rating">
                                <i class="bx bx-star" ></i>
                                <i class="bx bx-star" ></i>
                                <i class="bx bx-star" ></i>
                                <i class="bx bx-star" ></i>
                                <i class="bx bx-star" ></i>

                            </div>
                            <div class="price">
                                <h4>'.$data[$x]['gymName'].'</h4>
                                <p>Rs. 3000 onwards</p>
                            </div>
                        </div>   </a> '  ; -->