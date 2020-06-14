<?php

require_once __DIR__ . "/../domain/Moment.php";

class DatabaseConnection {

    private $_host = "";
    private $_username = "";
    private $_password = "";
    private $_database = "";

    private $_connection = null;

    function __construct() {
        $this->_host = "localhost";
        $this->_username = "bin14";
        $this->_password = "BBhqkq9JRWTvTrH";
        $this->_database = "bin14";

        $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

        if ($this->_connection == false) {
            die("connection failed: " . mysqli_connect_error());
        }
    }

    function UserExists($gebruiker, $wachtwoord) {
        $query = "SELECT * FROM Gebruiker
        WHERE Gebruiker.email = '$gebruiker'
        AND Gebruiker.wachtwoord = '$wachtwoord';";
        $gebruikers = $this->_connection->query($query);

        if ($gebruikers->num_rows > 0) {
            return true;
        }
        else {
            return false;
        }
    }

    function QueryMomenten($eigenaar) {
        
        $query = "SELECT * FROM Moment
        INNER JOIN Boodschap ON Moment.naam = Boodschap.naam
        WHERE Moment.naam = '$eigenaar';";
        $momenten = $this->_connection->query($query);
        $momentenArray = array();

        for ($i = 0; $i < $teams->num_rows; ++$i) {
            $row = $momenten->fetch_assoc();
            $dag = $row["datum"];
            $uur = $row["uur"];
            $klas = $row["klas"];
            $vak = $row["vak"];

            $moment = new Moment($dag, $uur, $klas, $vak);
            $momentenArray[] = $moment;
            
        }

        return $momentenArray;
    }

    

    
}

    
    
      
