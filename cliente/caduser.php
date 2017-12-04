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
        <div class="col s8 m7 l8">
            <input id="input_text" type="text" data-length="40">
            <label for="input_text">Nome do Usuários</label>
        </div>
        <div class="input-field col s4 m5 l4">
            <select name="sexo">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Masculino</option>
                <option value="2">Feminino</option>
            </select>
            <label for="sexo">Sexo</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 l3">
            <input id="email" type="email" class="validate">
            <label for="email">E-mail</label>
        </div>
        <div class="col s12 m6 l3">
            Nível
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 l3">
            Senha
        </div>
        <div class="col s12 m6 l3">
            Redigite
        </div>
        <div class="col s12 m6 l3">
            <input id="icon_telephone" type="tel" class="validate">
            <label for="icon_telephone">Telephone</label>
        </div>
        <div class="col s12 m6 l3">
            Data Nascimento
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 l3">Endereço</div>
        <div class="col s12 m6 l3">CEP</div>
        <div class="col s12 m6 l3">Bairro</div>
        <div class="col s12 m6 l3">Cidade</div>
    </div>
    </form>

</div>

