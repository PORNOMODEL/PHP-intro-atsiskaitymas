<?php

//1.	Parašykite 1 būdą, kaip įvykdyti (paleisti) PHP script'ą iš komandinės eilutės.

php -f myscript.php

//2.	Kas privalo būtų PHP failo pirmoje eilurėje, kad PHP žinotų, jog tolesnės eilutės yra PHP kodas?

<?php

//3.	Kokiais simboliais gali prasidėti PHP kintamojo pavadinimas (po $)?

raidė arba _

//4.	Ar simbolis % gali būti naudojamas PHP kintamojo pavadinime?

Negali

//5.	Parašykite multiline PHP komentaro pavyzdį.

/*
multiline pavyzdys
*/

arba

//antras pavyzdys

//6.	Parašykite bent 4 duomenų tipus, naudojamus PHp kalboje.

integer
float
string
boolean

//7.	Paminėkite pagrindinė enumeratyvaus masyvo (indexed array) požymį, kuriuo jis skiriasi nuo asociatyvaus masyvo.

Yra automatiškai sugeneruojami sveikomis skaičių reikšmėmis (pavyzdžiui, 0, 1, 2, 3, ir t.t.)

//8.	Turite kintamajį $someVariable = '15'. Pakeiskite jo tipą į 'int'.

$someVariable = int($someVariable);

//9.	Kokia funkcija naudojama gauti masyvo narių skaičiui?

count();

//10.	Kas nutinka, kai bandome sukurti masyvą, kuris turi kelis narius, kurių raktai (keys) sutampa?

Vieno iš jų reikšmė bus išsaugota, o visi kiti bus pakeisti.

//11.	Parašykite multidimensinio masyvo pavyzdį.

$family = array(
    array("Edvinas", "Pranys", 29, "male"),
    array("Pinkis", "Maukaule", 3, "male"),
    array("Mama", "Mamyte", 65, "female")
);

//12.	Parašykite enumeryvaus masyvo pavyzdį.

cars = ['BMW', 'AUDI', 'MB']
for index, value in enumerate(cars):
    print(index, value)

//13.	Koks operatorius yra naudojamas pridėti naują narį masyvui? Pateikite paprastą pavyzdį.

array_push($cars, "MB");

//14.	Kokia funkcija naudojama panaikinti masyvo nariui?

unset();

//15.	Kokia funkcija naudotumėte pašalinti nereikalingus simbolius nuo string tipo reikšmės pradžios ir pabaigos (pvz:. "-test-" -> "test")?

trim();

//16.	Kas laikoma superglobaliame kintamajame $_POST?

HTTP formos kuriame yra informacija, kuri naudojama gauti formos duomenis, siunčiamus metodu "POST".

//17.	Kas laikoma superglobaliame kintamajame $_FILES?

HTTP formos kuriame yra informacija apie failą, tokia kaip failo pavadinimas, tipas, dydis ir klaida.

//18.	Git status komanda leidžia padaryti ką?

Parodo, kokie failai yra pakeisti, pridėti, bet necommitinti

//19.	Git push komanda leidžia padaryti ką?

 Commitinti failai yra perkeliami į repozitoriją.

//20.	Kas yra regex?

Regular Expressions -  yra naudojamas teksto analizei, teksto tvarkymui, teksto atpažinimui ir teksto filtravimui