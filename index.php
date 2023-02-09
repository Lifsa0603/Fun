<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="./css/main.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="v1_3">
            <div class="v1_4"><span class="v1_11">HOME PAGE</span></div>
            <div class="v1_12"></div>
            <span class="v1_13">
                Je m’appelle Salif Diallo <br>
                J’ai 21ans(2022) <br>
                J’étudie a l’esp <br>
                Et j’aime Robinho
            </span>
            <div class="v1_14"></div>
        </div>
        <div class="Formulaire">
            <form method="POST" action="essai.php">
                <fieldset>
                    <legend>Identification</legend>
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="item1"> <br>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="item2"> <br>
                    <label for="mail">E-mail</label>
                    <input type="text" name="mail" id="mail">
                    <label for="code"></label>
                    <input type="hidden" name="code" value="<?php echo (rand(100000,999999)); ?>">
                    <br>
                    <input type="submit" value="Enregistrer">
                </fieldset>
        </div>
    </div>

</body>

</html>