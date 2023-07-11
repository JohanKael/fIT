<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>">
    <title>Document</title>
</head>
<body>

    <div class="contain">
        <div class="imgcontainer">
        </div>
        <div class="formulaire">
            <img src="<?php echo base_url('img/info_perso.png')?>" alt="">
            <p>Information personnel:</p>
            <form action="<?php echo base_url('index.php/login/sign')?>" method="POST">
                <input type="text" name="userName" id="input" placeholder=" Please enter your name" required><br>
                <input type="date" name="bday" id="input" required><br>
                <input type="text" name="email" id="input" placeholder=" Please enter your E-mail" required><br>
                <input type="password" name="password" id="input" placeholder=" Please enter your password" required><br>
                <p><input type="radio" name="userGender" value="homme">Homme</p>
                <p><input type="radio" name="userGender" value="femme">Femme</p>
        </div>
    </div>

    <div class="contain">
        <div class="imgcontainer">
        </div>
        <div class="formulaire">
            <img src="<?php echo base_url('img/info_sante.png')?>" alt="">
            <p>Information santé:</p>
                <input type="number" name="userHeight" id="input" placeholder=" Please enter your height" required>
                <input type="number" name="userWeight" id="input" placeholder=" Please enter your weight" required>
                <input type="submit" value="Sign and Add Info" class="sign">
            </form>
        </div>
    </div>

</body>
</html>