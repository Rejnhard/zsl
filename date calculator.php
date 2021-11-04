<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator daty</title>
</head>
<body>
    <h2><b>Kalkulator daty</b></h2>
    <form method="post">
        <input type=number name="dzien1" placeholder="Podaj dzień">
        <input type=number name="miesiac1" placeholder="Podaj miesiąc">
        <input type=number name="rok1" placeholder="Podaj rok">
        <input type="submit" name="submit">
        
</form>
<?php


$dzien1=0;
$miesiac1=0;
$rok1=0;

#wcześniejsza data
$dzien1=$_POST['dzien1']  ??"";
$miesiac1=$_POST['miesiac1']  ??"";
$rok1=$_POST['rok1']  ??"";

#dzisiejsza data
$dzien2=date("d");
$miesiac2=date("m");
$rok2=date("Y");


if(!empty($dzien1 && $miesiac1 && $rok1 && $dzien1>=1 && $dzien1<=31 && $miesiac1>=1 && $miesiac1<=12 && $rok1<=$rok2)){

$today=$dzien2+$miesiac2*30+$rok2*365;
$yesterday=$dzien1+$miesiac1*30+$rok1*365;

$roznica=$today-$yesterday;

$rok3=$roznica/365;
$miesiac3=($roznica%365)/30;
$dzien3=($roznica%365)%30;
if ((int)$dzien3>=0 && (int)$miesiac3>=0){
echo "</br><b>Od dzisiaj minęło:</b></br>".(int)$rok3." lat, ".(int)$miesiac3." miesięcy i ".(int)$dzien3." dni";
}
else{
echo "Podaj wcześniejszą datę";
}




}

?>
</body>
</html>