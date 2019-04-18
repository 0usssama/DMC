<?php
session_start();
$_SESSION['admin']='connecte';
$user = 'root';

if(PHP_OS == 'WINNT'){//working on different OS
  $pass = '';//dynamically
}else{
  $pass = 'LinuxMate2019:D';//well this one 

}
$bdd = new PDO('mysql:host=localhost;dbname=dmc', $user, $pass);



?>
 

<?php // connexion admin
include ('includes/config.php');

if(isset($_POST['connecter'])){

    $erreurs = [];
    $email = strip_tags($_POST['inputEmail']);
    $password = strip_tags($_POST['inputPassword']);
    
    $sql = 'SELECT * FROM client WHERE email_client LIKE :email LIMIT 1';
    $statement = $pdo->prepare($sql);
    

    $statement->bindValue(':email', $email);
    $statement->execute();
    $trouv =  $statement->fetch();

  
    if($trouv){
       // echo 'trouvé';
       
       $password_bdd = $trouv['motpass_client'];
    
       if (password_verify($password, $password_bdd)) {
        // Succèss!
        $_SESSION['nom_client']=$trouv['nom_client'];
        $_SESSION['prenom_client']=$trouv['prenom_client'];
        $_SESSION['id_client']=$trouv['id_client'];
        
    }else {
        // Invalide mot de passe
        $erreurs['connexion'] = 'mot de passe invalide';
        $_SESSION['erreurs'] = $erreurs['connexion'];
        header('location: login.php');
    }
       
    }else{
          ///pas trouvé
        $erreurs[] = 'votre email n\'existe pas dans notre base de données, veuillez s\'inscrire svp ';
        $_SESSION['erreurs'] = $erreurs;
        header('location: login.php');

    }


    

    
}

?>


<?php //pannier

if(isset($_GET['qteid'])){ // verifier si recuperation du produit

   $qteid     = strip_tags($_GET['qteid']);
   
   $idproduit = str_replace('qte', '', $qteid); // recuperer l' id du produit sans le texte qte
   $idverif   = '/'.$idproduit.'/'; // pour verifier si le produit est deja comandé si oui on rajoute juste la quantité
   $quantite  = strip_tags($_GET['quantite']); 

   //prixProduit:
    // requette 
        $sql = "SELECT prix_detail, prix_gros, qnt_detail, qnt_gros
        FROM produit
        WHERE id_prod LIKE '$idproduit' ";
 
if($bdd->query($sql)){
foreach  ($bdd->query($sql) as $row) { 
  
  $prix_detail  = $row['prix_detail'];
  $prix_gros    = $row['prix_gros'];
  $qnt_detail   = $row['qnt_detail'];
  $qnt_gros     = $row['qnt_gros'];

} //foreach
}  //if

   if($quantite < $qnt_gros){$prix = $prix_detail;}else{$prix = $prix_gros;} 

   if (!isset($_SESSION['listeIdProduit'])) { // créer la variable de la liste des produit si elle n existe pas
   $_SESSION['listeIdProduit'] = '/';
   }
   
   if (strpos($_SESSION['listeIdProduit'], $idverif) === FALSE) {
   $_SESSION['listeIdProduit'] = $_SESSION['listeIdProduit'].$idproduit.'/'; // on rajoute le produit dans la liste des produits

   $_SESSION['qteProduit'.$idproduit] = $quantite;
   $_SESSION['prixProduitTotal'.$idproduit] = $prix *  $_SESSION['qteProduit'.$idproduit];
  
   // si le produit n'existe pas, on créer la variable de la qte du produit plus le produit dans la liste
   } else {
   $_SESSION['qteProduit'.$idproduit] = $_SESSION['qteProduit'.$idproduit] + $quantite;
   $_SESSION['prixProduitTotal'.$idproduit] = $prix *  $_SESSION['qteProduit'.$idproduit];
   // si le produit existe on rajoute juste la qte
   }

   $_SESSION['listeIdProduit'];
   $_SESSION['prixTotal'] = 0;
   $_SESSION['qteTotal'] = 0;

   $listeProduitPannier = explode('/', $_SESSION['listeIdProduit']);
   $y = count($listeProduitPannier);
   for ($i=1; $i < $y-1; $i++)  
    {
   
   $idp = $listeProduitPannier[$i]; 

   $prixProduit = 'prixProduitTotal'.$idp;  
   $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + $_SESSION[$prixProduit];

   $qteProduit = 'qteProduit'.$idp ;
   $_SESSION['qteTotal'] = $_SESSION['qteTotal'] + $_SESSION[$qteProduit];

   }

//$_SESSION['listeIdProduit'] = /idproduit101/idproduit5/idproduit120/idproduit15/;

// $_SESSION['qteProduit15'] = 10;
// $_SESSION['prixProduit15'] = 50000;

// $_SESSION['qteProduit101'] = 2;
// $_SESSION['prixProduit101'] = 100000;

}
 

?>