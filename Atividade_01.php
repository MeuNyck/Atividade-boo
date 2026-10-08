<?php
class Celular{
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $bateria;
    public bool $ligado;

    public function ligar(){
        $this->ligado = true;
        echo "<p>O celular ligou.</p>";
    }

    public function desligar(){
        $this->ligado = false;
        echo "<p>O celular desligou.</p>";
    }

    public function usar($consumo){
        $this->bateria = $this->bateria - $consumo;
        if($this->bateria < 0){
            $this->bateria = 0;
        }
        echo "<p>O celular gastou " . $consumo . "% de bateria.</p>";
        echo "<p>Bateria: <b>" . $this->bateria . "%</b></p>";
    }

    public function carregar($carga){
        $this->bateria = $this->bateria + $carga;
        if($this->bateria > 100){
            $this->bateria = 100;
        }

        echo "<p>O celular carregou " . $carga . "%.</p>";
        echo "<p>Bateria: <b>" . $this->bateria . "%</b></p>";
    }
}

$celular1 = new Celular();

$celular1->marca = "fELIPE";
$celular1->modelo = "Galaxy ASG";
$celular1->cor = "Preto";
$celular1->bateria = 80;
$celular1->ligado = false;

$celular2 = new Celular();

$celular2->marca = "Applipe";
$celular2->modelo = "iPhone Felipe";
$celular2->cor = "Azul";
$celular2->bateria = 50;
$celular2->ligado = false;

echo "<h2>Celular 1</h2>";
echo "<p>Marca: $celular1->marca</p>";
echo "<p>Modelo: $celular1->modelo</p>";
echo "<p>Cor: $celular1->cor</p>";
echo "<p>Bateria: $celular1->bateria%</p>";
echo "<p>Ligado: " . ($celular1->ligado ? "Sim" : "Não") . "</p>";

$celular1->ligar();
$celular1->usar(20);
$celular1->carregar(30);
$celular1->desligar();

echo "<hr>";

echo "<h2>Celular 2</h2>";
echo "<p>Marca: $celular2->marca</p>";
echo "<p>Modelo: $celular2->modelo</p>";
echo "<p>Cor: $celular2->cor</p>";
echo "<p>Bateria: $celular2->bateria%</p>";
echo "<p>Ligado: " . ($celular2->ligado ? "Sim" : "Não") . "</p>";

$celular2->ligar();
$celular2->usar(15);
$celular2->carregar(40);
$celular2->desligar();

?>