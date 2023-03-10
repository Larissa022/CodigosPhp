<?php

//Função que recebe 3 números e soma eles.

$n1=$_GET['n1'];
$n2=$_GET['n2'];
$n3=$_GET['n3'];

function soma($n1,$n2,$n3){
    $total=$n1+$n2+$n3;
    return $total;
}
echo 'sua soma é: '.$n1+$n2+$n3;

?>
