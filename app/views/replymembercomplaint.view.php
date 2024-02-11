<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/ReplymembercomplaintStyle.css">
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
        </ul>

    </nav>
    <div class="container">
        
        <div class="right">
            <h2>Member Complaint</h2>
            <?php
             
                    if($data[0]->reply!='' and !isset($data['deleteid']) and  isset($data['viewid'])){
                        
                        echo'
                    <div class="complaint">
            
                        <h5>Complaint: '.$data[0]->description.'</h5><br>
                        <h5>About Whom:'.$data[0]->towhom.'</h5><br>
                        <h5>Member Email:'.$data[0]->memberemail.'</h5><br>
                        <h5>Reply:'.$data[0]->reply.'</h5><br>
                        

                        <form method="POST">
                            <textarea id="reply" name="reply" cols="60" rows="8"></textarea>

                            
                            <input type="hidden" id="id" name="id" value="'.$data[0]->id.'">
                            <input type="hidden" id="description" name="description" value="'.$data[0]->description.'">
                            <input type="hidden" id="towhom" name="towhom" value="'.$data[0]->towhom.'">
                            <input type="hidden" id="memberemail" name="memberemail" value="'.$data[0]->memberemail.'">

                            <input type="submit" value="Edit">
                        </form>
                    
                        
                     </div>
                    ';
                    }
                    elseif($data[0]->reply!='' and !isset($data['deleteid'])){
                        echo '
                            <h1>Already Replied</h1>
                        ';
                    }
                    elseif($data[0]->reply!='' and isset($data['deleteid']) and !isset($data['replyid'])){
                        echo'
                        <div class="complaint delete">
                
                            <h5>Complaint: '.$data[0]->description.'</h5><br>
                            <h5>About Whom:'.$data[0]->towhom.'</h5><br>
                            <h5>Member Email:'.$data[0]->memberemail.'</h5><br>
                            <h5>Reply:'.$data[0]->reply.'</h5><br>
                            
    
                            <form method="Post">
                                <input type="hidden" id="deleteid" name="deleteid" value="'.$data[0]->id.'">
                                <div class="delete">
                                    <input type="submit"  value="Confirm Deletion">
                                </div>
                            </form>
                        
                            
                         </div>
                        ';
                    }
                    elseif($data[0]->reply=='' and !isset($data['deleteid']) and isset($data['replyid'])){
                           
                            echo'
                        <div class="complaint">
                
                            <h5>Complaint: '.$data[0]->description.'</h5><br>
                            <h5>About Whom:'.$data[0]->towhom.'</h5><br>
                            <h5>Member Email:'.$data[0]->memberemail.'</h5><br>
                        
                            <form method="POST">
                                <textarea id="reply" name="reply" cols="60" rows="8"></textarea>
                                
                                <input type="hidden" id="id" name="id" value="'.$data[0]->id.'">
                                <input type="hidden" id="description" name="description" value="'.$data[0]->description.'">
                                <input type="hidden" id="towhom" name="towhom" value="'.$data[0]->towhom.'">
                                <input type="hidden" id="memberemail" name="memberemail" value="'.$data[0]->memberemail.'">
    
                                <input type="submit" value="Reply">
                            </form>
                        
                            
                         </div>
                        ';
                        
                    }
                    else{
                        echo '
                        <h1>No reply provided</h1>
                        ';
                    }
                    
                
            ?>
        </div>
          
    </div>

</body>
</html>