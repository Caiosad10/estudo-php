<?php
//Criando array de frutas

$frutas = array();

//A array foi criada vazia, podemos adicionar elementos de forma dinamica

$frutas[] = "Banana";
$frutas[] = "Maça";
$frutas[] = "Laranja";
$frutas[] = "Uva";

print_r($frutas);

//Podemos criar um array dentro de uma array

$lista_de_frutas = array(
    "Frutas vermelhas" => array(
        "Maça",
        "Morango",
        "Ameixa"
    ),

    "Frutas Tropicais" => array(
        "Goiaba",
        "Maracuja",
        "Banana",
        "Manga"
    )
);

print_r($lista_de_frutas);

//Essas estruturas de dados são similares as vistas na disciplina de Matematica, na qual temos tambem as matrizes, que podem ser chamadas de vetores de vetores. Trazendo esse conceito ao contexto em questão, temos um array de arrays, ou um array dentro de outro array