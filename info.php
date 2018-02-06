<?php 
$firstName = "Lisa";

function fullName($firstName, $familyName) { // LocalScope
    $fullName = $firstName." ".$familyName;

    return $fullName;
};

$myName = fullName($firstName, "Simpson")

// count("insert string")
// $array = sort($array);
// $array = rsort($array);
// variabel = i varians i förändring ---- Constant = konstant likadana
// define (namn, värde); 
// define (if_TESTING) {
//    echo ("This is testing"); }
// print / echo och är samma som keywords och funktioner

// import FIles: Include + require.
/*
include "sökväg/till/filen.php" (checkar läget om filen finns, annars går den vidare. )
require "sökväg/till/filen.php" (måste finnas en fil, annars kraschar allt :S )
*/

?>