<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $id_produit = $_GET['id_prod'] ?? NULL ;

    if(!is_null($id_produit)){
        $sql = "DELETE FROM produit WHERE id_prod= " . $id_produit;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../produit.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>