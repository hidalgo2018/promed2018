<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 04/12/2017
 * Time: 21:45
 */
include "smsGateway.php";
$add = "'sms@hidalgojunior.com.br'";
$pwd = "'jr34139251'";
function enviar_sms($num, $msg)
{
//Enviando Mensagens
    $smsGateway = new SmsGateway($add,$pwd);


    $deviceID = 68449;
    $number = $num;
    $message = $msg;

    $options = [
        'send_at' => strtotime('+10 minutes'), // Send the message in 10 minutes
        'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
    ];

//Please note options is no required and can be left out
    $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);
}

function lista_sms()
{
    $smsGateway = new SmsGateway('demo@smsgateway.me', 'password');

    //Lista de mensagens

    $page = 1;

    $result = $smsGateway->getMessages($page);
}

function listar_sms($id){
    $smsGateway = new SmsGateway('demo@smsgateway.me', 'password');

    $id = 9;

    $result = $smsGateway->getMessage($id);
}

function envia_varios(){
    $smsGateway = new SmsGateway('demo@smsgateway.me', 'password');


    $deviceID = 1;
    $numbers = ['+44771232343', '+44771232344'];
    $message = 'Hello World!';

    $options = [
        'send_at' => strtotime('+10 minutes'), // Send the message in 10 minutes
        'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
    ];

//Please note options is no required and can be left out
    $result = $smsGateway->sendMessageToManyNumbers($numbers, $message, $deviceID, $options);
}

function cria_contato(){
    $smsGateway = new SmsGateway('demo@smsgateway.me', 'password');
    $result = $smsGateway->createContact('Mr Foo Bar', '+44771234567');
}
?>
