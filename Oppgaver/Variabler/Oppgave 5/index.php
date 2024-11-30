<!DOCTYPE html>
<html lang="no">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bil kalkulator</title>
        <script>
            window.onload = start;
            function start()
            {
                
                document.getElementById("submit").onclick = getvars;

            }
            function getvars()
            {
                
                lengthInt = parseFloat(document.getElementById("length").value.replace(",", "."));
                speedPrKm = parseFloat(document.getElementById("speed").value.replace(",", "."));
                if(lengthInt % lengthInt != 0)
                {
                    document.getElementById("errorplaceholder").innerHTML = "Verdien oppgitt i lengde (" + document.getElementById("length").value + ") er ikke et gyldig tall!";
                }
                else
                {
                    document.getElementById("errorplaceholder").innerHTML = "";
                    if(speedPrKm % speedPrKm != 0)
                    {
                        document.getElementById("errorplaceholder").innerHTML = "Verdien oppgitt i fart (" + document.getElementById("speed").value + ") er ikke et gyldig tall!";
                    }
                    else
                    {
                        calculateTime(lengthInt, speedPrKm);
                    }
                }
            }
            function calculateTime(length, speed)
            {
                timeHours = (length / speed).toFixed(10);
                timeHoursInt = Math.floor(timeHours);
                timeMinutes = ((timeHours - timeHoursInt) * 60).toFixed(10);
                timeMinutesInt = Math.floor(timeMinutes);
                timeSeconds = Math.floor((timeMinutes - timeMinutesInt) * 60);
                document.getElementById("errorplaceholder").innerHTML = "Det ville ha tatt " + timeHoursInt +" timer, " + timeMinutesInt + " minutter, og "+ timeSeconds + " sekunder å kjøre " + length + "km med en gjennomsnittsfart på " + speed + "km/h";
            }

        </script>
    </head>
    <body>
        <h1>Bilkalkulator</h1>
        <h2>Lengde (km):</h2> <input type="text" id ="length"></input>
        <h2>Gjennomsnittsfart (km/h): </h2> <input type="text" id ="speed"></input>
        <button id ="submit">Regn ut tid </button>
        <h2 id ="errorplaceholder"></h2>
    </body>
</html>