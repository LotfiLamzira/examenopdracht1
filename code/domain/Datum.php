<?php
class Datum {
	private $_dag = "";
	private $_maand = "";
	private $_jaar = "";

	public function __construct(string $dag, string $maand, string $jaar) {//Dit zorgt ervoor dat als je een klasse datum wil aanmaken je verplicht bent om een dag, maand en een jaar mee te geven
    $this->_dag = $dag;
    $this->_maand = $maand;
    $this->_jaar = $jaar;
	}	
}
?>