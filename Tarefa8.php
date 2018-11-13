<?php

$local = array(
    "cidade" => "São Paulo",
    "aniversário" => "25/01",
    "gentílico" => "paulista",
    "lema" => "não sou conduzido, conduzo",
    "padroeiro" => "apótolo Paulo",
    "atualPrefeito" => "Bruno Covas",
);

    print("<pre>");
    var_dump($local);
    echo "<br>";
    echo $local[cidade];
    echo "<br>";
    echo $local[aniversário];
    echo "<br>";
    echo $local[gentílico];
    echo "<br>";
    echo $local[padroeiro];
    echo "<br>";
    echo $local[atualPrefeito];




//Crie um array com informaçoes sobre a cidade de São Paulo, nele devem constar dados como: 
  //  Aniversário, fundação, gentílico, lema, padroeiro e prefeito.