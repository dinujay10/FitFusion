<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #myPDF{
            width:100%;
            height:975px;
        }
    </style>

</head>
<body>
<div class="container">
        <h1>Business License</h1>
        <div class="table-responsive">
            
        <?php
        echo '<iframe id="myPDF" src="' . ROOT . '/assets/gymlicenses/' . $data['filename'] . '" frameborder="0"></iframe>';
        ?>

                
            
        </div>
    </div>
</body>
</html>