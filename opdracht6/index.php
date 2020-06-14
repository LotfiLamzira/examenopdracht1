<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Document</title>
  <link type="text/css" rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body id ="startindex">

  <div id="startpagina">
    <div id="menu">
      <a href="#"><i class="fas fa-times"></i></a>
      <h1>
        Lessenrooster
      </h1>

      <ul class="menu">
        <li><a href="#" class="knop"><i class="fas fa-th-large"></i>REGISTREER</a></li>
        <li><a href="contact.php"><i class="fas fa-envelope"></i>CONTACT</a></li>
      </ul>

    </div>
    <div id="content">
      <div id="hamburger">
        <a href="#menu"><i class="fas fa-bars"></i></a>
      </div>
      <div id="header">
        <h3>
          Lessenrooster
        </h3>
      </div>
      <form id="inlogblok" action="rooster.php" method="POST">
        <p id="welkom">
          Welkom!
        </p>
        <input class="inlogveld" type="text" placeholder="Email" name="email">
        <input class="inlogveld" type="password" placeholder="Wachtwoord" name="password">
        <div id="inlogknopveld">
          <input type="submit" href="#" id="inlogknop" value="Log In">
        </div>


      </form>
    </div>
  </div>
</body>

</html>