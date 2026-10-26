
<?php
// Tablica 100 losowych liczb
for ($i = 0; $i < 100; $i++) {
    $A[$i] = rand(1, 30);
}

// Najwieksza liczba i liczba jej wystapien
$max = $A[0];
$ile = 0;

for ($i = 0; $i < 100; $i++) {
    if ($A[$i] > $max) $max = $A[$i];
}
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] == $max) $ile++;
}
echo "Max: $max, wystapienia: $ile<br>";

// Wypisanie liczb nieparzystych
echo "Nieparzyste: ";
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] % 2 != 0) echo $A[$i] . " ";
}
echo "<br>";

// Liczby o nieparzystych indeksach
echo "Nieparzyste indeksy: ";
for ($i = 1; $i < 100; $i += 2) echo $A[$i] . " ";
echo "<br>";

// Liczby z przedzialu <5, 15)
$ile = 0;
echo "Przedzial: ";
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] >= 5 && $A[$i] < 15) {
        echo $A[$i] . " ";
        $ile++;
    }
}
echo "<br>Ilosc: $ile<br>";

// Element najblizszy liczbie a
$a = 12;
$bliski = $A[0];

for ($i = 1; $i < 100; $i++) {
    if (abs($A[$i] - $a) < abs($bliski - $a)) {
        $bliski = $A[$i];
    }
}
echo "Najblizszy $a: $bliski<br>";

// Poprzednik i nastepnik minimum
$min = $A[0];
$indeks = 0;

for ($i = 1; $i < 100; $i++) {
    if ($A[$i] < $min) {
        $min = $A[$i];
        $indeks = $i;
    }
}
echo "Min: $min<br>";
if ($indeks > 0) echo "Poprzednik: " . $A[$indeks - 1] . "<br>";
if ($indeks < 99) echo "Nastepnik: " . $A[$indeks + 1] . "<br>";

// Nowa tablica liczb wiekszych od 10
$B = array();
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] > 10) $B[] = $A[$i];
}
echo "Wieksze od 10: ";
for ($i = 0; $i < count($B); $i++) echo $B[$i] . " ";
echo "<br>";

// Tablica sum narastajacych
$suma = 0;
for ($i = 0; $i < 100; $i++) {
    $suma += $A[$i];
    $B[$i] = $suma;
}

// Sortowanie malejaco
rsort($A);
echo "Malejaco: ";
for ($i = 0; $i < 100; $i++) echo $A[$i] . " ";
echo "<br>";

// Liczby wystepujace przynajmniej 3 razy
echo "Minimum 3 wystapienia: ";
for ($i = 0; $i < 100; $i++) {
    $ile = 0;
    for ($j = 0; $j < 100; $j++) {
        if ($A[$i] == $A[$j]) $ile++;
    }

    $bylo = false;
    for ($j = 0; $j < $i; $j++) {
        if ($A[$i] == $A[$j]) $bylo = true;
    }

    if ($ile >= 3 && !$bylo) echo $A[$i] . " ";
}
?>
