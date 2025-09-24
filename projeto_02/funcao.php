<?php
function conecta($nome, $sala, $ra) {
       
    $arquivo = fopen ("listachamada.txt", "a");
   // fwrite($arquivo, "Primeira linha de texto\n");
    fwrite($arquivo, "$nome, $sala, $ra" . "\n");
    fclose($arquivo);
    echo"Sua lista de chamada foi atualizada";


}
?>
