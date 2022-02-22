<?php
class PessoaL {
    private $nome, $idade, $sexo;

    function fazerAniver() {
        $this->setIdade($this->getIdade() + 1);
    }
    function __construct($n, $i, $s) {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);
    }
    function getNome() {
        return $this->nome;
    }
    function getIdade() {
        return $this->idade;
    }
    function getSexo() {
        return $this->sexo;
    }
    function setNome($n) {
        $this->nome = $n;
    }
    function setIdade($i) {
        $this->idade = $i;
    }
    function setSexo($s) {
        $this->sexo = $s;
    }
}