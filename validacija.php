<html>
    <body>
    <h1> Primer PHP validacije forme</h1>

        <form action="<?php echo htmlspecialcharacters($_SERVER["PHP_SELF"]);?>"
        method = "post">

            <label> Ime: </label>
                <input type="text"  name = "Ime"> <br>
            <br>
            <label> Prezime: </label>
                <input type="text"  name = "Prezime"> <br>
            <br>
            <label> e-mail: </label>
                <input type= "text" name = "mail"> <br>
            <br>
            <label> Sajt: </label>
                <input type="url"  name = "sajt"> <br>
            <br>
            <label> Komentar: </label>
                <textarea name = "komentar" form = "usrform"> 
                Unesite svoj komentar 
                </textarea> <br>
            <br>
            <label> Pol </label> 
            <input type= "radio" name="pol" value= "Ostalo"> Ostalo
            <input type= "radio" name= "pol" value ="Zenski"> Zenski
            <input type= "radio" name="pol" value ="Muski"> Muski
               <br>
               <br>
               <input type= "submit" value ="potvrdi">
                <br> 

        </form>
 
    
<?php
echo " <p> Vas unos </p>";
echo "<br>";
echo "Vase ime i prezime je :" . $_POST["Ime"] . "" .$_POST["Prezime"];
echo "<br>";
echo "Vase Email je :" . $_POST["mail"];
?>
        
    </body>
</html>