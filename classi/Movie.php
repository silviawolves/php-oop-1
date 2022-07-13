<?php

class Movie {
    public $titolo;
    public $titoloOriginale;
    public $castPrincipale;
    public $annoUscita;
    public $durata;

    function __construct($_titolo, $_titoloOriginale) {
        $this->titolo = $_titolo;
        $this->titoloOriginale = $_titoloOriginale;
    }

    // METHOD PER SAPERE QUANTI ANNI FA È USCITO IL FILM
    public function getYearInterval() {
        $annoAttuale = date('Y');
        return $annoAttuale - $this->annoUscita;
    }
}