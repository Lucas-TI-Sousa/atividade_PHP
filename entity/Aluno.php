<?php
class Aluno {
    private $matricula;
    private $nome;
    private $disciplinas; 
   
    // Implemente o array de discplinas que será utilizado pela entidade Aluno

    public function __construct($matricula, $nome) {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->disciplinas = [];
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getDisciplinas() {
        return $this->disciplinas;
    }
    public function setMatricula($matricula){
        $this->Matricula = $matricula;
    }
    // Implemente os getters e setters para as ler e inserir um array de discplinas no objeto aluno

    public function setDisciplinas($disciplinas) {
        $this->disciplinas = $disciplinas;
    }
    
    public function adicionarDisciplina($disciplina) {
        $this->disciplinas[] = $disciplina;
    }
}
?>

