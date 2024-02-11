<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/HandleMemberComplaintStyle.css">
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
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Member's  complaints</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="<?=ROOT?>/assets/images/search-btn.png" alt="" alt="">
            </div>
            <!-- <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div> -->
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Member Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Complaint<span class="icon-arrow">&UpArrow;</span></th>
                        <th> About Whom <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Reply Status <span class="icon-arrow">&UpArrow;</span></th>
                        <th>View <span class="icon-arrow"></span></th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($data as $x){
                    if($x->reply==""){
                        $x->reply="Not Replied";
                    }
                    else{
                        $x->reply="Replied";
                    }
                    echo '
                    <tr>
                        <td> '.$x->id.' </td>
                    
                        <td> '.$x->memberemail.'  </td>
                        <td>  '.$x->description.' </td>
                        <td>'.$x->towhom.'</td>
                        <td>
                        <p class="status '.$x->reply.'"> '.$x->reply.' </p>
                        </td>
                        <td>';
                        
                        if($x->reply=="Replied"){
                            echo '
                            <a href="replymembercomplaint?viewid='.$x->id.'"><p class="status view"> View </p></a>
                            <a href="replymembercomplaint?deleteid='.$x->id.'"><p class="status Not Replied"> Delete </p></a>
                            ';
                        }
                        
                        
                        if($x->reply=="Not Replied"){
                            echo '<a href="replymembercomplaint?replyid='.$x->id.'"><p class="status  Replied"> Reply </p></a>';
                        }
                        echo '
                        
                        </td>
                   
                    </tr>
                    ';
                }
                ?>
                    
                    
                </tbody>
            </table>
        </section>
    </main>
    <script src="<?=ROOT?>/assets/js/replymembercomplaint.js"></script>

</body>
</html>