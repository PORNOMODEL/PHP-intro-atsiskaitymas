<?php

//1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)

$numbers = [15, 55, 66, 91, 100, 995, 17, 550];
$evenSum = 0;
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $evenSum += $number;
    }
}
echo $evenSum . PHP_EOL;

//2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)

$numbers = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];
$result = 1;
foreach ($numbers as $subArr) {
    foreach ($subArr as $number) {
        $result *= $number;
    }
}
echo $result . PHP_EOL;

//3.     Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
//Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
//      Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)
//
//      Destination "Paris".
//Titles: "Romantic Paris", "Hidden Paris"
//      Total: 99500
//************
//      Destination "New York"
//      ...
//

   $holidays = [
       [
           'title' => 'Romantic Paris',
           'destination' => 'Paris',
           'price' => 1500,
           'tourists' => 55,
       ],
       [
           'title' => 'Amazing New York',
           'destination' => 'New York',
           'price' => 2699,
           'tourists' => 21,
       ],
       [
           'title' => 'Spectacular Sydney',
           'destination' => 'Sydney',
           'price' => 4130,
           'tourists' => 9,
       ],
       [
           'title' => 'Hidden Paris',
           'destination' => 'Paris',
           'price' => 1700,
           'tourists' => 10,
       ],
       [
           'title' => 'Emperors of the past',
           'destination' => 'Beijing',
           'price' => null,
           'tourists' => 10,
       ],
   ];

$destinationTitles = [];
$destinationTotal = [];
foreach ($holidays as $holiday) {
    if ($holiday['price'] == null) {
        continue;
    }
    if (!isset($destinationTitles[$holiday['destination']])) {
        $destinationTitles[$holiday['destination']] = [];
    }
    array_push($destinationTitles[$holiday['destination']], $holiday['title']);
    if (!isset($destinationTotal[$holiday['destination']])) {
        $destinationTotal[$holiday['destination']] = 0;
    }
    $destinationTotal[$holiday['destination']] += $holiday['price'] * $holiday['tourists'];
}

foreach ($destinationTitles as $destination => $titles) {
    echo "Destination: \"$destination" . PHP_EOL;
    echo "Titles: " . implode(', ', $titles) . PHP_EOL;
    echo "Total: " . $destinationTotal[$destination] . PHP_EOL;
    echo "************" . PHP_EOL;
}

//4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1.5 balas)

$file = fopen("holidays.txt", "w") or die("Unable to open file!");
foreach ($destinationTitles as $destination => $titles) {
    $txt = "Destination: \"$destination\"" . PHP_EOL .
        "Titles: " . implode(', ', $titles) . PHP_EOL .
        "Total: " . $destinationTotal[$destination] . PHP_EOL .
        "************" . PHP_EOL;
    fwrite($file, $txt);
}
fclose($file) . PHP_EOL;

//5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)

$file = fopen("inventWords.txt", "r") or die("Unable to open file!");
while(!feof($file)) {
    echo fgets($file);
}
fclose($file) . PHP_EOL;

//6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją juos priimtų ir juos sudaugintų tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)

$arg1 = $argv[1];
$arg2 = $argv[2];
function multiplyAndSquare($arg1, $arg2) {
    if (!is_numeric($arg1) || !is_numeric($arg2)) {
        echo "Attention: Both arguments must be numbers." . PHP_EOL;
        return 1;
    }

    $result = ($arg1 * $arg2) ** 2;
    echo $result . PHP_EOL;
    return 0;
}

$attention = multiplyAndSquare($arg1, $arg2);

