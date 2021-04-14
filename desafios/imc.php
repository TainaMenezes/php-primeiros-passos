<?php

$peso = 53;
$altura = 1.59;

$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if($imc < 18.5){
    echo "abaixo";
}else if($imc < 25){
    echo "dentro";
}else{
    echo "acima";
}

echo " do recomendado";
/*
Valores menores que 18Kg/m2	Consideradas pessoas de baixo peso
Valores entre 18-24 kg/m2	Para mulheres e entre 18-25 kg/m2 para homens - consideradas IMC de pessoas normais
Valores entre 25-30 kg/m2	Consideradas pessoas com sobrepeso
Valores entre 30-35 kg/m2	Pessoas obesas
Valores 35-40 kg/m2	Pessoas com obesidade moderada
Valores > 40 kg/m2	Pessoas com obesidade grave
Valores > 50 Kg/m2	Pessoas com obesidade gravíssima​
*/