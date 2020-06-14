<?php

class Les extends Moment {
    private $_lesOnderwerp = "";

    public function __construct(Schooldag $dag, Lesuur $uur, $klas, $vak, $onderwerp) {
        parent::__construct($dag, $uur, $klas, $vak);

        $this->_lesOnderwerp = $onderwerp;
    }
}