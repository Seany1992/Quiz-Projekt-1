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
			
		<form action=form_eval_trainingsmodus.php method=POST>
			<p>Schwierigkeitsgrad auswählen: </p>
			<select>
				<option value=leicht>Leicht</option>
				<option value=mittel>Mittel</option>
				<option value=schwer>Schwer</option>
			</select>
			<!-- Info: Der Schwierigkeitsgrad für den CPU Gegner kann bestimmt werden, der NPC adaptiert das Verhalten eines registrierten Nutzerprofiles -->
			<br>
			
			<a href=regelwerk.txt> <button type=button id=regelwerk>Regelwerk aufrufen</button>

			<a href=quiz.php> <button type=button id=start>Quizstart</button>
		</form>
	</body>
</html>