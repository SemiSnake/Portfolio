<!DOCTYPE html>
<html lang="no">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minibank</title>
        <script>
            const valg1 =
            {
                belop: 100
            }
            const valg2 =
            {
                belop: 200
            }
            const valg3 =
            {
                belop: 500
            }
            const valg4 =
            {
                belop: 1000
            }
            window.onload = start
            function start()
            {
                document.getElementById("uttak").onclick = betal()

            }
            function betal()
            {
                 
            }
        </script>
    </head>
    <body>
        <h1>Minibank</h1>
        <h2 id ="Saldotext">Saldo</h2>
        <br>
        <input type="checkbox"><script>document.write(valg1.belop)</script></input>
        <input type="checkbox"><script>document.write(valg2.belop)</script></input>
        <input type="checkbox"><script>document.write(valg3.belop)</script></input>
        <input type="checkbox"><script>document.write(valg4.belop)</script></input>
        <br>
        <br>
        <button id = "uttak">Uttak</button>
    </body>
</html>