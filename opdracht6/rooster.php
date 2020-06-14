<?php


    require_once "mustache.php-2.12.0/mustache.php";
    require_once __DIR__ . "/domain/Applicatie.php";

    
    $app = new Applicatie();
    if (isset($_POST["email"], $_POST["password"]) == true) {
      $gebruiker = $_POST["email"];
      $wachtwoord = $_POST["password"];

      $loginSuccess = $app->Login($gebruiker, $wachtwoord);

      if ($loginSuccess == false) {
        echo "login gefaald!";
        die();
      }
    }


    $profiel = array(
        "profiel" => array(
            array("imageSrc" => "image.png"),
            array("title" => "Ahmed El-Hila")
        )
    );
    
    $gebruikersnaam = $app->GetGebruikersnaam();
    $headerRooster = array(
        "headerRooster" => array(
            array("header" => "Lessenrooster van $gebruikersnaam")
           
        
        )
    );


    $momenten = $app->GetMomenten();
    $weekrooster = array(
      "lesdagen" => array(
        array(
          "dagnaam" => "maandag",
          "lessen" => array(
            array(
                "lestitel" => "informatica",
                "lesonderwerp" => "SQL"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            )
          )
        ),
        array(
          "dagnaam" => "dinsdag",
          "lessen" => array(
            array(
                "lestitel" => "informatica",
                "lesonderwerp" => "SQL"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            )
          )
        ),
        array(
          "dagnaam" => "woensdag",
          "lessen" => array(
            array(
                "lestitel" => "informatica",
                "lesonderwerp" => "SQL"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            )
          )
        ),
        array(
          "dagnaam" => "donderdag",
          "lessen" => array(
            array(
                "lestitel" => "informatica",
                "lesonderwerp" => "SQL"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            )
          )
        ),
        array(
          "dagnaam" => "vrijdag",
          "lessen" => array(
            array(
                "lestitel" => "informatica",
                "lesonderwerp" => "SQL"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            ),
            array(
                "lestitel" => "Nederlands",
                "lesonderwerp" => "werkwoorden"
            )
          )
        )
      )
    );


    $mustache = new Mustache_Engine(array("loader" => new Mustache_Loader_FilesystemLoader(__DIR__ . "/templates")));
    $profielGridHTML = $mustache->render("profiel", $profiel);
    $headerRoosterGridHTML = $mustache->render("headerRooster", $headerRooster);
    $roosterGridHTML = $mustache->render("weekrooster", $weekrooster);


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>roosterpagina</title>
  <link type="text/css" rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body id="roosterindex">
  <div id="mainLayoutGrid">
    <div id="menu">
     <?php
        echo  $profielGridHTML;
       ?>

      <ul class="menu">
        <li><a href="index.php" class="knop"><i class="fas fa-th-large"></i>UITLOGGEN</a></li>
        <li><a href="contact.php"><i class="fas fa-envelope"></i>CONTACT</a></li>
        <li><a href="#"><i class="fas fa-search"></i>ZOEK LESSENROOSTER</a></li>
      </ul>

    </div>

    <div id="index">

      <div id="header">
        <p>
          <a href="#menu"><i class="fas fa-bars"></i></a>
        </p>
        <?php
        echo  $headerRoosterGridHTML;
       ?>
      </div>


      <!-- hier komt de ROOSTER -->
      <?php echo $roosterGridHTML; ?>

      <div id="footer">
        <p>
          powered by Lotfi & Ahmed
        </p>
      </div>
    </div>
  </div>
</body>

</html>