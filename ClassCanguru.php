<?php

require_once 'ClassMamifero.php';

Class Canguru extends Mamifero {

    public function __construct($peso,$idade,$membros,$corpelo) {
        $this -> construtor($peso,$idade,$membros);
        $this -> corPelo = $corpelo;
    }
    
    public function usarBolsa() {
        echo 'Bolsa do canguru sendo usada';
    }

    public function locomover() {
        'O canguru está pulando';
    }
}