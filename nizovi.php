<?php
$nizAuto = array("BMW", "Opel", "Toyota");




echo "<br>";
$drugaKlupa[30]= "Bogdan";
$drugaKlupa[17]= "Nemanja";
$drugaKlupa[22]= "Sanja";
$drugaKlupa[3]= "Rade";
echo "<br>";


echo "<br>";


$prvaKlupa = array( "Nikola", "Milica", "Jelena",
 "Milica", "Vanja", "Jelena");
 $len = count($prvaKlupa);
 for ($i= 0; $i <$len; $i++)
 {
     echo $prvaKlupa[$i];
     echo "<br>";
 }
 echo "<br>";
 /* odrediti zbir el celobrojnog niza*/

 $niz = array(2,5,3,6);
 $k = count($niz);
 $rez = 0;
 for ($i=0; $i<$k; $i++)
 {
     $rez += $niz[$i];
     echo $rez;
     echo"<br>";
 }
 /* odrediti srednju vrednost 
 elemenata celobrojnog niza*/

 echo "<br>";

 $naziv = array(3,6,2);
 $m = count($naziv);
 for ($i=0; $i<$m; $i++ )
 {

 }

//FOREACH PETLJA!!!


foreach (array(1,2,4,6) as $v)
{
    echo "$v\n";
}
    echo "<br>";

$stringovi = array("Milena", "Brbljiva je ", "Skroz");

foreach ( $stringovi as $vr)

    {
        echo "$vr\n";
    }

    echo "<br>";

    /*Odrediti zbir elemenata
celobrojnog niza. */

$nesto = array(2,3,-6,3);
$sum= 0;
foreach ($nesto as $vr)
{
    $sum +=$vr;
    
}

echo "ovo je sume $sum";
echo "<br>";

/*maksimalna vrednost */


$kecap = array(3,45,6,5,75,27,4,222);
$duz = count($kecap);
echo "<br>";
$max=$kecap[0];
for ($i=1; $i<$duz; $i++)
{
    if ($max<$kecap[$i])
    {
        $max=$kecap[$i];

    }
    
}
echo " maksimum $max";
echo "<br>";


/*6*odrediti indeks najveceg elementa celobrojnog niza */


$nekiniz = array(3,2,6,4,2);
$max=$nekiniz[0];
$prom=0;
echo "<br>";
for ($i=1; $i<count($nekiniz); $i++)
{

    if ($max<$nekiniz[$i])
    {
        $max=$nekiniz[$i];
        $prom = $i;
    }
   
   
}
echo $prom;
echo "<br>";



/**Odrediti broj elemenata
celobrojnog niza koji su veći od
srednje vrednosti. */


$opetniz = array(3,2,7,5,2);
$duz = count($opetniz);
$sum = 0;
$srbr= 0;

for ($i=0; $i<$duz; $i++)
{
    $sum+=$opetniz[$i];
}
$srednja = $sum/$duz;

foreach ($opetniz as $val)
{
    if ($val>$srednja)
    {
        $srbr++;
    }
}
echo "ovoliko ih ima $srbr";

echo "<br>";
echo "ovo je srednja vrednost $srednja";
echo "<br>";


/*4Izračunati zbir pozitivnih
elemenata celobrojnog niza. */

$ziz = array(3,2,6,-7,43);
$sum =0;
$dd = count($ziz);
$i= 0;
while ($i<$dd)
{
    if($ziz[$i]>0)
    {
    $sum += $ziz[$i];
    
    }
    $i++;
}

echo "ovo je suma poz brojeva $sum";
echo "<br>";


/**Odrediti broj parnih elemenata
u celobrojnom nizu. */

$nizC = array (3,2,5,4,7,9);
$br = 0;

foreach ($nizC as $vr)
{
    if ($vr%2==0)
    {
        $br++;
        echo $vr;
    }
}
echo "<br>";
echo"ovoliko je brojeva parno $br ";


/*6*izracunati sumu elemenata sa paarnim indeksom */

$suma = 0;
for ($i=0; $i< count($nizC);$i++)
{
    if($i%2 ==0)
    {
        $suma+=$nizC[$i];
    }
}
echo "<br> $suma";

/**Promeniti znak svakom elementu celobrojnog niza 

echo "<br>";

$nizovi = array (3,2,6,-7,4,-2);
for ($i= 0; $i < count($nizovi); $i++)
{
    if ($i<0)
    {
        $i=+ ($i);
    }
    if ($i>0)
    {
        $i = -($i);
    }
    
}
echo "evo pozitivnih i negativnih vrednosti $nizovi[$i]";*/


/*promeniti znak svakom neparnom elementu celobrojnog 
niza sa parnim indeksom
$nizovi = array (3,2,6,-7,4,-2);
function stampanje($nizovi)
{
    foreach($nizovi as $vva)
    {
        echo $val . "";
    }
}
    for ($i=0; $i<count($nizovi);$i++)
    {
        if($nizovi[$i] %2==1 && $i%2 !=0)
        {
        $nizovi[$i]= -$nizovi[$i];
        }
    
    
    }
echo "<br>";
echo $nizovi;
echo "onaj z sto nisi znala". stampanje($nizovi);*/

/**odrediti broj parnih elemenata sa neparnim indeksom */

echo "<br>";
$nii = array(2,4,6,98);
$br = 0;
for ($i=1; $i<count($nii); $i+=2)
{
    

        if ($nii[$i]%2==0)
        {
            echo $nii[$i];
            echo "<br>";
            $br++;
        }
    

}
echo "ovoliko je parnih elem sa neparnim ind= $br";

/**Ispisati dužinu svakog
elementa u nizu stringova. */
echo "<br>";
$zaStr = array("Milena","nekovobudenajduza", "neki", "podtekst");

foreach($zaStr as $val)
{
    $val1 = strlen($val);
    echo "proba kolika je duzina $val1";
    echo "<br>";
}

 /**Odrediti element u nizu
stringova sa najvećom
dužinom. */

$max = $zaStr[0];
foreach ($zaStr as $val)
{
   
if ($max<strlen($val))
    {
        $max=strlen($val);
    }

}

echo "ovo je max duzina reci $val";

/*3 odrediti broj elemenata u nizu stringova cija je duzina
veca od prosecne duzine svih stringova */
echo "<br>";
$reci = array("nesto","reci", "samokazem", "mozda");
$sum = 0;
$n = count($reci);
foreach ($reci as $vv)
{
    
    $sum += strlen($vv);
    echo "$vv ovoliko su duge reci". "<br>";

}
$srednja = $sum/$n;
echo "ovo je suma slova $sum";
echo "ovo bi trebalo da da srednju vr $srednja" . "<br>";
$brojac = 0;/*
foreach($reci as $vv)
{
    if ($srednja<strlen($vv))
{
    {
    $brojac++;
    }
}
echo "<br>";
echo "ovoliko brojeva je vece $brojac ";*/




?>