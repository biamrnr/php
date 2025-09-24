<?php 
/*
//function media() {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3']
    
    $media = ($n1 + $n2 + $n3) / 3;
    echo "Sua media é: " . $media;
//}
//media()
*/

//Função para calcular a media
    function media($n1, $n2, $n3) {
        return ($n1 + $n2 + $n3) / 3;
}

//Verifica se os valores foram enviados via POST
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $n1 = $_REQUEST['n1'];
    $n2 = $_REQUEST['n2'];
    $n3 = $_REQUEST['n3'];

    $resultado = media($n1, $n2, $n3);

    echo "<h2>Resultado da Media</h2>";
    echo "Os numeros digitados foram: $n1, $n2 e $n3 <br>";
    echo "A media é: <strong>" . 
    number_format ($resultado, 2, ',','.') . "</strong>" ;
} else {
    echo "nenhum valor enviado.";
}
?>