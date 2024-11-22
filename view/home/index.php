
<?php


if(isset($sessionId)){


?>



<div class="wellComeMessage">

        <h2>Bem vindo a Alfredolândia <?php if($nivelDoUsuario == 1){echo 'O diferenciado do PHPzin ';}else{
            echo ' Divirta-se';
        } echo $nomeDoUsuario; ?></h2>

        <br>
        <br>

            <p>
            <a href="?p=registro">Clique</a> aqui para fazer o seu cadastro.
            </p>
        <br>

            <p>
            <a href="?p=login">Clique</a> aqui para fazer o login.
            </p>



</div>


<?php

    

} else {


?>

<div class="wellComeMessage">

<h2>Faça o login</h2>

<br>
<br>

    <p>
    <a href="?p=registro">Clique</a> aqui para fazer o seu cadastro.
    </p>
<br>

    <p>
    <a href="?p=login">Clique</a> aqui para fazer o login.
    </p>

</div>


<?php

}

?>