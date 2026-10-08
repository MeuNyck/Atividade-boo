<?php
class ContaBancaria{
    public string $titular;
    public string $numero;
    public float $saldo;
    public string $tipo;

    public function depositar($valor){
        $this->saldo += $valor;
        echo "<p>Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.</p>";
    }
    
    public function sacar($valor){
        if($valor > $this->saldo){
            echo "<p>Saldo insuficiente para saque de R$ " . number_format($valor, 2, ',', '.') . ".</p>";
        } else {
            $this->saldo -= $valor;
            echo "<p>Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.</p>";
        }
    }

    public function consultarSaldo(){
        echo "<p>Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.') . "</p>";
    }
}

$conta1 = new ContaBancaria();

$conta1->titular = "Felipe";
$conta1->numero = "54754-6";
$conta1->saldo = 1000.0;
$conta1->tipo = "Corrente";

$conta2 = new ContaBancaria();

$conta2->titular = "Sérgio";
$conta2->numero = "17712-1";
$conta2->saldo = 2000.0;
$conta2->tipo = "Poupança";

echo "<h2>Conta 1</h2>";

echo "<p>Titular: $conta1->titular</p>";
echo "<p>Número: $conta1->numero</p>";
echo "<p>Saldo: R$ " . number_format($conta1->saldo, 2, ',', '.') . "</p>";
echo "<p>Tipo: $conta1->tipo</p>";

$conta1->depositar(1000);
$conta1->sacar(500);
$conta1->consultarSaldo();

echo "<hr>";

echo "<h2>Conta 2</h2>";
echo "<p>Titular: $conta2->titular</p>";
echo "<p>Número: $conta2->numero</p>";
echo "<p>Saldo: R$ " . number_format($conta2->saldo, 2, ',', '.') . "</p>";
echo "<p>Tipo: $conta2->tipo</p>";

$conta2->depositar(2000);
$conta2->sacar(1000);
$conta2->consultarSaldo();

?>