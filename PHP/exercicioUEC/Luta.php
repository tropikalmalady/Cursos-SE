<?php
require_once "Lutador.php";
class Luta {
    private $rounds, $aprovada;
    private $desafiado, $desafiante;

    function marcarLuta($l1, $l2) {
        if ($l1->getCategoria()!=$l2->getCategoria()) {
            echo "Lutadores de categorias diferentes!";
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        } elseif ($l1===$l2) {
            echo "Luta entre o mesmo lutador!";
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        } else {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }
    }
    function lutar() {
        if ($this->getAprovada()) {
            echo "<br/>Lutadores: ";
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0:
                    echo "A luta foi um empate ";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: 
                    echo "O vencedor foi o desafiado ".$this->desafiado->getNome();
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;    
                case 2: 
                    echo "O vencedor foi o desafiante ".$this->desafiante->getNome();
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
            }
        } else {
            echo "Luta não foi aprovada!";
        }
    }
    function getDesafiado() {
        return $this->desafiado;
    }
    function getDesafiante() {
        return $this->desafiante;
    }
    function getRounds() {
        return $this->rounds;
    }
    function getAprovada() {
        return $this->aprovada;
    }
    function setDesafiado($ddo) {
        $this->desafiado=$ddo;
    }
    function setDesafiante($dte) {
        $this->desafiante=$dte;
    }
    function setRounds($r) {
        $this->rounds=$r;
    }
    function setAprovada($a) {
        $this->aprovada=$a;
    }
}