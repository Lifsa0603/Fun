<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!(isset($_REQUEST["mail"]) || isset($_REQUEST["nom"]))) {
    ?>
    <form action="essai.php" method="POST">
        Nom<input type="text" name="nom" placeholder="Entrez votre nom"> <br>
        E-mail<input type="mail" name="mail" placeholder="Entrez votre mail"> <br>
        <input type="hidden" name="code" value="<?php echo (rand(100000,999999)); ?>">
        <input type="submit" value="OK">
    </form>
    <?php
    }
    ?>

</body>

</html>