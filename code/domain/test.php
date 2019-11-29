<?php
	class	Test
	{
		private	$_soortTest	=	"";
		private	$_commentaar	=	"";
		private	$_aankondiging	=	Datum;
		private	$_deadline	=	Datum;
		
		public function __construct($soortTest,	$commentaar, Datum	$aankondiging,	Datum	deadline) 
		{
			$this->_soortTest	= $soortTest;
			$this->_commentaar = $commentaar;
    	$this->Datum  = $aankondiging;
			$this->Datum  = $deadline;
			
		}
		
		
	}





?>