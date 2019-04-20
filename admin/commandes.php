
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
<?php 
$sql = "SELECT  client.id_client, client.nom_client, client.prenom_client, commander.date_comd, 
commander.etat_comd, commander.qte_p_comd, commander.id_prod, commander.id_client
FROM commander
JOIN client 
ON commander.id_client = client.id_client

";

?>


    <?php 
        if($pdo->query($sql)){
           
            

            foreach  ($pdo->query($sql) as $commande) {
               
              
                if(!isset($clientactif)){

                    $clientactif = $commande['id_client'];
                }else{

                    if( $clientactif ==  $commande['id_client']){
                        continue;
                    }else{
                    $clientactif = $commande['id_client'];

                    }
                }


                ?>
 
    
                    <tr>
                        <td><?php echo $commande['id_client']; ?></td>
                        <td><?php echo $commande['nom_client']. " " . $commande['prenom_client']; ?></td>
                        <td><?php echo $commande['date_comd']; ?></td>
                        <td><?php echo $commande['etat_comd']; ?></td>
                       
                         <td>
                         <ul>
                         <?php 
                         $sql3 = "SELECT produit.nom_prod, commander.qte_p_comd
                          FROM commander 
                          JOIN produit
                          ON commander.id_prod = produit.id_prod
                         
                         
                         
                         
                         WHERE commander.id_client = " . $commande['id_client'];
                               

                             

                         
                            foreach  ($pdo->query($sql3) as $produit) {
                            echo '<li>' . '<b>('. $produit['qte_p_comd'] . ') </b>' .$produit['nom_prod'] .   '</li>';
                            }          
                            
                        
                      ?>

                         </ul>
                         </td>
                      
                       
                      
                        <td>
        <a  class="btn btn-success btn-block " href="#">transférer</a>

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