<?php
class PessoaS {
    private $nome, $idade, $sexo;

    function fazerAniver() {
        $this->setIdade($this->getIdade() + 1);
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