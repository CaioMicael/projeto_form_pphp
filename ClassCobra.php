<?php

require_once 'ClassReptil.php';

Class Cobra extends Reptil {
    public function __construct($peso,$idade,$membros,$corEscama) {
        $this -> construtor($peso,$idade,$membros);
        $this -> corEscama = $corEscama;
    }
}