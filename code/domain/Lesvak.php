<?php
require_once(__DIR__ . "/Test.php");
require_once(__DIR__ . "/Taak.php");
require_once(__DIR__ . "/Lestitel.php");

class Lesvak{
  private $_lesOnderwerp = "";
  
  public function __construct(string $lesOnderwerp, Lestitel $LesTitel) {//Als je een lestitel wilt aanmaken moet je een lesonderwerp en een lestitel meegeven
			$this->_lesOnderwerp	= $lesOnderwerp;	
			$this->_Lestitel	= $lestitels;	
		}
  
	
	public function GeefTaakOp() {//voegt een taak toe aan het lesvak
    $taak1 = new Taak($soortTaak,	$commentaar, $deadline);
		$this->_taken[] = $taak1;
  }
	
  public function VerwijderTaak(){//verwijdert een taak uit de array
    $_taken.remove($taak1);
  }
	
	public function GeefTestOp() {//voegt een test toe aan het lesvak
    $test1 = new Test($soortTest,	$commentaar, $deadline);
		$this->_testen[] = $test1;
  }
	
	public function VerwijderTest(){//verwijdert een test uit de array
    $_testen.remove($test1);
  }
}


?>

<?php