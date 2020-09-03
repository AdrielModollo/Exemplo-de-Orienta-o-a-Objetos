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
    public float $saldo;
    
    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorASacar;
        }
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