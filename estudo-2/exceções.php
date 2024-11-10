<?php

//Veremos como lidar com exceções no PHP

//Exceções serve como condições, porem com uma sintaxe diferente e com uma aplicação diferente

//Utilizamos no php o try e o catch. Estas palavras chaves vão servir para lidar com erros de forma mais segura, impedindo de que o programa seja interrompido por erros inesperados. Ou seja, mesmo se houver um erro, o programa ainda continuará rodando, e alem do mais, isso informará ao usuario ou desenvolvedor que aconteceu um erro

//Vamos utilizar um exemplo com DEFINE

define('HOST', 'localhost');
define('PORT', '3306');
define('NOMEdoBD', 'teste');
define('USER', 'usuario');
define('PASSWORD', 'senha');

try {
    $conexao = new PDO("mysql:host=".HOST.";port=".PORT.";dbname=".NOMEdoBD, USER, PASSWORD);
} catch (PDOException $e) {
    echo 'A conexão falhou e retornou está mensagem' . $e->getMessage();
}

// Agora ficou tudo mais claro sobre a utilização do TRY e o CATCH.

// Explicações:

// try {} -> A palavra-chave TRY permite que o PHP execute uma sequência de instruções e, em seguida, se ocorrer um erro, o PHP vai para o CATCH.

// catch {} -> A palavra-chave CATCH permite que o PHP execute uma sequência de instruções.

// PDOException $e -> Significa que o PHP vai capturar o erro que ocorrer e armazenar dentro da variável $e.

// $e->getMessage() -> Significa que o PHP vai capturar o erro que ocorrer e armazenar dentro da variável $e e vai exibir a mensagem do erro.

// Para encerrar a conexão feita com PDO, precisamos alterar o valor da variavel de conexão: $conexao = null