<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 04/12/2017
 * Time: 15:31
 */
include "inc/smsGateway.php";
if(isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $fone = $_POST['fone'];
    $mensagem = $_POST['mensagem'];
    $assunto = $_POST['assunto'];
    $smsGateway = new SmsGateway('sms@hidalgojunior.com.br', 'jr34139251');

    $deviceID = 68449;
    $number = "'55".$fone."'";
    $message = $mensagem;

//Please note options is no required and can be left out
    $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);
    if ($result){
        ?>
        <script>
            window.alert('Mensagem Enviada com Sucesso');
        </script>
        <?php
    }
    else{
        ?>
        <script>
            window.alert('Falha no Envio da Mensagem');
        </script>
        <?php

    }
}
?>


<div class="container">
    <div class="row">
        <div class="col s2 m2 l2"></div>
        <div class="col s8 m8 l8">
            <h3 class="red-text">.:: Fale Conosco ::.</h3>
            <div class="divider"></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col s3"></div>
        <div class="col s6">
            <div class="col s12">
                <form name="fale" method="post">
                    <div class="input-field col s12">
                        <input id="input_text" type="text" data-length="40" name="nome">
                        <label for="input_text">Nome Completo:</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="tel" id="fone" name="fone" data-mask="(00) 00000-0000" data-mask-selectonfocus="true" />
                        <label for="fone">Telefone: </label>
                    </div>
                    <div class="input-field col s12">
                        <input id="input_text" type="text" data-length="40" name="assunto">
                        <label for="input_text">Assunto:</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" name="mensagem" data-length="120"></textarea>
                        <label for="textarea1">Mensagem</label>
                    </div>
                    <button class="btn" name="enviar" type="submit">Enviar</button>
                </form>
            </div>
        </div>
        <div class="col s3"></div>
    </div>
</div>
