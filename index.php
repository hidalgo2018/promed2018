<?php
session_start();
require_once 'conexao.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>ProMed Saúde Ocupacional</title>
    <link rel="stylesheet" href="css/materialize.css" />
</head>
<body>

<?php
    include 'conexao.php';
    include 'menu.php';
    include 'conteudo.php';
    include 'rodape.php';

?>


<script src="js/jquery.js"></script>
<script src="js/what-input.js"></script>
<script src="js/materialize.min.js"></script>

</body>
</html>