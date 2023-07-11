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
                <h3>Choisir le programme: </h3>
                <form action="<?php echo base_url('index.php/login/home')?>" method="POST">
                    <?php foreach($infoDescri as $objectif){ ?>
                        <p><input type="radio" name="objectif" value="<?php echo $objectif['idObjectif'] ?>"><?php echo $objectif['descriObjectif'] ?></p>
                    <?php } ?> 
                    <input type="submit" value="Choisir" class="valid">
                </form>
            </div>
        </div>

</body>
</html>