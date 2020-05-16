<?php
  require_once "mustache.php.2.12.0/mustache.php";
  
  $dagen = array{"dagen" => array{
    array("herineringname" -> "tandarts", "evenementID" -> "1", "afspraakID" -> "1"),
    array("herineringname" -> "docter", "evenementID" -> "2", "afspraakID" -> "2"),
    array("herineringname" -> "verjaardag", "evenementID" -> "3", "afspraakID" -> "3"),
    array("herineringname" -> "lunch", "evenementID" -> "4", "afspraakID" -> "4"),
    array("herineringname" -> "winkelen", "evenementID" -> "5", "afspraakID" -> "5")
  }
  };
  
  $mustache = new Mustache_Engine(array{"loader" => new Mustache_Loader_FilesystemLoader(_DIR_ . "/dag")});
  $agendaGridHTML = $mustache->render("agendaGrid");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Weekpagina.css">
    <link rel="stylesheet" type="text/css" href="header.css">
  </head>
  <body>
    <div id="mainLayoutGrid">
      <div id="head">
        <div id="home">
          <A href="Inlogpagina.html">Home</a>
        </div>
        <div id="week">
          <A href="Weekpagina.html">Week</a>
        </div>
        <div id="maand">
          <A href="Homepagina.html">Maand</a>
        </div>
        <div id="signOut">
          <A href="Inlogpagina.html">Sign Out</a>
        </div>
      </div>
      <div id="titel">
        <p>
          Januari
        </p>
      </div>
      <div id="kalender">
<?php
  echo $agendaGridHTML;
        
?>
      </div>
      <div id="volgende">
        <a>Volgende week</a>
      </div>
    </div>
  </body>
</html>