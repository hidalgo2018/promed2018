<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 01/12/2017
 * Time: 15:54
 */
$numreg = 18;
$col = 1;
$linha = 0;
$numlinhas = $numreg % 4;
if ($numlinhas == 0){
    $numlinhas = $numreg / 4;
}
else{
    $numlinhas = (int) ($numreg / 4);
}

?>
<div class="container">
<div class="container">
    <div class="row">

        <div class="col s12 m12 l12">
            <h3 class="red-text">.:: Parceiros ::.</h3>
            <div class="divider"></div>
        </div>
    </div>
</div>
   <div class="row">
    </div>


    <div class="container">
<?php
        while($linha <= $numlinhas){
?>
        <div class="row">

<?php
            while ($col <= $numreg){
?>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">

                        <div class="divider"></div>
                        <img src="imgs/promed1.png" class="responsive-img">
                        <br/>
                        <span class="card-title black-text"><h6 class="teal-text" style="font-variant: small-caps"><strong>Informação </strong></h6></span>
                        <div class="divider"></div>
                    </div>
                    <div class="card-content">
                        <p style="text-align: justify;">I am a very simple card. I am good at
                            containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#" style="a: text-decoration: none; color:#666; text-shadow: 1px 1px 5px #000;">This is a link</a>
                    </div>
                </div>


            </div>
<?php
            $col++;

            }
                        ?>
         </div>
<?php

        $linha++;
        }?>
    </div>
</div>