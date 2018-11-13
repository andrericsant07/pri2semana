<?php

    $cidades = array(
        array(
        "nome" => "Santos",
        "aniversário" => "26/01",
        "região" => "Sudeste",
    ),
    array(
        "nome" => "São Vicente",
        "aniversário" => "22/01",
        "região" => "Sudeste",
    ),
    array(
        "nome" => "Ubatuba",
        "aniversário" => "15/04",
        "região" => "litoral norte",
    ),
);

    //print ("<pre>");
    //var_dump ($cidades);

    foreach($cidades as $local){
        echo "Nome: ".$local["nome"]."<br>";
        echo "Aniversário: ".$local["aniversário"]."<br>";
        echo "Região: ".$local["região"]."<br>";
        echo "<hr>";
    }


    //Crie um "banco de dados" semelhante ao da aula anterior, contendo os dados de 
    //diversas cidades. Utilize como base o último exercício e a última aula.