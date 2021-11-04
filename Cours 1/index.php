<!DOCTYPE html>
<html lang="fr">
<?php define("BR", "</br>"); ?> //declaration d'une constante

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php 1</title>

</head>

<body>
    <?php echo "<h1>test php 1</h1>" ?>
    <!-- je suis un commentaire -->

    <?php // je suis un commentaire en php 
    ?>
    <?= "TEST" ?>
    <?php echo "debut de texte"; ?> suite du texte <?php echo "fin du texte"; ?>
    <?php echo "<p>test</p>"; ?>
    <?php $age = 40; //!declaration d'une variable php
    $age = "age"; //! variable non typee
    $amis = "tous mes amis sont des \"super\"amis ";
    echo "je suis \$amis"; //! Sa ne marche pas
    echo "je suis " . $amis;
    echo "je suis " . $amis . BR;
    echo "je suis " . $amis . BR;

    $prenom = "yvan";
    if ($prenom == "yvan") {
        echo "bonjour " . $prenom;
    } else {
        echo "T'es qui";
    }
    echo BR;
    $age = "30";
    if ($age > 20) {
        if ($age == 30) {
            echo "bienvenu";
        } else echo "Au revoir";
    }
    echo BR;
    $prenom = "Yvan";
    switch ($prenom) {
        case "test":
            echo "prenom est égale a test";
            break;
        case "Yvan":
            echo "prenom est égale a yvan";
            break;
        default:
            echo "Je sais pas";
            break;
    }
    echo BR;
    for ($i = 0; $i <= 10; $i++) {
        if ($i === 5) {
            echo "\$i = $i";
            break;
        }
        echo "\$i = " . $i . BR;
    }
    echo BR;
    $🎅 = 1;
    while ($🎅 <= 10) {
        $🎅++;
        echo "🎅" . BR;
        if ($🎅 === 6) {
            break;
        }
    }
    echo BR;
    //*transtypage

    $chiffre = 15.64366;
    echo "La valeur \$chiffre entiere est " . (int)$chiffre;
    echo BR;
    echo gettype($chiffre);
    echo BR;
    echo gettype((int)$chiffre);
    echo BR;
    echo gettype((string)$chiffre);
    echo BR;

    if (gettype($🎅) === "integer") {
        echo "\🎅 est un entier";
    } else {
        echo "est autre chose";
    }
    echo "blabla" . BR . BR . BR;
    echo '<button  onClick="test()">CLICK ME BABY</button>';
    echo BR . "<span id='test'>En attente ...</span>" . BR;
    ?>
    <script src="index.js"></script><br>
    <!-- <script src="index2.js"></script> -->
</body>

</html>