<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styl.css">
</head>
<body>
<?php
$punkty=0;
# --------------------------- ODP JEDNOKROTNEGO WYBORU ----------------------------------#
if (isset($_POST["odp1"]))
{
	$odp1=$_POST['odp1'];
	if ($odp1=='b') $punkty++;
}
if (isset($_POST["odp2"]))
{
	$odp2=$_POST['odp2'];
	if ($odp2=='c') $punkty++;
}
if (isset($_POST["odp3"]))
{
	$odp3=$_POST['odp3'];
	if ($odp3=='d') $punkty++;
}
if (isset($_POST["odp4"]))
{
	$odp4=$_POST['odp4'];
	if ($odp4=='a') $punkty++;
}
if (isset($_POST["odp5"]))
{
	$odp5=$_POST['odp5'];
	if ($odp5=='a') $punkty++;
}
# --------------------------- ODP WPISYWANE ----------------------------------#
if (isset($_POST["odp6"]))
{
	$odp6=$_POST['odp6'];
	if ($odp6=='2') $punkty=$punkty+2;
}
if (isset($_POST["odp7"]))
{
	$odp7=$_POST['odp7'];
	if ($odp7=='tab[0]') $punkty=$punkty+2;
}
# --------------------------- ODP WIELOKROTNEGO WYBORU ----------------------------------#
if (isset($_POST["odp8"]))
{
$odp8=$_POST["odp8"];
$poprawne8=0;
for($i=0;$i<count($odp8);$i++)
{
if ($odp8[$i]=='a') break;
if ($odp8[$i]=='d') break;
if ($odp8[$i]=='b') $poprawne8++;
if ($odp8[$i]=='c') $poprawne8++;
}
if ($poprawne8==1) $punkty++;
if ($poprawne8==2) $punkty=$punkty+2;
}
if (isset($_POST["odp9"]))
{
$odp9=$_POST["odp9"];
$poprawne9=0;
for($i=0;$i<count($odp9);$i++)
{
if ($odp9[$i]=='4') break;
if ($odp9[$i]=='3') break;
if ($odp9[$i]=='1') $poprawne9++;
if ($odp9[$i]=='2') $poprawne9++;
}
if ($poprawne9==1) $punkty++;
if ($poprawne9==2) $punkty=$punkty+2;
}
# --------------------------- ODP PRAWDA/FAŁSZ ----------------------------------#
if (isset($_POST["odp10"]))
{
	$odp10=$_POST['odp10'];
	if ($odp10=='prawda') $punkty++;
}
# --------------------------- iMIĘ I NAZWISKO ----------------------------------#
if (isset($_POST["imie"]))
{
$imie=$_POST['imie'];
if ($imie=='') echo ("<h1>TWOJE IMIĘ I NAZWISKO: NIE PODANO</h1>");
else echo ("<h1>TWOJE IMIĘ I NAZWISKO: $imie</h1>");
}
# --------------------------- PŁEĆ ----------------------------------#
if (isset($_POST["plec"]))
{
	$plec=$_POST['plec'];
if ($_POST['plec'] == 'kobieta')echo ("<h2>UZYSKAŁAŚ $punkty/14 PUNKTÓW</h2>");
else if ($_POST['plec'] == 'mężczyzna')echo ("<h2>UZYSKAŁEŚ $punkty/14 PUNKTÓW</h2>");
}
else echo ("<h2>UZYSKANO $punkty/14 PUNKTÓW</h2>");
# --------------------------- OCENA ----------------------------------#
if ($punkty<=5) 
{
	echo ("<h3> TWOJA OCENA TO: </h3> ");
	echo ('<img src="img/jeden.png"/>'); 
}
if (($punkty==6)||($punkty==7))
{
	echo ("<h3> TWOJA OCENA TO: </h3> ");
	echo ('<img src="img/dwa.png"/>'); 
}
if (($punkty>=8)&&($punkty<=11))
{
	echo ("<h3> TWOJA OCENA TO: </h3> ");
	echo ('<img src="img/trzy.png"/>'); 
}
if (($punkty==12)||($punkty==13))
{
	echo ("<h3> TWOJA OCENA TO: </h3> ");
	echo ('<img src="img/cztery.png"/>'); 
}
if ($punkty==14)
{
	echo ("<h3> TWOJA OCENA TO: </h3> ");
	echo ('<img src="img/piec.png"/>'); 
}
echo ("<p> POPRAWNE ODPOWIEDZI: <br/> 1. b - Liczbę 2,34 należy zadeklarować zmienną Float <br/> 2. c - RAM jest pamięcią operacyjną <br/> 3. d - Aby przywrócić cofniętą zmianę należy użyć skrótu klawiszowego: Ctrl + Shift + Z <br/> 4. a - Najmniejszą wartością z podanych jest kilobajt <br/> 5. a - Znacznik kolumny tabeli w języku html to TD <br/> 6. Po przekształceniu liczby 010 w systemie binarnym na system dziesiętny otrzymujemy: 2 <br/> 7. Aby odwołać się do pierwszego elementu tej tablicy należy użyć: tab[0] <br/> 8. Te funkcje NIE są instrukcjami wsrunkowymi: cin, cout <br/> 9. Programy przeznaczone do obróbki zdjęć: Gimp, Adobe Photoshop  <br/> 10. Prawda, piksel to najmniejszy element obrazu wyświetlany na monitorze <p>"); 
echo ("<p> PUNKTACJA: <br/> Od zadania 1 do 7 - po jednym punkcie <br/> Zadania 8 i 9 - w przypadku jednej prawidłowej odpowiedzi - 1pkt, wszystkich - 2pkt <br/> Zadanie 10 - 1 pkt <p>");
?>
</body>
</html>