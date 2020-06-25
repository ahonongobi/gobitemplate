
<?php 

 $alert="";
     include 'connected.php'; 

if(isset($_GET['amount'])){
		$nom   = $_SESSION['Name'];
		$cmd = $_GET['cmd'];
		$amount = $_GET['amount'];
		$item_name = $_GET['add'];
		$add = $_GET['item_name'];
		$disc_amount = $_GET['discount_amount'];

		$requete = $bdd->prepare("INSERT INTO panier(Name,cmd,addP,item_name,amount,discount_amount) VALUES(?,?,?,?,?,?)");
	  $req_exec=$requete->execute(array($nom,$cmd,$add,$item_name,$amount,$disc_amount));

		
		//if($req_exec) 
		//header('location:index2.php');
		//else $alert = "Nous rencontrons des difficultés pour l'envoie de votre message, veuillez dans 2 minutes";
	}


?>