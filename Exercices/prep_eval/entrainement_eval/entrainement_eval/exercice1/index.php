<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="ajax.js"></script>
	</head>
	<body>
		<div id="resultat"></div>
		<form method="post" action="">
			<input type="text" name="prenom" id="prenom" placeholder="Prénom" /><br/>
			<input type="text" name="nom" id="nom" placeholder="Nom" /><br/>
			<select name="sexe" id="sexe">
				<option value="m">Homme</option>
				<option value="f">Femme</option>
			</select><br/>
			<input type="text" name="service" id="service" placeholder="Service" /><br/>
			<input type="text" name="salaire" id="salaire" placeholder="Salaire" /><br/>
			<input type="submit" value="Enregistrer" id="submit" />
		</form>
	</body>
</html>