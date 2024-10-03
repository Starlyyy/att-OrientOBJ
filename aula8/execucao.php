<?php

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

function listarPedido($pedidos){
    if (count($pedidos) > 0) {
        foreach ($pedidos as $i => $p) {
            echo $i+1 . "º " . $p->__toString() . "\n";
        }
    } else {
        echo "Não há um nehum pedido cadastrado.";
    }
    
}

function numeroPrato(array $pratos, int $numero){
    foreach ($pratos as $p) {
        if ($p->getNumero() == $numero) {
            return $p;
        }

    }
    return null;
}

$pratos = array (
    New Prato(1, "Camarão à Milanesa", 110.00),
    New Prato(2, "Pizza Margherita", 80.00),
    New Prato(3, "Macarrão à Carbonara", 60.00),
    New Prato(4, "Bife à Parmegiana", 75.00),
    New Prato(5, "Risoto ao Funghi", 70.00)
);

$pedidos = [];


do {
    echo "\n\n----------MENU----------\n";
    echo "1- Cadastrar:\n";
    echo "2- Cancelar:\n";
    echo "3- Listar: \n";
    echo "4- Total de vendas: \n";
    echo "0- Sair\n";
    echo "------------------------\n";
    $opcao = readline("Informe a opção: ");

    echo "\n";

    switch($opcao) {
        case 1:

            $pedido = New Pedido; 

            $pedido->setNomeCliente(readline("Qual é o nome do cliente que está realizando o pedido? "))->setNomeGarcom(readline("Qual é o nome do garçom que está atendendo? "));

            echo "Pratos disponíveis:\n";

            foreach ($pratos as $p) {
                echo $p->getNumero() . "|" . $p->getNome() . "| R$" . $p->getValor() . "|\n";
            }

            $prato = null;
            while($prato == null){
                $numPrato = readline("Informe o numero do prato: ");

                $prato = numeroPrato($pratos, $numPrato);
                // print_r($prato);
            }

            $pedido->setPrato($prato);

            array_push($pedidos, $pedido);
            
            break;

        case 2:

            listarPedido($pedidos);

            if (count($pedidos) > 0) {
                $id = readline("Informe o indice do pedido que deseja excluir/cancelar: ");

                if ($id > 0 && $id <= count($pedidos)) {
                    array_splice($pedidos, $id-1, 1);
                } else {
                    echo "Esse pedido não existe!\n";
                }
                
            } 
            
            //array_slice

            // print_r($pedidos);
            
            break;

        case 3:

            listarPedido($pedidos);
            
            break;

        case 4: 

            echo "O total de pedidos realizados foi de: " . count($pedidos);

            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!\n";

    }

} while($opcao != 0);
