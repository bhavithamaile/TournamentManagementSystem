$teams[] = "Austria";
$teams[] = "Hungary";
$teams[] = "Czech Republic";
$teams[] = "New Zealang";
$teams[] = "France";
$teams[] = "Belgium";
$teams[] = "Estonia";
$teams[] = "Iceland";

$number_of_teams = count($teams);
// Shuffle the teams
shuffle($teams);// You get a shuffled array

// Pair the adjacent teams
for ( $index = 0; $index < $number_of_teams; $index +=2) {
    // Pair $teams[$index ] with $teams[$index +1]
    echo $teams[$index ] . "->paired with = " . $teams[$index+1] . "<br>";
}
