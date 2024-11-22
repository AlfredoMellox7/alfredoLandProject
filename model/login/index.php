<?php

// model do login

if(isset($_POST['uMail'])){

    $uMail = preg_replace('/\\//', '', trim($_POST['uMail']));
    $uPassword = preg_replace('/\\//', '', trim($_POST['uPassword'])); 

    // 1º cria o código para executar a seleção
    $sqlInsert = "SELECT id, userLevel, nome FROM registroBase WHERE uMail = '$uMail' AND uPassword = '$uPassword'";
    // 2º executa a seleção no banco de dados
    $result = $conn->query($sqlInsert); 

    // 3º verifica se a seleção retornou ao menos uma linha
    if($result->num_rows > 0){

        //4º transforma a variavel em um array, armazenando todos os valores das colunas selecionas no comentário 1
        $valorDaColuna = $result->fetch_assoc();

        //5º cria uma sessão e define um valor para ela
        $_SESSION["nivelDoUsuario"] = $valorDaColuna['userLevel'];
        //6º cria uma sessão e define um valor para ela
        $_SESSION["idDoAlfredo"] = $valorDaColuna['id'];
        // 7º cria uma sessão e define um valor para ela
        $_SESSION["nomeDoUsuario"] = $valorDaColuna['nome'];

        // A sessão é salva no site todo.

        
    }
    
}


?>