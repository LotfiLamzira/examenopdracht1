<?php
class Schooldag {
	private $_datum = null;
	private $_lesuren = array();

	public function __construct(DateTime $datum) {//Dit zorgt ervoor dat als je een schooldag aanmaakt dat je een weekdag, start en einde moet meegeven
		$this->_datum = $datum;
	}

	public function AddLesuur(Lesuur $lesuur) {
		if (in_array($lesuur, $this->_lesuren) == false) {
			$this->_lesuren[] = $lesuur;
		}
	}
}
?>