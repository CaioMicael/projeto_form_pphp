<?php

require_once 'ClassReptil.php';

Class Tartaruga extends Reptil {

    public function __construct($peso,$idade,$membros) {
        $this -> construtor($peso,$idade,$membros);
    }

    public function locomover() {
        echo 'A tartuga esta andando beeem devagar';
    }
}