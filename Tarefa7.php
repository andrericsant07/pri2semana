<?php

$doces = array("Bolo", "Pudim", "Torta", "Sorvete");
$cobertura = array("Chocolate", "Morango", "Limão", "Baunilha");

$coberturaEsgotada = "Limão";

foreach($doces as $delicia){
    foreach($cobertura as $saborosa){

        echo $delicia. " tem como cobertura o sabor de ".$saborosa;
        if($saborosa == $coberturaEsgotada){
            echo "(cobertura esgotada)";
        
        }echo"<br>";
    }
}