<?php

class Aluno {
    public $id;
    public $nome;
    public $matricula;
    public $ativo;

    public function __construct($id = null, $nome = null, $matricula = null, $ativo = true) {
        $this->id = $id;
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->ativo = $ativo;
    }

    function imprimeDados() {
        echo "
        <p>
        Id: {$this->id} <br>
        Nome: {$this->nome}<br>
        Matricula: {$this->matricula}
        </p>";
    }
}