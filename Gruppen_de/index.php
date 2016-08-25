<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title> 
	</head>

	<body>
		<header>
			<img><!-- Hier wird das Logo des Quizes eingefügt --></img>
			<h1>Willkommen zum Quiz</h1> 
			<h2>Log In </h2> 
		</header>
			
		<main>
			<form id=registrierung action=form_eval_index.php method=POST>
				<fieldset> 
					<legend>Bitte geben Sie Ihre persönlichen Daten zur Registrierung  ein:</legend> 
						
					<!-- Info: Die vom Nutzer eingegebenen Daten werden an ein Programm geschickt, dass prüft, ob der Nutzername vorhanden ist, und ob das Passwort dazu passt.-->
					<label for=username>Nutzername:</label>
					<input name=username required>
					<br>
						
					<label for=passwort>Passwort:</label>
					<input name=passwort required type=password> 
					<br>
						
					<label for=email>E-Mail:</label>
					<input type=email name=email required> 
					<br>
						
					<input type=submit name=submit>
					<br>
						
					<button form=registrierung type=reset>Eingaben zurücksetzen</button>
						
					<a href=hauptmenue.php> <button type=button id=hauptmenue>Hauptmenü</button>				
				</fieldset>
			</form>
		</main>	
	</body>
</html>
