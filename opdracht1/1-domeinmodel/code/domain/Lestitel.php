<?php
require_once(__DIR__ . "/Leraar.php");
class Lestitel{
  private $_vak = "";
  private $_lokaal= "";
  
  public function __construct(string $vak, Leraar $leraar, string $lokaal){//Als je een klasse lestitel aanmaakt ben je verplicht om een vak, leraar en lokaal mee te geven.
    $this -> _vak = $vak;
		$this -> _leraar = $leraar;
    $this -> _lokaal = $lokaal;
  }
}
?>