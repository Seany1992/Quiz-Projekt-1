<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title> 
	</head>

	<body>
		<header>
			<img><!-- Hier wird das Logo des Quizes eingefügt --></img>
			<h1>Trainingsmodus</h1>	
		</header>
			
		<form method=get action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
			<p>Schwierigkeitsgrad auswählen: </p>
			<select name=schwierigkeitsgrad>
				<option value=leicht>Leicht</option>
				<option value=mittel>Mittel</option>
				<option value=schwer>Schwer</option>
			</select>
			<!-- Info: Der Schwierigkeitsgrad für den CPU Gegner kann bestimmt werden, der NPC adaptiert das Verhalten eines registrierten Nutzerprofiles -->
			<br>
			<input type=submit name=submit>
			<br>
			
			<a href=regelwerk.txt> <button type=button id=regelwerk>Regelwerk aufrufen</button> </a>

			<p><a href=quiz.php> <button type=button id=start>Quizstart</button></p></a>
		</form>
		
		<?php
		// Das formular <select> wird übermittelt und mittels PHP verarbeitet.
			if (isset($_GET["schwierigkeitsgrad"])){
			echo "Der gewählte Schwierigkeitsgrad ist:  ";
			echo htmlspecialchars ($_GET["schwierigkeitsgrad"]);
			echo "<br>";
			echo "Viel Spaß beim Quiz " ;
			echo "<br>";
			echo "<a href=quiz.php> <button type=button id=start>Quizstart</button></a>";
			}
		?>
	</body>
</html>