<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script>
            window.onload = start;
            fagarray = [];
            class fag 
            {
                constructor(id, name, grade)
                {
                    this.id = id;
                    this.name = name;
                    this.grade = grade;
                    fagarray.push(this);
                }  
            }
            const utvikling = new fag(1, "Utvikling", 5);
            const samfunnskunnskap = new fag(2, "Samfunnskunnskap", 5);
            const driftsstotte = new fag(3, "Driftsstøtte", 6);
            const norsk = new fag(4, "Norsk", 5);
            const yff = new fag(5, "YFF", 6);
            const brukerstotte = new fag(6, "Brukerstøtte", 5);

            
            function start()
            {
                var gradeAverage = 0;
                for(i in fagarray)
                {
                    gradeAverage += fagarray[i].grade; 
                    let textElement = document.createElement("h2");
                    let textContent = document.createTextNode("Fag: " + fagarray[i].name + " Karakter: " + fagarray[i].grade);
                    document.body.appendChild(textElement);
                    textElement.appendChild(textContent);
                }
                gradeAverage = (gradeAverage / fagarray.length).toFixed(2);
                let textElement = document.createElement("h2");
                let textContent = document.createTextNode("Min gjennomsnittskarakter blir da: " + gradeAverage);
                document.body.appendChild(textElement);
                textElement.appendChild(textContent); 
            }

        </script>
    </head>
    <body>
        <h1>Tommy sine karakterer!</h1>
    </body>
</html>