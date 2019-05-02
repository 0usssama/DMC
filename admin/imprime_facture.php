<?php include 'head.php'
// n'oubliez pas le css print
 ?>

<?php $idfacture = (int)$_GET['id']; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

       

        <!-- Page Content -->
        <hr>
        <p>
        
  
<?php 

  
$jsonclient = '"idClient":"'.$_SESSION['id_client'].'"';
  
$sql = "SELECT  * FROM commande WHERE  elements_produit LIKE '%$jsonclient%' AND  id_comd LIKE '$idfacture' LIMIT 1";

?>


    <?php 
        if($pdo->query($sql)){
           
            

            foreach  ($pdo->query($sql) as $commande) { ?>
 
  <?php 
  $facture = json_decode($commande['elements_produit'], true);

  ?>  
  <table class="table table-striped custab">
                  
                    <tr>
                        <td> <h3>Facture  N° <?php echo $commande['id_comd']; ?></h3> </td>
                        <td> <input class="pc" type="button" value="imprimer" onclick="window.print()">
                             <?php if($commande['date_comd'] == '') { ?>
                             <input id="btnvalide" class="pc" type="button" value="valider la commande" onclick="validerlacommande(<?php echo $commande['id_comd']; ?>)">
                             <?php } ?>
                        </td>
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