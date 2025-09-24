<?php
require_once "usuario.php";

// Classe Filha - Aluno
class aluno extends usuario {
    private $matricula;

    public function __construct($nome, $email, $matricula){
        parent::__construct($nome, $email);
        $this->matricula = $matricula;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function exibirInfo(){
        return parent::exibirInfo() . " | matricula: {$this->matricula}";
    }

    public function estudar(){
        return "{$this->nome} está estudando...";
    }
}
?>