<?php

require_once 'ClassAnimal.php';

Class Ave extends Animal {
    protected $corPena;

    public function __construct($peso,$idade,$membros,$corPena) {
        $this -> construtor($peso,$idade,$membros);
        $this -> corPena = $corPena;
    }

    public function locomover() {
        echo 'A ave está voando';
    }

    public function alimentar() {
        echo 'A ave está comendo insetos';
    }

    public function emitirSom() {
        echo 'A ave está cantando';
    }

    public function fazerNinho() {
        echo 'A ave está fazendo um ninho';
    }

    
    public function getCorPena() {
        return $this -> corPena;
    }

    public function setCorPena($corPena) {
        $this -> corPena = $corPena;
    }
}