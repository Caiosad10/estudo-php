<?php

// É quase a mesma coisa que fizemos em "exceções.php". O que mudamos é um detalhe dentro do TRY

//...

try {
    $conexao = new PDO ("pgsql:host=". HOST . ";port=".PORT.";dbname=" . NOMEdoBD, USER,  PASSWORD, array (PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
    echo 'A conexão falhou e retornou esta mensagem: ' . $e->getMessage();
}

// Explicações :

// array (PDO::ATTR_PERSISTENT => true) -> Significa que o PHP vai manter a conexão aberta e reutilizar ela para a execução de outras instruções.