<?php

//A exemplo do que fizemos com o MySQL, vejamos um código que utiliza funções PHP para conectar com o PostgresSQL e realizar uma instrução SQL de consulta de dados.

// -> Constantes para armazenamento das variaveis de conexão

define('HOST', 'localhost');
define('NOMEdoBD', 'teste');
define('USER', 'usuario');
define('PASSWORD', 'senha');

// -> Conexão com o servidor -> Aqui que começa a se diferenciar do MySQL

$stringConexao = "host= ".HOST." dbname= ".NOMEdoBD." user= ".USER." password= ".PASSWORD;

$conexao = pg_connect($stringConexao) or die('Falha na conexão'); // pg_connect -> Funciona para conectar com o PostgresSQL

// -> Execução de uma instrução SQL de consulta

$instrucaoSQL = "Select nome, cpf, telefone From Clientes";
$result = pg_query($conexao, $instrucaoSQL) or die('Falha na execução da consulta'); // pg_query -> Funciona para executar uma instrução SQL do PostgresSQL

//pq_query($dbcon, "SELECT id, nome, FROM clientes"); -> NÃO FAÇO IDEIA

//Imprimindo na tela os dados da query

while ($row = pg_fetch_array($result)) {
    echo $row['nome'] . "\t";
    echo $row['cpf'] . "\t";
    echo $row['telefone'] . "\n";
}

//Fechando a conexão

pg_close($conexao);

// Vamos analisar o que fizemos e quais são as difereças para a conectividade do PostgreSQL para com o MySQL

// define -> Na hora de definirmos, funciona da mesma forma que no MySQL.

// $stringConexao -> Aqui, estamos criando uma variável para armazenar a string de conexão do PostgresSQL, nessa parte que fica diferente. Para podermos conectarmos com o PostgresSQL, existe uma sintaxe diferente, abrimos aspas e vamos informando qual o servidor, o nome do BD, o usuario e a senha. (Lembrando que os "." são para concatenar)

// $conexao -> Aqui funciona da mesma maneira como no MySQL, uma variavel para armazenar a conexão com o banco de dados. A unica coisa que muda é que no MySQL, a palavra-chave para conectar, apenas precisamos inserir justamente o que definimos. No PostgreSQL, fizemos isso no passo anterior, quando criamos a variavel $stringConexao. Então aqui, utilizaremos uma palavra-chave de conexao diferente e apenas iremos informar uma coisa dentro dela

// pg_connect -> Está é a palavra de conexão com o PostgreSQL, e a unica coisa que precisamos inserir dentro dela é a variavel que criamos antes da variavel de conexão: $stringConexao

// $instrucaoSQL -> Funciona da mesma forma que no MySQL

// $result -> Aqui já funciona diferente. Se antes criamos o "$stmt" e usamos 3 palavras-chave para preparar a quere, realizar a query e armazenar o resultado da query. Com o Postgre, apenas precisamos usar a palavra-chave especifica e informar a conexão e a query.

// pg_query -> Dentro desta palavra-chave, informamos o banco e qual instrução fazer. Apenas isso será o suficiente para executar a query no PostgreSQL e ela já armazena o resultado da query

// while ($row = pg_fetch_array($result)) -> Aqui estamos criando a variavel $row e informando que ela receberá pg_fetch_array que vai armazenar o resultado da query. Sendo assim, iremos imprimir $row especificando o que queremos que ela mostre, nesse caso, o nome, o cpf e o telefone. (PROCURAR ENTENDER MELHOR ESSA PARTE MEDIANTE AO pg_fetch_array - CONFUSO)

// pg_close($conexao) -> Aqui iremos encerrar a conexão

//OBS: Indicação de erro no codig pois provavelmente as funções do PostgreSQL precisam ser instaladas.



