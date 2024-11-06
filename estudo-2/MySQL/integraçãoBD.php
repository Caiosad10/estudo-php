<?php

//iremos verificar como integra-se com o banco de dados, coletar informações e salvar no banco de dados e vice-versa

//Vamos fazer este estudo voltado a PDO, que é uma biblioteca que facilita a conexão com o banco de dados

//PDO = PHP Data Objects

//Antes de tudo, veremos com fazer a conexão do PHP com o SQL e a execução de uma instrução de consulta SQL utilizando as funções PHP especificas para o SGBD

// -> Constantes para armazenamento das variaveis de conexão

define('HOST', 'localhost');
define('NOMEdoBD', 'teste');
define('USER', 'usuario');
define('PASSWORD', 'senha');

// -> Conexão com o servidor 

$conexao = mysqli_connect(HOST, USER, PASSWORD, NOMEdoBD) or die('Falha na conexão');

// -> Execução de uma instrução SQL de consulta

$instrucaoSQL = "Select nome, cpf, telefone From Clientes";

$stmt = mysqli_prepare($conexao, $instrucaoSQL);
mysqli_stmt_bind_result($stmt, $nome, $cpf, $tel);

mysqli_stmt_execute($stmt);


while (mysqli_stmt_fetch($stmt)) {
    echo $nome . "\t ";
    echo $cpf . "\t";
    echo $tel . "\t";
}

mysqli_close($conexao);

// Vamos parar para analisar o que cada termo significa 

// define -> Dentro desse termo, definimos duas coisa: Primeiramente definimos uma constante, a constate é uma variável que armazena um valor constante, depois disso, definimos o valor da constante. Para isso tudo, precisamos sempre definir o Host, o Nome do BD, o usuario e a senha.

// $conexão -> Aqui, estamos criando uma variável para uma conexão com o servidor. Para isso acontecer, precisamos utilizar a palavra-chave mysqli_connect

// mysqli_connect -> Aqui estamos criando a conexão para o servidor/banco. Dentro dessa palavra-chave, precisamos vincular justamente tudo aquilo que foi definido anteriormente, colocaremos as constantes criadas(HOST, USER, PASSWORD e NOMEdoBD).

// or die -> Se der erro na conexão, iremos parar o script e mostrar o erro

// $instruçãoSQL -> O PHP permite utilizar a sintaxe do SQL, assim, conseguimos atribuir em uma variavel PHP as instruções SQL e assim criando a query.

// $stmt -> A variável stmt é uma variável que armazena o resultado da query. Para conseguirmos capturar os dados e posteriormenten armazenar o resultado na variavel. Antes, precisamos utilizar uma função de preparação.

// myqli_prepare -> A palavra-chave myqli_prepare vai preparar a query para ser executada. Dentro dela temos que informar primeiro qual o servidor/banco de dados será utilizado e depois a instrução SQL que queremos executar(query).

// mysqli_stmt_bind_result -> Está palavra-chave vai vincular o resultado da query a uma variável. Dentro dela temos que informar qual variável vai receber o resultado da query. As variaves "$nome, $cpf e $tel" é para justamente as variaveis que conterão o nome, cpf e o telefone

// mysqli_stmt_execute -> A palavra-chave vai executará a query. Dentro dela, passamos a variavem que contém a query.

// while (mysqli_stmt_fetch($stmt))  -> Aqui estamos criando um loop para pegar os dados e mostrar na tela

// mysqli_close($conexao) -> Aqui, estamos fechando a conexão



