<?php

require_once 'ClassAnimal.php';

Class Mamifero extends Animal {
    protected $corPelo;

    public function __construct($peso,$idade,$membros,$corpelo) {
        $this -> construtor($peso,$idade,$membros);
        $this -> corPelo = $corpelo;
    }

    public function locomover() {
        echo 'O mamífero está andando';
    }

    public function alimentar() {
        echo 'O mamífero está se alimentando';
    }

    public function emitirSom() {
        echo 'Som de mamífero';
    }
}