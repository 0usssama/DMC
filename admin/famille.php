
<?php include 'head.php' ;

?>


<style>
.form-control:focus {
  border-color: rgba(220, 53, 69, 1) ;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(220, 53, 69, 0.6);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(220, 53, 69, 0.6);
}
</style>
    <div id="content-wrapper">

      <div class="container-fluid">

       

        <!-- Page Content -->
        <h1>
      <i class="fas fa-fw fa-1x mr-2 fa-layer-group"></i>
        Familles</h1>
        <hr>
         <?php
      
        $sql = "SELECT * FROM famille";
       
        ?>
        <button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#exampleModalScrollable"><i class="far fa-plus-square"></i>&nbsp;Ajouter une famille</button>
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="col-md-10">
                  <table class="table  custab">
                      <thead>
                      
                          <tr>
                              <th>ID</th>
                              <th>Nom famille</th>
                              <th>état famille</th>
                              <th>image famille</th>
                              
                            
                             
                           
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





                <td class="text-center">
                  <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#modif<?php echo $row['id_famille'] ;?>"><i class="fas fa-edit"></i></button>
                        
                        
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_famille'] ;?>"><i class="fas fa-trash"></i></button></td>
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




<div class="modal fade" id="modif<?php echo $row['id_famille'] ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">modifier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
            <form action="famille.php" method="post" enctype="multipart/form-data">
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="titre_famille" name="titre_famille" class="form-control" placeholder="" required="required" autofocus="autofocus" value="<?php echo $row['titre_famille'] ;?>">
                      <label for="titre_famille">Nom  famille</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-label-group">
                      <select name="etat_famille" id="etat_famille" class="form-control">
                      <option value="<?php echo $row['etat_famille'] ;?>"><?php echo $row['etat_famille'] ;?></option>  
                      <option value="disponible">disponible</option>
                      <option value="non_disponible">non disponible</option>

                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="image_famille" name="image_famille" class="form-control" placeholder="famille" autofocus="autofocus">
                      <label for="image_famille">image  famille</label>
                    </div>
                  </div>
                    
                 
                <input type="hidden" name="id_famille" value="<?php echo $row['id_famille'] ;?>">
                <input type="hidden" name="action" value="modiffamille">
               
                <input type="submit" class="btn btn-danger btn-block" value="Modifier" name="ajouter">
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
               
                <input type="submit" class="btn btn-danger btn-block" value="Ajouter" name="ajouter">
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
