<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title>
	</head>

	<body>
		<header>
			<img><!-- Hier wird das Logo des Quizes eingefügt --></img>
			<h1>Hauptmenü</h1> 
		</header>
		<main>
			<form action=form_eval_hauptmenue.php method=POST>
				<fieldset> 
						<a href=quiz.php> <button type=button id=einzelspieler>Einzelspieler</button>  
						<br>
							
						<a href=trainingsmodus.php> <button type=button id=trainingsmodus>Trainingsmodus</button> 
						<br>
							
						<a href=duellmodus.php> <button type=button id=duellmodus>Duellmodus</button>
						<br>
							
						<a href=userforum.php> <button type=button id=userforum>Userforum</button> 
						<br>
							
						<a href=adminbereich.php> <button type=button id=quizfragen>Quizfragen bearbeiten</button> 		
				</fieldset>
			</form>
		</main>
	</body>
</html>
