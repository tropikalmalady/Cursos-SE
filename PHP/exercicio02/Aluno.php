<?php
require_once 'Pessoa.php';
class Aluno extends PessoaS {
    private $matr, $curso;

    function cancelarMatr() {
        echo 'Matricula será cancelada.';
    }
    function getMatr() {
        return $this->matr;
    }
    function getCurso() {
        return $this->curso;
    }
    function setMatr($m) {
        $this->matr=$m;
    }
    function setCurso($c) {
        $this->curso=$c;
    }
}