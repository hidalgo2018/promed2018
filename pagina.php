<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 21/12/2017
 * Time: 09:58
 */
?>
<div class="container-fluid">
    <div class="container" style="min-height: 67vh">
        <?php
        if (isset($_GET['link'])) {
            $link = $_GET['link'];

            switch ($link) {
                case 10:
                    file_exists('empresa.php' ? include 'empresa.php' : include 'erro.php');
                    break;
                case 20:
                    file_exists('medicos.php' ? include 'medicos.php' : include 'erro.php');
                    break;
                case 30:
                    file_exists('funcionamento.php' ? include 'funcionamento.php' : include 'erro.php');
                    break;
                case 40:
                    file_exists('fale.php' ? include 'fale.php' : include 'erro.php');
                    break;
                default:
                    file_exists('conteudo.php' ? include 'conteudo.php' : include 'erro.php');
                    break;
            }
        } else {

            file_exists('conteudo.php' ? include 'conteudo.php' : include 'erro.php');
        }
        ?>
    </div>
</div>
