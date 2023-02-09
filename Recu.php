<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $Validation = $_REQUEST["verification"];
        $Saisi = $_REQUEST["Vrai"];
        $Nom = $_REQUEST["nom"];
        $Prenom = $_REQUEST["prenom"];
        if ($Validation==$Saisi) {
        echo ("Validation Réussi");
        $sujet2 = "Validation Réussi";
        $Message2 = "Merci $Prenom $Nom,\nLa Vérification est réussi";
        $destinataire2 = $_REQUEST["mail2"];
        mail($destinataire2, $sujet2, $Message2);
    }
    else {
        echo ("Saisie Incorrecte");
        $sujet2 = "Erreur Code Validation";
        $Message2 = "Désolé $Nom,\nMais Le code saisi est incorrecte\nVous avez saisi $Saisi\nMais le code est:$Validation";
        $destinataire2 = $_REQUEST["mail2"];
        mail($destinataire2, $sujet2, $Message2);  
    }
    ?>
</body>

</html>