<?php

    error_reporting(E_ALL);
    ini_set('display_errors',1);

    $nome = array ("André",
                   "Sandy",
                   "Jose",
                   "Alberto");
    $contador = 0;
    $TotaldeArrays = count($nome);

    //echo " O total de arrays é ".$TotaldeArrays. "<br><br>";

    do{
        if($TotaldeArrays < 1){
            break;
        }
        echo "Indice ";
        echo $contador. " - " .$nome[$contador];
        echo "<br>";
        $contador++;
    }while ($contador < $TotaldeArrays);

    //foreach($nome as $lista){
      //  echo $lista."<br>";
   // }
    
    //for($contador = 0;$contador < count($nome); $contador ++){
      //  echo $nome[$contador]. "<br>";
    //}

    
    //...Listar o conteúdo de um array utilizando a estrutura de repetição DO WHILE
    
    

    //...se após o comando while ($conatdor eu deixar o <= (menor igual) ele mostra o erro por não
    //ter a  posição numero 4;)
    //mas se eu deixar apenas o sinal de <(menor) ele nao mostar erro nenhum, pois não contem erro)