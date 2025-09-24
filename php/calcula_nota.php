<?php
   
echo "Disciplina: " . $_POST['disciplina'] . "<br>";
echo "Nota: " . $_POST['nota'] . "<br>";

$nota = $_POST['nota'];

if ($nota >= 7) {
    echo "Situação: APROVADO";
} elseif ($nota >= 5 && $nota < 7) {
    echo "Situação: RECUPERAÇÃO";
} else {
    echo "Situação: REPROVADO";
}

?>
