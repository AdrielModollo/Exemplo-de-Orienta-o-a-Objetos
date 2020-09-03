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
}


$primeiraConta = new Conta();
$primeiraConta->cpfTitular='123.456.789-10';
$primeiraConta->nomeTitular='Adriel';
$primeiraConta->saldo=1650;

var_dump($primeiraConta);
