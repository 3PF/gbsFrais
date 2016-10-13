function afficherStatAnnee()
{
	$(document).ready(function(){
		$.post(
			'ajax/_indexAjax.php', // url du script à executer
			{
				// Données envoyées
				uc:'statAnnee',
				action:'voirStatAnnee',
				lstAnnee:$("#lstAnnee").val(),
			},
			// Fonction pour gérer le retour
			function(data){
				$("#zoneStat").html(data);
			},
			'text' // Format de retour : texte HTML
		);
	});
}