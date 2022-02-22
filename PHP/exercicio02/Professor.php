<?php
require_once 'Pessoa.php';
class Professor extends PessoaS {
    private $especialidade, $salario;

    function receberAum($a) {
        $this->setSalario($this->getSalario() + $a);
    }
    function getEspecialidade() {
        return $this->especialidade;
    }
    function getSalario() {
        return $this->salario;
    }
    function setEspecialidade($e) {
        $this->especialidade=$e;
    }
    function setSalario($s) {
        $this->salario=$s;
    }
}