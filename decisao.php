<?php

$idade = 17;
$validaEntrada = 18;
$acompanhante = false;

echo "Você só pode entrar se for maior que $validaEntrada anos!" . PHP_EOL;

if ($idade >= $validaEntrada) {
    echo "Você tem $idade anos. Pode entrar!" . PHP_EOL;
} elseif ($idade >= 16 && $acompanhante == true) {
    echo "Você tem $idade anos, porém está acompanhado. Pode entrar!" . PHP_EOL;
} else {
    echo "Você tem $idade anos, infelizmente não poderá entrar!" . PHP_EOL;
}

echo PHP_EOL; //Quebra de linha no PHP;

echo "Adeus!!" . PHP_EOL;