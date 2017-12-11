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

<div class="container">
    <div class="row">
        <div class="col s2 m2 l2"></div>
        <div class="col s8 m8 l8">
            <h3 class="red-text">Cadastro de Usuários do Sistema</h3>
            <div class="divider"></div>
            <p class="flow-text" style="text-align: justify">Preencha as informações abaixo para acessar o sistema.</p>
        </div>
    </div>
    <form name="usuario" method="post">

    <div class="row">
        <div class="input-field col s8 m7 l8">
            <input id="nome_user" type="text" data-length="40">
            <label for="nome_user">Nome do Usuário</label>
        </div>
        <div class="input-field col s4 m5 l4">
            <select name="sexo">
                <option value="" disabled selected>Escolha uma opção</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
            <label for="sexo">Sexo</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l3">
            <input id="email" type="email" class="validate">
            <label for="email">E-mail</label>
        </div>
        <div class="input-field col s12 m6 l3">
            <select name="nivel">
                <option value="" disabled selected>Qual nível se enquadra</option>
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
            <input id="fone" type="tel" class="validate" >
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
                <select name="nivel">
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
                </select>
                <label for="uf">UF</label>
            </div>
        </div>
    </form>

</div>

