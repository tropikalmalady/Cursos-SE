<?php
    class Conta {
        private $status, $saldo, $dono;
        public $tipo, $numConta;

        public function __construct() {
            $this->setStatus(false);
            $this->setSaldo(0);
        }
        public function abrirConta($t, $d) {
            $this->setNumConta(1111);
            $this->setTipo($t);
            $this->setDono($d);
            $this->setStatus(true);
            if ($t=="cc") {
                $this->setSaldo(50);
            }
            if ($t=="cp") {
                $this->setSaldo(150);
            }
        }
        public function fecharConta() {
            if ($this->getSaldo()>0) {
                echo "<p>Conta com saldo.</p>";
            } else {
                $this->setStatus(false);
                echo "<p>Conta fechada.</p>";
            }
        }
        public function depositar($valor) {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $valor);
                echo "<p>Foi depositado R$ $valor</p>";
            } else {
                echo "<p>Conta fechada.</p>";
            }
        }
        public function sacar($valor) {
            if ($this->getStatus()) {
                if ($this->getSaldo()>=$valor) {
                    $this->setSaldo($this->getSaldo() - $valor);
                    echo "<p>Foi sacado R$ $valor</p>";
                } else {
                    echo "<p>Saldo insuficiente.</p>";
                }
            } else {
                echo "<p>Conta fechada.</p>";
            }
        }
        public function getNumConta() {
            return $this->numConta;
        }
        public function setNumConta($num) {
            $this->numConta=$num;
        }
        public function getSaldo() {
            return $this->saldo;
        }
        public function setSaldo($sal) {
            $this->saldo=$sal;
        }
        public function getDono() {
            return $this->dono;
        }
        public function setDono($d) {
            $this->dono=$d;
        }
        public function getTipo() {
            return $this->tipo;
        }
        public function setTipo($t) {
            $this->tipo=$t;
        }
        public function getStatus() {
            return $this->status;
        }
        public function setStatus($st) {
            $this->status=$st;
        }
    }   
?>