<?php

$contador = 1;

    while($contador <= 20){
        echo "#$contador" . "<br>"; 
        $contador = $contador + 1;
    }
?>

<?php

//pulando algum number
    for($contador = 1; $contador <=15; $contador++){
        if($contador != 13){
            echo $contador . PHP_EOL;
        }
    }
?>