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






 
if(isset($_POST['action'])){
  if($_POST['action'] == 'validerDevis'){

   //creation du fichier jason
    $facture = '{';
    $facture = $facture.'"listeid":"'.$_SESSION['listeIdProduit'].'", ' ;
   
   $listeProduitPannier = explode('/', $_SESSION['listeIdProduit']); 
   $y = count($listeProduitPannier);
   $qtetotalProd = 0;

   for ($i=1; $i < $y-1; $i++){
   $idp = $listeProduitPannier[$i];
   
  // recuperation des informations produit




                $sqlproduit = "SELECT * FROM produit WHERE id_prod LIKE '$idp'";
                if($bdd->query($sqlproduit)){
                foreach  ($bdd->query($sqlproduit) as $rowproduit) { 
                 $nom_prod = $rowproduit['nom_prod']; 

                 } //foreach
                 }  //if 

   $facture = $facture.'"titreProduit'.$idp.'":"'.$nom_prod.'", ' ;
   $facture = $facture.'"qteProduit'.$idp.'":"'.$_SESSION['qteProduit'.$idp].'", ' ;
   
   $qteprodlocal = $_SESSION['prixProduitTotal'.$idp] / $_SESSION['qteProduit'.$idp];
   $facture = $facture.'"prixProduit'.$idp.'":"'.$qteprodlocal.'", ' ;
   
   $qtetotalProd = $qtetotalProd + $qteprodlocal;
   $facture = $facture.'"totalProduit'.$idp.'":"'.($_SESSION['prixProduitTotal'.$idp]).'", ' ;
 
   }

    $facture = $facture.'"qteGeneral":"'.$_SESSION['qteTotal'].'", ' ;
    $facture = $facture.'"totalGeneral":"'.$_SESSION['prixTotal'].'", ' ;

    $facture = $facture.'"idClient":"'.$_SESSION['id_client'].'", ' ;
    $facture = $facture.'"nom":"'.$_SESSION['nom_client'].'", ' ;
    $facture = $facture.'"prenom":"'.$_SESSION['prenom_client'].'", ' ;
    $facture = $facture.'"email":"'.$_SESSION['email_client'].'", ' ;
    $facture = $facture.'"adresse":"'.$_SESSION[' adresse_client'].'", ' ;
    $facture = $facture.'"telephone":"'.$_SESSION['tel_client'].'"' ;

    /*
        $_SESSION['nom_client']=$trouv['nom_client'];
        $_SESSION['prenom_client']=$trouv['prenom_client'];
        $_SESSION['id_client']=$trouv['id_client'];
*/
    $facture = $facture.' }';

    $qte_p_comd = $qtetotalProd;
    $id_client = $_SESSION['id_client'];
    $elements_produit = $facture;
  
  
  
    $sql = "INSERT INTO commande( 
            id_client,
            elements_produit
            ) VALUES (
            :id_client,
            :elements_produit
           )";
                                          
$stmt = $bdd->prepare($sql);
                                              
$stmt->bindParam(':id_client', $id_client, PDO::PARAM_INT);
$stmt->bindParam(':elements_produit', $elements_produit, PDO::PARAM_STR);
                                      
$stmt->execute(); 

$jsonclient = '"idClient":"'.$_SESSION['id_client'].'"';
$sql = "SELECT  * FROM commande WHERE  elements_produit LIKE '%$jsonclient%' ORDER BY id_comd DESC LIMIT 1";
if($pdo->query($sql)){
 foreach  ($pdo->query($sql) as $commande) { $id_comd = $commande['id_comd'];
 header('Location: client/imprime_facture.php?id='.$id_comd);
 exit();
 }
 }

  }
}

 




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
        $_SESSION['prenom_client']=$trouv['prenom_client'];
        $_SESSION['email_client']=$trouv['email_client'];
        $_SESSION['adresse_client']=$trouv['adresse_client'];
        $_SESSION['tel_client']=$trouv['tel_client'];

        
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



if(isset($_GET['plusqteid'])){ // verifier si recuperation du produit

   $qteid     = strip_tags($_GET['plusqteid']);
   
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
   
    
   $_SESSION['qteProduit'.$idproduit] = $quantite;
  

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




if(isset($_GET['action'])){ 
  if($_GET['action'] == 'vote'){ 

$vote = $_GET['vote']; 

if ($vote == 1){$vote1 = 1;}else{$vote1=0; $nbr_etoils_ev = $vote1;}
if ($vote == 2){$vote1 = 2;}else{$vote2=0; $nbr_etoils_ev = $vote2;}
if ($vote == 3){$vote1 = 3;}else{$vote3=0; $nbr_etoils_ev = $vote3;}
if ($vote == 4){$vote1 = 4;}else{$vote4=0; $nbr_etoils_ev = $vote4;}
if ($vote == 5){$vote1 = 5;}else{$vote5=0; $nbr_etoils_ev = $vote5;}

$id_prod= $_GET['id_prod']; 
$id_client = $_SESSION['id_client'];
$date_ev = date('m/d/Y h:i:s', time());

            $sql = "SELECT vote1,vote2,vote3,vote4,vote5 FROM produit WHERE id_prod LIKE '$id_prod'";
 
            if($bdd->query($sql)){
            foreach  ($bdd->query($sql) as $row) {

             $vote = $row['vote1'] + $vote1 ;
             $vote = $row['vote2'] + $vote2 ;
             $vote = $row['vote3'] + $vote3 ;
             $vote = $row['vote4'] + $vote4 ;
             $vote = $row['vote5'] + $vote5 ;

              }
            } 


            $sql = "UPDATE produit SET vote1 =: vote1 ,vote2 =: vote2,vote3 =: vote3,vote4 =: vote4,vote5 =: vote5 
            WHERE id_prod = :id_prod";
            $stmt = $bdd->prepare($sql);                                  

            $stmt->bindParam(':vote1', $vote1, PDO::PARAM_INT);   
            $stmt->bindParam(':vote2', $vote2, PDO::PARAM_INT);   
            $stmt->bindParam(':vote3', $vote3, PDO::PARAM_INT);   
            $stmt->bindParam(':vote4', $vote4, PDO::PARAM_INT);   
            $stmt->bindParam(':vote5', $vote5, PDO::PARAM_INT);

            $stmt->bindParam(':id_prod', $id_prod, PDO::PARAM_INT);   
            $stmt->execute();


 
$sql = "INSERT INTO evaluer(
            date_ev,
            nbr_etoils_ev,
            id_prod,
            id_client) VALUES (
            :date_ev,
            :nbr_etoils_ev,
            :id_prod,
            :id_client
            )";
                                          
$stmt = $bdd->prepare($sql);
                        
            $stmt->bindParam(':date_ev', $date_ev, PDO::PARAM_STR);
            $stmt->bindParam(':nbr_etoils_ev', $nbr_etoils_ev, PDO::PARAM_STR);
            $stmt->bindParam(':id_prod', $id_prod, PDO::PARAM_INT);
            $stmt->bindParam(':id_client', $id_client, PDO::PARAM_INT);

$stmt->execute();

}

    }


}



//$_SESSION['listeIdProduit'] = /idproduit101/idproduit5/idproduit120/idproduit15/;

// $_SESSION['qteProduit15'] = 10;
// $_SESSION['prixProduit15'] = 50000;

// $_SESSION['qteProduit101'] = 2;
// $_SESSION['prixProduit101'] = 100000;


 

?>