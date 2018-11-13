<?php

$times1 = array("Corinthians", "Palmeiras", "Santos", "São Apaulo", "Flamengo", 
"Fluminense","Botafogo", "Internacional", "Gremio", "Cruzeiro", "America", 
"Parana","Bahia","Vitoria", "Ceara", "Atletico-MG", "Sport","Chapecoense",
 "Atletico-PR","Vasco");
$times2 = array("Corinthians", "Palmeiras", "Santos", "São Apaulo", "Flamengo",
 "Fluminense","Botafogo", "Internacional", "Gremio", "Cruzeiro", "America",
"Parana", "Bahia","Vitoria", "Ceara", "Atletico-MG", "Sport","Chapecoense",
 "Atletico-PR","Vasco");
    
        echo " Os confrotos do Brasileirão de 2018 são <br><br>";
    foreach($times1 as $jogos1){
        foreach($times2 as $jogos2){
            
        if($jogos1 !== $jogos2){
            
            echo $jogos1. " X ".$jogos2;
           
            echo "<br>";
            }
         }
        }
    //}
//Crie um array com a lista de times que participam do campeonato brasileiro e em seguida 
//imprima uma lista contendo todos os jogos possíveis entre eles, lembrando que um time 
//deve jogar com todos os demais participantes.


//$doces = array("Bolo", "Pudim", "Torta", "Sorvete");
//$cobertura = array("Chocolate", "Morango", "Limão", "Baunilha");

//$coberturaEsgotada = "Limão";

//foreach($doces as $delicia){
//    foreach($cobertura as $saborosa){

//        echo $delicia. " tem como cobertura o sabor de ".$saborosa;
//        if($saborosa == $coberturaEsgotada){
//            echo "(cobertura esgotada)";
        
//        }echo"<br>";
//    }
//}