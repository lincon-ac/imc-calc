<?php

$peso = 75;
$altura = 1.85;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com IMC ";

if ($imc < 18) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";
