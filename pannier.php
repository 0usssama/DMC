<?php include('fonctionSite.php');?>

<!DOCTYPE html>
<html lang="fr">


<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PANIER</title>

  <!-- Custom fonts for this template-->
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin.css" rel="stylesheet">

</head>

<body>

  <div class="container"><h2>Pannier:</h2> <br><br><br>


<?php
if(!isset($_SESSION['listeIdProduit'])){echo '<h3>Votre pannier est vide</h3>';}
else{ ?>
<table style="border: 1px solid #ccc" border="3">

                <td> nom_prod          </td>
                <td> titre_marque      </td>
                <td> titre_famille     </td>
                <td> qte   </td>
                <td> prix  </td>
                <td> Total produit</td>

   <?php $listeProduitPannier = explode('/', $_SESSION['listeIdProduit']);?>
   <?php $y = count($listeProduitPannier);?>
   <?php for ($i=1; $i < $y-1; $i++)  
    {?>
   <?php $idp = $listeProduitPannier[$i]; ?>
   <tr>
   
<?php
        // join mazal cause the foreign keys are not ready
        $sql = "SELECT produit.nom_prod, marque.titre_marque, famille.titre_famille
        FROM produit
        JOIN marque 
        ON marque.id_marque = produit.id_marque
        JOIN famille
        ON famille.id_famille = produit.id_famille 
        
        WHERE produit.id_prod LIKE '$idp' ";
       
        ?>
      
 
            <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>
             


                <?php $sqlimage = "SELECT * FROM image WHERE id_prod LIKE '$idp'"; ?>
                <?php 
                if($pdo->query($sqlimage)){
                foreach  ($pdo->query($sqlimage) as $rowimage) { ?>

                <?php  
                
                
                if(!empty($rowimage['url_imag'])){
                  
                  $imageprincipale = '../' . $rowimage['url_imag'];
                }
                
                ?>
                
                <?php } //foreach
                      }  //if ?>


                <td><?php echo $row['nom_prod'] ;?></td>
                <td><?php echo $row['titre_marque'];?></td>
                <td><?php echo $row['titre_famille'];?></td>
                <td><?php echo $_SESSION['qteProduit'.$idp];?></td>
                <td><?php echo $_SESSION['prixProduitTotal'.$idp] / $_SESSION['qteProduit'.$idp];?></td>
                <td><?php echo $_SESSION['prixProduitTotal'.$idp];?></td>


                 <?php } //foreach
                      }  //if ?>
    
  
   </tr>

<?php   } // end for?>
</table>
<?php } ?>
Prix Total = <?php echo $_SESSION['prixTotal']; ?> DA

 
   
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
<?php 
$_SESSION['erreurs'] = '';
unset($_SESSION);
?>