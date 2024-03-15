<?php
// Functie om de leeftijd te berekenen op basis van de geboortedatum
function berekenLeeftijd($geboortedatum) {
    $geboortedatum = new DateTime($geboortedatum);
    $huidigDatum = new DateTime();
    $verschil = $huidigDatum->diff($geboortedatum);
    return $verschil->y;
}

// Controleer of de leeftijd onder de 16 is
function controleerLeeftijd($geboortedatum) {
    return berekenLeeftijd($geboortedatum) < 16;
}

if (controleerLeeftijd($geboortedatum)) {
    echo "Je bent jonger dan 16 jaar. Je mag deze website niet bezoeken!";
} else {
    echo "Je bent 16 jaar of ouder.";   
}
?>
   
