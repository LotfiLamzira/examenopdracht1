<?php
require_once(__DIR__ . "/Lesvak.php");
require_once(__DIR__ . "/Schooldag.php");

class Lessenrooster{
  private $_lesUur = "";
  
  public function __construct(string $lesUur, Lesvak $lesVakken, Schooldag $schooldagen) {//Als je een lessenrooster aanmaakt moet je een lesuur, lesvak en een schooldag meegeven
			$this->_lesUur	= $lesUur;
      $this->_lesvak	= $lesVakken;
      $this->_schooldag	= $schooldagen;
	}	
}
?>