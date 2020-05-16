<?php
class Schooldag {
	private $_weekdag = "";
	private $_start = null;
	private $_einde = null;

	public function __construct(string $weekdag, float $start, float $einde) {//Dit zorgt ervoor dat als je een schooldag aanmaakt dat je een weekdag, start en einde moet meegeven
    $this->_weekdag = $weekdag;
    $this->_start = $start;
    $this->_einde = $einde;
	}
}
?>