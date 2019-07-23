<?php

/* Dat je niz cijelih brojeva A (mogu biti i negativni), 
za datu sumu S, naći sve parove a, b iz niza A za koje važi a+b == S*/

$milan = array(3, 4, 17, 9,6, 2);
$n = count($milan);
function zadatakstari($milan, $sum)
{
    foreach($milan as $val)
    {
        if($val>0)
        {
        $val = $sum - $val;
        echo $val;
        echo "<br>";
        }
    }

}
echo zadatakstari($milan, 7);

/**2. Ispisati sve elemente niza od 5
stringova. */

$stringovi = array("neki", "tekst","svastanesto","ajmoponovo");
$n = count($stringovi);

for($i=0; $i<$n; $i++)
{
    echo "ovo su stringovi  -  $stringovi[$i]";
    echo "<br>";
}

/**3. Odrediti zbir elemenata
celobrojnog niza. */
echo "<br>";
$sum = 0;
$zbiraC = array(3,4,6,2,765,9);
for($i=0; $i<count($zbiraC); $i++)
{
    $sum += $zbiraC[$i];
    

}
echo "evo sume brojeva $sum";

echo "<br>";
/**4 Odrediti srednju vrednost
elemenata celobrojnog niza. */
$zC = array(3,4,6,2,765,9);
$sum = 0;

for($i=0; $i<count($zC); $i++)
{
    $sum+=$i;
}
$srvr = $sum/count($zC);
echo "srednja vrednost je $srvr";
echo "<br>";
/**5Odrediti maksimalnu vrednost
u celobrojnom nizu. */
$zC = array(3,4,6,2,765,9);
$max = $zC[0];
for ($i=0; $i<count($zC);$i++)
{
    if($max<$zC[$i])
    {
        $max=$zC[$i];
    }
}
echo "evo max broja $max";
echo "<br>";
/**6. Odrediti minimalnu vrednost u
celobrojnom nizu. */
$zc = array(3,4,6,2,765,9);
$min= $zc[0];
for ($i=0; $i<count($zc); $i++)
{
    if($zc[$i]<$min)
    {
        $min=$zc[$i];
    }

}
echo "ovo je minimalan broj iz niza $min";


echo "<br>";
//blok 2

/**2. Odrediti indeks najvećeg
elementa celobrojnog niza. */
$zC = array(3,4,6,2,765,9);
$max = $zC[0];
$br = 1;
for ($i=0; $i<count($zC);$i++)
{
    if($max<$zC[$i])
    {
        $max=$zC[$i];
        $br++;
    }
}
echo "evo indeksa tog broja $br";
echo "<br>";
/**3. Odrediti broj elemenata
celobrojnog niza koji su veći od
srednje vrednosti. */
echo "<br>";
$zc = array(3,4,6,2,765,9);
$sum = 0;
for($i=0; $i<count($zc); $i++)
{
    $sum+=$i;
}
$srvr = $sum/count($zc);
$br= 0;
foreach($zc as $val)
{
    if($srvr<$val)
    {
        $br++;
    }
}
echo "brojevi veci od $srvr niza tj ima ih $br";
echo "<br>";
/**4. Izračunati zbir pozitivnih
elemenata celobrojnog niza. */
$zc = array(3,4,6,2,-765,9);
$sum = 0;
for ($i=0; $i<count($zc); $i++)
{
    if($zc[$i]>0)
    {
        $sum += $zc[$i];
    }
}
echo "suma pozitivnih elemenata $sum";
echo "<br>";

/**5. Odrediti broj parnih elemenata
u celobrojnom nizu. */
$zc = array(3,4,6,2,-765,9);
$brojac = 0;
for ($i=0; $i<count($zc); $i++)
{
    if($zc[$i]%2==0)
    {
        $brojac++;
        echo "<br>";
      
    }
}

echo "broj parnih elemenata u nizu je $brojac";
echo "<br>";
/**6. Izračunati sumu elemenata u
nizu sa parnim indeksom. */
$zc = array(3,4,6,2,-765,9,2);
$sum = 0;
for ($i=0; $i<count($zc); $i++)
{
    if($i%2==0)
    {
        $sum += $zc[$i];
        echo $i;
        echo "<br>";
      
    }
}
echo "suma el sa parnim indexom je $sum";


echo "<br>";
//novi blok

/**2Promeniti znak svakom
elementu celobrojnog niza. */
echo "pre promene <br>";
$nao = array(2,4,-3,4,2,-5);
function stampanje($nao)
{
    foreach($nao as $val)
    {
        echo $val;
        echo "<br>";
    }
}
echo stampanje($nao);



for ($i=0; $i<count($nao); $i++)
{
    $nao[$i] = -$nao[$i];
}
echo " <br> posle promene <br>";

echo stampanje($nao);
echo "<br>";
/**3. Promeniti znak svakom
neparnom elementu
celobrojnog niza sa parnim
indeksom. */
$nao = array(2,4,-3,4,2,-5);
for ($i=0; $i<count($nao); $i++)
{
    if($i%2==0)
    {
    $nao[$i] = -$nao[$i];
    }
}

echo stampanje($nao);
echo "ovo je sad izmenjen niz";
echo "<br>";
/*4*Odrediti broj parnih elemenata
sa neparnim indeksom. */
$br = 0;
for ($i=0; $i<count($nao); $i++)
{
    if($i%2!= 1 && $nao[$i]%2==0)
    {
     $br++;
    }
}
echo "broj parnih el sa neparnim indeksom $br";
echo "<br>";

/**5. Ispisati dužinu svakog
elementa u nizu stringova. */
$stringovi = array("neki", "tekst","svastanesto","ajmoponovo");

foreach($stringovi as $vv)
{
    echo strlen($vv);
    echo "<br>";
}
echo "duzina stringova";
echo "<br>";

//novi blok

/*2. Odrediti element u nizu
stringova sa najvećom
dužinom.*/
$max = 0;
foreach($stringovi as $vv)
{
    if($max<strlen($vv))
    {
        $max = strlen($vv);
    
    }
}
echo $vv;
echo "<br>";
echo "ovo je max vrednost stringa $max";

/**3. Odrediti broj elemenata u nizu
stringova čija je dužina veća od
prosečne dužine svih stringova
u nizu. */

$stringovi = array("neki", "tekst","svastanesto","ajmoponovo");
$zbir = 0;
$br = 0;
foreach ($stringovi as $vr)
{
    $zbir+=strlen($vr);

}
$srednja = $zbir/count($stringovi);
echo "<br>";
echo "srednja vr je $srednja";
if (strlen($vr)>$srednja)
{
    $br++;
}
echo "<br>";
echo "ovoliko stringova je vece od prosecne $br";
echo "<br>";

/*4. Odrediti broj elemenata u nizu
stringova koji sadrže slovo 'a'. */
echo "<br>";
$br = 0;
$stringovi = array("neki","tekst","svastanesto","ajmoponovo");
foreach($stringovi as $vr)
{
    if(strpos($vr, 'a')!== false)
    {
        $br++;
    }
    
}
echo $br;
echo "<br>";
//drugi nacin
echo "<br>";
$br=0;
foreach($stringovi as $vr)
{
    //substr($str,$pos, $len)-vraca podstringod stringa str
    //pocev od pozicije $pos duzine $len
    if(substr($vr,0,1)=='a' || substr($vr,0,1)=='A')
    {
        $br++;
    }
}
echo $br;
echo "sa substringom";
/*5. Odrediti broj elemenata u nizu
stringova koji počinju na slovo
'a' ili 'A'. */
echo "<br>";
$stringi = array("neki","tekst",
"Anavolimilovana","svastanesto","ajmoponovo");
$br =0;
foreach($stringi as $ime)
{
    //i tip i vrednost ispitujrmo ===
    if(strpos($ime, 'a')===0 || strpos($ime, 'A')===0)
    {
        $br++;
    }
}
echo "ovoliko stringova koji pocinju na A $br";
echo "<br>";

/**$a = $b to je dodela vrednosti-vredost b se daje vr a
 * $a==$b  poredjenje po vrednosti-vraca true ako imaju istu vr a false inace
 * $a===$b poredjenje po vrednosti i tipu- true ako a i b imaju isti tip i 
 * vrednost a inace false
 */

//naredni blok

/**2. Na osnovu celobrojnog niza
$a[0], $a[1], ... formirati niz
$b[0], $b[1], ... koji sadrži samo
pozitivne brojeve. */





/**3. Dati su nizovi
$a[0], $a[1], ..., $a[n - 1] i
$b[0], $b[1], ..., $b[n - 1].
Formirati niz $c[0], $c[1], ...,
$c[2n – 1] čiji su elementi
$a[0], $b[0], $a[1], $b[1], ...,
$a[n - 1], $b[n - 1]. */
echo "<br>";
$a = array (5,8,9,-2);
$b = array(7,0,-1,2);
$c = array();

for ($i =0; $i<count($a);$i++)
{
    $c[] = $a[$i];
    $c[] = $b[$i];
    //da idu redom
    //$c[2*$i] = $a[$i];
    //$c[2* $i +1] = $b[$i];
}
echo stampanje($c);
//naredni blok

/**2. Dati su nizovi
$a[0], $a[1], ..., $a[n - 1] i
$b[0], $b[1], ..., $b[n - 1].
Formirati niz $c[0], $c[1], ...,
$c[n – 1] čiji su elementi
$a[0] * $b[0], $a[1] * $b[1], ...,
$a[n – 1] * $b[n – 1]. */
$a = array (5,8,9,-2);
$b = array(7,0,-1,2);
$novi= array ();
for ($i =0; $i<count($a);$i++)
{
    $novi[] = $a[$i] * $b[$i];
    
    
}
echo "<br>";
echo "novi niz\n";
echo stampanje($novi);

/**3. Na osnovu niza $a[0], $a[1],
..., $a[2n - 1] formirati niz $b[0],
$b[1], ..., $b[n - 1].po formuli:
     */

    echo "<br>";
$a = array(4,2,6,3,8,0,93);
$b =array();
$n = count($a);
for ($i =0; $i<$n/2;$i++)
{
    $b[$i] =($a[$i] + $a[$n-$i-1])/2;
}


echo stampanje($b);






?>