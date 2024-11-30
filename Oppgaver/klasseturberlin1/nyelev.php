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
        
        if(isset($_GET["submit"]))
        {
            if(!$_GET["fornavn"] || !$_GET["etternavn"])
            {
                echo("Vennligst fyll inn hele navnet ditt!");
            }
            else if(!$_GET["adresse"] || !$_GET["telefon"])
            {
                echo("Vennligst skriv inn adresse og telefonnummer!");
            }
            else
            {

                $fornavn = $_GET["fornavn"];
                $etternavn = $_GET["etternavn"];
                $adresse = $_GET["adresse"];
                $telefon = $_GET["telefon"];
                $sql = "SELECT * FROM `elev` WHERE `fornavn` = '$fornavn' AND `etternavn` = '$etternavn' AND `adresse` = '$adresse' AND `telefon` = '$telefon'";
                $query = mysqli_query($tilkobling, $sql);
                if($query)
                {
                    
                    $num = mysqli_num_rows($query);
                    echo($num);
                }
                else
                {
                    echo("Error: " . mysqli_error($tilkobling));
                }
                $sql = "INSERT INTO `elever` . `elev` (`fornavn`, `etternavn`, `adresse`, `telefon`) VALUES ('$fornavn', '$etternavn', '$adresse', '$telefon')";
                $query = mysqli_query($tilkobling, $sql);
                if($query && $num <= 0)
                {
                    echo("Vellykket!");
                    $_SESSION["message"] = "Vellyket!";
                    $_SESSION["sent"] = true;
                    header("Location: index.php");
                }
                else if(!$query)
                {
                    echo("Error: " . mysqli_error($tilkobling));
                }
                else if($num > 0)
                {
                    echo("Det finnes allerede en bruker med samme informasjon!");
                }
            }
        }

    ?>
<body>
    <?php include("message.php")?>
    <form method="get">
        <label for="fornavn">Fornavn:</label>
        <input type ="text" id="fornavn" name="fornavn"></input><br><br>

        <label for="etternavn">Etternavn:</label>
        <input type ="text" id="etternavn" name="etternavn"></input><br><br>

        <label for="adresse">Adresse:</label>
        <input type ="text" id="adresse" name="adresse"></input><br><br>

        <label for="telefon">Telefon:</label>
        <input type ="number" id="telefon" name="telefon"></input><br><br>

        <input type="submit" value="Send inn" name = "submit" id = "submit"></input>
        <button id ="tilbake"><a href ="index.php">Tilbake</a></button>
    </form>
</body>
</html>