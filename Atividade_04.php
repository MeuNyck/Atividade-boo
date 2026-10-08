<?php
class Pedido{
    public int $numero;
    public string $cliente;
    public float $valor;
    public string $status;

    public function adicionarItem($valor){
        $this->valor += $valor;
        echo "<p>Item adicionado no pedido $this->numero! <br>Valor do item adicionado: R$ " . number_format($valor, 2, ',', '.') . "</p>";
    }
    
    public function cancelar($valor){
        $this->status = "cancelado";
        echo "<p>Pedido $this->numero cancelado com sucesso.</p>";
    }

    public function finalizar(){
        $this->status = "finalizado";
        echo "<p>Pedido $this->numero finalizado com sucesso.</p>";
    }

    public function exibirResumo(){
        echo "<p>Pedido: $this->numero</p>";
        echo "<p>Cliente: $this->cliente</p>";
        echo "<p>Valor: R$ " . number_format($this->valor, 2, ',', '.') . "</p>";
        echo "<p>Status: $this->status</p>";
    }
}

$pedido1 = new Pedido();

echo "<h2>Pedido 1</h2>";
$pedido1->numero = 4821;
$pedido1->cliente = "Felipe";
$pedido1->valor = 68;
$pedido1->status = "pendente";
$pedido1->adicionarItem(32);
$pedido1->finalizar();
echo "<br>";
echo "<h2>Resumo do Pedido 1</h2>";
$pedido1->exibirResumo();

$pedido2 = new Pedido();
echo "<hr>";

echo "<h2>Pedido 2</h2>";
$pedido2->numero = 6615;
$pedido2->cliente = "Sérgio";
$pedido2->valor = 45;
$pedido2->status = "pendente";
$pedido2->adicionarItem(32);
$pedido2->cancelar(20);
echo "<br>";
echo "<h2>Resumo do Pedido 2</h2>";
$pedido2->exibirResumo();

?>