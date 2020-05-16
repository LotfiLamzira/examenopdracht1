<?php
require_once(__DIR__ . "/Datum.php");
class	Taak{
  private	$_soortTaak	=	"";
  private	$_commentaar	=	"";
  private	$_deadline	=	null;
  private $_taken = array();

  public function __construct(string $soortTaak,	string $commentaar,	Datum	$deadline) {//Dit zorgt ervoor dat als je een taak aanmaakt dat je de soorttaak, commentaar en een deadline moet meegeven
    $this->_SoortTaak	= $soortTaak;
    $this->_Commentaar = $commentaar;
    $this->_deadline  = $deadline;
  }
}	
?>