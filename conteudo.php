
<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 29/11/2017
 * Time: 18:58
 */

    if (isset($_GET['link'])){
        $link = $_GET['link'];
        switch ($link)
        {
            case 10:
                $_SESSION['cod_pag'] = 10;
                (file_exists('empresa.php')? include "empresa.php" : include "erro.php");
                break;
            case 20:
                $_SESSION['cod_pag'] = 20;
                (file_exists('cliente/caduser.php')? include "cliente/caduser.php" :include "erro.php");
                break;
            case 30:
                $_SESSION['cod_pag'] = 30;
                (file_exists('parceiros.php')? include "parceiros.php" :include "erro.php");
                break;
            case 90:
                $_SESSION['cod_pag'] = 90;
                (file_exists('faleconosco.php')? include "faleconosco.php" :include "erro.php");
                break;
            case 50:
                $_SESSION['cod_pag'] = 50;
                (file_exists('teste.php')? include "teste.php" :include "erro.php");
                break;
            case 100:
                $_SESSION['cod_pag'] = 100;
                (file_exists('cliente/login.php')? include "cliente/login.php" :include "erro.php");
                break;
        }
    }
    else{
        include 'home.php';
    }

?>
    <div class="container" style="min-height: 300px;">

    </div>
