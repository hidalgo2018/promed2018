<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 30/11/2017
 * Time: 10:17
 */

    if (isset($_POST['acessar'])){
        $nome = $_POST['correio'];
        $senha = $_POST['senha'];

        $cripto = md5($senha);
        $sql = "select * from promed.usuarios WHERE email = '$nome' and senha = '$cripto'";

        echo $sql;

        $achou = mysqli_query($conexao,$sql);
        $num = mysqli_num_rows($achou);
        echo "<br/>Linhas: ".$num;

        if (mysqli_num_rows($achou)>0){
            $linha = mysqli_fetch_assoc($achou);
            $_SESSION['nome'] = $linha['nome'];
            if ($linha['nivel']== 0){
                $_SESSION['nivel'] = 0;

                header('location: cliente/index.php');
            }
            else{
                if ($linha['nivel']==1){
                    $_SESSION['nivel']=1;
                    header('location: cliente/index.php');
                }
            }

            echo "<br/>Nivel: ".$linha['nivel'];
        }

    }

?>

<br/><br/>
<div class="container">
    <div class="row">
        <div class="col s3"></div>
        <div class="col s6 teal z-depth-3"><p class="flow-text" style="padding-left: 20px"><strong>ACESSO RESTRITO</strong></p> </div>
        <div class="col s3">
        </div>
    </div>
    <form name="login" method="post">
    <div class="row">
        <div class="col s3"></div>
        <div class="col s6">
            <label class="active" for="first_name2" >E-mail</label>
            <input id="first_name2" type="email" class="validate" placeholder="Insira o Nome do Usuário" name="correio">
        </div>
        <div class="col s3">
        </div>
    </div>
    <div class="row">
        <div class="col s3"></div>
        <div class="col s6">
            <label class="active" for="first_name2">Senha</label>
            <input id="first_name2" type="password" class="validate" placeholder="Senha de Acesso" name="senha">
        </div>
        <div class="col s3">
        </div>
    </div>
    <div class="row">
        <div class="col s3"></div>
        <div class="col s6 ">
                <button class="btn waves-effect waves-light" type="submit" name="acessar">Entrar
                    <i class="material-icons right">send</i>
                </button>
                <button class="btn waves-effect waves-light" type="reset" name="limpar">Limpar
                    <i class="material-icons right">clear</i>
                </button>
        </div>
        <div class="col s3">
        </div>
    </div>
    </form>

</div>
