<?php

$idade = 16;
$numerodepessoas = 2;

echo "você so pode entrar se tiver a partir de 18 anos ou tiver a partir de 16 acompanhado" . "<br>";

if ($idade >= 18) {
    echo " você tem $idade anos. Pode entrar sozinho" . "<br>";
} 

else if ($idade >= 16 && $numerodepessoas > 1) {
        echo " Você tem $idade anos e está acompanhando. Pode entrar!";
    } else {
        echo " você só tem $idade anos. Você não pode entrar.";
    }

echo "<br>";
echo "Adeus!";
