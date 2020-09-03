<?php
/*
function criarConta(string $cpf, string $nomeTitular, float $saldo): array
{
    return [
    $cpf => [
        'titular' => $nomeTitular,
        'saldo' => $saldo,
        ]
    ];
}
*/

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;
    
    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 
            $this->saldo -= $valorASacar;
        
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
    
        $this->saldo += $valorADepositar;
    }
    
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 
    
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}

$umaConta = new Conta();
$umaConta->saldo = 200;
$segundaConta = new Conta();
$segundaConta->saldo = 300;

var_dump($umaConta);  
echo $umaConta->saldo;


$umaConta->sacar(50);
echo $umaConta->saldo;
/*armazena o endereço da memória
$c = $segundaConta;
var_dump($c); */

$umaConta->saldo = 0;
$umaConta->depositar = 100;
echo $umaConta->depositar;
$umaConta->depositar(-100);
echo $umaConta->depositar;

