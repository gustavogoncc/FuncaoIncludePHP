<?php
    include 'funcoes.php';

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $resultado = maiorNumero($num1,$num2);

    echo $resultado;
?>