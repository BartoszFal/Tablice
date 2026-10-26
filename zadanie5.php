
<?php
// Utworzenie tablicy 100 liczb Fibonacciego
$F[0] = 0;
$F[1] = 1;

for ($i = 2; $i < 100; $i++) {
    $F[$i] = $F[$i - 1] + $F[$i - 2];
}

// Wypisanie ciagu Fibonacciego
echo "Ciag Fibonacciego: ";
for ($i = 0; $i < 100; $i++) {
    echo $F[$i] . " ";
}
echo "<br><br>";

// Utworzenie tablicy kolejnych poteg liczby 2
$P[0] = 1;

for ($i = 1; $i < 100; $i++) {
    $P[$i] = $P[$i - 1] * 2;
}

// Wypisanie poteg liczby 2
echo "Potegi liczby 2: ";
for ($i = 0; $i < 100; $i++) {
    echo $P[$i] . " ";
}
echo "<br><br>";

// Utworzenie ciagu 3, 6, 9, 12...
for ($i = 0; $i < 100; $i++) {
    $T[$i] = 3 * ($i + 1);
}

// Wypisanie ciagu
echo "Ciag 3, 6, 9, 12...: ";
for ($i = 0; $i < 100; $i++) {
    echo $T[$i] . " ";
}
echo "<br><br>";

// Utworzenie ciagu 2, 4, 8, 16, 32...
$D[0] = 2;

for ($i = 1; $i < 100; $i++) {
    $D[$i] = $D[$i - 1] * 2;
}

// Wypisanie ciagu
echo "Ciag 2, 4, 8, 16...: ";
for ($i = 0; $i < 100; $i++) {
    echo $D[$i] . " ";
}
?>
