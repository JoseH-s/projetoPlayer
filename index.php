<?php

require_once('./class/Player.php');
require_once('./class/Item.php');
require_once('./class/Inventario.php');
require_once('./class/Magia.php');
require_once('./class/Ataque.php');
require_once('./class/Defesa.php');

$magia = new Magia("Fogo");
$magia1 = new Magia("Gelo");

$ataque = new Ataque("Espada");
$ataque1 = new Ataque("Arco");

$defesa = new Defesa("Escudo");
$defesa1 = new Defesa("Armadura");


$player = new Player("Cleitinho");
$player->subirNivel();
$player->subirNivel();
$player->subirNivel();
$player->subirNivel();
$player->coletarItem($magia);
$player->coletarItem($magia1);
$player->coletarItem($ataque);
$player->coletarItem($ataque1);
$player->getInventario()->capacidadeLivre();



$player1 = new Player("Renata");
$player1->coletarItem($defesa);
$player1->coletarItem($defesa1);
$player1->coletarItem($ataque);
$player1->coletarItem($ataque);
$player1->coletarItem($ataque1);
$player1->coletarItem($magia);
$player1->coletarItem($magia1);
$player1->getInventario()->capacidadeLivre();





