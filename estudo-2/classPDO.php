<?php

//PDO e sua conexão com os bancos de dados

$dsn = new PDO("mysql:host=localhost;dbname-teste", $usuario, $senha);

// $dsn -> Significa "Data Source Name" ou nome de fonte de dados. Ou seja, seria nossa variavel de conexão

// new PDO() -> Estamos utilizando a classe PDO para criar um metodo. Dentro da classe, informamos qual driver(banco) vamos usar, ou mysql, ou qualquer outro. Apois isso, iremos definir onde está o servidor, o banco de dados, o usuario e a senha.

// Caso fosse outro banco de dados, precisariamos alterar apenas o driver, inves de "mysql:host=" seria por exemplo "pgsql:host=" (driver do postgre)

