<?php

require_once('./class/Player.php');
require_once('./class/Item.php');
require_once('./class/Inventario.php');
require_once('./class/Magia.php');
require_once('./class/Ataque.php');
require_once('./class/Defesa.php');

$magia = new Magia("Fogo", 2, "Magia");
$ataque = new Ataque("Espada", 7, "Ataque");
$ataque1 = new Ataque("Arco" , 7 , "Ataque");
$ataque2 = new Ataque("Lamina" , 7 , "Ataque");



$inventario = New Inventario();

$player = new Player("Cleitinho", 1, $inventario);
$player->subirNivel();
$player->subirNivel();
$player->subirNivel();
$player->subirNivel();
$player->coletarItem($magia);
$player->coletarItem($magia);
$player->coletarItem($magia);
$player->coletarItem($ataque);
$player->soltarItem("Espada");
$inventario->capacidadeLivre();








