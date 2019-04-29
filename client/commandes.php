
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
                  

                    <th>N° commande</th>
                  
                    <th>date</th>
                    <th>etat</th>
                    <th>Produits</th>
                 
                  <th></th>
                  <th></th>
                 
                 
                </tr>
            </thead>
 



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
           // }
          
           //  } ?>     
            </table>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

    </div>
    <!-- /.content-wrapper -->
<?php include 'foot.php'; ?>