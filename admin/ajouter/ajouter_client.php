<?php 
 require_once('../../includes/config.php');

 if(isset($_POST['inscrire'])){


var_dump($_POST);

    $sql = "INSERT INTO `client` ( `nom_client`, `prenom_client`,`email_client`,`adresse_client`,`catego_client`,`motpass_client`,`raison_social_client`, `id_admin`)
     VALUES (:nomclient, :prenomclient, :emailclient, :adresseclient, :categoryclient, :motpasseclient, :raisonsocialclient, :idadmin)";
   

//Prepare our statement.
$statement = $pdo->prepare($sql);


   //validation mazal makhssossa aprés ndirha 
   $nomClient = $_POST['nom_client'];
   $prenomClient = $_POST['prenom_client'];
   $emailClient = $_POST['email_client'];

   $adresseClient = $_POST['adresse_client'];
   $categoryClient = $_POST['catego_client'];
   $motpasseClient = password_hash($_POST['motpass_client'], PASSWORD_BCRYPT);
   $raisonsocialClient = $_POST['raison_social_client'] ?? '/';
   $id_admin = 1;
   

   
   
   //Bind our values to our parameters 
   $statement->bindValue(':nomclient', $nomClient);
   $statement->bindValue(':prenomclient', $prenomClient);
   $statement->bindValue(':emailclient', $emailClient);
   $statement->bindValue(':adresseclient', $adresseClient);
   $statement->bindValue(':categoryclient', $categoryClient);
   $statement->bindValue(':motpasseclient', $motpasseClient);
   $statement->bindValue(':raisonsocialclient', $raisonsocialClient);
   $statement->bindValue(':idadmin', $id_admin);
   
   
//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    echo ' Youpiiiiiii<br>';
    header('location: ../login.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}

    
 }


?>