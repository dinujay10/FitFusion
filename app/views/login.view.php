<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/LoginStyle.css">
</head>
<body>
    <nav>
        <div class = "logo">
            <p>FitFusion</p>
        </div>

        <ul>
            <li><a href ="home">Home</a></li>
            <li><a href ="#">AboutUs</a></li>
            <li><a href ="#">Services</a></li>
        </ul>

    </nav>
    <section>
        <div class="imgBx">
            <img src="<?=ROOT?>/assets/images/gym pic 2.jpg" alt="">
        </div>
        <div class="contentBx">
            <div class="formBx"> 
                <h2>Login</h2>
                <form method="POST">
                    <?php if(!empty($errors)):?>
                    <div class="alert">
                        <?= implode("<br>", $errors)?>
                    </div>
                    <?php endif ;?>
                    
                    <div class="inputBx">
                        <span>UserName</span>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Login">
                    </div>
                    <div class="inputBx">
                        <p>Don't have an account? <a href="signup">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>