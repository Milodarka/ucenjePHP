<html>
<head>
        <style>
            .error 
            {
                color:red;
            }
            body 
            {
                background-color:pink;
            }
        </style>
</head>
    <body>
<?php
    $ime = $prezime = $email = $sajt= $komentar = $pol = $pravila=  "";
   $imeO= $prezimeO = $emailO = $sajtO = $komentarO = "*";
   

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["ime"])==TRUE)
        {
            $imeO = "Ime ne sme biti prazno polje";
        }
        elseif(preg_match("[a-z A-Z]",$_POST["ime"]) == FALSE)

        {
            $imeO = "Ime moze sadrzati samo slova";
        }
        else 
        {
            $ime= $_POST["ime"];
        }


        
        if(empty($_POST["prezime"])==TRUE)
        {
            $prezimeO = "Prezime ne sme biti prazno polje";
        }
        elseif(preg_match("[a-z A-Z]",$_POST["prezime"]) == FALSE)

        {
            $prezimeO = "Prezime moze sadrzati samo slova";
        }
        else 
        {
            $prezime= $_POST["prezime"];
        }

        
        if(empty($_POST["email"])==TRUE)
        {
            $emailO = "Mejl ne sme biti prazno polje";
        }
        elseif(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == FALSE)
        {
            $emailO = " *emajl nije dobro unet";
        }
        else 
        {
            $email= $_POST["email"];
        }

           

        if(empty($_POST["sajt"])==TRUE)
        {
            $sajtO = "Sajt ne sme biti prazno polje";
        }
        
        elseif(filter_var($_POST["sajt"], FILTER_VALIDATE_URL) == FALSE)
            {
                $sajtO = "Neispravno unet website";
            }
        else 
        {
            $sajt= $_POST["sajt"];
        }
           
        

        if(strlen($_POST["komentar"])<5)
        {
            $komentarO = "Komentar mora imati vise karaktera";
        }
        else 
        {
            $komentar= $_POST["komentar"];
        }
        
        $pol = $_POST["pol"];

        if(isset($_POST["pravila"]) == TRUE)
        {
            $pravila = "Pravila su prihvacena";
        }
        else 
        {
            $pravila = "Pravila nisu prihvacena";
        }

        
    }
    




?>

    <h1> Primer PHP validacije forme</h1>

        <form method="post" action="validacija.php">

            <label> Ime: </label>
            
                <input type="text"  name = "ime"> 
                <span class = "error"> <?php echo $imeO; ?> </span>
                <br>
            <br>
            <label> Prezime: </label>
                <input type="text"  name = "prezime">
                <span class = "error"> <?php echo $prezimeO; ?> </span>
                <br>
            <br>
            <label> e-mail: </label>
                <input type= "text" name = "email"> 
                <span class = "error"> <?php echo $emailO; ?> </span>
                <br>
            <br>
            <label> Sajt: </label>
                <input type="text"  name = "sajt">
                <span class = "error"> <?php echo $sajtO; ?> </span>
                <br>
            <br>
            <label> Komentar: </label>
                <textarea name = "komentar" > 
               
                </textarea>
                <span class = "error"> <?php echo $komentarO; ?> </span>
                 <br>
            <br>
            <label> Pol </label> 
                <input type= "radio" name="pol" value= "Ostalo" checked> Ostalo
                <input type= "radio" name= "pol" value ="Zenski"> Zenski
                <input type= "radio" name="pol" value ="Muski"> Muski
               <br>
               <br>
            Prihvatate pravila koriscenja
            <input type="checkbox" name="pravila" value="da">
            <br>
            <br>
            <input type= "submit" name="submit" value ="potvrdi">
            <br> 

        </form>
 <img src = "smrda.jpg" width= "30%">
    
<?php
echo " <h2> Vas unos </h2>";
echo "<br>";
echo "Korisnik :" . $ime . "" . $prezime;
echo "<br>";
echo "Mejl korisnika :" . $email ;
echo "<br>";
echo "Website korisnika :" . $sajt ;
echo "<br>";
echo "Komentar korisnika:" . $komentar;
echo "<br>";
echo "Pol korisnika" . $pol;
echo "<br>";
echo "Prihvacena pravila koriscenja:" . $pravila;
echo "<br>";

?>
        
    </body>
</html>