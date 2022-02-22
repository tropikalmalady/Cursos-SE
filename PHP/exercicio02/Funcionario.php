<?php
require_once 'Pessoa.php';
class Funcionario extends PessoaS {
    private $setor, $trabalhando;

    function mudarTrabalho() {
        $this->setTrabalhando(!$this->getTrabalhando());
    }
    function getSetor() {
        return $this->setor;
    }
    function getTrabalhando() {
        return $this->trabalhando;
    }
    function setSetor($s) {
        $this->setor=$s;
    }
    function setTrabalhando($t) {
        $this->trabalhando=$t;
    }
}