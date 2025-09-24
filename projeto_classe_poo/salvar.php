<?php
require_once "usuario.php";
require_once "professor.php";
require_once "aluno.php";

//Caminho do arquivo JSON
$banco = 'banco.json';

//Ler dados existentes
$dados = [];
if (file_exists($banco)){
    $json = file_get_contents($banco);
    $dados = json_decode($json, true);
}

//Receber dados do formulario
$tipo = $_POST['tipo'] ?? '';
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

if ($tipo === 'professor') {
    $disciplina = $_POST['disciplina'] ?? '';
    $usuario = new professor($nome, $email, $disciplina);
    $dados['professores'][] = [
        'nome' => $usuario->getNome(),
        'email' => $usuario->getEmail(),
        'disciplina' => $usuario->getDisciplina()
    ];
} elseif ($tipo === 'aluno'){
    $matricula = $_POST['matricula'] ?? '';
    $usuario = new aluno($nome, $email, $matricula);
    $dados['alunos'][][
        'nome'=> $usuario->getNome(),
        'email'=> $usuario->getEmail(),
        'matricula'=> $usuario->getMatricula()
    ];
}

//Salvar de volta ao JSON
file_put_contents($banco, json_encode($dados, JSON_PRETTY_PRINT |JSON_UNESCAPED_UNICODE));

echo "<h2>Cadastro realizado com sucesso!</h2>";
echo "<a href='cadastro.html'>voltar</a/><br>";
echo "<a href='index.php'> ver usuario </a>";
?>