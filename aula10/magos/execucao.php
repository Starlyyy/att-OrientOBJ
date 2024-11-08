<?php 

require_once('modelo/Mago.php');
require_once('modelo/Poder.php');
require_once('modelo/Combatente.php');
require_once('modelo/Curandeiro.php');

$pd1 = new Poder('Recupera energia', 0);
$pd2 = new Poder('Recupera energia super', 20);
$pd3 = new Poder('Golpe normal', 0);
$pd4 = new Poder('Golpe especial', 15);


$Poeta = new Curandeiro();
$Poeta->setForcaDeCura(100)->setNome('Poetista Encantada')->setPoder($pd2);

$Bardo = new Curandeiro();
$Bardo->setForcaDeCura(8000)->setNome('Bardo Onipotente')->setPoder($pd1);

$Agiota = new Combatente();
$Agiota->setForcaDeAtaque(234)->setNome('Cavaleiro Iniciante')->setPoder($pd4);

$Alucard = new Combatente();
$Alucard->setForcaDeAtaque(101000)->setNome('Alucard')->setPoder($pd3);


echo $Poeta->lancarPoder();
echo $Bardo->lancarPoder();
echo $Agiota->lancarPoder();
echo $Alucard->lancarPoder();
