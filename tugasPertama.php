<?php

echo "Tugas No 1"; echo "<br>";

// Variabel
$name = "Windy";

// Operator Penugasan
$name = "Windy :D";

// Operasi Aritmatika
$firstNumber = 50;
$secondNumber = 25;

echo $firstNumber + $secondNumber; echo "<br>";
echo $firstNumber - $secondNumber; echo "<br>";
echo $firstNumber * $secondNumber; echo "<br>";
echo $firstNumber / $secondNumber; echo "<br>";
echo $firstNumber % $secondNumber; echo "<br>";

// Operasi Logika
echo (true && true); echo "<br>";
echo (true || false); echo "<br>";
echo (!false); echo "<br>";

// Operasi Aritmatika
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
}