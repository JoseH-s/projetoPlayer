<?php
require_once('Item.php');

class Inventario {
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct() {
        $this->setCapacidadeMaxima(20);
    }

    public function getCapacidadeMaxima(): int {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function adicionarItem(Item $item): void {
        if (($this->espacoUsado() + $item->getTamanho()) <= $this->capacidadeMaxima) {
            array_push($this->itens, $item);
            echo "<br>Item {$item->getName()} foi adicionado!";
        } else {
            echo "<br>Não foi possível adicionar o item {$item->getName()}. Espaço insuficiente!";
        }
    }

    public function removerItem(string $name): void {
        foreach ($this->itens as $indice => $item) {
            if ($item->getName() == $name) {
                unset($this->itens[$indice]);
                echo "<br>O Item {$name} foi removido.";
                return;
            }
        }
        echo "<br>Item {$name} não encontrado no inventário.";
    }

    public function espacoUsado(): int {
        $capacidadeAtual = 0;
        foreach ($this->itens as $item) {
            $capacidadeAtual += $item->getTamanho();
        }
        return $capacidadeAtual;
    }

    public function capacidadeLivre(): void {
        $capacidadeLivre = $this->capacidadeMaxima - $this->espacoUsado();
        echo "<br>A capacidade livre é {$capacidadeLivre}.";
    }
}
?>
