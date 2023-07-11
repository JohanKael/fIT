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
            <img src="<?php echo base_url('img/logo.png')?>" alt="">
            <form action="" method="POST">
                <input type="text" name="userName" id="input" placeholder=" Please enter your name"><br>
                <input type="date" name="bday" id="input"><br>
                <input type="number" name="userHeight" id="input" placeholder=" Please enter your height"><br>
                <input type="number" name="userWeight" id="input" placeholder=" Please enter your weight"><br>
                <p><input type="radio" name="userGender" id="">Homme</p>
                <p><input type="radio" name="userGender" id="">Femme</p>
                <input type="submit" value="Sign in" class="sign">
            </form>
        </div>
    </div>

</body>
</html>