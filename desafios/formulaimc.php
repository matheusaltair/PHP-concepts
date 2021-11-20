<?php

 $peso = 70;
 $altura = 2;
 $imc =  $peso/ $altura ** 2;

 echo "seu imc é de $imc. Você está com o imc ";

    if($imc < 18.5){
    echo "abaixo";
}elseif($imc < 24.9){
    echo "dentro";
}else{
    echo "acima";
}
echo " do recomendado";


