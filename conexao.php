<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 29/11/2017
 * Time: 16:18
 */


/* Acesso Local*/
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "promed";


/*
 * Acesso OnLine

$servidor = "localhost";
$usuario = "hidalgo";
$senha = "@Rna7d0sQm";
$banco = "promed";
 */
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!($conexao)){
    echo mysqli_error() . "Erro ao acessar o banco de dados ";
}