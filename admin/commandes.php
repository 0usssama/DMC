
<?php include 'head.php'; 


 ?>
    <div id="content-wrapper">

      <div class="container-fluid">

        

        <!-- Page Content -->
        <h1>
        <i class="fas fa-fw fa-1x mr-2 fa-cart-arrow-down"></i>

        Commandes</h1>
        <hr>


        <table class="table table-striped custab">
            <thead>
            
                <tr>
                  

                    <th>N° Client</th>
                    <th>Client</th>
                    <th>date</th>
                    <th>etat</th>
                    <th>Produits</th>
                 
                  <th></th>
                  <th></th>
                 
                 
                </tr>
            </thead>
<?php /* 
$sql = "SELECT  client.id_client, client.nom_client, client.prenom_client, commander.date_comd, 
commander.etat_comd, commander.qte_p_comd, commander.id_prod, commander.id_client
FROM commander
JOIN client 
ON commander.id_client = client.id_client

";

{

"listeid":"/47/49/", 
liste des id des produit
on transforme la liste en tableau avec la fonction explode
on cré une boucle for, allant de 1 ver la taille du tableau  count() soit equivalent de length en pascal
aussi j ai les id des produits

 "titreProduit47":"imprimante ticket", "qteProduit47":"4", "prixProduit47":"1500", "totalProduit47":"6000", "titreProduit49":"tablette samsung", "qteProduit49":"6", "prixProduit49":"2150", "totalProduit49":"12900", "qteGeneral":"10", "totalGeneral":"18900", "idClient":"10", "nom":"hafsi", "prenom":"karim", "email":"", "adresse":"", "telephone":"" }

*/ ?>


<?php 
$sql = "SELECT  * FROM commande WHERE etat_comd LIKE 'en cours' ORDER BY id_comd DESC";

//$sqlpointdevent = "SELECT  * FROM commande WHERE etat_comd LIKE 'pointdevente' AND id_point_vente LIKE '$id_point_vente'";

?>


    <?php 
        if($pdo->query($sql)){
           
            

            foreach  ($pdo->query($sql) as $commande) { ?>
 
  <?php 
  $facture = json_decode($commande['elements_produit'], true);

  ?>  
                    <tr>
                        <td><?php echo $facture['idClient']; ?></td>
                        <td><?php echo $facture['nom'].' '. $facture['prenom'];?></td>
                        <td><?php echo $commande['date_comd']; ?></td>
                        <td><?php echo $commande['etat_comd']; ?></td>
                       
                         <td>
                         <?php // liste des produits ?>
 
                         <?php $liste = $facture['listeid']; //recuperation de la liste des id des commande ?>
                         <?php $listeProduitPannier = explode('/', $liste); 
                               $y = count($listeProduitPannier); 
                               for ($i=1; $i < $y-1; $i++)  
                               {
                               $idp = $listeProduitPannier[$i]; 
                               echo '<p>'.$facture['titreProduit'.$idp].' ('.$facture['qteProduit'.$idp].')</p>';
                               }
                         ?>
                         </td>
                      
                       
                      
                        <td>
        <a  class="btn btn-success  " href="un_point_de_ventes.php?idpointdevente=<?php echo $commande['id_point_vente']; ?>&idcommende=<?php echo $commande['id_comd']; ?>"><i class="fas fa-share-square"></i></a>
        <a  class="btn btn-success  " href="imprime_facture.php?id=<?php echo $commande['id_comd']; ?>"><i class="fas fa-eye"></i>&nbsp;voir/&nbsp;<i class="fas fa-print"></i>&nbsp;imprimer</a> 

                        </td>
                        <td>
                           
        <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $commande['id_client'] ;?>"><i class="fas fa-trash"></i></button>
                                            </td>
                        

                       
                    </tr>
                    <div class="modal fade" id="m<?php echo $commande['id_client'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $commande['id_client'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="commandes.php?id_comd=<?php echo $commande['id_comd'] ;?>" method="post">
                                <h1 class="mb-5">voulez-vous supprimer la commande du client n°<?php echo $commande['id_comd'] ;?> </h1>
                <input type="hidden" name="action" value="suppCommande">
                              
                                <input type="submit" name="supprimer" class="btn btn-block btn-danger"
                                    value="supprimer">
                            </form>

                        </div>

                    </div>
                </div>
            </div>
                   
              <?php 
            }
          
             } ?>     
            </table>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

    </div>
    <!-- /.content-wrapper -->
<?php include 'foot.php'; ?>