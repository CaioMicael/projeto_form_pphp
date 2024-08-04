<?php

require_once 'ClassAnimal.php';

Class Peixe extends Animal {
    protected $corEscama;

    public function __construct($peso,$idade,$membros,$corEscama) {
        $this -> construtor($peso,$idade,$membros);
        $this -> corEscama = $corEscama;
    }

    public function locomover() {
        echo 'O peixe está nadando';
    }

    public function alimentar() {
        echo 'O peixe está comendo substâncias';
    }

    public function emitirSom() {
        echo 'Peixe não faz som';
    }

    public function soltarBolha() {
        echo 'O peixe está soltando bolhas';
    }

    public function getCorEscama() {
        return $this -> corEscama;
    }

    public function setCorEscama($corEscama) {
        $this -> corEscama = $corEscama;

    }
}