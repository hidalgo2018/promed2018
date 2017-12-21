<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 21/12/2017
 * Time: 10:36
 */
?>
<div class="container-fluid" style="font-family: 'Raleway', sans-serif;">
    <div class="container grey lighten-5 z-depth-2">
        <h3 style="padding:25px; color:red; text-shadow: black 1px 1px 1px; font-weight: bolder;">Fale Conosco</h3>
        <form name="fale" method="post" class="container" style="padding-bottom: 10px;">
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Insira seu nome aqui" id="nome" name="nome" type="text" class="validate">
                        <label for="nome">Nome Completo</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="endereco" type="email" placeholder="Insira corretamente seu e-mail"
                               class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="mensagem" placeholder="Insira aqui sua pergunta" class="materialize-textarea"
                                  data-length="500"></textarea>
                        <label for="mensagem">Mensagem</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                    <div class="col s6">
                        <button class="btn waves-effect waves-light" type="reset" name="action">Limpar
                            <i class="material-icons right">clear</i>
                        </button>
                    </div>
                    <br/>
                    <br/>

                </div>
            </div>

        </form>


    </div>
</div>
