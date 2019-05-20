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
// id_prod	nom_prod	date_prod	prix_detail	prix_gros	qnt_detail	qnt_gros   id_marq	id_fami	caracteristiques_prod	description_prod	etat_prod	id_admin	position_prod


var_dump($_POST);

 
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
    
   };


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
  header('location: ../produit.php');
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

}
//fin fonction ajout Produit

function ajoutImage($id_prod,$id_point_vente){
//	id_imag	url_imag	id_prod	id_point_vente
}

function modifProduit(){

}
//fin fonction modif Produit
//debut fonction supprimer client

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


//var_dump($_POST);

$sql = "INSERT INTO `client` ( `nom_client`, `prenom_client`,`email_client`,`adresse_client`,`catego_client`,`motpass_client`,`raison_social_client`, `id_admin`)
VALUES (:nomclient, :prenomclient, :emailclient, :adresseclient, :categoryclient, :motpasseclient, :raisonsocialclient, :idadmin)";


//Prepare our statement.
$statement = $bdd->prepare($sql);


//validation mazal makhssossa aprés ndirha 
$nomClient = $_POST['nom_client'];
$prenomClient = $_POST['prenom_client'];
$emailClient = $_POST['email_client'];

$adresseClient = $_POST['adresse_client'];
$categoryClient = $_POST['catego_client'];
$motpasseClient = password_hash($_POST['motpass_client'], PASSWORD_BCRYPT);
$raisonsocialClient = $_POST['raison_social_client'] ?? '/';
$id_admin = 2;




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



};

//fin fonction ajout client
function supProduit(){
global $bdd;  

$id_produit = $_GET['id_prod'] ?? NULL ;

    if(!is_null($id_produit)){
     $sqlimage = "SELECT * FROM image WHERE id_prod LIKE '$id_produit'";
     foreach  ($bdd->query($sqlimage) as $rowimage) {
     
          if($rowimage['url_imag']!=''){ unlink('../upload/'.$rowimage['url_imag']); }
          if($rowimage['image1']!=''){ unlink('../upload/'.$rowimage['image1']); }
          if($rowimage['image2']!=''){ unlink('../upload/'.$rowimage['image2']); }
          if($rowimage['image3']!=''){ unlink('../upload/'.$rowimage['image3']); }

     };


     
        $sql = "DELETE FROM produit WHERE id_prod= " . $id_produit;

       $resultat=  $bdd->query($sql);

       if($resultat){
           header('location: ../produit.php');
       }else{
      echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
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


//verifier si on a des résultats (true or false)
if($inserted){
  header('location: ../famille.php');
}else{
  echo 'ohhhh :(' . "<br>" . print_r($stmt->errorInfo());
}

}
//fin fonction ajout famille

function ajoutermarque(){

          
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
          header('location: ../marque.php');
          }else{
          echo 'ohhhh :(' . "<br>" . print_r($stmt->errorInfo());
          }
          
  }
  //fin fonction ajout marque
  function suppfamille(){
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
$id_admin = 2;
 
 

  $sql = "INSERT INTO point_de_vente( 
            titre_point_vente,
            presentation_point_vente,
            type_point_vente,
            info_point_vente,
            etat_point_vente,
            id_admin) VALUES (
            :titre_point_vente,
            :presentation_point_vente,
            :type_point_vente,
            :info_point_vente,
            :etat_point_vente,
            :id_admin)";
                                          
$stmt = $bdd->prepare($sql);
                                              
$stmt->bindParam(':titre_point_vente', $titre_point_vente, PDO::PARAM_STR);
$stmt->bindParam(':presentation_point_vente', $presentation_point_vente, PDO::PARAM_STR);
$stmt->bindParam(':type_point_vente', $type_point_vente, PDO::PARAM_STR);
$stmt->bindParam(':info_point_vente', $info_point_vente, PDO::PARAM_STR);
$stmt->bindParam(':etat_point_vente', $etat_point_vente, PDO::PARAM_STR);
$stmt->bindParam(':id_admin', $id_admin, PDO::PARAM_INT);   
                                      
 

$inserted = $stmt->execute();
          
          
//verifier si on a des résultats (true or false)
if($inserted){
header('location: ../point_de_ventes.php');
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
           header('location: ../marque.php');
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
         header('location: ../point_de_ventes.php');
     }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

     }
  }
}

function suppCommande(){
     global $bdd;
     // need to sanitize
  $id_client = $_GET['id_client'] ?? NULL ;
  $sql = "DELETE FROM commande WHERE id_client= " . $id_client;
  $resultat=  $bdd->query($sql);

  if($resultat){
     header('location: commandes.php');
 }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

 }
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

function updateClient(){
     global $bdd;
     $sql = "UPDATE client SET   
     nom_client = :nom_client,
     prenom_client = :prenom_client,
     adresse_client = :adresse_client,
     tel_client = :tel_client,
     motpass_client= :motpass_client,
     catego_client = :catego_client,
     raison_social_client = :raison_social_client

     WHERE id_client = :id_client;";

$stmt = $bdd->prepare($sql);                                  


$nom_client = strip_tags($_POST['nom_client']) ?? '/';
$prenom_client = strip_tags($_POST['prenom_client']) ?? '/';
$tel_client = strip_tags($_POST['tel_client']) ?? '/';
$motpass_client =  password_hash($_POST['motpass_client'], PASSWORD_BCRYPT) ?? '/';

$catego_client = strip_tags($_POST['catego_client']) ?? '/';
if($_POST['catego_client'] == 'particulier'){
$raison_social_client =  '/';
     
}else{
$raison_social_client = strip_tags($_POST['raison_social_client']) ;
     
}
$id_client = $_SESSION['id_client'];
$adresse_client = strip_tags($_POST['adresse_client']) ?? '/' ;


$stmt->bindParam(':nom_client', $nom_client);   
$stmt->bindParam(':prenom_client', $prenom_client);   
$stmt->bindParam(':adresse_client', $adresse_client);   
$stmt->bindParam(':tel_client', $tel_client);   
$stmt->bindParam(':motpass_client', $motpass_client);   
$stmt->bindParam(':catego_client', $catego_client);   
$stmt->bindParam(':raison_social_client', $raison_social_client);   
$stmt->bindParam(':id_client', $id_client);   

//Execute the statement and insert our values.
//ar_dump($sql);
$inserted = $stmt->execute();


//verifier si on a des résultats (true or false)7

if($inserted){
echo ' Youpiiiiiii<br>';
header('location: profile.php');
}else{
echo 'ohhhh :(' . "<br>" . print_r($stmt->errorInfo());
}


}

 
 if(isset($_GET['action'])){ 
  if($_GET['action'] == 'alaune'){produitAAaAne();} 
  if($_GET['action'] == 'ordre'){produitordre();} 
 }  
 //debut controleur
if(isset($_POST['action'])){ 
 
  if($_POST['action'] == 'ajoutFamille'){ajoutfamille();} 
  if($_POST['action'] == 'suppFamille'){suppfamille();} 

  if($_POST['action'] == 'ajoutermarque'){ajoutermarque();}  
  if($_POST['action'] == 'suppmarque'){suppmarque();} 

  if($_POST['action'] == 'ajoutAdmin'){ajoutAdmin();} 
  if($_POST['action'] == 'modifAdmin'){modifAdmin();} 
  if($_POST['action'] == 'modifRoleAdmin'){modifRoleAdmin();} 
  if($_POST['action'] == 'modifPassAdmin'){modifPassAdmin();} 
  if($_POST['action'] == 'supAdmin'){supAdmin();} 
  if($_POST['action'] == 'ajoutProduit'){ajoutProduit();} 
  if($_POST['action'] == 'supProduit'){supProduit();} 
  if($_POST['action'] == 'ajoutClient'){ajoutClient();} 
  if($_POST['action'] == 'suppClient'){suppClient();} 
  if($_POST['action'] == 'updateClient'){updateClient();} 


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