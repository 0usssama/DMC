<?php 
include '../includes/config.php';
session_start();
if($_POST['connecter']){

    $erreurs = [];
    $email = strip_tags($_POST['inputEmail']);
    $password = strip_tags($_POST['inputPassword']);
    
    $sql = 'SELECT * FROM admin WHERE email_admin LIKE :email_admin LIMIT 1';
    $statement = $pdo->prepare($sql);
    

    $statement->bindValue(':email_admin', $email);
   $statement->execute();
   $trouv =  $statement->fetch();

  
    if($trouv){
       // echo 'trouvé';
       
       $password_bdd = $trouv['motpass_admin'];
    
       if (password_verify($password, $password_bdd)) {
        // Succèss!
        $_SESSION['id_admin']=$trouv['id_admin'];
        $_SESSION['admin'] == 'connecte';
        header('location: client.php');
       

        
    }else {
        // Invalide mot de passe
        $erreurs[] = 'mot de passe invalide';
        $_SESSION['erreurs'] = $erreurs;
        header('location: index.php');
    }
       
    }else{
          ///pas trouvé
        $erreurs[] = 'votre email n\'existe pas dans notre base de données, veuillez s\'inscrire svp ';
        $_SESSION['erreurs'] = $erreurs;
        header('location: index.php');

    }


    

    
}

?>