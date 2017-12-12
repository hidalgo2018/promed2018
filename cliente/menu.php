<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 29/11/2017
 * Time: 18:57
 */
?>
<nav class="black-text teal darken-2 z-depth-2">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo"><img src="../imgs/logo.png" class="responsive-img z-depth-3" style="width: 150px;"/> </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <?php
                if ($_SESSION['nivel']== 0){
                    ?>
                    <li><a href="index.php?link=10">Médicos</a></li>
                    <li><a href="index.php?link=20">Usuários</a></li>
                    <li><a href="index.php?link=30">Parceiros</a></li>
                    <li><a href="index.php?link=90">Fale Conosco</a></li>
                    <?php
                }
                else{
                    if($_SESSION['nivel']== 1){
                        ?>
                        <li><a href="index.php?link=10">Médicos</a></li>
                        <li><a href="index.php?link=20">Usuários</a></li>
                        <li><a href="index.php?link=30">Suporte</a></li>
                        <li><a href="index.php?link=90"><?=$_SESSION['nome']?></a></li>
                        <?php
                    }
                }
                ?>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php?link=10">A Empresa</a></li>
                <li><a href="index.php?link=20">Sobre</a></li>
                <li><a href="index.php?link=30">Parceiros</a></li>
                <li><a href="index.php?link=90">Fale Conosco</a></li>
            </ul>
        </div>
    </div>
</nav>

