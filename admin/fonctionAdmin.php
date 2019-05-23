<?php
session_start();

$erreurs = [];


if(isset($_POST['connecter'])){
$_SESSION['admin']='connecte';
/*
    $erreurs = [];
    $email = strip_tags($_POST['inputEmail']);
    $password = strip_tags($_POST['inputPassword']);
    
    $sql = 'SELECT * FROM admin WHERE email_admin LIKE :email LIMIT 1';
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

*/
    

    
}

if(isset($_GET['connect'])){if($_GET['connect']=='0'){ session_destroy();}}
 
$user = 'root';

if(PHP_OS == 'WINNT'){//working on different OS
  $pass = '';//dynamically
}else{
  $pass = 'LinuxMate2019:D';//well this one 

}
$bdd = new PDO('mysql:host=localhost;dbname=dmc', $user, $pass);



// utilier la table admin pour la



function ajoutAdmin(){
//id_admin	username	motpass_admin	etat_admin	email_admin	code_recup	role_admin
global $bdd;
if(isset($_SESSION['admin'])){ if($_SESSION['admin']=='connecte'){ 
//$role_admin = $_SESSION['role_admin'];  
//if($role_admin[0]=='1'){ 


$username	   = strip_tags($_POST['username']);
$motpass_admin = strip_tags($_POST['motpass_admin']);	
$email_admin   = strip_tags($_POST['email_admin']);	
 
$motpass_admin = md5(strip_tags($_POST['motpass_admin']));	
$etat_admin	   = 1;
$code_recup	   = 'null'; 
$superadmin= '0';
$produit= '0';
$livraison= '0';
$pointdevente= '0';
if(isset($_POST['superadmin'])){$superadmin = '1';}
if(isset($_POST['produit'])){$produit = '1';}
if(isset($_POST['livraison'])){$livraison = '1';}
if(isset($_POST['pointdevente'])){$pointdevente = '1';}
$role_admin = $superadmin.$produit.$livraison.$pointdevente;

$sql = "INSERT INTO admin(

            username,
            motpass_admin,
            etat_admin,
            email_admin,
            code_recup,
            role_admin
            ) VALUES (
            :username,
            :motpass_admin,
            :etat_admin,
            :email_admin,
            :code_recup,
            :role_admin
            )";
                                          
$stmt = $bdd->prepare($sql);
                                              
$stmt->bindParam(':username', $username, PDO::PARAM_STR);
$stmt->bindParam(':motpass_admin', $motpass_admin, PDO::PARAM_STR);
$stmt->bindParam(':etat_admin', $etat_admin, PDO::PARAM_STR);
$stmt->bindParam(':email_admin', $email_admin, PDO::PARAM_STR);
$stmt->bindParam(':code_recup', $code_recup, PDO::PARAM_STR);
$stmt->bindParam(':role_admin', $role_admin, PDO::PARAM_STR);  
                                      
$stmt->execute();

}}//fin controle session admin}
}//fin fonction ajout admin



function modifAdmin(){
//id_admin	username	motpass_admin	etat_admin	email_admin	code_recup	role_admin
global $bdd;  

$id_admin	   = (int)$_POST['id_admin'];
$username	   = strip_tags($_POST['username']);
$etat_admin	   = strip_tags($_POST['etat_admin']);
$email_admin   = strip_tags($_POST['email_admin']);	

$sql = "UPDATE admin 
        SET 
        username=:username,
        etat_admin=:etat_admin,
        email_admin=:email_admin
        WHERE  id_admin=:id_admin";
 
$execution = $bdd->prepare($sql); 
$execution->bindParam(':username', $username, PDO::PARAM_STR);       
$execution->bindParam(':etat_admin', $etat_admin, PDO::PARAM_INT);    
$execution->bindParam(':email_admin', $email_admin, PDO::PARAM_STR);
$execution->bindParam(':id_admin', $id_admin, PDO::PARAM_INT);       
 
$execution->execute(); 


}//fin fonction modif admin


function modifRoleAdmin(){
//id_admin role_admin

if(isset($_SESSION['admin'])){ if($_SESSION['admin']=='connecte'){ 
$role_admin = $_SESSION['role_admin'];  
if($role_admin[0]=='1'){ 

$id_admin	   = strip_tags($_POST['id_admin']);
$role_admin    = strip_tags($_POST['role_admin']); 

}}}//fin controle session admin
}//fin fonction modif admin


function modifPassAdmin(){
//id_admin	username	motpass_admin	etat_admin	email_admin	code_recup	role_admin

$id_admin	   = strip_tags($_POST['id_admin']);
$username	   = strip_tags($_POST['username']);
$motpass_admin = strip_tags($_POST['motpass_admin']);

}
//fin fonction supprime admin

function supAdmin(){
if(isset($_POST['ok'])){
	if($_POST['ok']=='ok'){

global $bdd;

$id_admin = (int)$_POST['id_admin'];	

$sql = "DELETE FROM admin WHERE id_admin =  :id_admin";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':id_admin', $id_admin, PDO::PARAM_INT);   
$stmt->execute();

       }
 }

} //fin fonction supprime admin



function ajoutProduit(){
 
 
global $bdd; 

$nom_prod   	         = strip_tags($_POST['nom_prod']);
$prix_detail  	         = strip_tags($_POST['prix_detail']);	
$prix_gros  	         = strip_tags($_POST['prix_gros']);	
$qnt_detail  	         = strip_tags($_POST['qnt_detail']);	
$qnt_gros	  	         = strip_tags($_POST['qnt_gros']);

$pos_tire_six_marque= strpos(strip_tags($_POST['marque']), '-');
$id_marque	  	         =  substr(strip_tags($_POST['marque']), 0, $pos_tire_six_marque);


$pos_tire_six_famille= strpos(strip_tags($_POST['famille']), '-');
$id_famille	  	         =  substr(strip_tags($_POST['famille']), 0, $pos_tire_six_famille);




$caracteristiques_prod	 = strip_tags($_POST['caracteristiques_prod']);
$description_prod   	 = strip_tags($_POST['description_prod']);
$etat_prod	  	         = strip_tags($_POST['etat_prod']);
$id_admin	  	         = 1;
//$position_prod  	     = 1;


if(isset($_FILES['imageprincipale']))
{ 
     $dossier = '../upload/';
     $fichier = basename($_FILES['imageprincipale']['name']);
     $url_imag = $dossier . $fichier;
     if(move_uploaded_file($_FILES['imageprincipale']['tmp_name'], $url_imag)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}

if(isset($_FILES['image1']))
{ 
     $dossier = '../upload/';
     $fichier = basename($_FILES['image1']['name']);
     $image1 = $dossier . $fichier;
     if(move_uploaded_file($_FILES['image1']['tmp_name'], $image1)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}

if(isset($_FILES['image2']))
{ 
     $dossier = '../upload/';
     $fichier = basename($_FILES['image2']['name']);
     $image2 = $dossier . $fichier;
     if(move_uploaded_file($_FILES['image2']['tmp_name'], $image2)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}


if(isset($_FILES['image3']))
{ 
     $dossier = '../upload/';
     $fichier = basename($_FILES['image3']['name']);
     $image3 = $dossier . $fichier;
     if(move_uploaded_file($_FILES['image3']['tmp_name'], $image3)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}


 
$sql = "INSERT INTO produit(
            nom_prod,
            prix_detail, 
            prix_gros,   
            qnt_detail,  
            qnt_gros,   
            caracteristiques_prod,  
            description_prod,    
            etat_prod, 
            id_famille, 
            id_marque
    
            ) VALUES (
            :nom_prod,    
            :prix_detail, 
            :prix_gros,   
            :qnt_detail,  
            :qnt_gros,  
            :caracteristiques_prod,  
            :description_prod,    
            :etat_prod, 
            :id_famille, 
            :id_marque
            )";
                                          
$stmt = $bdd->prepare($sql);
                                              
$stmt->bindParam(':nom_prod', $nom_prod, PDO::PARAM_STR);    
$stmt->bindParam(':prix_detail', $prix_detail, PDO::PARAM_STR); 
$stmt->bindParam(':prix_gros', $prix_gros, PDO::PARAM_STR);   
$stmt->bindParam(':qnt_detail', $qnt_detail, PDO::PARAM_INT);  
$stmt->bindParam(':qnt_gros', $qnt_gros, PDO::PARAM_INT);   
$stmt->bindParam(':caracteristiques_prod', $caracteristiques_prod, PDO::PARAM_STR);  
$stmt->bindParam(':description_prod', $description_prod, PDO::PARAM_STR);    
$stmt->bindParam(':etat_prod', $etat_prod, PDO::PARAM_INT);   
$stmt->bindParam(':id_famille', $id_famille, PDO::PARAM_INT);   
$stmt->bindParam(':id_marque', $id_marque, PDO::PARAM_INT);   

$inserted = $stmt->execute();



//verifier si on a des résultats (true or false)
if(!$inserted){
     echo 'ohhhh :(' . "<br>" . print_r($stmt->errorInfo());
    
     return;
    
   }else{
    
   }
   
   ;


            $sql = "SELECT id_prod FROM produit WHERE nom_prod LIKE '$nom_prod' AND prix_detail LIKE '$prix_detail' AND 
            prix_gros LIKE '$prix_gros' AND qnt_detail LIKE '$qnt_detail' AND qnt_gros LIKE '$qnt_gros' AND caracteristiques_prod LIKE '$caracteristiques_prod' AND description_prod LIKE '$description_prod' AND
            etat_prod LIKE '$etat_prod' 
            ORDER BY id_prod DESC LIMIT 1";
 
            if($bdd->query($sql)){
            foreach  ($bdd->query($sql) as $row) {
            	echo $id_prod = $row['id_prod'] ; }
            } 

$url_imag = str_replace('../', '', $url_imag);
$image1 = str_replace('../', '', $image1); 
$image2 = str_replace('../', '', $image2); 
$image3 = str_replace('../', '', $image3); 


//surpesseion des ../ du lien image pour eviter une erreure de l'emplacement de l image
$sql = "INSERT INTO image(
url_imag,
image1,
image2,
image3,
id_prod
            ) VALUES (
:url_imag,
:image1,
:image2,
:image3,
:id_prod
            )";
                                          
$stmt = $bdd->prepare($sql);
                                              
$stmt->bindParam(':url_imag', $url_imag, PDO::PARAM_STR); 
$stmt->bindParam(':image1', $image1, PDO::PARAM_STR); 
$stmt->bindParam(':image2', $image2, PDO::PARAM_STR); 
$stmt->bindParam(':image3', $image3, PDO::PARAM_STR);    
$stmt->bindParam(':id_prod', $id_prod, PDO::PARAM_STR);    

$inserted = $stmt->execute();



//verifier si on a des résultats (true or false)
if($inserted){
  header('location: produit.php');
}else{
  echo 'ohhhh :(' . "<br>" . print_r($stmt->errorInfo());
}


//$stmt->bindParam(':id_marque', $id_marque, PDO::PARAM_INT);  
//$stmt->bindParam(':id_famille', $id_famille, PDO::PARAM_INT); 
//$stmt->bindParam(':id_admin', $id_admin, PDO::PARAM_INT); 

//id_marque,  
//id_famille, 
//id_admin,   
//:id_marque,  
//:id_famille, 
//:id_admin, 
 $_SESSION['toast'] = 'Produit ajouté avec succés'; 
 
}
//fin fonction ajout Produit

function ajoutImage($id_prod,$id_point_vente){
//	id_imag	url_imag	id_prod	id_point_vente
}

function modifProduit(){
 
     $_SESSION['toast'] = 'Produit modifié avec succés';
 
$id_prod = strip_tags($_POST['id_prod']);
$imgprincipale=0;
$imagsecond1=0;
$imagsecond2=0;
$imagsecond3=0;

global $bdd; 

$nom_prod       = strip_tags($_POST['nom_prod']);
$prix_detail    = strip_tags($_POST['prix_detail']); 
$prix_gros      = strip_tags($_POST['prix_gros']); 
$qnt_detail     = strip_tags($_POST['qnt_detail']);  
$qnt_gros       = strip_tags($_POST['qnt_gros']);
$id_marque      = strip_tags($_POST['id_marque']);      
$id_famille     = strip_tags($_POST['id_famille']);      


$caracteristiques_prod   = strip_tags($_POST['caracteristiques_prod']);
$description_prod        = strip_tags($_POST['description_prod']);
$etat_prod               = strip_tags($_POST['etat_prod']);
$id_admin                = 1;
//$position_prod         = 1;


$sql = "UPDATE produit SET nom_prod = :nom_prod, 
            prix_detail = :prix_detail, 
            prix_gros = :prix_gros,   
            qnt_detail = :qnt_detail,  
            qnt_gros = :qnt_gros,   
            caracteristiques_prod = :caracteristiques_prod,  
            description_prod = :description_prod,    
            etat_prod = :etat_prod, 
            id_famille = :id_famille, 
            id_marque = :id_marque 
            WHERE id_prod = :id_prod";
$stmt = $bdd->prepare($sql);                                  
$stmt->bindParam(':id_prod', $id_prod, PDO::PARAM_INT);       
$stmt->bindParam(':nom_prod', $nom_prod, PDO::PARAM_STR);    
$stmt->bindParam(':prix_detail', $prix_detail, PDO::PARAM_STR); 
$stmt->bindParam(':prix_gros', $prix_gros, PDO::PARAM_STR);   
$stmt->bindParam(':qnt_detail', $qnt_detail, PDO::PARAM_INT);  
$stmt->bindParam(':qnt_gros', $qnt_gros, PDO::PARAM_INT);   
$stmt->bindParam(':caracteristiques_prod', $caracteristiques_prod, PDO::PARAM_STR);  
$stmt->bindParam(':description_prod', $description_prod, PDO::PARAM_STR);    
$stmt->bindParam(':etat_prod', $etat_prod, PDO::PARAM_INT);   
$stmt->bindParam(':id_famille', $id_famille, PDO::PARAM_INT);   
$stmt->bindParam(':id_marque', $id_marque, PDO::PARAM_INT); 
$stmt->execute(); 


if(isset($_FILES['imageprincipale']))
{ 
     $dossier = '../upload/';
     $fichier = basename($_FILES['imageprincipale']['name']);
     $url_imag = $dossier . $fichier;
     if(move_uploaded_file($_FILES['imageprincipale']['tmp_name'], $url_imag)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          $imgprincipale = 1;
     }
     else //Sinon (la fonction renvoie FALSE).
     {
         
     }
}

if(isset($_FILES['image1']))
{ 
     $dossier = '../upload/';
     $fichier = basename($_FILES['image1']['name']);
     $image1 = $dossier . $fichier;
     if(move_uploaded_file($_FILES['image1']['tmp_name'], $image1)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
       
     $imagsecond1=1;

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          
     }
}

if(isset($_FILES['image2']))
{ 
     $dossier = '../upload/';
     $fichier = basename($_FILES['image2']['name']);
     $image2 = $dossier . $fichier;
     if(move_uploaded_file($_FILES['image2']['tmp_name'], $image2)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
 
 $imagsecond2=1;
 
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          
     }
}


if(isset($_FILES['image3']))
{ 
     $dossier = '../upload/';
     $fichier = basename($_FILES['image3']['name']);
     $image3 = $dossier . $fichier;
     if(move_uploaded_file($_FILES['image3']['tmp_name'], $image3)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
            
 $imagsecond3=1; 
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          
     }
}

 
 

$url_imag = str_replace('../', '', $url_imag);
$image1 = str_replace('../', '', $image1); 
$image2 = str_replace('../', '', $image2); 
$image3 = str_replace('../', '', $image3); 

 
     $sqlimage = "SELECT * FROM image WHERE id_prod LIKE '$id_prod'";
     foreach  ($bdd->query($sqlimage) as $rowimage) {
         $id_imag = $rowimage['id_imag'];
     };

if($imgprincipale == 1){
 $sql = "UPDATE image SET url_imag = :url_imag
            WHERE id_prod = :id_prod";
$stmt = $bdd->prepare($sql);                                  
$stmt->bindParam(':id_prod', $id_prod, PDO::PARAM_INT);       
$stmt->bindParam(':url_imag', $url_imag, PDO::PARAM_STR);    
$stmt->execute(); 
}

if($imagsecond1 == 1){

 $sql = "UPDATE image SET image1 = :image1
            WHERE  id_imag = :id_imag";
$stmt = $bdd->prepare($sql);                                  
$stmt->bindParam(':id_imag', $id_imag, PDO::PARAM_INT);       
$stmt->bindParam(':image1', $image1, PDO::PARAM_STR); 
$stmt->execute(); 
}

if($imagsecond2 == 1){
 $sql = "UPDATE image SET image2 = :image2
            WHERE id_imag = :id_imag";
$stmt = $bdd->prepare($sql);   
$stmt->bindParam(':id_imag', $id_imag, PDO::PARAM_INT);       
$stmt->bindParam(':image2', $image2, PDO::PARAM_STR);   
$stmt->execute(); 
}

if($imagsecond3 == 1){
 $sql = "UPDATE image SET image3 = :image3
            WHERE id_imag = :id_imag";
$stmt = $bdd->prepare($sql);                                  
$stmt->bindParam(':id_imag', $id_imag, PDO::PARAM_INT);       
$stmt->bindParam(':image3', $image3, PDO::PARAM_STR);   
$stmt->execute(); 
}
//surpesseion des ../ du lien image pour eviter une erreure de l'emplacement de l image
 


//verifier si on a des résultats (true or false)
 
    
  
 


//$stmt->bindParam(':id_marque', $id_marque, PDO::PARAM_INT);  
//$stmt->bindParam(':id_famille', $id_famille, PDO::PARAM_INT); 
//$stmt->bindParam(':id_admin', $id_admin, PDO::PARAM_INT); 

//id_marque,  
//id_famille, 
//id_admin,   
//:id_marque,  
//:id_famille, 
//:id_admin, 

//fin fonction modif Produit
//debut fonction supprimer client
}
function suppClient(){
     global $bdd;

// need to sanitize
$idadmin = $_GET['id_client'] ?? NULL ;

if(!is_null($idadmin)){
    $sql = "DELETE FROM client WHERE id_client= " . $idadmin;

   $resultat=  $bdd->query($sql);

   if($resultat){
       header('location: ../client.php');
   }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

   }
}
}
//debut fonction ajout client
function ajoutClient(){
     global $bdd;  

     $requete = "ok";

//var_dump($_POST);

$sql = "INSERT INTO `client` ( `nom_client`, `prenom_client`,`email_client`,`adresse_client`,`catego_client`,`motpass_client`,`raison_social_client`, `id_admin`, `tel_client`)
VALUES (:nomclient, :prenomclient, :emailclient, :adresseclient, :categoryclient, :motpasseclient, :raisonsocialclient, :idadmin, :tel_client)";


//Prepare our statement.
$statement = $bdd->prepare($sql);


//validation mazal makhssossa aprés ndirha 
$nomClient =trim($_POST['nom_client']);
if(!preg_match ("/^[a-zA-Z\s]+$/",$nomClient)){
$erreurs[]= 'le nom ne doit pas contenir des numéros';

$requete = 'notOk';

}

if(empty($nomClient)){
     $erreurs[]= 'le nom ne doit pas être vide';
     
     $requete = 'notOk';
     
     }

$prenomClient = trim($_POST['prenom_client']);


if(!preg_match ("/^[a-zA-Z\s]+$/",$prenomClient)){
     $erreurs[]= 'le prenom ne doit pas contenir des numéros';
     
     $requete = 'notOk';
     
     }
     

if(empty($prenomClient)){
     $erreurs[]= 'le prenom ne doit pas être vide';
     
     $requete = 'notOk';
     
     }


$emailClient = trim($_POST['email_client']);
$sql_check_email = "SELECT * FROM client WHERE email_client='". $emailClient . "'";
$search = $bdd->prepare($sql_check_email);
$search->execute();

$count = $search->rowCount();
if($count !== 0){
     $erreurs[]= "l'email existe déja, veuillez tapez un autre email";
     $requete = 'notOk';
     
}


$tel_client =  trim($_POST['tel_client']);
if(!is_numeric($tel_client)){
     $erreurs[]= "le numéro doit contenir que des numéros";
     $requete = 'notOk';
}


$adresseClient = trim($_POST['adresse_client']);
$categoryClient = trim($_POST['catego_client']);
$motpasseClient = password_hash($_POST['motpass_client'], PASSWORD_BCRYPT);
$raisonsocialClient = trim($_POST['raison_social_client']) ?? '/';
$id_admin = 2;




//Bind our values to our parameters 
$statement->bindValue(':nomclient', $nomClient);
$statement->bindValue(':prenomclient', $prenomClient);
$statement->bindValue(':emailclient', $emailClient);
$statement->bindValue(':adresseclient', $adresseClient);
$statement->bindValue(':categoryclient', $categoryClient);
$statement->bindValue(':motpasseclient', $motpasseClient);
$statement->bindValue(':tel_client', $tel_client);

$statement->bindValue(':raisonsocialclient', $raisonsocialClient);
$statement->bindValue(':idadmin', $id_admin);



$inserted = false;
//Execute the statement and insert our values.
if($requete == 'ok'){
     $inserted = $statement->execute();

}elseif($requete == 'notOk'){
     $_SESSION['erreurs'] = $erreurs;
     header('location: ../register.php');
}

//verifier si on a des résultats (true or false)
if($inserted){
echo ' Youpiiiiiii<br>';
$_SESSION['registerok'] = 'Inscription réussite!';

header('location: ../login.php');
}else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());
}



};

//fin fonction ajout client
function supProduit(){
global $bdd;  
if(isset($_GET['id_prod'])){

$id_prod = $_GET['id_prod'];
$id_imag = 0;

         $sqlimage = "SELECT * FROM image WHERE id_prod LIKE '$id_prod'";
         foreach  ($bdd->query($sqlimage) as $rowimage) {
         $id_imag = $rowimage['id_imag'];
     }

     
        $sql = "DELETE FROM image WHERE id_imag LIKE '$id_imag'";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':id_imag', $id_imag, PDO::PARAM_INT);   
        $resultat=  $bdd->query($sql);
 
 
     
        $sql = "DELETE FROM produit WHERE id_prod= " . $id_prod;
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':id_prod', $id_prod, PDO::PARAM_INT);   
        $resultat=  $bdd->query($sql);
        $_SESSION['toast'] = 'Produit supprimé avec succés';
 
}
}
//fin fonction supprime Produit



function ajoutfamille(){
     $start_ajout = 0;
global $bdd;  
$titre_fami   = strip_tags($_POST['titre_fami']);
$etat_fami    = strip_tags($_POST['etat_fami']); 
//$image_fami   = '/'; // need upload script
//$ordre_fami   = strip_tags($_POST['ordre_fami']);   


if(isset($_FILES['image_famille']))
{ 
     $dossier = '../upload/';
     $fichier = basename($_FILES['image_famille']['name']);
     $image_famille = $dossier . $fichier;
     if(move_uploaded_file($_FILES['image_famille']['tmp_name'], $image_famille)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
          $start_ajout = 1;
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}

$sql = "INSERT INTO famille(
titre_famille,
etat_famille,
image_famille

            ) VALUES (
:titre_fami,
:etat_fami,
:image_fami
            )";
                                          
$stmt = $bdd->prepare($sql);

$stmt->bindParam(':titre_fami', $titre_fami, PDO::PARAM_STR);
$stmt->bindParam(':etat_fami', $etat_fami, PDO::PARAM_STR);
$stmt->bindParam(':image_fami', $image_famille, PDO::PARAM_STR);
//$stmt->bindParam(':ordre_fami', $ordre_fami, PDO::PARAM_INT);  


if ($start_ajout = 1) {
  
$inserted = $stmt->execute();   # code...
}else{
     echo 'image upload error';
}


$_SESSION['toast'] = 'famille ajouté avec succés';
}
//fin fonction ajout famille

function ajoutermarque(){

 $_SESSION['toast'] = 'marque ajouté avec succés';
         
          global $bdd;  
          $titre_marque   = strip_tags($_POST['titre_marque']);
          $etat_marque   = strip_tags($_POST['etat_marque']); 
          //$ordre_marque  = strip_tags($_POST['ordre_fami']);      
          
          if(isset($_FILES['image_marque']))
          { 
               $dossier = '../upload/';
               $fichier = basename($_FILES['image_marque']['name']);
               $image_marque = $dossier . $fichier;
               if(move_uploaded_file($_FILES['image_marque']['tmp_name'], $image_marque)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
               {
                    echo 'Upload effectué avec succès !';
               }
               else //Sinon (la fonction renvoie FALSE).
               {
                    echo 'Echec de l\'upload !';
               }
          }

          $image_marque = str_replace('../', '', $image_marque);

          $sql = "INSERT INTO marque(
          titre_marque,
          etat_marque,
          image_marque
          
                    ) VALUES (
          :titre_marque,
          :etat_marque,
          :image_marque
                    )";
                                                  
          $stmt = $bdd->prepare($sql);
          
          $stmt->bindParam(':titre_marque', $titre_marque, PDO::PARAM_STR);
          $stmt->bindParam(':etat_marque', $etat_marque, PDO::PARAM_STR);
          $stmt->bindParam(':image_marque', $image_marque, PDO::PARAM_STR);
          //$stmt->bindParam(':ordre_marque', $ordre_marque, PDO::PARAM_INT);  
          
          
          
          $inserted = $stmt->execute();
          
          
          //verifier si on a des résultats (true or false)
          if($inserted){
          header('location: marque.php');
          }else{
          echo 'ohhhh :(' . "<br>" . print_r($stmt->errorInfo());
          }
          
  }




  function modifmarque(){

          
          global $bdd;  
          $titre_marque   = strip_tags($_POST['titre_marque']);
          $etat_marque   = strip_tags($_POST['etat_marque']); 
          $id_marque   = strip_tags($_POST['id_marque']); 

          //$ordre_marque  = strip_tags($_POST['ordre_fami']);      
          
          if(isset($_FILES['image_marque']))
          { 
               $dossier = '../upload/';
               $fichier = basename($_FILES['image_marque']['name']);
               $image_marque = $dossier . $fichier;
               if(move_uploaded_file($_FILES['image_marque']['tmp_name'], $image_marque)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
               {
                    
               }
               else //Sinon (la fonction renvoie FALSE).
               {
                     
               }          
               $image_marque = str_replace('../', '', $image_marque);

if( strstr($image_marque, '.png') or  strstr($image_marque, '.bmp') or strstr($image_marque, '.jpeg')  or strstr($image_marque, '.jpg') or strstr($image_marque, '.JPG') or strstr($image_marque, '.JPEG') or strstr($image_marque, '.PNG') or strstr($image_marque, '.BMP')) { 
 $sql = "UPDATE marque SET image_marque = :image_marque WHERE id_marque = :id_marque";
$stmt = $bdd->prepare($sql);                                  
$stmt->bindParam(':image_marque', $image_marque, PDO::PARAM_STR);       
$stmt->bindParam(':id_marque', $id_marque, PDO::PARAM_INT);       

$stmt->execute(); 
           } }


           
          
          
           
          


          $sql = "UPDATE marque SET titre_marque = :titre_marque, 
            etat_marque = :etat_marque
            WHERE id_marque = :id_marque";
$stmt = $bdd->prepare($sql);                                  
$stmt->bindParam(':titre_marque', $titre_marque, PDO::PARAM_STR);       
$stmt->bindParam(':etat_marque', $etat_marque, PDO::PARAM_STR);       
$stmt->bindParam(':id_marque', $id_marque, PDO::PARAM_INT);       

$stmt->execute(); 
 
          
  }
 


    function modiffamille(){

     $_SESSION['toast'] = 'famille modifiée avec succés';
          global $bdd;  
          $titre_famille   = strip_tags($_POST['titre_famille']);
          $etat_famille   = strip_tags($_POST['etat_famille']); 
          $id_famille   = strip_tags($_POST['id_famille']); 

          //$ordre_famille  = strip_tags($_POST['ordre_fami']);      
          
          if(isset($_FILES['image_famille']))
          { 
               $dossier = '../upload/';
               $fichier = basename($_FILES['image_famille']['name']);
               $image_famille = $dossier . $fichier;
               if(move_uploaded_file($_FILES['image_famille']['tmp_name'], $image_famille)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
               {
                    
               }
               else //Sinon (la fonction renvoie FALSE).
               {
                     
               }          
 
if( strstr($image_famille, '.png') or  strstr($image_famille, '.bmp') or strstr($image_famille, '.jpeg')  or strstr($image_famille, '.jpg') or strstr($image_famille, '.JPG') or strstr($image_famille, '.JPEG') or strstr($image_famille, '.PNG') or strstr($image_famille, '.BMP')) { 
 $sql = "UPDATE famille SET image_famille = :image_famille WHERE id_famille = :id_famille";
$stmt = $bdd->prepare($sql);                                  
$stmt->bindParam(':image_famille', $image_famille, PDO::PARAM_STR);       
$stmt->bindParam(':id_famille', $id_famille, PDO::PARAM_INT);       

$stmt->execute(); 
           } }


           
          
          
           
          


          $sql = "UPDATE famille SET titre_famille = :titre_famille, 
            etat_famille = :etat_famille
            WHERE id_famille = :id_famille";
$stmt = $bdd->prepare($sql);                                  
$stmt->bindParam(':titre_famille', $titre_famille, PDO::PARAM_STR);       
$stmt->bindParam(':etat_famille', $etat_famille, PDO::PARAM_STR);       
$stmt->bindParam(':id_famille', $id_famille, PDO::PARAM_INT);       

$stmt->execute(); 
 
          
  }
  //fin fonction ajout marque
  function suppfamille(){
     $_SESSION['toast'] = 'famille supprimée avec succés';
       global $bdd;
       // need to sanitize
    $id_famille = $_GET['id_famille'] ?? NULL ;

    if(!is_null($id_famille)){
                         $sql = "DELETE FROM famille WHERE id_famille= " . $id_famille;

                         $resultat=  $bdd->query($sql);

                         if($resultat){
                              header('location: ../famille.php');
                         }else{
                    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }
  }
  //fin supp famille


  //debut ajout point de vente 

  function ajoutPointdevente(){
     global $bdd;  



$titre_point_vente = strip_tags($_POST['titre_point_vente']);
$presentation_point_vente = strip_tags($_POST['presentation_point_vente']);
$type_point_vente = strip_tags($_POST['type_point_vente']);
$info_point_vente = strip_tags($_POST['info_point_vente']);
$etat_point_vente = strip_tags($_POST['etat_point_vente']);
$mail_point_de_vente = strip_tags($_POST['mail_point_de_vente']);

$id_admin = 2;
 
 

  $sql = "INSERT INTO point_de_vente( 
            titre_point_vente,
            presentation_point_vente,
            type_point_vente,
            info_point_vente,
            etat_point_vente,
            id_admin,
            mail_point_de_vente
            ) VALUES (
            :titre_point_vente,
            :presentation_point_vente,
            :type_point_vente,
            :info_point_vente,
            :etat_point_vente,
            :id_admin,
            :mail_point_de_vente)";
                                          
$stmt = $bdd->prepare($sql);
                                              
$stmt->bindParam(':titre_point_vente', $titre_point_vente, PDO::PARAM_STR);
$stmt->bindParam(':presentation_point_vente', $presentation_point_vente, PDO::PARAM_STR);
$stmt->bindParam(':type_point_vente', $type_point_vente, PDO::PARAM_STR);
$stmt->bindParam(':info_point_vente', $info_point_vente, PDO::PARAM_STR);
$stmt->bindParam(':etat_point_vente', $etat_point_vente, PDO::PARAM_STR);
$stmt->bindParam(':id_admin', $id_admin, PDO::PARAM_INT);   
$stmt->bindParam(':mail_point_de_vente', $mail_point_de_vente);                                         
 

$inserted = $stmt->execute();
          
          
//verifier si on a des résultats (true or false)
if($inserted){
header('location: point_de_ventes.php');
}else{
echo 'ohhhh :(' . "<br>" . print_r($stmt->errorInfo());
}

 


  }
  //fin ajout point de vente

  //debut supp marque
  function suppmarque(){
       global $bdd;
       // need to sanitize
    $id_marque = $_GET['id_marque'] ?? NULL ;

    if(!is_null($id_marque)){
        $sql = "DELETE FROM marque WHERE id_marque= " . $id_marque;

       $resultat=  $bdd->query($sql);

       if($resultat){
           header('location: marque.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }
  }
//fin supp marque

//debut supp point de vente

function suppPointdevente(){
     global $bdd;
     // need to sanitize
  $id_point_vente = $_GET['id_point_vente'] ?? NULL ;

  if(!is_null($id_point_vente)){
      $sql = "DELETE FROM point_de_vente WHERE id_point_vente= " . $id_point_vente;

     $resultat=  $bdd->query($sql);

     if($resultat){
         header('location: point_de_ventes.php');
     }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

     }
  }
}

function suppCommande(){
     global $bdd;
     // need to sanitize
  $id_comd = $_GET['id_comd'];
  $sql = "DELETE FROM commande WHERE id_comd= " . $id_comd;
  $resultat=  $bdd->query($sql);

}


function produitAAaAne(){
//$id = strip_tags('alaune', '', str_replace($_GET['id']));
$id_prod =  $_GET['id'] ;
$id_prod =  str_replace('alaune', '', $id_prod);
//si a la une resoit 0
// sinon reçoi 1
global $bdd;
 

$alaune = "SELECT alaune_produit FROM produit WHERE id_prod LIKE '$id_prod'"; 
                if($bdd->query($alaune)){
                foreach  ($bdd->query($alaune) as $rowalaune) {
                if($rowalaune['alaune_produit']==0){$alaune_produit = 1;}
                if($rowalaune['alaune_produit']==1){$alaune_produit = 0;}
                } //foreach
                }  //if  

//reçoi l'ordre
$sql = "UPDATE produit SET   alaune_produit = :alaune_produit 
            WHERE id_prod = :id_prod";
$stmt = $bdd->prepare($sql);                                  

$stmt->bindParam(':alaune_produit', $alaune_produit, PDO::PARAM_INT);   
$stmt->bindParam(':id_prod', $id_prod, PDO::PARAM_INT);   
$stmt->execute();

}


function produitordre(){ 
global $bdd;
//$id_prod = strip_tags('ordre', '', str_replace($_GET['id']));
$id_prod =  $_GET['id'] ;
$id_prod =  str_replace('ordre', '', $id_prod);
$ordre_produit = (int)$_GET['ordre'];
//reçoi l'ordre
$sql = "UPDATE produit SET   ordre_produit = :ordre_produit 
            WHERE id_prod = :id_prod";
$stmt = $bdd->prepare($sql);                                  

$stmt->bindParam(':ordre_produit', $ordre_produit, PDO::PARAM_INT);   
$stmt->bindParam(':id_prod', $id_prod, PDO::PARAM_INT);   
$stmt->execute(); 
}
 
 if(isset($_GET['action'])){ 
  if($_GET['action'] == 'alaune'){produitAAaAne();} 
  if($_GET['action'] == 'ordre'){produitordre();} 
 }  
 //debut controleur
 
if(isset($_POST['action'])){ 
 
  if($_POST['action'] == 'ajoutFamille'){ajoutfamille();} 
  if($_POST['action'] == 'suppFamille'){suppfamille();} 
  if($_POST['action'] == 'modiffamille'){modiffamille();}  


  if($_POST['action'] == 'ajoutermarque'){ajoutermarque();}  
  if($_POST['action'] == 'modifmarque'){modifmarque();}  
  if($_POST['action'] == 'suppmarque'){suppmarque();} 

  if($_POST['action'] == 'ajoutAdmin'){ajoutAdmin();} 
  if($_POST['action'] == 'modifAdmin'){modifAdmin();} 
  if($_POST['action'] == 'modifRoleAdmin'){modifRoleAdmin();} 
  if($_POST['action'] == 'modifPassAdmin'){modifPassAdmin();} 
  if($_POST['action'] == 'supAdmin'){supAdmin();} 
  if($_POST['action'] == 'ajoutProduit'){ajoutProduit();} 
  if($_POST['action'] == 'modifProduit'){modifProduit();} 
  if($_POST['action'] == 'supProduit'){supProduit();} 

  if($_POST['action'] == 'supProduit'){supProduit();} 
  if($_POST['action'] == 'ajoutClient'){ajoutClient();} 
  if($_POST['action'] == 'suppClient'){suppClient();} 
  if($_POST['action'] == 'ajoutPointdevente'){ajoutPointdevente();} 
  if($_POST['action'] == 'suppPointdevente'){suppPointdevente();} 
  if($_POST['action'] == 'suppCommande'){suppCommande();} 



 


 
}

 
//fin controleur

/*
$sql = "UPDATE movies SET filmName = :filmName, 
            filmDescription = :filmDescription, 
            filmImage = :filmImage,  
            filmPrice = :filmPrice,  
            filmReview = :filmReview  
            WHERE filmID = :filmID";
$stmt = $pdo->prepare($sql);                                  
$stmt->bindParam(':filmName', $_POST['filmName'], PDO::PARAM_STR);       
$stmt->bindParam(':filmDescription', $_POST['$filmDescription'], PDO::PARAM_STR);    
$stmt->bindParam(':filmImage', $_POST['filmImage'], PDO::PARAM_STR);
// use PARAM_STR although a number  
$stmt->bindParam(':filmPrice', $_POST['filmPrice'], PDO::PARAM_STR); 
$stmt->bindParam(':filmReview', $_POST['filmReview'], PDO::PARAM_STR);   
$stmt->bindParam(':filmID', $_POST['filmID'], PDO::PARAM_INT);   
$stmt->execute(); 


$sql = "DELETE FROM movies WHERE filmID =  :filmID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':filmID', $_POST['filmID'], PDO::PARAM_INT);   
$stmt->execute();



$sql = "INSERT INTO movies(filmName,
            filmDescription,
            filmImage,
            filmPrice,
            filmReview) VALUES (
            :filmName, 
            :filmDescription, 
            :filmImage, 
            :filmPrice, 
            :filmReview)";
                                          
$stmt = $pdo->prepare($sql);
                                              
$stmt->bindParam(':filmName', $_POST['filmName'], PDO::PARAM_STR);       
$stmt->bindParam(':filmDescription', $_POST['filmDescription'], PDO::PARAM_STR); 
$stmt->bindParam(':filmImage', $_POST['filmImage'], PDO::PARAM_STR);
// use PARAM_STR although a number  
$stmt->bindParam(':filmPrice', $_POST['filmPrice'], PDO::PARAM_STR); 
$stmt->bindParam(':filmReview', $_POST['filmReview'], PDO::PARAM_STR);   
                                      
$stmt->execute(); 

*/


?>