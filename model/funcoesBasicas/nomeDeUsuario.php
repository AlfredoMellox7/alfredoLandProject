<?php

// 1º cria o código para executar a seleção
    $sqlInsert = "SELECT userLevel FROM registroBase WHERE uMail = '$uMail' AND uPassword = '$uPassword'";
    // 2º executa a seleção no banco de dados
    $result = $conn->query($sqlInsert); 

    // 3º verifica se a seleção retornou ao menos uma linha
    if($result->num_rows > 0){

        //4º transforma a variavel em um array, armazenando todos os valores das colunas selecionas no comentário 1
        $valorDaColuna = $result->fetch_assoc();

        //5º inicia uma sessão
        session_start();
        //6º cria uma sessão e define um valor para ela
        $_SESSION["alfredo"] = $valorDaColuna['userLevel'];
        $_SESSION["idAlfredo"] = $valorDaColuna['userLevel'];
        
    }


    ?>