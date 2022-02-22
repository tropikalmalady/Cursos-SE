<?php
interface Controller {
    public function powerOn();
    public function powerOff();
    public function openMenu();
    public function closeMenu();
    public function upVol();
    public function downVol();
    public function muteOn();
    public function muteOff();
    public function play();
    public function pause();
}