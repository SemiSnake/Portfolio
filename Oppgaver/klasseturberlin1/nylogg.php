<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    
    <?php
        include('default.php');
        
        $sqlElev = "SELECT * FROM elev";
        $datasettElev = $tilkobling->query($sqlElev);
       
   
        
        if(isset($_GET["submit"]))
        {
            if(!$_GET["innlegg"])
            {
                echo("Vennligst skriv innlegget!");
            }
            else if(!$_GET["elev"])
            {
                echo("Vennligst velg elev!");
            }
            else
            {
                $timezone = date_default_timezone_set("Europe/Amsterdam");
                $dato = date('Y-m-d H:i:s');
                echo($dato);
                //$dato = $_GET["dato"];
                $skrivefelt = $_GET["innlegg"];
                $elev = $_GET["elev"];
                $sql = "INSERT INTO `elever` . `logg` (`dato`, `skrivefelt`, `Elev_idElev`) VALUES ('$dato', '$skrivefelt', '$elev')";
                $query = mysqli_query($tilkobling, $sql);
                if($query)
                {
                    echo("Vellykket!");
                    $_SESSION["message"] = "Vellyket!";
                    $_SESSION["sent"] = true;
                    header("Location: index.php");
                }
                if(!$query)
                {
                    echo("Error: " . mysqli_error($tilkobling));
                }
                
            }
        }

    ?>
<body>
    <?php include("message.php")?>
    <form method="get">
        <label for="innlegg">Innlegg:</label><br>
        <textarea id="innlegg" name="innlegg" rows="4" cols="50"></textarea><br><br>
        <label for="elev">Elev:</label>
        <select name="elev" id="elev" size="1">
        <?php while($rada=mysqli_fetch_array($datasettElev)) {?>
            <option value="<?php echo ($rada["idElev"]);?>"><?php echo ($rada["fornavn"] . " " . $rada["etternavn"]);?></option>
        <?php }; ?>
        </select><br><a href ="nyelev.php">Ny Elev</a><br><br>
        <input type="submit" value="Send inn" name = "submit" id = "submit">
        <button id ="tilbake"><a href ="index.php">Tilbake</a></button>
    </form>
</body>
</html>