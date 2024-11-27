<?php
require_once('Inventario.php');
require_once('Item.php');

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname, int $nivel, Inventario $inventario) {
        $this->nickname = $nickname;
        $this->nivel = $nivel;
        $this->inventario = $inventario;
    }

    public function getNickname(): string {
        return $this->nickname;
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function subirNivel(): void {
        $this->nivel+=1;
        $novaCapacidade = $this->inventario->getCapacidadeMaxima() + ($this->nivel * 3);
        $this->inventario->setCapacidadeMaxima($novaCapacidade);
        echo "<br>O personagem subiu para o nível {$this->nivel} e seu inventário aumentou para {$this->inventario->getCapacidadeMaxima()}.";

        $this->inventario->capacidadeLivre();
    }

    public function coletarItem(Item $item): void {
        $this->inventario->adicionarItem($item);
    }

    public function soltarItem(string $name): void {
        $this->inventario->removerItem($name);
    }
}

