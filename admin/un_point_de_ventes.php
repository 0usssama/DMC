
<?php include 'head.php'; 
 ?>
    <div id="content-wrapper">

      <div class="container-fluid">

          <div class="row justify-content-center">
              <div class="col-6 col-md-6 col-lg-6">
                  <form class="card card-sm">
                      <div class="card-body row no-gutters align-items-center">
                         
                          <!--end of col-->
                          <div class="col">
                              <input class="form-control form-control-borderless" type="search" placeholder="Rechercher une marque">
                          </div>
                          <!--end of col-->
                          <div class="col-auto">
                              <button class="btn  btn-success" type="submit">rechercher</button>
                          </div>
                          <!--end of col-->
                      </div>
                  </form>
              </div>
              <!--end of col-->
          </div>

        <!-- Page Content -->
        <h1>Commandes</h1>
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
      if(isset($_GET['idpointdevente'])){$idpointdevente = strip_tags($_GET['idpointdevente']);} 

      if(isset($_GET['idcommende'])){$idcommende = strip_tags($_GET['idcommende']);}

       $message = '';
      






 
if(isset($_GET['idcommende'])){

      $sql = "SELECT  * FROM commande WHERE id_comd LIKE '$idcommende' LIMIT 1";

?>


    <?php 
        if($pdo->query($sql)){
           
            

            foreach  ($pdo->query($sql) as $commande) { ?>
 
  <?php 
  $facture = json_decode($commande['elements_produit'], true);

  ?>  
  <?php   
  $message  = '<table class="table table-striped custab">';
  $message  = $message.'<tr>';
  $message  = $message.'<td> <h3>Facture  N°'.$commande["id_comd"].'</h3> </td>';
  $message  = $message.'<tr>';
  $message  = $message.'<td style="border-right: 2px solid #000">';
  $message  = $message.'<p> Informations entreprise </p>';
  $message  = $message.'<p> Point de vente </p>';
  $message  = $message.'<p> Delais de livraison 20 jours </p>';
  $message  = $message.'<p> Paiement à la livraison </p>';
  $message  = $message.'</td>';
  $message  = $message.'<td>';
  $message  = $message.'<p> A :'.$facture["nom"]." ". $facture["prenom"].'</p>';
  $message  = $message.'<p>'.$facture["adresse"].'</p>';
  $message  = $message.'<p>'.$facture["email"].'</p>';
  $message  = $message.'<p>'.$facture["telephone"].'</p>';
  $message  = $message.'</td>'; 
  $message  = $message.'</tr>';
  $message  = $message.'</table>';
  $message  = $message.'<table class="table table-striped custab">'; 
  $message  = $message.'<thead>';
  $message  = $message.'<tr>';
  $message  = $message.'<th>N°</th>';
  $message  = $message.'<th>Produit</th>';
  $message  = $message.'<th>Prix u</th>';
  $message  = $message.'<th>Qte</th>';
  $message  = $message.'<th>Total</th>';
  $message  = $message.'</tr>';
  $message  = $message.'</thead>';                   
 ?> 
                         <?php $liste = $facture['listeid']; //recuperation de la liste des id des commande ?>
                         <?php $listeProduitPannier = explode('/', $liste); 
                               $y = count($listeProduitPannier); 
                               for ($i=1; $i < $y-1; $i++)  
                               { ?>

                         <?php $idp = $listeProduitPannier[$i]; // recuperer le id du produit du tableau $listeProduitPannier = explode('/', $liste); 
                             $message  = $message.'<tr>';
                             $message  = $message.'<td>'.$i.'</td><tr>';
                             $message  = $message.'<td>'.$facture['titreProduit'.$idp].'</td>';
                             $message  = $message.'<td>'.$facture['prixProduit'.$idp].'</td>';
                             $message  = $message.'<td>'.$facture['qteProduit'.$idp].'</td>';
                             $message  = $message.'<td>'.$facture['totalProduit'.$idp].'</td>';
                             $message  = $message.'</tr>';
                           } ?>
                         <?php 
                             $message  = $message.'<tr>';
                             $message  = $message.'<td>Qte</td>';
                             $message  = $message.'<td>'.$facture['qteGeneral'].'</td>';
                             $message  = $message.'<td> </td>';
                             $message  = $message.'<td>Total ht</td>';
                             $message  = $message.'<td>'.$facture['totalGeneral'].'</td>';
                             $message  = $message.'</tr>';

                             $message  = $message.'<tr>';
                             $message  = $message.'<td></td>';
                             $message  = $message.'<td></td>';
                             $message  = $message.'<td> </td>';
                             $message  = $message.'<td>TVA 19%</td>';
                             $message  = $message.'<td>'.($facture['totalGeneral']*19/100).'</td>';
                             $message  = $message.'</tr>';

                             $message  = $message.'<tr>';
                             $message  = $message.'<td></td>';
                             $message  = $message.'<td></td>';
                             $message  = $message.'<td> </td>';
                             $message  = $message.'<td>TOTAL GENERAL</td>';
                             $message  = $message.'<td>'.($facture['totalGeneral']*1.19).'</td>';
                             $message  = $message.'</tr>';
                             $message  = $message.'</table>';
            }
          
             }     
                             $message  = $message.'</table>';
                             $message  = $message.'</p>'; ?>


<?php      

if($message != ''){
$idpointdevente = strip_tags($_GET['idpointdevente']); 
$idcommende = strip_tags($_GET['idcommende']);
  $sql = "SELECT * FROM point_de_vente WHERE id_point_vente LIKE '$idpointdevente' ";

?>

<?php if($pdo->query($sql)){
      foreach  ($pdo->query($sql) as $row) {
        //$mail_point_de_vente = $row['mail_point_de_vente'] ; 

        $mail_point_de_vente = 'vide' ; 
       }  ?>
<?php }; ?>



<?php 

$sujet = 'nouvelle facture';
  
$destinataire = $mail_point_de_vente;
$headers = "From: \"site web\"<moi@domaine.com>\n";
$headers .= "Reply-To: moi@domaine.com\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
if(mail($destinataire,$sujet,$message,$headers))
{
        ?><script type="text/javascript"> alert("L'email a bien été envoyé.");</script> <?php 
 
}
else
{
           ?><script type="text/javascript"> alert("Une erreur c'est produite lors de l'envois de l'email.");</script> <?php 
}

 

$etat_comd = 'valider';

$sql = "UPDATE commande 
        SET 
        etat_comd=:etat_comd
        WHERE  id_comd=:id_comd";
 
        $execution = $bdd->prepare($sql);    
        $execution->bindParam(':id_comd', $idcommende, PDO::PARAM_INT);       
        $execution->bindParam(':etat_comd', $etat_comd, PDO::PARAM_STR); /////en attendan le mailling      

        $execution->execute();


  } ?>

<?php  } //fin de if(isset($_GET['idcommende']))?> 



 
<?php       if(isset($_GET['idpointdevente'])){$idpointdevente = strip_tags($_GET['idpointdevente']);} 

$sql = "SELECT  * FROM commande WHERE etat_comd LIKE 'valider' AND id_point_vente LIKE '$idpointdevente'";

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
    
        <a  class="btn btn-success btn-block " href="imprime_facture.php?id=<?php echo $commande['id_comd']; ?>">voir/imprimer</a> 

                        </td>
                         <td>
                           
        <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $commande['id_client'] ;?>">Supprimer</button>
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
                            <form action="commandes.php?id_client=<?php echo $commande['id_client'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer la commande du client n°<?php echo $commande['id_client'] ;?> </h1>
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