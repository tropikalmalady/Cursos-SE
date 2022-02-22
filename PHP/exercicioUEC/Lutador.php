<?php
class Lutador {
    private $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates;

    function __construct($n, $nc, $i, $a, $p, $v, $d, $e) {
        $this->setNome($n);
        $this->setNacionalidade($nc);
        $this->setIdade($i);
        $this->setAltura($a);
        $this->setPeso($p);
        $this->setVitorias($v);
        $this->setDerrotas($d);
        $this->setEmpates($e);
    }
    function apresentar() {
        echo "<br/>-------------------------------<br/>";
        echo "<br/>Lutador: ".$this->getNome();
        echo "<br/>Origem: ".$this->getNacionalidade();
        echo "<br/>Idade: ".$this->getIdade()." anos";
        echo "<br/>Altura: ".$this->getAltura()." m";
        echo "<br/>Peso: ".$this->getPeso()." kg";
        echo "<br/>Peso: ".$this->getCategoria();
        echo "<br/>Vitorias: ".$this->getVitorias();
        echo "<br/>Derrotas: ".$this->getDerrotas();
        echo "<br/>Empates: ".$this->getEmpates();
        echo "<br/>-------------------------------<br/>";
    }
    function status() {
        echo "<br/>-------------------------------<br/>";
        echo $this->getNome();
        echo " é um peso ".$this->getCategoria();
        echo " possui ".$this->getVitorias()." vitórias, ";
        echo $this->getDerrotas()." derrotas e ";
        echo $this->getEmpates()." empates";
        echo "<br/>-------------------------------<br/>";
    }
    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    function getNome() {
        return $this->nome;
    }
    function getNacionalidade() {
        return $this->nacionalidade;
    }
    function getIdade() {
        return $this->idade;
    }
    function getAltura() {
        return $this->altura;
    }
    function getPeso() {
        return $this->peso;
    }
    function getCategoria() {
        return $this->categoria;
    }
    function getVitorias() {
        return $this->vitorias;
    }
    function getDerrotas() {
        return $this->derrotas;
    }
    function getEmpates() {
        return $this->empates;
    }
    function setNome($n) {
        $this->nome=$n;
    }
    function setNacionalidade($nc) {
        $this->nacionalidade=$nc;
    }
    function setIdade($i) {
        $this->idade=$i;
    }
    function setAltura($a) {
        $this->altura=$a;
    }
    function setPeso($p) {
        $this->peso=$p;
        $this->setCategoria();
    }
    private function setCategoria() {
        if ($this->getPeso()<52.2) {
            $this->categoria="Inválido";
        } elseif ($this->getPeso()<=70.3) {
            $this->categoria="Leve";
        } elseif ($this->getPeso()<=83.9) {
            $this->categoria="Médio";
        } elseif ($this->getPeso()<120.2) {
            $this->categoria="Pesado";
        } else {
            $this->categoria="Inválido";
        }
    }
    function setVitorias($v) {
        $this->vitorias=$v;
    }
    function setDerrotas($d) {
        $this->derrotas=$d;
    }
    function setEmpates($e) {
        $this->empates=$e;
    }
}