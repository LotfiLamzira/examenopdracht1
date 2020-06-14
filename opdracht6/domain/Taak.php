<?php

class Taak extends Moment {
    private $_onderwerp = "";

    public function __construct(Schooldag $dag, Lesuur $uur, $onderwerp) {
        parent::__construct($dag, $uur, "", "");

        $this->_onderwerp = $onderwerp;
    }
}