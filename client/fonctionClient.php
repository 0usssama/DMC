<?php 
session_start();


$user = 'root';
if(PHP_OS == 'WINNT'){//working on different OS
  $pass = '';//dynamically
}else{
  $pass = 'LinuxMate2019:D';//well this one 
}
$bdd = new PDO('mysql:host=localhost;dbname=dmc', $user, $pass);
include ('../includes/config.php');

 
 
if(isset($_GET['action'])){

	if ($_GET['action'] == 'validerFacture') {
		$id_comd = $_GET['id'];
		$date_comd = date('m/d/Y-h:i:s');
        $etat_comd = 'en cours'; /////en attendan le mailling

		$sql = "UPDATE commande 
        SET 
        date_comd=:date_comd , etat_comd=:etat_comd
        WHERE  id_comd=:id_comd";
 
        $execution = $bdd->prepare($sql);    
        $execution->bindParam(':id_comd', $id_comd, PDO::PARAM_INT);       
        $execution->bindParam(':date_comd', $date_comd, PDO::PARAM_STR);
        $execution->bindParam(':etat_comd', $etat_comd, PDO::PARAM_STR); /////en attendan le mailling      

        $execution->execute();

           $listeProduitPannier = explode('/', $_SESSION['listeIdProduit']);
   $y = count($listeProduitPannier);
   for ($i=1; $i < $y-1; $i++)  

    {
        $idp = $listeProduitPannier[$i]; 
        $prixProduit = 'prixProduitTotal'.$idp;  
        $_SESSION[$prixProduit] = 0;

        $qteProduit = 'qteProduit'.$idp ;
        $_SESSION[$qteProduit] = 0;

        $_SESSION['listeIdProduit'] = 0;
        $_SESSION['prixTotal'] = 0;
        $_SESSION['qteTotal'] = 0; 

        //session_destroy();
	}


 // Le message  
 $message = '<a href="dmc.com/client/imprime_facture.php?id='.$id_comd.'&date='.$date_comd.'&action=confirmercommande">Valider votre formulaire numero '.$id_comd.'</a>';

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Envoi du mail

//mail('caffeinated@example.com', 'Mon Sujet', $message);

 // Instantiation and passing `true` enables exceptions


}
 

	if ($_GET['action'] == 'confirmercommande') {

		$id_comd = $_GET['id'];
		$date_comd = $_GET['date_comd'];
        $etat_comd = 'en cours';
		$sql = "UPDATE commande 
        SET 
        etat_comd=:	etat_comd
        WHERE  id_comd=:id_comd AND  date_comd=:date_comd"  ;
 
        $execution = $bdd->prepare($sql);    
        $execution->bindParam(':id_comd', $id_comd, PDO::PARAM_INT);       
        $execution->bindParam(':etat_comd', $etat_comd, PDO::PARAM_STR);      
        $execution->bindParam(':date_comd', $date_comd, PDO::PARAM_STR);

       // $execution->execute();
       if( $execution->execute()){
         echo 'it works';

       }else{
echo 'ohhhh :(' . "<br>" . print_r($execution->errorInfo());

       }
	}




}
?>

