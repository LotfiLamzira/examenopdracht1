<?php

class Leerkracht extends Gebruiker {

    public function MaakLes(Schooldag $dag, Lesuur $uur, $klas, $vak, $onderwerp) {
      $moment = new Les($dag, $uur, $klas, $vak, $onderwerp);
      $this->_lessenrooster[] = $moment;
    }
    public function WijzigLes(Les $les, Schooldag $nieuwedag, Lesuur $nieuwuur, $nieuweklas, $nieuwvak, $nieuwonderwerp) {
      $lesIndex = array_search($les, $this->_lessenrooster);

      if ($lesIndex == false) {
          return;
      }
      $les->SetDag($nieuwedag);
      $les->SetUur($nieuwuur);
      $les->SetKlas($nieuweklas);
      $les->SetVak($nieuwvak);
      $les->SetOnderwerp($nieuwonderwerp);

      this->_lessenrooster[$lesIndex] = $les;
    }
    public function VerwijderLes(les $les) {
      unset($_lessenrooster[$les]);
    }
  //---------------------------------------------------------------------------------------------------------------------------------------
  
    public function MaakTaak(Schooldag $dag, Lesuur $uur, $onderwerp) {
      $taak = new Taak($dag, $uur, $onderwerp);
      $this->_lessenrooster[] = $moment;
    }
    public function WijzigTaak(Taak $taak, Schooldag $nieuwedag, Lesuur $nieuwuur, $nieuwonderwerp) {
      $taakIndex = array_search($taak, $this->_lessenrooster)
      
      if ($taakIndex == false) {
          return;
      }
      $taak->SetDag($nieuwedag);
      $taak->SetUur($nieuwuur);
      $taak->SetOnderwerp($nieuwonderwerp);

      this->_lessenrooster[$taakIndex] = $taak;
    }
    public function VerwijderTaak(Taak $taak) {
      unset($_lessenrooster[$taak]);
    }
  //---------------------------------------------------------------------------------------------------------------------------------------
   
    public function MaakTest(Moment $les, $onderwerp) {
      $test = new Test($les, $onderwerp);
      $this->_lessenrooster[] = $moment;
    }           
    public function WijzigTest(Test $test, Moment $nieuweles, $nieuwonderwerp) {
      $testIndex = array_search($test, $this->_lessenrooster)
      
      if ($testIndex == false) {
          return;
      }
      $test->SetLes($nieuweles);
      $test->SetOnderwerp($nieuwonderwerp);

      this->_lessenrooster[$testIndex] = $test;
    }
    public function VerwijderTest(Test $test) {
      unset($_lessenrooster[$test]);
    }
}














