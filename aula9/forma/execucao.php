<?php 

require_once('modelo/Circulo.php');
require_once('modelo/Quadrado.php');
require_once('modelo/Retangulo.php');

echo "Olá! Qual forma geometrica você gostaria de calcular a área? \n[C(Circulo)] | [Q(Quadrado)] | [R(Retângulo)]\n";
$forma = strtoupper(readline());

// echo $forma;

if($forma == "C"){
    $circulo = new Circulo();
    $circulo->setRaio(readline("Qual é o raio do circulo? "));
    echo $circulo->getDesenho();
    echo "A área desse circulo é: " . $circulo->getArea() . "\n";
} else if($forma == "Q"){
    $quadrado = new Quadrado();
    $quadrado->setLado(readline("Qual é o tamanho do lado do seu quadrado? "));
    echo $quadrado->getDesenho();
    echo "A área desse quadrado é: " . $quadrado->getArea() . "\n";
} else if($forma == "R"){
    $retangulo = new Retangulo();
    $retangulo->setAltura(readline("Qual é a altura do seu retângulo? "))->setBase(readline("Qual é a base do seu retângulo? "));
    echo "A área desse retangulo é: " . $retangulo->getArea() . "\n";
}

