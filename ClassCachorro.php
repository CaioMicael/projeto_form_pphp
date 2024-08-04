<?php

require_once 'ClassMamifero.php';

Class Cachorro extends Mamifero {

    public function __construct($peso,$idade,$membros,$corpelo) {
        $this -> construtor($peso,$idade,$membros);
        $this -> corPelo = $corpelo;
    }

    public function enterrarOsso() {
        echo 'O cachorro enterrou o osso';
    }

    public function abanarRabo() {
        echo 'O cachorro está abanando o rabo';
    }
}