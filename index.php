<?php

require_once 'classi/Movie.php';

$film1 = new Movie ('Animali Notturni', 'Nocturnal Animals');
$film1->castPrincipale = ['Amy Adams', 'Jake Gyllenhaal'];
$film1->annoUscita = 2016;
$film1->durata = '116min';

echo '<h3>Il film ' . $film1->titolo . ', con protagonisti ' . $film1->castPrincipale[0] . ' e ' . $film1->castPrincipale[1] . ' è uscito ' . $film1->getYearInterval() . ' anni fa.</h3>';

?>




<!--
- è definita una classe ‘Movie’ X
    => all’interno della classe sono dichiarate delle variabili d’istanza X
    => all’interno della classe è definito un costruttore X
    => all’interno della classe è definito almeno un metodo X
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->