<?php

class Disciplina {
    private $id;
    private $nome;
    private $cargaHoraria;
    private $alunos;
    // Implemente o array de alunos que será utilizado pela entidade Disciplina

    public function __construct($id, $nome, $cargaHoraria, ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargaHoraria = $cargaHoraria;
        $this->alunos = []; 
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCargaHoraria() {
        return $this->cargaHoraria;
    }

    public function setCargaHoraria($cargaHoraria) {
        $this->cargaHoraria = $cargaHoraria;
    }
    public function getAlunos() {
        return $this->alunos;
    }

    public function setAlunos($alunos) {
        $this->alunos = $alunos;
    }

    public function adicionarAluno($aluno) {
        $this->alunos[] = $aluno;
    }

    // Implemente os getters e setters para as ler e inserir um array de alunos no objeto discplina
}
?>

