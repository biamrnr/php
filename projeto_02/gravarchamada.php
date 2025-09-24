<?php
    require_once("funcao.php"); //inclui arquivo c função

    $nome = $_POST["nome"] ?? '';
    $sala = $_POST["sala"] ?? '';
    $ra = $_POST["ra"] ?? '';

    conecta($nome, $sala, $ra); //chama função
?>