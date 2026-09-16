<?php

// function saudacao(){
//     return "Olá, seja bem-vindo(a)!";
// }

// echo saudacao();

// function verificarIdade($anoNascimento)
// {
//     $anoAtual = date("Y");
//     $idade = $anoAtual - $anoNascimento;
//     return  $idade;

// }

// function portaoDeEntrada($anoNascimento, $acompanhante = false)
// {
//     $idadeDeEntraNaBalada = 18;
//     $idade = verificarIdade($anoNascimento);

//     if ($idade >= $idadeDeEntraNaBalada) {
//         return "Pode entrar na balada!";
//     } elseif ($idade < $idadeDeEntraNaBalada && $acompanhante) {
//         return "Pode entrar na balada com seu acompanhante!";
//     } else {
//         return "Voce nao pode entrar na balada!";
//     }
// }



// // Cenário 1
// $anoNascimento = 2005;
// $idade = verificarIdade($anoNascimento);
// echo "'$idade' anos - " . portaoDeEntrada($anoNascimento, true) . "\n";
// echo "<br>";

// // Cenário 2
// $anoNascimento = 2020;
// $idade = verificarIdade($anoNascimento);
// echo "'$idade' anos - " . portaoDeEntrada($anoNascimento, true) . "\n";
// echo "<br>";

// // Cenário 3
// $anoNascimento = 2020;
// $idade = verificarIdade($anoNascimento);
// echo "'$idade' anos - " . portaoDeEntrada($anoNascimento, false) . "\n";



// ============================
// Exemplo: switch
// ============================
$diaDaSemana = 3;

switch ($diaDaSemana) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
echo "<br>";


// ============================
// Exemplo: while
// ============================
$contador = 1;

while ($contador <= 5) {
    echo "Contador (while): $contador <br>";
    $contador++;
}


// ============================
// Exemplo: for
// ============================
for ($i = 1; $i <= 5; $i++) {
    echo "Contador (for): $i <br>";
}


// ============================
// Exemplo: foreach
// ============================
$frutas = ["Maçã", "Banana", "Laranja", "Uva"];

foreach ($frutas as $indice => $fruta) {
    echo "Fruta $indice: $fruta <br>";
}



