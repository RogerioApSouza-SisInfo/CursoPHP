<?php 
    //Conhecendo o Foreach em PHP
    //Criado um array
    $transp=array("Carro","Motocicleta","Bicicleta","Ônibus","Avião","Navio");
    foreach($transp as $veiculo){

        //echo "$veiculo<br>";
        if($veiculo == "Avião"){
            echo "$veiculo está na lista de meios de transporte!<br>";
            //break;    
        }
        if($veiculo == "Motocicleta"){
            echo "$veiculo está na lista de meios de transporte!<br>";
            //break;    
        }
    }
    echo "<hr><br>";
    echo '<h3>Dados obtidos do array $transp! com a instrução<br>
          foreach.</h3>';
    foreach($transp as $indice => $veiculo):
        echo $indice."-".$veiculo."<br>";
    endforeach;

    echo "<hr><br>";
    echo '<h3>Dados obtidos do array $transp! com a instrução<br>
          foreach apoós str_replace.</h3>';
          $atual= str_replace("Motocicleta","Trem",$transp);
            foreach($atual as $veic_atual):
                echo $veic_atual."<br>";
            endforeach;

    echo "<hr>";
    echo "<h2>for endfor</h2>";
        for ($i=0; $i<5;$i++){
            echo $i." ";
        };

?>



<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrução Foreach</title>
</head>
<body>
    
</body>
</html>