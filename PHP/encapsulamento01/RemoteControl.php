<?php
require_once 'Controller.php';
class RemoteControl implements Controller {
    private $vol, $isOn, $playin;

    function __construct() {
        $this->setVol(50);
        $this->powerOff();
        $this->pause();
    }
    function getVol() {
        return $this->vol;
    }
    function getIsOn() {
        return $this->isOn;
    }
    function getPlayin() {
        return $this->playin;
    }
    function setVol($v) {
        $this->vol=$v;
    }
    function setIsOn($on) {
        $this->isOn=$on;
    }
    function setPlayin($p) {
        $this->playin=$p;
    }
    function powerOn() {
        $this->setIsOn(true);
    }
    function powerOff() {
        $this->setIsOn(false);
    }
    function openMenu() {
        echo "<br/>Está ligado?  ".($this->getIsOn()?"Sim":"Não");
        echo "<br/>Está reproduzindo?  ".($this->getPlayin()?"Sim":"Não");
        echo "<br/>Volume: ";
        for ($i=0; $i<=$this->getVol(); $i+=10) {
            echo "| "; 
        }
        echo "<br/>";
    }
    function closeMenu() {
        echo "<br/>Fechando Menu...";
    }
    function upVol() {
        if ($this->getIsOn()) {
            $this->setVol($this->getVol() + 5);
        }
    }
    function downVol() {
        if ($this->getIsOn()) {
            $this->setVol($this->getVol() - 5);
        }
    }
    public function muteOn() {
        if ($this->getIsOn() && $this->getVol()>0) {
            $this->setVol(0);
        }
    }
    public function muteOff() {
        if ($this->getIsOn() && $this->getVol()==0) {
            $this->setVol(50);
        }
    }
    function play() {
        if ($this->getIsOn() && !$this->getPlayin()) {
            $this->setPlayin(true);
        }
    }
    function pause() {
        if ($this->getIsOn() && $this->getPlayin()) {
            $this->setPlayin(false);
        }
    }
}