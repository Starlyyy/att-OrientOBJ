<?php 

require_once('modelo/Hotel.php');
require_once('modelo/PontoTuristico.php');
require_once('modelo/Restaurante.php');

$espacos = [];

do {
    echo "\n\n-----------MENU-----------\n";
    echo "1- Cadastrar Espaço\n";
    echo "2- Excluir Espaço\n";
    echo "3- Listar Espaços \n";
    echo "0- Sair\n";
    echo "--------------------------\n";
    $opcao = readline("Informe a opção: ");

    echo "\n";

    switch($opcao) {
        case 1:

            echo "Olá! Qual é o tipo de espaço que gostaria de cadastrar? \n1-Hotel\n2-Restaurante\n3-Ponto turistico\n\n";
            $op = (int)readline();

            $espaco = null;

            if ($op == 1) {
                $espaco = new Hotel();
                $espaco->setNome(readline('Nome do Hotel: '))->setEndereco(readline('Endereço do Hotel: '))->setNumEstrelas((int)readline('Número de estrelas: '));

            } elseif ($op == 2) {
                $espaco = new Restaurante();
            } elseif ($op == 3) {
                $espaco = new PontoTuristico();
            }
            
            break;

        case 2:

            
            
            break;

        case 3:

            
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!\n";

    }

} while($opcao != 0);