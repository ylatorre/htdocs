<?php define("BR", "</br>"); //  déclaration d'une constante qui se marque toujours en majuscule , 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include("header.php"); ?>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" Integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="../css/menu.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <?php echo BR . BR . BR;
    echo '<style>body{
    background-color:#D4DCFF;
    }
    </style>';
    ?>
    <?php echo "<h1>Hello World ! </h1>"; ?>
    <?php echo '<h1> Je suis l\'ecole </h1>'; ?>
    <?= "TEST"; //shortcut de echo 
    ?>
    <!-- Je suis un commentaire en HTML -->
    <?php // je suis un commentaire en PHP 
    ?>
    <?php echo " debut de texte";  ?> suite du texte
    <?php echo " <p>fin de texte</p>"; ?>
    <!-- On peut mettre du php entre un texte sous html -->

    <!-- Variables, condition et boucles 
    Une variable php commence toujours par $ -->

    <?php

    include("slider.php");

    echo "<div class='shadow p-3 mb-5 bg-white rounded'>Regular shadow</div>";
    echo BR . '
    <div class="container-fluid">
    <div class="row mb-3">
    <div  class="col-4 themed-grid-col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">col 1</font></font></div>
    <div  class="col-4 themed-grid-col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">col 2</font></font></div>
    <div  class="col-4 themed-grid-col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">col 3</font></font></div>
    </div> 
    </div>';


    echo '<img src="logo.png" class="logo" width="250px" height="250px" >';
    ?>
    <!-- Les variables
    Il y a deux catégories de types variables
    les scalaires: integer, booléens et floet
    les composés: les tableaux et les objets

    Si la variable n'a aucun type elle vaut nul

    La concaténation
    pour afficher une variable dans un echo on va utiliser le '\' ou le '.'
    Les constantes 

    Les conditions 
    les conditions permettent d'éxécutter du code si true ou false
    est égale à  ==
    est différent de   !=
    est inférieur   <
    est supérieur   >
    est inférieur ou égal <=
    est supérieur ou égal >=  
 -->
 
    <script src="https://code.jquery.com/jquery.min.j.4.1.j.4.1. " Integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm@/popper.jd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" intégrité="SHA384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>