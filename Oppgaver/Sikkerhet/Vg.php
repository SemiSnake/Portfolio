<!Doctype HTML>
<html>
  <head>
    <meta charset=utf-8/>
	<title>VG.no</title>
	<style>
	h1 {color: black;
	    text-align: center;
		font-size: 40pt;
		}
	</style>
  </head>	
<body>
 <?php
	$url=fopen("http://www.vg.no","r"); /*  fopen - Åpner fil, leser linjer - inntil EOF er nådd  */
	echo "<h1>Nå:Den nye statsministeren heter Hans Skog<h1>";
	while($linje = fgets($url)) /*fgets - leser en linje fra den åpne fila */
	{	
	    /* preg_replace - erstatter deler av en tekststreng (de relative linkene(interne) med absolutte linker(eksterne)  */
		$linje=preg_replace("/href=\"\//","href=\"http://www.vg.no/",$linje); 
		$linje=preg_replace("/href=\"css\//","href=\http://www.vg.no/css/",$linje); 
		$linje=preg_replace("/src=\"\//","href=\"http://www.vg.no/",$linje); 
		echo $linje. "\n"; /*lukker filen*/
	}	
	fclose($url);
   ?>  
</body>
</html>




