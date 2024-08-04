<?php

require_once 'ClassAve.php';

Class Arara extends Ave {
    public function __construct($peso,$idade,$membros,$corPena) {
        $this -> construtor($peso,$idade,$membros);
        $this -> corPena = $corPena;
    }
}