<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/login.css')?>">
    <title>Document</title>
</head>
<body>

    <div class="contain">
        <div class="imgcontainer">

        </div>
        <div class="formulaire">
            <img src="<?php echo site_url('img/logo.png')?>" alt="">
            <form action="" method="POST">
                <input type="email" name="userEmail" id="input" placeholder="Your E-Mail"><br>
                <input type="password" id="input" name="userPassword" placeholder="Your Password"><br>
                <input type="submit" value="Log In" class="valid">
            </form>
            <a href="<?php echo base_url('index.php/login/sign')?>" >Sign in</a>
        </div>
    </div>

</body>
</html>