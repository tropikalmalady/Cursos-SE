<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao {
    private $titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor;

    function detalhes() {
        echo 'Livro '.$this->getTitulo().' escrito por '.$this->getAutor().'.<br/>Paginas: '.$this->getTotPaginas().'. Atual: '.$this->getPagAtual().'. Sendo lido por '.$this->getLeitor()->getNome();
    }
    function abrir() {
        $this->setAberto(true);
    }
    function fechar() {
        $this->setAberto(false);
    }
    function folhear($p) {
        if ($p>$this->getTotPaginas()) {
            $this->setPagAtual(0);
        } elseif ($p<$this->getPagAtual()) {
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($p);
        }
    }
    function avancarPag() {
        if ($this->getPagAtual()<$this->getTotPaginas()) {
            $this->setPagAtual($this->getPagAtual() + 1);
        } else {
            $this->setPagAtual(0);
        }
    }
    function voltarPag() {
        if ($this->getPagAtual()>0) {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }
    function __construct($t, $au, $tp, $l) {
        $this->setTitulo($t);
        $this->setAutor($au);
        $this->setTotPaginas($tp);
        $this->setLeitor($l);
        $this->setPagAtual(0);
        $this->fechar();
    }
    function getTitulo() {
        return $this->titulo;
    }
    function getAutor() {
        return $this->autor;
    }
    function getTotPaginas() {
        return $this->totPaginas;
    }
    function getPagAtual() {
        return $this->pagAtual;
    }
    function getAberto() {
        return $this->aberto;
    }
    function getLeitor() {
        return $this->leitor;
    }
    function setTitulo($t) {
        $this->titulo = $t;
    }
    function setAutor($au) {
        $this->autor = $au;
    }
    function setTotPaginas($tp) {
        $this->totPaginas = $tp;
    }
    function setPagAtual($pa) {
        $this->pagAtual = $pa;
    }
    function setAberto($ab) {
        $this->aberto = $ab;
    }
    function setLeitor($l) {
        $this->leitor = $l;
    }
}