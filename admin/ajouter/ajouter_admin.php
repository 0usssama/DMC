<?php 
 require_once('../../includes/config.php');

//var_dump($_POST);


if(isset($_POST['ajouter'])){


    $sql= "INSERT INTO admin (`username_admin`, `motpass_admin`,`email_admin`,`role_admin`,`etat_admin`)
     VALUES (:usernamen, :motdepass, :emailadmin, :roleadmin, :etatadmin)";



//Prepare our statement.
$statement = $pdo->prepare($sql);

  


    $username	   = strip_tags($_POST['username_admin']);
    $email_admin   = strip_tags($_POST['email_admin']);	
    $motpasseadmin = password_hash($_POST['motpass_admin'], PASSWORD_BCRYPT);
    $role = $_POST['role_admin'];
    $etat_admin = $_POST['etat_admin'];

    //Bind our values to our parameters 
    $statement->bindValue(':usernamen', $username);
    $statement->bindValue(':motdepass', $motpasseadmin);
    $statement->bindValue(':emailadmin', $email_admin);
    $statement->bindValue(':roleadmin', $role);
    $statement->bindValue(':etatadmin', $etat_admin);


//Execute the statement and insert our values.
$inserted = $statement->execute();
 

//verifier si on a des résultats (true or false)
if($inserted){
    header('location: ../admin.php');
}else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}


}



?>
