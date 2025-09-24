<?php
    $arquivo = fopen("dados.txt", "a");
    fwrite($arquivo, "Primeira linha de texto\n");
    fclose($arquivo);
    echo"Seu arquivo foi criado com sucesso!";
?>