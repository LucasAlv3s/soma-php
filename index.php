<?php

// O USUÁRIO DEVERÁ DIGITAR O SEU PRIMEIRO NÚMERO.
print"Digite o primeiro número: ";
$number_one=trim(fgets(STDIN));

// O USUÁRIO DEVERÁ DIGITAR O SEU SEGUNDO NÚMERO.
print"Digite o segundo número: ";
$number_two=trim(fgets(STDIN));

// SOMA TOTAL.
$sum=$number_one+$number_two;

// MÉDIA TOTAL.
$average=$sum/2;

// RESULTADO DA SOMA.
print("A soma dos numeros lidos foi: ".$sum."\n");

// RESULTADO DA MÉDIA.
print("A média dos numeros lidos foi: ".$average);

?>