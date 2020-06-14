<?php

class Lesuur {
    private $_startuur = 0;
    private $_startminuut = 0;
    private $_duurtijd = 50;

    public function __construct($uur, $minuut, $duurtijd) {
        $this->_startuur = $uur;
        $this->_startminuut = $minuut;
        $this->_duurtijd = $duurtijd;
    }
}