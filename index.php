<?php

/*$objeto = new \stdClass();
$objeto->nome = 'Junior';
$objeto->sobrenome = 'Pantoja';

 var_dump($objeto);*/

/* $frutas = array('maça', 'banana');

$idiomas = ['português', 'inglês'];

$sobrenomes = array(
    'heraclito' => 'junior',
    'pantoja' => 'silva'
);

$idades = [
    'julio' => 33
    'fernando' => 22
];

print_r($sobrenomes);*/


//StdClass são classes vazias

/*$objeto = new \StdClass();
$objeto->nome = "Junior";
$objeto->sobrenome = "Pantoja";

var_dump($objeto);*/

// método GETTYPE mostra o TIPO da variável 

/*$nome = "Junior Pantoja";
$idade = 33;
$altura = 1.66;
$formacoes = array('PHP', 'Laravel');
$cliente = new \StdClass();

echo '$nome: ' . gettype($nome) . '<br />';
echo '$idade: ' . gettype($idade) . '<br />';
echo '$altura: ' . gettype($altura) . '<br />';
echo '$formacoes: ' . gettype($formacoes) . '<br />';
echo '$cliente: ' . gettype($cliente) . '<br />';*/

// OPERADORES
/* <= valida se o valor é menor ou igual que ...
   >= valida se o valor é maior ou igual que ...
   == valida se os valores são iguais ...
   === valida se os valores são do mesmo TIPO
   ! antes de qualquer sentença deixa o valor ao contrário
   !! valida se o valor é realmente o que se espera
   != valida se o valor diferente

$idadeJunior = 22;
$idadeDanilo = 22;

var_dump ($idadeJunior === $idadeDanilo);
var_dump ($idadeJunior < $idadeDanilo);
var_dump ($idadeJunior > $idadeDanilo);
var_dump ($idadeJunior <= $idadeDanilo);
var_dump ($idadeJunior >= $idadeDanilo);
var_dump ($idadeJunior != $idadeDanilo);*/

//Valida se tem certificado e é formado
/*$ehFormado = false;
$temCertificado = false;

if($ehFormado === true) {
    echo "é formado sim";
} elseif($temCertificado === true) {
    echo "tem certificado sim";
} else {
    echo "vai estudar";
}*/

//Valida tipo de documento
/*$cpf = '';
$cnpj = '123.123.123/0001-12';

$tipoDocumento = ($cpf != '') ? 'CPF' : 'CNPJ';

echo $tipoDocumento;*/

//Valida se campo de nome ou de sobrenome == NULL

/*$nome = '';
$sobrenome = '';

if($_POST['nome'] <> null) {
    $nome = $_POST['nome'];
} else {
    $nome = 'não preenchido';
}

if($_POST['sobrenome'] <> null) {
    $sobrenome = $_POST['sobrenome'];
} else {
    $sobrenome = 'não preenchido';
}

echo "{$nome} <br />";
echo "{$sobrenome}";*/

//Valida igual 

/*$_POST = array(
    'nome' => 'Junior Pantoja',
    'sobrenome' => null
);

$nome = $_POST['nome'] ?? 'não preenchido';
$sobrenome = $_POST['sobrenome'] ?? 'não preenchido';

echo "{$nome} <br />";
echo "{$sobrenome} <br />";*/

// Validação múltipla

/*$primeiro = null;
$segundo = 'segundo ok';
$terceiro = null;
$quarto = null;

$resultado = $primeiro ?? $segundo ?? $terceiro ?? $quarto ?? 'não preenchido';

echo $resultado;*/


//Validação método SWITCH CASE

/*$corFavorita = ""; // azul, verde, roxo ...

switch($corFavorita) {
    case "azul";
        echo "Selecionou azul";
    break;
    case "vermelho";
        echo "Selecionou vermelho";
    break;
    case "verde";
        echo "Selecionou verde";
    break;
    case "roxo";
        echo "Selecionou roxo";
    break;
    default;
        echo "O usuário não selecionou nenhuma cor";
}*/
// Função date();

// d = dia
//m = mês
//y = ano

/*date_default_timezone_set('American/Sao_Paulo');
echo "Hoje é " . date("d/m/y") . "<br />";
echo "Hoje é " . date("d/m/y") . "<br />";
echo "Hoje é " . date("d/m/y") . "<br />";
echo "Hoje é " . date("d/m/y") . "<br />";

echo "<hr />";

echo "Agora é " . date("h:i:s");

echo "<hr />";

echo "Data e Hora Completa: " . date("d/m/y h:i:s");*/

// Funções PHP
// Função strtoupper = "CAIXA-ALTA"
// Função strtolower = "caixa-baixa"
// Operador . = i++

echo "funções php" . " <br />"; //

/*$nome = '<br>NOME:<br/> Junior Pantoja';
echo $nome;*/

//echo strtoupper($nome); //
//echo strtolower($nome);
//echo trim($nome);

// ARRAY PRODUTOS 
$hamburguer = ("carne, pao, tomate");
$pizzas = ("mussarela, calabreza, frango");

echo $hamburguer ."<br />";
echo $pizzas ."<br />";

