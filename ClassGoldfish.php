<?php

require_once 'ClassPeixe.php';

Class Goldfish extends Peixe {
    public function __construct($peso,$idade,$membros,$corEscama) {
        $this -> construtor($peso,$idade,$membros);
        $this -> corEscama = $corEscama;
    }
}