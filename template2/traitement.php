<?php 
 $alert="";
     include 'connected.php'; 

if(isset($_POST['submit'])){
		$nom   = $_POST['display'];

		echo "salut";
		//$email = $_POST['Email'];
		//$Password = $_POST['Password'];
		

		//$requete = $bdd->prepare("INSERT INTO ecommerce(Name,Email,Password) VALUES(?,?,?)");
	  //$req_exec=$requete->execute(array($nom,$email,$Password));

		
		//if($req_exec) $alert="Nous avions bien réçu votre Message, L'administrateur vous contacte dans quelques minutes";
		//else $alert = "Nous rencontrons des difficultés pour l'envoie de votre message, veuillez dans 2 minutes";
	}


?>
