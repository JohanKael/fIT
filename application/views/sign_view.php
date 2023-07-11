<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>">
    <title>Document</title>
</head>
<body>

    <div class="contain signin">
        <div class="imgcontainer">
        </div>
        <div class="formulaire">
            <img src="<?php echo base_url('img/logo.png')?>" alt="">
            <form action="<?php echo base_url('index.php/login/sign')?>" method="POST">
                <input type="text" name="userName" id="input" placeholder=" Please enter your name"><br>
                <input type="date" name="bday" id="input"><br>
                <input type="number" name="userHeight" id="input" placeholder=" Please enter your height"><br>
                <input type="number" name="userWeight" id="input" placeholder=" Please enter your weight"><br>
                <input type="text" name="email" id="input" placeholder=" Please enter your E-mail"><br>
                <input type="password" name="password" id="input" placeholder=" Please enter your password"><br>
                <p><input type="radio" name="userGender" value="homme">Homme</p>
                <p><input type="radio" name="userGender" value="femme">Femme</p>
                <input type="submit" value="Sign in" class="sign">
            </form>
        </div>
    </div>

</body>
</html>