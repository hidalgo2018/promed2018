<?php
/**
 * Created by PhpStorm.
 * User: Arnaldo Martins Hidalgo Junior
 * Date: 21/12/2017
 * Objetivo: Criação do Site Principal da Promed Saude
 */
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allura|Bellefair|Bilbo|Cinzel+Decorative|Exo|Fredericka+the+Great|Great+Vibes|IM+Fell+DW+Pica|Julius+Sans+One|Lovers+Quarrel|Meddon|Mrs+Saint+Delafield|Raleway|Ruthie|Sail|UnifrakturCook:700"
          rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css">
    <title>Promed - Marília - Site em Desenvolvimento</title>

    <!--
    font-family: 'Raleway', sans-serif;
    font-family: 'Exo', sans-serif;
    font-family: 'Great Vibes', cursive;
    font-family: 'Bellefair', serif;
    font-family: 'Julius Sans One', sans-serif;
    font-family: 'Allura', cursive;
    font-family: 'Cinzel Decorative', cursive;
    font-family: 'Fredericka the Great', cursive;
    font-family: 'Meddon', cursive;
    font-family: 'IM Fell DW Pica', serif;
    font-family: 'UnifrakturCook', cursive;
    font-family: 'Sail', cursive;
    font-family: 'Ruthie', cursive;
    font-family: 'Mrs Saint Delafield', cursive;
    font-family: 'Lovers Quarrel', cursive;
    font-family: 'Bilbo', cursive;
    -->



</head>
<body>

<div class="container-fluid">
    <?php file_exists('menu.php' ? include 'menu.php' : include 'erro.php'); ?>

    <?php file_exists('pagina.php' ? include 'pagina.php' : include 'erro.php'); ?>

    <?php file_exists('rodape.php' ? include 'rodape.php' : include 'erro.php'); ?>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript">
    $(".button-collapse").sideNav();
</script>

</body>
</html>
