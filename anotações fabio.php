O Arquivo PHP sobrepõe o arquivo html, quando ambos tem o mesmo nome.

O PHP & qualquer linguagem é case sensitive no ambiente Linux. (Os servidores baratos são Linux, no geral as empresas optam por ele).

Php não é uma linguagem fortemente tipada, o que seria "fortemente tipada"? é uma linguagem em que precisamos não só declarar o que são as variáveis (string, int, etc...) como também precisamos seguir a risca funções nativas.

Quais os problemas do código não tipado? Ele é livre e existem diversas formas de se fazer uma mesma coisa. Então é importante entendermos os fundamentos para que não fiquemos perdidos as variações de código para executar uma mesma função.

O Php tem comunicação/integração com diversas outras linguagens, front e back end.

A exemplo do javascript (com o ajax) e do mysqli que é uma junção de php e mysql. No geral nos iremos usar as duas linguagens acima em conjunto com o PHP.






Para facilitar o desenvolvimento em comunidade no PHP foi inventado o padrão MVC.


Controler = Responsável por capturar a URL e definir qual view e model serão requisitados.

Model = Responsável pelas funções e objetos.

View  = Responsável por retornar o conteúdo visual do sistema. (interface para o usuário)


Esse padrão foi inventado para que possamos ter um mínimo de controle sobre o que cada arquivo faz e onde cada arquivo deve ficar. Assim não precisamos buscar dentro de arquivos únicos com 100 mil linhas cada função de cada página.



___________________________________________


Formas de capturar informações no PHP


GET = Captura informações que são inseridas após o ponto de interrogação (?) na URL

O GET permite uma navegação fluída mantendo as informações salvas na URL, assim você consegue passar informações não sensíveis ao usuário final


POST = Captura informações contidas em inputs (Sejam elas quais forem)


O Post oculta as informações enviadas através de qualquer input. E não permite recupera-las uma vez que elas foram enviadas. Usamos o post para envio de senhas e dados pessoais.


________________________________________


Funções Nativas



"include" O include ele inclui um arquivo dentro do outro. Dentro da função nativa precisaremos definir uma rota/caminho para o arquivo que desejamos capturar

Como fazemos isso? Abaixo algumas explicações:


Se queremos capturar um arquivo da pasta atual, devemos inserir "./" e depois o nome do arquivo, o "./" define que estamos buscando algo dentro da pasta atual (seja uma nova pasta e um arquivo dentro dela ou só um arquivo )

include "./view/registro/index.php";


Caso eu queira um arquivo fora da pasta atual eu devo usar o "../", assim eu defino ao código que é para buscar um arquivo/pasta, que vem antes da pasta atual.

*Obs: Cuidar onde está o local do arquivo/pasta atual, caso queira voltar "../"(Volta um(a) arquivo/pasta anterior).



"isset" O isset verifica se o elemento/variável existe


________________________________________________________________

PHP com mysqli

o mysql serve para fazer consultas e alterações no banco de dados, abaixo nós temos um exemplo de consulta ao DB

<?php

    // 1º cria o código para executar a seleção
    $sqlSelect = "SELECT id, userLevel, nome FROM registroBase WHERE uMail = '$uMail' AND uPassword = '$uPassword'";
    // 2º executa a seleção no banco de dados
    $result = $conn->query($sqlSelect); 

    // 3º verifica se a seleção retornou ao menos uma linha
    if($result->num_rows > 0){

        //4º transforma a variavel em um array, armazenando todos os valores das colunas selecionas no comentário 1
        $valorDaColuna = $result->fetch_assoc();

        //5º aqui criamos uma variavel e definimos o valor dela como o valor contido na coluna "nome" da linha capturada no comentário 1º
        $nome = $valorDaColuna['nome'];

        //6º aqui retornamos o valor da variavel
        echo $nome;


    }


    // 1º cria o código para executar a inserção no db. Os valores que deseja inserir podem ser variaveis criadas por você ou valores digitados manualmente no doc php. Mas é importante que os valores SEMPRE estejam entre aspas.
    $sqlInsert = "INSERT INTO nomeDaTabela (colunaDesejada1, colunaDesejada2, colunaDesejada3, ...) VALUES ('valoresQueDesejaInserir1', valoresQueDesejaInserir2, valoresQueDesejaInserir3, ...)";
    // 2º executa a inserção no banco de dados
    $conn->query($sqlInsert); 




    // 1º cria o código para atualizar uma linha no banco de dados
    $sqlUpdate = "UPDATE Customers SET ContactName = 'Alfred Schmidt', City = 'Frankfurt' WHERE CustomerID = 1";
    // 2º executa a inserção no banco de dados
    $conn->query($sqlUpdate); 


