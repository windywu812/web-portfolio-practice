<?php

echo "Tugas No 1"; echo "<br>";

// Variabel
$name = "Windy";

// Operator Penugasan
$name = "Windy :D";
$fullName = $name.":D";

$total = 10;
$num1 = 5;
$total += $num1;

// Operasi Aritmatika
$firstNumber = 50;
$secondNumber = 25;

echo $firstNumber + $secondNumber; echo "<br>";
echo $firstNumber - $secondNumber; echo "<br>";
echo $firstNumber * $secondNumber; echo "<br>";
echo $firstNumber / $secondNumber; echo "<br>";
echo $firstNumber % $secondNumber; echo "<br>";

// Operasi Logika
$a = true;
$b = false;

echo ($a && $b); echo "<br>";
echo ($a || $b); echo "<br>";
echo ($a xor $b); echo "<br>";
echo (!$b); echo "<br>";

// Operasi Pembandingan
if ($firstNumber < $secondNumber) {
    echo "$firstNumber lebih kecil dari $secondNumber";
} else if ($firstNumber <= $secondNumber) {
    echo "$firstNumber lebih kecil dari $secondNumber";
} else if ($firstNumber > $secondNumber) {
    echo "$firstNumber lebih besar dari $secondNumber";
} else if ($firstNumber >= $secondNumber) {
    echo "$firstNumber lebih besar dari $secondNumber";
} else if ($firstNumber == $secondNumber) {
    echo "$firstNumber sama dengan $secondNumber";
} else if ($firstNumber != $secondNumber) {
    echo "$firstNumber tidak sama dengan $secondNumber";
} else if ($firstNumber === $secondNumber) {
    echo "$firstNumber tidak sama dengan $secondNumber";
} else if ($firstNumber !== $secondNumber) {
    echo "$firstNumber tidak sama dengan $secondNumber";
}
