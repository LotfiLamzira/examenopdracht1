<?php

class Test extends Taak {
    public function __construct(Les $les, $onderwerp) {
      $dag = $les->GetDag();
      $uur = $les->GetUur();
      
        parent::__construct($dag, $uur, $onderwerp);
    }
}