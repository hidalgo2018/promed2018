<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 29/11/2017
 * Time: 16:18
 */

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "promed";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!($conexao)){
    echo "Erro ao acessar o banco de dados ".mysqli_error();
}