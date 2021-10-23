<?php

$idade = 17;

echo "você so pode entrar se tiver a partir de 18 anos" . "<br>";

if ($idade >= 18){
    echo"você tem $idade anos" . "<br>"; 
    echo"Pode entrar ";
}
else{
    echo"você só tem $idade anos." . "<br>"; 
    echo"Você não pode entrar.";
}
echo "<br>";
echo "Adeus!";