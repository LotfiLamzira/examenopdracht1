<?php

require_once(__DIR__ . "/../data/DatabaseConnection.php");

class Applicatie {
    private $_gebruiker = null;
    private $_momenten = null;

    public function __construct() {
        $this->_data = new DatabaseConnection();
    }

    public function Login($gebruiker, $wachtwoord) {
        if (isset($_SESSION["gebruiker"]) == true) {
            $gebruiker = $_SESSION["gebruiker"];
        }


        if ($this->_data->UserExists($gebruiker, $wachtwoord) == true) {
            $_SESSION["gebruiker"] = $gebruiker;

            $this->_momenten = $this->_data->QueryMomenten($gebruiker);
            return true;
        }
        else {
            return false;
        }
    }

    public function GetGebruikersnaam() {
        return $this->_gebruiker->GetNaam();
    }

    public function GetMomenten() {
        return $this->_momenten;
    }

    public function SelectMomenten($momentId) {
        $this->_huidigeMoment = $this->_data->QueryMoment($momentId);
        return $this->_huidigeMoment;
    }

    public function GetMomentenVanWeek(DateTime $weekVan) {
        $momentenVanDezeWeek = $this->_gebruiker->GetWeekMomenten($weekVan);
        return $this->_momentenVanDezeWeek;
    }
}