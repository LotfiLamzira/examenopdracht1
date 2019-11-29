<?php
	class	Datum
	{
		private	$_dag	=	0;
		private	$_maand	=	0;
		private	$_jaar	=	0;
		
		public function __construct($dag,	$maand, $jaar) 
		{
			$this->_dag	= $dag;
			$this->_maand = $maand;
    	$this->jaar  = $jaar;
		}
		
		
	}





?>