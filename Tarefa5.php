<?php

    $capitais = array("São Paulo", "Rio de Janeior", "Belo Horizonte", "Florianópolis",
    "Manaus", "Palmas", "Rio Branco", "Macapa", "Salvador", "Maceió");

   // foreach($capitais as $brasileiras){
       // echo $brasileiras. "<br>";
    //}
    echo current($capitais)."<br>";
    echo next ($capitais)."<br>";
    echo next ($capitais)."<br>";
    echo next ($capitais)."<br>";
    echo next ($capitais)."<br>";
    echo next ($capitais)."<br>";
    echo next ($capitais)."<br>";
    echo next ($capitais)."<br>";
    echo next ($capitais)."<br>";
    echo next ($capitais)."<br>";

    //Crie uma lista com o nomes de 10 capitais brasileiras
    //Navegue por esta lista e imprimia cada item sem utilizando 
    //apenas as funções CURRENT e NEXT