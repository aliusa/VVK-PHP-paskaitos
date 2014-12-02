<?php header("Content-Type:text/plain"); ?>
http://www.skelbimaizaidimaiorai.lt/php-programavimas-pamokos-kodai/php-egzamino-kontrolinio-testo-klausimai

1. Kintamieji, konstantos, duomenų tipų keitimo funkcijos.
Prieš kintamuosius rašomas $ ženklas.
Konstantos aprašomi - define("konstanta", "reikšmė")
Duomenų tipai - integer, float, boolean, array, object, null.

2. Matematinės funkcijos, atsitiktiniai skaičiai.
Matematinės funkcijos:
-$foo neigiamas skaičius
$a + $b sudėtis
$a - $b atimtis
$a * $b daugyba
$a / $b dalyba
$a % $b liekana
$a ** $b pakėlimas laipsniu - a keliam laipsniu b. (nuo PHP 5.6)
Atsitiktiniai skaičiai generuojami su rand() funkcija, kur rand(1,10) generuojama nuo 1 iki 10.

3. Masyvų paieškos ir elementų keitimo funkcijos.
Elemento paieškai masyve naudojama in_array() funkcija, grąžinama reikšmę - true arba false.
array_splice() - įterpia į masyvą elementus nurodant vietą ir kiek vienetų
array_slice() - iškerpa iš masyvo pasirinktos vietos pasirinktą kiekį elementų

4. Masyvų elementų rikiavimo ir elementų padėties keitimo funkcijos.
sort, asort, rsort, arsort
natsort, natcasesort
uasort, uksort, usort - vartotojo aprašytos rikiavimo funkcijos

5. Tekstinių eilučių funkcijos: teksto karpymas, teksto paieška.
substr() iškerpa iš teksto pasirinktos vietos pasirinktą kiekį elementų
trim() - pašalina tarpus iš eilutės pradžios ir galo
ltrim() - nuo kairės, rtrim() - nuo dešinės
strstr,  strchr, strrchr, stristr ieško eilutėje fragmento, grąžina dalį eilutės nuo surasto fragmento
strpbrk() ieško eilutėje bet kokio simbolio iš pateikto rinkinio,
	t.y  ieško eilutėje haystack simbolio iš nustatymo char_list ir gražina eilutę pradedant ta pozicija,
	kur buvo rastas simbolis(arba FALSE jeigu simbolis nerastas)

6. Tekstinės funkcijos: keitimas i masyvus, adresų eilutės funkcijos, darbo su HTML elementais funkcijos.
explode() - išskaido tekstinę eilutę į masyvo elementus atskiriant elementus nustatytu simboliu
strip_tags() panaikina HTML elementus
Įvairių simbolių pertransliavimas į esybes (pasižiūrim į HTML kodą "view source"). htmlspecialchars() specialius simbolius vercia kodais

7. Failų įterpimas.
Falai įterpiami per include() arba require() funkcijas.
Jei failo nėra naudojant require() funkcija - kodas sustos.

8. Sąlygos, specialieji masyvai.
Salygos - if, switch.
Specialieji masyvai - $_GET, $_POST, $_SESSION, $_SERVER, $_ENV, $_COOKIE, $_REQUEST

9. Ciklai, lentelės generavimas.
Ciklai - for, foreach, do...while, while
Lentelės gali būt generuojamos ciklais
Lentelių formų duomenys gali būt apibrėžti masyve

10. Datos funkcijos.
date() funkcija naudojama išvesti datą norimu pavidalu.
strftime() išveda laiką tam tikru formatu.
mktime() datos komponentus verčia į timestamp datos formatą
checkdate() tikrina, ar teisingas laikas
strtotime() verčia iš tekstinės eilutės į timestamp.
getmicrotime()
date_parse- grąžina masyvą su detalia informaciją apie konkrečią datą
date_default_timezone_set  - nustato, kokia laiko zona,
date_default_timezone_get - parodo, kokia laiko zona

11. Failų atidarymas ir uždarymas.
$f=fopen($failas, "a");
'r' skaitymas; failo žymeklis pradžioje. 
'r+' skaitymas ir rašymas; failo žymeklis pradžioje 
'w' rašymas ; failo žymeklis pradžioje. Senas turinys sunaikinamas. Jeigu failo nėra- jis sukuriamas. 
'w+' skaitymas ir rašymas; failo žymeklis pradžioje Senas turinys sunaikinamas. Jeigu failo nėra- jis sukuriamas. O
'a' rašymas; failo žymeklis pabaigoje. Jeigu failo nėra- jis sukuriamas.
'a+' skaitymas ir rašymas; failo žymeklis pabaigoje. Jeigu failo nėra- jis sukuriamas.
'x' rašymas; klaida, jeigu failas egzistuoja.
x+' skaitymas ir rašymas; klaida, jeigu failas egzistuoja.
fclose() - failas uždaromas.

12. Įrašymas į failą.
Prieš įrašant į failą pirma reikia jį atidaryti.
$f = fopen($failas, "a"); 
fwrite($f, "informacija"); 

13. Nuskaitymo iš failo funkcijos.
Nuskaitymui iš failo reikia sukti ciklą

$f = fopen( $failas, "r" );
echo "<pre>"
while (!feof($f)) {
$eilute = fgets($f, 4096);
echo $eilute;
echo "</pre>"
fclose ($f);

14. Paparaščiausia skelbimų lenta.
:

15. Skaitliukas.
Skaitliuką galimą programuoti, kad skaičiuotų peržiūras atnaujinus puslapį, bet tada galima lengvai manipuliuoti skaičių.
Taipogi galima tikrinti apsilankiosio IP adresą ir pridėti peržiūrą pvz nedaugiau 1 kart per valandą

16. Įrašo trynimas iš tekstinio failo.
:

17. Įrašo keitimas tekstiniame faile.
:

18. Balsavimo lenta (Fiksuoto klausimų skaičiaus).
:

19. Pagrindinės MySQL funkcios.
SELECT, UPDATE, INSERT, DROP, ALTER, CREATE

CREATE	sakinys sukuria duomenų bazes ir lenteles joje 
INSERT	sakinys įtraukia įrašus į lentelę
SELECT 	sakinys pateikia užklausos rezultatus
DELETE 	sakinys pašalina užklausos rezultatus
UPDATE	sakinys keičia lentelės duomenys
ALTER 	sakinys keičia lentelės struktūrą,
	panaudodamas sakinius, tokius kaip ADD naujajam stulpeliui pridėti,
	CHANGE esančio stulpelio vardui ar aprašui pakeisti,
	RENAME  lentelei pervardyti arba DROP lentelei pašalinti. 

20. Išrinkimas is MySQL lentelės.
Eilučių ir įrašų išrinkimui iš lentelės naudojama SELECT, pvz:
SELECT * from table_name WHERE kazkas = row_value
SELECT `vardas` FROM `vartotojai` WHERE id = 2;

21. Papildymas įrašo (MySQL).
Įrašų papildymui naudojama UPDATE

22. Trynimas (MySQL).
DELETE - eilutės, stulpelio
DROP - lentelės

23. Papildymas, trinimas, keitimas (MySQL).
UPDATE, INSET, DELETE, ALTER

24. Statiniai ir globalūs kintamieji.
Statiniai kintamieji naudojami funkcijose, kuriose norima išeinant iš funkcijos ir kitą kart į ją įeinant išlaikyt kintamojo reikšmę
Statiniai kintamieji aprašomi Static žodeliu priešais kintamąjį
Globalius kintamuosius galima pasiekti kitose funkcijose,
aprašomas panašiai kaip SESSION t.y.  $GLOBAL[''] ir laužtiniuose skliaustuose įvedamas kintamojo vardas.

25. Funkcijos, reikšmių perdavimas.
Funkcios aprašomos - funkcion foo() {}
Iškviečiamos tiesiog - foo();
Funkcija su reikšmių perdavimu aprašoma - funkcion foo($bar) {}
Iškviečiama pastaroji funkcija - foo($bar);
Pastebėtina, kad funkcijos aprašyme kintamojo vardą galima rašyti betkokį, tai neturi įtakos.
Tarp riestinių sklaustų rašome funkciją.

26. Formos kintamųjų perdavimas scenarijui.
Formos kintamieji perduodant per formos 'name' parametrą, o reikšmės per 'value'.
Formos 'value' vardai gali ir kartototis, tuomet $_GET ir $_POST gaus kintamųjų masyvą.
