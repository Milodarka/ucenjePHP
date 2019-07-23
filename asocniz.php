<?php
/**Dat je niz elemenata u obliku
MarkaAuta/Godište.

Ispisati sve automobile, kao i
njihova godišta.
Ispisati automobile koji su stariji od
10 godina.
Ispisati automobile čija Marka sarži
string “Opel”, a proizvedena su
posle 2000. godine. */

$auto = array ("audi"=>"2002","opel"=> "1988", "bmw"=> "2018",
"ford"=> "1978", "kia"=>"2004","opel korsa"=> "2001");

foreach($auto as $val =>$val_value)
{
    echo "naziv" . "" ."$val" ." godiste" ."$val_value";
    echo "<br>";

    if(date("Y")-$val_value>10)
    {
        
        echo "ovi automobili su stariji od 10g $val";
        echo "<br>";
    }
    echo "<br>";

}

foreach($auto as $val => $val_value)
{
    if(strpos($val, "opel") !== false && $val_value >2000)
    {
        echo "ovo su opel vozila starija od 2000god $val";
        echo "<br>";
    }
 
}
echo "<br>";
/**Dat je niz elemenata u obliku
ImeOsobe/Visina.
3. Ispisati sve osobe sa njihovim
visinama.
4. Ispisati sve natprosečno visoke
osobe.
5. Ispisati sve osobe koje imaju
maksimalnu visinu.
6. Ispisati sve osobe sa visinom
ispod proseka, a čije ime
počinje na slovo 'V'. */
$osobe = array ("Milica"=>"150","Milovan"=> "190", "Evica"=> "145",
"Jovana"=> "200", "Dragan"=>"195","Vladan"=> "185");

$zbir = 0;
foreach ($osobe as $val=>$val_value)
{
    echo "ovo su imena osoba-". "$val". "-njihova visina-" . "$val_value";
    echo "<br>";
    $zbir += $val_value;
    
}
$srvr = $zbir/count($osobe);
echo "srednja visina $srvr";
foreach ($osobe as $val=>$val_value)
{
    if ($srvr<$val_value)
    {
        echo "<br>";
        echo "ovo su natprosecne visine $val";
    }
}
//maksimum
$max = 0;
foreach ($osobe as $val=>$val_value)
{
    if ($max<$val_value)
    {
        $max=$val_value;

    }

}
echo "<br>";
echo "najveca osoba je $max";
echo"<br>";
//najveca osoba
foreach ($osobe as $val=>$val_value)
{
    if ($max==$val_value)
    {
        echo "ova osoba ima max visinu $val";
        echo "<br>";
        break;

    }

}
?>