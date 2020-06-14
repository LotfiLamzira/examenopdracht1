<?php

class Moment {
    private $_dag = null;
    private $_uur = null;
    private $_klas = "";
    private $_vak = "";

    function __construct($dag, $uur, $klas, $vak) {
        $this->_dag = $dag;
        $this->_uur = $uur;
        $this->_klas = $klas;
        $this->_vak = $vak;
    }

    public function GetDag() {
        return $this->_dag;
    }
    public function GetUur() {
        return $this->_uur;
    }
}