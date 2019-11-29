<?php
class leraar{
  private $_naam = "sam";
  private $_achterNaam = "van battel";
  
  public function __construct($naam, $achternaam){
    $this -> _naam = $naam;
    $this -> _achterNaam = $achternaam;
  }
}
?>