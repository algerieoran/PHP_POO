$(document).ready(function(){
	// La suite sera éxécutée après le chargement de la page
	$("#submit").click(function(event){
		// on cible un evenement JS quel qu'il soit
		event.preventDefault(); // Annule le comportement initial du submit
		insertEmploye(); // On lance la fonction que l'on souhaite éxécuter
	});
	
	function insertEmploye(){
		
		//nom = $("#nom").val();
		
		var parameters = {
			'prenom' : $("#prenom").val(),
			'nom' : $("#nom").val(),
			'sexe' : $("#sexe").find(":selected").val(),
			'service' : $("#service").val(),
			'salaire' : $("#salaire").val(),
		};
		
		console.log(parameters);
	
		$.post('ajax.php', parameters, function(data){
			console.log(data.validation);
			if(data.validation == 'OK'){
				$("#resultat").html("<p>L'employé est inséré</p>");
				$("#prenom").val("");
				$("#nom").val("");
				$("#salaire").val("");
				$("#service").val("");
				$("#sexe").val("m");
			}
		}, 'json');
	}
});