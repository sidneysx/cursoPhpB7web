<?php

// function saudacao(){
//     return "Olá, seja bem-vindo(a)!";
// }

// echo saudacao();

function verificarIdade($anoNascimento)
{
    $anoAtual = date("Y");
    $idade = $anoAtual - $anoNascimento;
    return  $idade;

}

function portaoDeEntrada($anoNascimento, $acompanhante = false)
{
    $idadeDeEntraNaBalada = 18;
    $idade = verificarIdade($anoNascimento);

    if ($idade >= $idadeDeEntraNaBalada) {
        return "Pode entrar na balada!";
    } elseif ($idade < $idadeDeEntraNaBalada && $acompanhante) {
        return "Pode entrar na balada com seu acompanhante!";
    } else {
        return "Voce nao pode entrar na balada!";
    }
}



// Cenário 1
$anoNascimento = 2005;
$idade = verificarIdade($anoNascimento);
echo "'$idade' anos - " . portaoDeEntrada($anoNascimento, true) . "\n";
echo "<br>";

// Cenário 2
$anoNascimento = 2020;
$idade = verificarIdade($anoNascimento);
echo "'$idade' anos - " . portaoDeEntrada($anoNascimento, true) . "\n";
echo "<br>";

// Cenário 3
$anoNascimento = 2020;
$idade = verificarIdade($anoNascimento);
echo "'$idade' anos - " . portaoDeEntrada($anoNascimento, false) . "\n";