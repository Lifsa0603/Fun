<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $Code = $_REQUEST["code"];
    $sujet = "Code Vérification";
    $Nom = $_REQUEST["nom"];
    $Prenom = $_REQUEST["prenom"];
    $Message = "Bonjour $Prenom $Nom;\nVoici le code de vérification $Code";
    $destinataire = $_REQUEST["mail"];
    mail($destinataire, $sujet, $Message);
    if (!isset($_REQUEST["Vrai"])) {
            ?>
    <form action="Recu.php" method="POST">
        <input type="hidden" name="nom" value="<?php echo $Nom ?>">
        <input type="hidden" name="prenom" value="<?php echo $Prenom ?>">
        <input type="hidden" name="verification" value="<?php echo $Code ?>">
        <input type="hidden" name="mail2" value="<?php echo $destinataire ?>">
        <input type="number" name="Vrai" placeholder="Code Validation">
        <input type="submit" value="Valider">
    </form>
    <?php
    }
    ?>
</body>

</html>