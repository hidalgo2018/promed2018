<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 29/11/2017
 * Time: 18:55
 */

?>

<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Faça-nos uma visita</h5>
                <p class="grey-text text-lighten-4">Rua Ipiranga, 25 - Centro<br/>Marília - SP<br/>
                    <abbr title="Telefone">Fone:</abbr> (14) 3413-1918
                </p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links Rápidos</h5>
                <ul>
                    <?php
                    if ($_SESSION['nivel'] == 0){
                        ?>
                        <li><a class="grey-text text-lighten-3" href="?link=20">Informações de Usuários</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Informações de Páginas</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Informações de Especialidades</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Informações de Convênio</a></li>

                        <?php
                    }
                    else{
                        if ($_SESSION['nivel']==1){
                         ?>
                            <li><a class="grey-text text-lighten-3" href="#!">Informações sobre pacientes</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Informações sobre especialidades</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Convênios</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Agenda</a></li>

                         <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <a href="mailto:arnaldo@hidalgojunior.com.br">Arnaldo Martins Hidalgo Junior</a>  © <?=date('Y');?> ProMed Saúde Ocupacional
            <a class="grey-text text-lighten-4 right" href="../index.php?link=999">Clique para Sair</a>
        </div>
    </div>
</footer>
