<?php

//Função que recebe um número e retorna a quantidade de digitos deste.

$n=$_POST['numero'];

function tamanho($n){
    return strlen($n);
}
    echo "A quantidade de digitos é: " . tamanho($n);
?>
