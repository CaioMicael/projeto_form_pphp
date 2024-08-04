<?php

require_once 'ClassAnimal.php';

Class Reptil extends Animal {
    protected $corEscama;

    public function __construct($peso,$idade,$membros,$corEscama) {
        $this -> construtor($peso,$idade,$membros);
        $this -> corEscama = $corEscama;
    }

    public function locomover() {
        echo 'O reptil está se rastejando';
    }

    public function alimentar() {
        echo 'O reptil esta se alimentando';
    }

    public function emitirSom() {
        echo 'Som de reptil';
    }

    public function getCorEscama() {
        return $this -> corEscama;
    }

    public function setCorEscama($corEscama) {
        $this -> corEscama = $corEscama;
    }
}