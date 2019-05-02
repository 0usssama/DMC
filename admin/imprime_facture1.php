<?php include 'head.php'
// n'oubliez pas le css print
 ?>

<?php $idfacture = (int)$_GET['id']; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

       

        <!-- Page Content -->
        <hr>
        <p>
        











 
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
$sql = "SELECT  * FROM commander WHERE id_commande LIKE '$idfacture' LIMIT 1";

?>


    <?php 
        if($pdo->query($sql)){
           
            

            foreach  ($pdo->query($sql) as $commande) { ?>
 
  <?php 
  $facture = json_decode($commande['elements_produit'], true);

  ?>  
  <table class="table table-striped custab">
                  
                    <tr>
                        <td> <h3>Facture  N° <?php echo $commande['id_commande']; ?></h3> </td>

                    <tr>
                        <td style="border-right: 2px solid #000">
                          <p> Informations entreprise </p>
                          <p> Point de vente </p>
                          <p> Delais de livraison 20 jours </p>
                          <p> Paiement à la livraison </p>

                        </td>

                         <td>
                          <p> A : <?php echo $facture['nom'].' '. $facture['prenom'];?></p>
                          <p> <?php echo $facture['adresse']; ?></p>
                          <p> <?php echo $facture['email']; ?></p>
                          <p> <?php echo $facture['telephone']; ?></p>
                        </td> 
                    </tr>
 </table>
 
 <table class="table table-striped custab"> 
             <thead>
            
                <tr>
                  

                    <th>N°</th>
                    <th>Produit</th>
                    <th>Prix u</th>
                    <th>Qte</th>
                    <th>Total</th>
                 
          
                 
                </tr>
            </thead>                   
                    <?php // liste des produits ?>
 
                         <?php $liste = $facture['listeid']; //recuperation de la liste des id des commande ?>
                         <?php $listeProduitPannier = explode('/', $liste); 
                               $y = count($listeProduitPannier); 
                               for ($i=1; $i < $y-1; $i++)  
                               { ?>

                         <?php $idp = $listeProduitPannier[$i]; // recuperer le id du produit du tableau $listeProduitPannier = explode('/', $liste); ?>
                               <tr>
                               <td><?php echo $i; ?></td>
                               <td><?php echo $facture['titreProduit'.$idp]; ?></td>
                               <td><?php echo $facture['prixProduit'.$idp]; ?></td>
                               <td><?php echo $facture['qteProduit'.$idp]; ?></td>
                               <td><?php echo $facture['totalProduit'.$idp]; ?></td>
                               </tr>
                               <?php }
                    ?>

               
 
 
                               <tr>
                               <td>Qte</td>
                               <td><?php echo $facture['qteGeneral']; ?></td>
                               <td> </td>
                               <td>Total ht</td>
                               <td><?php echo $facture['totalGeneral']; ?></td>
                               </tr>

                               <tr>
                               <td></td>
                               <td></td>
                               <td> </td>
                               <td>TVA 19%</td>
                               <td><?php echo ($facture['totalGeneral']*19/100); ?></td>
                               </tr>

                               <tr>
                               <td></td>
                               <td></td>
                               <td> </td>
                               <td>TOTAL GENERAL</td>
                               <td><?php echo ($facture['totalGeneral']*1.19); ?></td>
                               </tr>

</table>

                  

                        </div>

                    </div>
                </div>
            </div>
                   
              <?php 
            }
          
             } ?>     
            </table>





        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

    </div>
   
  <?php include 'foot.php'; ?>