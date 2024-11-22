

<?php


if(!isset($sessionId)== TRUE){


?>



<h1>Página de login</h1>

<form action="" method="POST">

    <input type="email" name="uMail" placeholder="E-mail">

    <input type="password" name="uPassword" placeholder="Senha" required>

    <button>Cadastrar</button>


</form>


<?php

}else {
    echo 'Você já está registrado ' . $nomeDoUsuario;
    echo "<br>Deseja continuar ir a página inicial ?";
    
}

?>