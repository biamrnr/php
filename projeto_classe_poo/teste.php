<?php
// Importando as classes
require_once "usuario.php";
require_once "professor.php";
require_once "aluno.php";
// Criando objetos
$professor1 = new professor("Carlos Silva", "carlos@escola.com", "Matematica");
$professor2 = new professor("Mariana Souza", "mariana@escola.com", "Fisica");

$aluno1 = new aluno("João Santos", "joao@aluno.com", "2025A001");
$aluno2 = new aluno("Ana Pereira", "ana@aluno.com", "2025A002");

// Exibindo informações dos professores
echo "<h2>Professores</h2>";
echo $professor1->exibirInfo() . "<br>";
echo $professor1->darAula() . "<br><br>";

echo $professor2->exibirInfo() . "<br>";
echo $professor2->darAula() . "<br><br>";

// Exibindo informações dos alunos
echo "<h2>Alunos</h2>";
echo $aluno1->exibirInfo() . "<br>";
echo $aluno1->estudar() . "<br><br>";

echo $aluno2->exibirInfo() . "<br>";
echo $aluno2->estudar() . "<br><br>";
?>
