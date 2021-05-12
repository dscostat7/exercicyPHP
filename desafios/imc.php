<?php

$altura = 1.67;
$peso = 69.5;

$imcalculo = $peso / ($altura * $altura);
$imc = sprintf('%0.1f', $imcalculo); // Demarcação de retorno com apenas uma casa decimais;


if ($imc < 18.5) {
    echo "Seu IMC é $imc, e você está com PESO BAIXO - ALERTA" . PHP_EOL;
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Seu IMC é $imc, seu peso está NORMAL" . PHP_EOL;
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Seu IMC é $imc, e você está com SOBREPESO - ALERTA" . PHP_EOL;
} elseif ($imc >= 30 && $imc <= 34.9) {
    echo "Seu IMC é $imc - ALERTA - OBESIDADE - GRAU I" . PHP_EOL;
} elseif ($imc >= 35 && $imc <= 39.9) {
    echo "Seu IMC é $imc - ALERTA - OBESIDADE SEVERA - GRAU II" . PHP_EOL;
} else {
    echo "Seu IMC é $imc - ALERTA - OBESIDADE MÓRBIDA - GRAU III" . PHP_EOL;
}