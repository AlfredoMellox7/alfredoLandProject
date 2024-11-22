<?php

include 'conectaDB.php';


session_start();

if(isset($_SESSION["idDoAlfredo"])){

    echo $_SESSION["idDoAlfredo"];

    $sessionId = $_SESSION["idDoAlfredo"];
    $nomeDoUsuario = $_SESSION["nomeDoUsuario"];
    $nivelDoUsuario = $_SESSION["nivelDoUsuario"];


}



if(isset($_GET['p']) && $_GET['p'] != null) {

    $pagina = $_GET['p'];


    if($pagina ==  'home' || $pagina == ''){
            

        include './view/home/index.php';

        echo '<style>';
        include './styles/home/css.css';
        echo '<style>';

        session_start();
        if(isset($_SESSION["alfredo"]) && $_SESSION["alfredo"] == 1){

            include './model/funcoesBasicas/nomeDeUsuario.php';

        }

    } elseif($pagina == 'registro'){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            include './model/registro/index.php';

        }
        
        include './view/registro/index.php';

    } elseif($pagina == 'login'){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            include './model/login/index.php';

        }
        
        include './view/login/index.php';

    }


} else {


    include './view/home/index.php';

    echo '<style>';
    include './styles/home/css.css';
    echo '<style>';

}



?>