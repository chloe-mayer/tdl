function envoi_affichagebdd() 
		{
			vartext=window.document.getElementById('ajout_tdl').value ;
			httpRequest = new XMLHttpRequest();
			  httpRequest.onreadystatechange = function() 
  			{
      			document.getElementById("affiche_tdl").innerHTML = this.responseText;
  			};
  			httpRequest.open("GET","fonctions/affichage_tdl_ajout_bdd.php?ajout_tdl="+vartext);
  			httpRequest.send();
			console.log(vartext);
		}