<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 30/11/2017
 * Time: 16:48
 */
//TODO: Finalizar formulário e salvar no banco
//TODO: Criar a página de consulta às informações salvas
//TODO: Criar relatórios de faixas etárias mediante cadsatros
?>
<script type="text/javascript">
    window.onload=function(){
            $(document).ready(function() {
                $('select').material_select();
            });
    }
</script>

<?php

        function date_converter($_date = null) {
            $format = '/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/';
            if ($_date != null && preg_match($format, $_date, $partes)) {
                return $partes[3].'-'.$partes[2].'-'.$partes[1];
            }
            return false;
        }


    if (isset($_POST['enviar'])){

        //recebendo as variáveis
        $nome       = utf8_decode($_POST['nome']);
        $sexo       = utf8_decode($_POST['sexo']);
        $correio    = utf8_decode($_POST['correio']);
        $nivel      = utf8_decode($_POST['nivel']);
        $senha      = utf8_decode($_POST['senha']);
        $senha2     = utf8_decode($_POST['senha2']);
        $fone       = utf8_decode($_POST['fone']);
        $datanasc   = ($_POST['dataNasc']);
        $cep        = utf8_decode($_POST['cep']);
        $endereco   = utf8_decode($_POST['endereco']);
        $bairro     = utf8_decode($_POST['bairro']);
        $cidade     = utf8_decode($_POST['cidade']);
        $uf         = utf8_decode($_POST['uf']);

        $dn = date_converter($datanasc);


        //criptografando senha
        $cripto = md5($senha);
        $data = date('Y-m-d H:i:s');
        $sql = "insert into promed.usuarios (nome, senha, email, telefone, endereco, cep, bairro, cidade, uf, sexo, dataNasc ) 
                VALUES ('$nome', '$cripto', '$correio', '$fone', '$endereco', '$cep', '$bairro', '$cidade', '$uf',  '$sexo', '$dn')";

        $gravou = mysqli_query($conexao,$sql);

        if ($gravou){
            ?>
            <script type="text/javascript" language="JavaScript">
                alert ('Dados Gravados com Sucesso.');
            </script>
            <?php
        }
        else
            {
            ?>
            <script type="text/javascript" language="JavaScript">
                alert ('Erro ao gravar os dados.');
            </script>
            <?php
        }
    }

?>



<div class="container">
    <div class="row">
        <div class="col s2 m2 l2"></div>
        <div class="col s8 m8 l8">
            <h1 class="red-text flow-text display-2"><strong>.:: CADASTRO DE USUÁRIOS DO SISTEMA ::.</strong></h1>
            <div class="divider"></div>
            <p class="flow-text" style="text-align: justify">Preencha as informações abaixo para acessar o sistema.</p>
        </div>
    </div>
    <form name="usuario" method="post">

    <div class="row">
        <div class="input-field col s12 m7 l8">
            <input id="nome_user" name="nome" type="text" data-length="40">
            <label for="nome_user">Nome do Usuário</label>
        </div>
        <div class="input-field col s12 m5 l4">
            <select name="sexo">
                <option value="" disabled selected>Escolha uma opção</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
            <label for="sexo">Sexo</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l9">
            <input id="email" name="correio" type="email" class="validate">
            <label for="email">E-mail</label>
        </div>
        <div class="input-field col s12 m6 l3">
            <select name="nivel">
                <option value="" disabled selected>Qual nível se enquadra</option>
                <option value="0">Administrador Geral</option>
                <option value="1">Administrativo</option>
                <option value="2">Financeiro</option>
                <option value="3">Secretaria</option>
                <option value="4">Paciente</option>
                <option value="5">Médico</option>
                <option value="6">Suporte</option>
                <option value="7">HelpDesk</option>
                <option value="8">Conveniado</option>
                <option value="9">Área Comum</option>
            </select>
            <label for="nivel">Nível</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 l3 input-field">
            <input id="senha" type="password" name="senha" placeholder="Cadastre a senha" data-lenght="32">
            <label for="senha">Senha</label>
        </div>
        <div class="col s12 m6 l3 input-field">
            <input id="redigite" type="password" name="senha2" placeholder="Digite novamente a senha" data-lenght="32">
            <label for="redigite">Repita a senha</label>
        </div>
        <div class="col s12 m6 l3 input-field">
            <input id="fone" type="tel" name="fone" class="validate" >
            <label for="fone">Telefone</label>
        </div>
        <div class="input-field col s12 m6 l3">
            <input type="date" id="dataNasc" class="datepicker" name="dataNasc">
            <label for="dataNasc">Data de Nascimento</label>
        </div>
    </div>
        <div class="row">
            <div class="input-field col s12 m2 l3">
                <input type="text" id="cep" name="cep"/>
                <label for="cep">CEP</label>
            </div>
            <div class="col s12 m6 l6 input-field">
                <input type="text" name="endereco" id="endereco" data-lenght="40" placeholder="Rua / Numero / Complemento">
                <label for="endereco">Endereço</label>
            </div>
            <div class="col s12 m4 l3 input-field">
                <input type="text" name="bairro" id="bairro" data-lenght="40" placeholder="Informe o bairro de sua residencia">
                <label for="bairro">Bairro</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m8 l8">
                <input type="text" id="cidade" name="cidade"/>
                <label for="Cidade">Cidade</label>
            </div>
            <div class="col s12 m4 l4 input-field">
                <select name="uf">
                    <option value="" disabled selected>Estado</option>
                    <option value="ac">AC - Acre</option>
                    <option value="al">AL - Alagoas</option>
                    <option value="am">AM - Amazonas</option>
                    <option value="ap">AP - Amapá</option>
                    <option value="ba">BA - Bahia</option>
                    <option value="ce">CE - Ceará</option>
                    <option value="df">DF - Distrito Federal</option>
                    <option value="ES">ES - Espírito Santo</option>
                    <option value="GO">GO - Goiás</option>
                    <option value="MA">MA - Maranhão</option>
                    <option value="MS">MS - Mato Grosso do Sul</option>
                    <option value="MT">MT - Mato Grosso</option>
                    <option value="PA">PA - Pará</option>
                    <option value="PB">PB - Paraiba</option>
                    <option value="PE">PE - Pernambuco</option>
                    <option value="PI">PI - Piaui</option>
                    <option value="PR">PR - Paraná</option>
                    <option value="RJ">RJ - Rio de Janeiro</option>
                    <option value="RN">RN - Rio Grande do Norte</option>
                    <option value="RS">RS - Rio Grande do Sul</option>
                    <option value="RO">RO - Rondônia</option>
                    <option value="RR">RR - Roraima</option>
                    <option value="SC">SC - Santa Catarina</option>
                    <option value="SE">SE - Sergipe</option>
                    <option value="SP">SP - São Paulo</option>
                    <option value="TO">TO - Tocantins</option>
                </select>
                <label for="uf">UF</label>
            </div>
            <div class="row">
                <div class="col s6 m6 l6">
                    <button class="btn waves-effect waves-light" type="submit" name="enviar" onclick="return validar()">Enviar
                        <i class="material-icons right">send</i>
                    </button>

                </div>
                <div class="col s6 m6 l6">
                    <button class="btn waves-effect waves-light" type="reset" name="limpar">Limpar
                        <i class="material-icons right">clear</i>
                    </button>                </div>
            </div>
        </div>
    </form>

</div>

