<?php

    $personalidades = array ("Sandy Leah", "Anita Garibaldi", "Barbara de Alencar",
     "Benjamin Constant","Bras Cubas", "Ayrton Senna","Oscar Niemeyer","Carlos Barbosa",
     "Conselheiro Lafayete", "Duque de Caxias","Fernando de Noronha", "Frei Caneca",
     "Pelé","João Ramalho","Ronaldo Fenomeno", "Martin Afonso","Quintino Bocayuva",
     "Tomé de Souza","Luiza Mell", "Gisele Bundchen");

     echo " Todos listados em orem crescente <br>";
    asort($personalidades);
     foreach($personalidades as $historicas){
         echo $historicas. "<br>";
     }
     echo"<br>";
     echo " Todos em ordem decrescente <br>";
     arsort($personalidades);
     foreach($personalidades as $historicas){
         echo $historicas. "<br>";
     }

     echo"<br>";
     echo "Listados em ordem aleatória<br>";
     shuffle($personalidades);
     foreach($personalidades as $historicas){
         echo $historicas. "<br>";
     }

//asort(variavel)...coloca em ordem crescente ou alfabética
//arsor(variavel)...coloca em ordem decrescente
//echo current(variavel) mostra somente o primeiro da lista
//echo next(variavel)..mostra o proximo da lista
//echo prev(variavel)...mostra novamente o anterior da lista
//echo end (variavel)...mostra o ultimo da lista
//shuffle(variavel)...mostra os itens misturados, em qualquer ordem


//Criar uma lista utilizando array que contenha o nome de 20 personalidades históricas
//Mostrte esta listar ordenada crescente e decrescentemente e de maneira sorteada.