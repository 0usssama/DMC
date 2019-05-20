
<?php include 'head.php' ;


?>
    <div id="content-wrapper">

      <div class="container-fluid">

     

        <!-- Page Content -->
        <h1>Promotion</h1>
        <hr>
         <?php
      
        $sql = "SELECT * FROM promouvoir";
       
        ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter une famille</button>
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="col-md-12">
                  <table class="table  ">
                      <thead>
                      
                          <tr>
                              <th>ID</th>
                              <th>titre promotion</th>
                              <th>Produits</th>
                              <th>date debut</th>
                              <th>date fin</th>
                              <th>image</th>
                              
                            
                             
                           
                          </tr>
                      </thead>
                      <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>

            <tr>
                <td><?php echo $row['id_famille'] ;?></td>
                <td><?php echo $row['titre_famille'] ;?></td>
                <td><?php echo $row['etat_famille'] ;?></td>
                <td><img width="80" src="<?php echo $row['image_famille'] ;?>" alt=""></td>

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_famille'] ;?>">Supprimer</button></td>
            </tr>

            <div class="modal fade" id="m<?php echo $row['id_famille'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_famille'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="admin/famille.php?id_famille=<?php echo $row['id_famille'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer client n°<?php echo $row['id_famille'] ;?> </h1>
                                <input type="submit" name="supprimer" class="btn btn-block btn-danger"
                                    value="supprimer">
                  <input type="hidden" name="action" value="suppFamille">

                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <?php }
            }; ?>
          
                                 
                              </tr>
                             
                            
                             
                      </table>
              </div>
            </div>
          </div>

       
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
           
            <form action="admin/ajouter_famille.php" method="post" enctype="multipart/form-data">
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="titre_fami" name="titre_fami" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="titre_fami">Nom  famille</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-label-group">
                      <select name="etat_fami" id="etat_fami" class="form-control">
                      <option value="">disponibilité</option>  
                      <option value="disponible">disponible</option>
                        <option value="non_disponible">non disponible</option>

                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="image_famille" name="image_famille" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="image_famille">image  famille</label>
                    </div>
                  </div>
                    
                 
              
               
                  <input type="hidden" name="action" value="ajoutFamille">
               
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
    <?php include 'foot.php' ;?>
