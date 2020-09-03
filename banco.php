<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->defineNomeTitular('Adriel');
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok
$primeiraConta->defineCpfTitular('123.456.789-10');

echo 'Nome do titular: ' . $primeiraConta->recuperarNomeTitular();
echo '<br>';
echo 'Saldo disponível: ' . $primeiraConta->recuperaSaldo();
echo '<br>';
echo 'CPF Titular: ' . $primeiraConta->recuperaCpfTitular();