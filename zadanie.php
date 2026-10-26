<?php
// Utworzenie tablicy tab1
$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

// Wypisanie zawartości 5. komórki
echo "5. komorka: " . $tab1[4] . "<br>";

// Zmiana zawartości 7. komórki
$tab1[6] = 12;

// Przepisanie tab1 do tab2
$tab2 = $tab1;

// Utworzenie tab3 - suma elementow o tych samych indeksach
$tab3 = array();

for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

// Wypisanie tablic
echo "tab1: ";
print_r($tab1);

echo "<br>tab2: ";
print_r($tab2);

echo "<br>tab3: ";
print_r($tab3);

// Przepisanie tab1 do tab2 w odwrotnej kolejnosci
$tab2 = array_reverse($tab1);

echo "<br>tab2 odwrocona: ";
print_r($tab2);
?>