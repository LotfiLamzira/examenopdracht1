<?php
	class	Taak
	{
		private	$_soortTaak	=	"";
		private	$_commentaar	=	"";
		private	$_aankondiging	=	Datum;
		private	$_deadline	=	Datum;
		
		public function __construct($soortTaak,	$commentaar, Datum	$aankondiging,	Datum	deadline) 
		{
			$this->_soortTaak	= $soortTaak;
			$this->_commentaar = $commentaar;
    	$this->Datum  = $aankondiging;
			$this->Datum  = $deadline;
			
		}
		
		
	}





?>