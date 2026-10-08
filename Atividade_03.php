<?php
class ClasseAula{
    public string $disciplina;
    public string $professor;
    public float $duração;
    public string $numeroSala;
    public string $bloco;

    public function exibirInformacoes(){
        echo "<p>Disciplina: $this->disciplina</p>";
        echo "<p>Professor: $this->professor</p>";
        echo "<p>Duração: $this->duração horas</p>";
        echo "<p>Número da Sala: $this->numeroSala</p>";
        echo "<p>Bloco: $this->bloco</p>";
    }
    
    public function trocarProfessor($novoProfessor){
        $this->professor = $novoProfessor;
        echo "<p>O professor foi trocado para $this->professor.</p>";
    }

    public function alterarLocal($novoBloco, $novaSala){
        $this->bloco = $novoBloco;
        $this->numeroSala = $novaSala;
        echo "<p>A aula transferida para o bloco $this->bloco, sala $this->numeroSala.</p>";
    }
}

$aula1 = new ClasseAula();

$aula1->disciplina = "Matemática";
$aula1->professor = "Felipe";
$aula1->duração = 2.0;
$aula1->numeroSala = "101";
$aula1->bloco = "A";

$aula2 = new ClasseAula();

$aula2->disciplina = "Física";
$aula2->professor = "Felipe";
$aula2->duração = 2.0;
$aula2->numeroSala = "102";
$aula2->bloco = "B";

echo "<h2>Aula 1</h2>";
$aula1->exibirInformacoes();

$aula1->trocarProfessor("Carlão");
$aula1->alterarLocal("C", "201");

echo "<hr>";

echo "<h2>Aula 2</h2>";
$aula2->exibirInformacoes();
$aula2->trocarProfessor("Pedrão");
$aula2->alterarLocal("D", "301");

?>