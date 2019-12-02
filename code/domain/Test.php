<?php
require_once(__DIR__ . "/Datum.php");
	class	Test
	{
		private	$_soortTest	=	"";
		private	$_commentaar	=	"";
		private	$_deadline	=	null;
		private $_testen = array();
		
		public function __construct(string $soortTest,	string $commentaar,	Datum	$deadline) {//dit zorgt ervoor dat wanneer je een test aanmaakt, je de soort test, commentaar en de deadline moet meegeven.
			$this->_SoortTest	= $soortTest;
			$this->_Commentaar = $commentaar;
			$this->_deadline  = $deadline;
			
		}
	}
?>