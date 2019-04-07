<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $id_marque = $_GET['id_marque'] ?? NULL ;

    if(!is_null($id_marque)){
        $sql = "DELETE FROM marque WHERE id_marque= " . $id_marque;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../marque.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>