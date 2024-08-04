<?php

abstract Class Animal {
    protected $peso;
    protected $idade;
    protected $membros;

    public final function construtor($peso,$idade,$membros) {
        $this -> peso = $peso;
        $this -> idade = $idade;
        $this -> membros = $membros;
    }
    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();

    public function getPeso() {
        return $this -> peso;
    }

    public function getIdade() {
        return $this -> idade;
    }

    public function getMembros() {
        return $this -> membros;
    }

    public function setPeso($peso) {
        $this -> peso = $peso;
    }

    public function setIdade($idade) {
        $this -> idade = $idade;
    }
    
    public function setMembros($membros) {
        $this -> membros = $membros;
    }
}