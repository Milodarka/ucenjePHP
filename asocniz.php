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
echo "<br>";
/**2. Dat je niz elemenata u obliku

NazivPredmeta/Ocena koju
student ima.

Ispisati sve predmete i ocene
studenta.
Odrediti najveću ocenu studenta
koju ima, i ispisati predmete na
kojima je dobio najveću ocenu.
Odrediti prosečnu ocenu studenta i
ispisati predmete na kojima je dobio
ocenu veću od prosečne. */

$fax = array ("20.vek" => "7", "NJegos" => "7", 
"Opsta knjizevnost" => "8",
 "Srednjovjekovna knjizevnost"=>"9", "Sintaksa padeza" =>"5",
  "Engleski jezik"=> "10");
$max=0;
$vr = 0;
  foreach ($fax as $x=>$x_value)
  {
    if ($max<$x_value)
    {
        $max=$x_value;
        $vr=$x;
        
        
    }
  }
  echo "predmet sa najvecom ocenom $vr <br> ";
echo "maksimalna ocena je $max";

echo "<br>";
$zbir = 0;
foreach ($fax as $x=>$x_value)
  {
    $zbir +=$x_value;
  }
echo " zbir ocena $zbir";
echo "<br>";
$srvr = $zbir/count($fax);
echo "prosecna ocena je $srvr";
echo "<br>";
foreach ($fax as $x=>$x_value)
{
    if ($srvr<$x_value)
    {
        echo "predmeti sa ocenom vecom od prosecne $x";
        echo "<br>";
    }
}
echo "<br>";
//sortiranje

$visine = array ("Milica"=>"150","Milovan"=> "190", "Evica"=> "145",
"Jovana"=> "200", "Dragan"=>"195","Vladan"=> "185");
arsort($visine);
foreach ($visine as $x=>$x_val)
{
    echo $x . "<br>";
  
}
echo "<br>";

/**napraviti asoc niz boja gde ce kljuc biti heksadec vrednost boje
 * a vrednost odgo naziv boje.
 sortirati
 rastuce u odnosu na hex kod
 opadajuce u odnosu na hex kod
 rastuce u odnosu na naziv
 opadajuce u odnosu na naziv
 */
$color = array("purple"=>"#640555","blue"=> "#171B6A", "grey"=> "#6C5A5F",
"green"=> "#13F913", "red"=> "#F91313", "yellow"=>"#F9F913"
);
asort($color);

foreach($color as $x=>$x_value)
{
    echo "<br>". $x_value;
}
echo "<br>";

krsort($color);
foreach($color as $x=>$x_value)
{
    echo "<br>". $x_value;
}

echo "<br>";

ksort($color);
foreach($color as $x=>$x_value)
{
    echo "<br>". $x;
}

echo "<br>";
krsort($color);
foreach($color as $x=>$x_value)
{
    echo "<br>". $x;
}
?>