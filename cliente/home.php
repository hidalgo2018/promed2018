<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 29/11/2017
 * Time: 18:59
 */
$sql = "Select * from paginas where niveluser = ".$_SESSION['nivel'];
$consulta = mysqli_query($conexao,$sql);
$info = mysqli_fetch_assoc($consulta);

//informações para carregar a página
$cargo = $info['cargo'];
$texto = $info['texto'];

?>

<div class="container">
    <div class="row">
        <h4 style="text-shadow: 3px 3px 10px #004d40;">
            <?=utf8_encode($cargo)?>
        </h4>

        <p class="flow-text" style="text-align: justify">
            <?=utf8_encode($texto)?>
        </p>
    </div>
</div>
