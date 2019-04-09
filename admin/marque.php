<?php include 'head.php' ;?>
    <div id="content-wrapper">

      <div class="container-fluid">

          <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-8">
                  <form class="card card-sm">
                      <div class="card-body row no-gutters align-items-center">
                         
                          <!--end of col-->
                          <div class="col">
                              <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Rechercher une marque">
                          </div>
                          <!--end of col-->
                          <div class="col-auto">
                              <button class="btn btn-lg btn-success" type="submit">rechercher</button>
                          </div>
                          <!--end of col-->
                      </div>
                  </form>
              </div>
              <!--end of col-->
          </div>

        <!-- Page Content -->
        <h1>marques</h1>
        <hr>
        <?php
      
      $sql = "SELECT * FROM marque";
     
      ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter une marque</button>


        <table class="table table-striped custab">
            <thead>
            
                <tr>
                    <th>ID</th>
                    <th>Nom marque</th>
                    <th>Etat</th>
                    <th>Image</th>
                 
                  <th></th>
                 
                 
                </tr>
            </thead>
            <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>

            <tr>
                <td><?php echo $row['id_marque'] ;?></td>
                <td><?php echo $row['titre_marque'] ;?></td>
                <td><?php echo $row['etat_marque'] ;?></td>
                <td><img width="50" src="../<?php echo $row['image_marque'] ;?>"></td>

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_marque'] ;?>">Supprimer</button></td>
            </tr>

            <div class="modal fade" id="m<?php echo $row['id_marque'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_marque'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="admin/marque.php?id_marque=<?php echo $row['id_marque'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer client n°<?php echo $row['id_marque'] ;?> </h1>
                                <input type="hidden" name="action" value="suppmarque">
                              
                                <input type="submit" name="supprimer" class="btn btn-block btn-danger"
                                    value="supprimer">
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <?php }
            }; ?>
                   
                   
            </table>

            <!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
            <form action="admin/marque.php" method="post" enctype="multipart/form-data">
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="titre_marque" name="titre_marque" class="form-control" placeholder="" required="required" autofocus="autofocus">
                      <label for="titre_marque">Nom  marque</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-label-group">
                      <select name="etat_marque" id="etat_marque" class="form-control">
                      <option value="">disponibilité</option>  
                      <option value="disponible">disponible</option>
                        <option value="non_disponible">non disponible</option>

                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="image_marque" name="image_marque" class="form-control" placeholder="marque" required="required" autofocus="autofocus">
                      <label for="image_marque">image  marque</label>
                    </div>
                  </div>
                    
                 
              
                <input type="hidden" name="action" value="ajoutermarque">
               
                <input type="submit" class="btn btn-primary btn-block" value="Ajouter" name="ajouter">
              </form>
        </div>
              
       
    </div>
  </div>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

    </div>
    <!-- /.content-wrapper -->

    <?php include 'foot.php'; ?>