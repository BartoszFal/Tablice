
<?php
// Utworzenie tablicy zawierajacej 10 liter
$tab = array('K', 'o', 't', 'y', 'm', 'a', 'j', 'a', 'k', 'a');

// Wypisanie zawartosci tablicy
echo "Zawartosc tablicy: ";
for ($i = 0; $i < 10; $i++) {
    echo $tab[$i] . " ";
}
echo "<br>";

// Wypelnienie tablicy literami 10-literowego wyrazu
$wyraz = "Programowy";

for ($i = 0; $i < 10; $i++) {
    $tab[$i] = $wyraz[$i];
}

// Zamiana wielkich liter na male i malych na wielkie
for ($i = 0; $i < 10; $i++) {
    if ($tab[$i] >= 'a' && $tab[$i] <= 'z') {
        $tab[$i] = strtoupper($tab[$i]);
    } else {
        $tab[$i] = strtolower($tab[$i]);
    }
}

// Wypisanie tablicy po zamianie liter
echo "Po zamianie liter: ";
for ($i = 0; $i < 10; $i++) {
    echo $tab[$i];
}
echo "<br>";

// Wymieszanie liter w losowej kolejnosci
for ($i = 0; $i < 10; $i++) {
    $los = rand(0, 9);

    $pom = $tab[$i];
    $tab[$i] = $tab[$los];
    $tab[$los] = $pom;
}

// Wypisanie tablicy w losowej kolejnosci
echo "Losowa kolejnosc: ";
for ($i = 0; $i < 10; $i++) {
    echo $tab[$i];
}
?>
