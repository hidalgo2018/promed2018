<?php
session_start();
require_once 'conexao.php';
?>

<!doctype html>
<html lang="pt-br">
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
<script src="js/jquery.maskedinput.js"></script>
<script src="js/materialize.min.js"></script>
<script>
    $(".button-collapse").sideNav();
    jQuery(function($){
        $("#date").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
        $("#fone").mask("(99) 99999-9999");
        $("#tin").mask("99-9999999");
        $("#ssn").mask("999-99-9999");
        $("#cep").mask("99999-999");
    });
    var datePickerPtBr = {
        selectMonths: true,
        selectYears: 200,
        labelMonthNext: 'Próximo mês',
        labelMonthPrev: 'Último mês',
        labelMonthSelect: 'Selecione o mês',
        labelYearSelect: 'Selecione o ano',
        monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
        monthsShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
        weekdaysFull: [ 'Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado' ],
        weekdaysShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
        weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
        today: 'Hoje',
        clear: 'Limpar',
        close: 'Fechar',
        format: 'dd/mm/yyyy'
    };

    $('.datepicker').pickadate(datePickerPtBr);

</script>
</body>
</html>

