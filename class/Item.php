<?php

class Item {
    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct(string $name, int $tamanho , string $classe) {
        $this->setName($name);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function getName():string{
        return $this->name;
    }
    
    public function setName(string $nome):void{
        if ($nome == ""){
            $this->name = "Você não inseriu o nome do item";
        }
        else{
            $this->name = $nome;
        }
    }
    
    public function getTamanho():int{
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho):void{
        if ($tamanho < 0 ){
            $this->name = "o Tamanho do item do item não pode ser nesse valor";
        }
        else{
            $this->tamanho = $tamanho;
        }
    }

    public function getClasse():string{
        return $this->classe;
    }

    public function setClasse(string $classe):void{
        if ($classe == ""){
            echo "Adicione uma classe!";
        }
        else{
            
            $this->classe = $classe;
        }
    }
}
