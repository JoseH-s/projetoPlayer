<?php
require_once('Inventario.php');
require_once('Item.php');

class Player {
    private string $nickName;
    private int $nivel = 1;
    private Inventario $inventario;

    public function __construct(string $nickName) {
        $this->setNickName($nickName);
        $this->inventario = new Inventario();
    }

    public function getInventario(): Inventario {
        return $this->inventario;
    }


    public function getNickName(): string {
        return $this->nickName;
    }

   
    public function setNickName(string $nickName): void {
        if($nickName == ""){
            $this->nickName = "Escreva o nome";
        } else{
            $this->nickName = $nickName;
            echo "<br>Você criou o personagem {$this->nickName}, comece a sua jornada!<br>";
        }
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function setNivel(string $nivel): void {
        if($nivel <= 0){
            $this->nivel = 1;
        } else{
            $this->nivel = $nivel;
        }
    }

    public function subirNivel(): void {
        $this->nivel+=1;
        $novaCapacidade = $this->inventario->getCapacidadeMaxima() + ($this->nivel * 3);
        $this->inventario->setCapacidadeMaxima($novaCapacidade);
        echo "<br>O personagem {$this->nickName} subiu para o nível {$this->nivel} e seu inventário aumentou para {$this->inventario->getCapacidadeMaxima()}.";

        $this->inventario->capacidadeLivre();
    }

    public function coletarItem(Item $item): void {
        $this->inventario->adicionarItem($item);
    }

    public function soltarItem(string $name): void {
        $this->inventario->removerItem($name);
    }
}

