<?php
    function parimpar($num) {
        if($num % 2 == 0) {
            return "Par";
        } else {
            return "Ímpar";
        }
    }
    $num= $_POST['n1'];

        $resultado = parimpar($num);
        echo"<h2>Resultado: </h2>";
        echo"O número digitado foi: $num <br>";
        echo"O resultado é: $resultado" ;
        
?>
