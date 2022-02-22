<?php
require_once 'Aluno.php';
class Bolsista extends Aluno {
    private $bolsa;

    function renovarBolsa() {
        
    }
    function pagarMensalidade() {
        
    }
    function getBolsa() {
        return $this->bolsa;
    }
    function setBolsa($b) {
        $this->bolsa=$b;
    }
}