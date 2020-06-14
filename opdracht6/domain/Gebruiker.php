<?php

class Gebruiker {
    protected $_lessenrooster = array();

    /**
     * Vind en return alle week-momenten uit de lessenrooster van de gebruiker
     * die zich in dezelfde week bevinden als de gegeven datum.
    */
    public function GetWeekMomenten(DateTime $date) {
        // vind de eerste dag van de week van $date in een variabele "zondag"
        //  - vind op welke dag dat $date zich bevindt (bv. dinsdag = 2 of donderdag = 4)
        $weekdag = $date->format('w') // een getal van 0 (zondag) tot 6 (zaterdag)
        //  - trek zoveel dagen af van de $date
        $date->modify("-$weekdag day"); // $date is nu gezet op zondag van die week

        // vind de laatste dag van de week van $date in een variabele "zaterdag"
        $eindeVanWeek = $date->modify("+$weekdag day");

        // itereer over alle momenten in $this->_lessenrooster
        // en verzamel daarbij alle momenten die zich tussen "maandag" en "zondag" bevinden
        $momentenVanDieWeek = array();
        for($i = 0; $i < count($this->_lessenrooster); ++$i) {
            $moment = $this->_lessenrooster[$i];

            if ($moment->GetDag()->GetDate() > $date &&
                $moment->GetDag()->GetDate() < $eindeVanWeek) {
                $momentenVanDieWeek[] = $moment;
            }
        }

        return $momentenVanDieWeek;
    }
}