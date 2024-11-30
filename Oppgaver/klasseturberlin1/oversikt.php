<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlintur</title>
</head>
    
    <?php
        include('default.php');
        

        $sql = "SELECT elev.fornavn, elev.etternavn, logg.skrivefelt, logg.dato FROM elev, logg WHERE logg.Elev_idElev = elev.idElev ORDER BY elev.etternavn ASC";
        $query = mysqli_query($tilkobling, $sql);
       
        if(!$query)
        {
            echo("Error: " . mysqli_error($tilkobling));
        }
        
     
    ?>
<body>
    <?php include("message.php")?>
    <?php while($rad = mysqli_fetch_array($query))
    {
        /*$idElev = $rad["Elev_idElev"];
        $sql = "SELECT * FROM elev WHERE idElev = '$idElev' ORDER BY etternavn";
        $datasett = mysqli_query($tilkobling, $sql);
        $elev = mysqli_fetch_array($datasett);*/
       ?><div>Elev: <?php echo($rad["fornavn"] . " " . $rad["etternavn"]); ?><br> Innlegg: <?php echo($rad["skrivefelt"]);?><br> Dato: <?php echo($rad["dato"]);?></div><br><?php
    }
    ?>
    <button id ="tilbake"><a href ="index.php">Tilbake</a></button>
</body>
</html>