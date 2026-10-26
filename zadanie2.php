
<?php
// Wpisanie liczb do tablicy
$tab = array(3, 5, 7, 10, 3, 12);
$n = count($tab);

// Znalezienie minimum i maksimum
$min = $tab[0];
$max = $tab[0];
$suma = 0;
$ile3 = 0;
$parzyste = 0;
$nieparzyste = 0;
$podzielne = 0;

for ($i = 0; $i < $n; $i++) {
    if ($tab[$i] < $min) $min = $tab[$i];
    if ($tab[$i] > $max) $max = $tab[$i];

    // Obliczenie sumy
    $suma += $tab[$i];

    // Liczenie wystapien liczby 3
    if ($tab[$i] == 3) $ile3++;

    // Liczenie liczb parzystych i nieparzystych
    if ($tab[$i] % 2 == 0) {
        $parzyste++;
    } else {
        $nieparzyste++;
    }

    // Liczenie liczb podzielnych przez 3
    if ($tab[$i] % 3 == 0) $podzielne++;
}

// Wypisanie minimum, maksimum i sredniej
echo "Minimum: $min<br>";
echo "Maksimum: $max<br>";
echo "Srednia: " . ($suma / $n) . "<br>";

// Wypisanie liczby wystapien 3
echo "Wystapienia liczby 3: $ile3<br>";

// Wypisanie liczb parzystych i nieparzystych
echo "Parzyste: $parzyste<br>";
echo "Nieparzyste: $nieparzyste<br>";

// Wypisanie liczb podzielnych przez 3
echo "Podzielne przez 3: $podzielne<br>";

// Sortowanie rosnaco
sort($tab);

echo "Tablica posortowana: ";
for ($i = 0; $i < $n; $i++) {
    echo $tab[$i] . " ";
}
echo "<br>";

// Obliczenie mediany
if ($n % 2 == 1) {
    $mediana = $tab[(int)($n / 2)];
} else {
    $mediana = ($tab[$n / 2 - 1] + $tab[$n / 2]) / 2;
}
echo "Mediana: $mediana<br>";

// Wypisanie trzech najmniejszych liczb
echo "3 najmniejsze: ";
for ($i = 0; $i < 3 && $i < $n; $i++) {
    echo $tab[$i] . " ";
}
echo "<br>";

// Wypisanie trzech najwiekszych liczb
echo "3 najwieksze: ";
for ($i = $n - 3; $i < $n; $i++) {
    if ($i >= 0) echo $tab[$i] . " ";
}
echo "<br>";

// Podniesienie elementow do kwadratu
echo "Kwadraty: ";
for ($i = 0; $i < $n; $i++) {
    echo ($tab[$i] * $tab[$i]) . " ";
}
?>
