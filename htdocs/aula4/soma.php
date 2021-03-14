<?php
function soma($numero1, $numero2){
    $total = $numero1 + $numero2;
    return array($numero1, $numero2, $total);
}

function imprimeSoma($numeros){
    echo $numeros[0]." + ".$numeros[1]." = ".$numeros[2];
}

imprimeSoma(soma(1, 2));

?>