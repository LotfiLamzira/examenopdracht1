<?php
class leraar{
  private $_naam = "";
  private $_achterNaam = "";
  
  public function __construct($naam, $achternaam){
    $this -> _naam = $naam;
    $this -> _achterNaam = $achternaam;
  }
}
?>