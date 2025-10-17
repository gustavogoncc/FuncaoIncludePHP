<?php
    function maiorNumero($a, $b){
        $a = floatval($a);
        $b = floatval($b);

        if($a > $b){

            return "O maior número é: $a";
        } elseif($b > $a){
            return "O maior número é: $b";
        } else{
            return "Os dois números são iguais.";
        }

    }
?>
   