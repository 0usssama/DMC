<?php 

include 'includes/config.php';

if(isset($_POST['voter'])){

    //var_dump($_REQUEST);
    $page = strip_tags($_GET['page']);
echo $page;
    $id_client = strip_tags($_REQUEST['id_client']);
    $id_prod = strip_tags($_REQUEST['id_prod']);
    $rating =strip_tags($_REQUEST['rating']);
    $date_ev = date('Y-m-d', time());
    $sql = "INSERT INTO evaluer (date_ev, nbr_etoils_ev, id_prod, id_client) VALUES (:date_ev,:nbr_etoils_ev,:id_prod,:id_client  )";
    
    $stmt = $bdd->prepare($sql);                                  

    $stmt->bindParam(':id_client', $id_client);   
    $stmt->bindParam(':id_prod', $id_prod);   
    $stmt->bindParam(':nbr_etoils_ev', $rating);   
    $stmt->bindParam(':date_ev', $date_ev);   

    if($stmt->execute()){

        session_start();
        $_SESSION['vote'] = true;


    //var_dump($page);
    
        if($page == 'index'){
            header('location:index.php');
          
        }elseif($page == 'produit'){
          
            header("location:produit.php?id=$id_prod");
        }

    }else{
        echo 'ça marche pas';
    }

}


?>