<?php 
require_once('../../includes/config.php');
if(isset($_POST['supprimer'])){

    // need to sanitize
    $id_famille = $_GET['id_famille'] ?? NULL ;

    if(!is_null($id_famille)){
        $sql = "DELETE FROM famille WHERE id_famille= " . $id_famille;

       $resultat=  $pdo->query($sql);

       if($resultat){
           header('location: ../famille.php');
       }else{
echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

       }
    }

}
?>