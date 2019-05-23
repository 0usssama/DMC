
<?php include 'head.php' ;?>
    <div id="content-wrapper">

      <div class="container-fluid">

         
<style>
.form-control:focus {
  border-color: rgba(220, 53, 69, 1) ;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(220, 53, 69, 0.6);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(220, 53, 69, 0.6);
}
</style>
        <!-- Page Content -->
        <h1>
        <i class="fas fa-fw fa-1x mr-2 fa-map-marker"></i>
        
        Point de vente</h1>
        <hr>

        <button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#exampleModalScrollable"><i class="far fa-plus-square"></i>&nbsp;Ajouter un point de vente</button>
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="col-md-10">
                  <table class="table  custab">
                      <thead>
                      
                          <tr>
                              <th>ID</th>
                              <th>Nom point de vente</th>
                              <th>Présentation</th>
                              <th>Type </th>
                              <th>email</th>
                              <th>Infos</th>
                              <th>état</th>
                              
                            
                             
                           
                          </tr>
                      </thead>
         <?php
      
        $sql = "SELECT * FROM point_de_vente";
       
        ?>
                      
                      <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>

            <tr>
                <td><?php echo $row['id_point_vente'] ;?></td>
                <td><?php echo $row['titre_point_vente'] ;?></td>
                <td><?php echo $row['presentation_point_vente'] ;?></td>
                <td><?php echo $row['type_point_vente'] ;?></td>
                <td><?php echo $row['mail_point_de_vente'] ;?></td>
                  
                <td><?php echo $row['info_point_vente'] ;?></td>
                <td><?php echo $row['etat_point_vente'] ;?></td>

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_point_vente'] ;?>"><i class="fas fa-trash"></i></button></td>
            </tr>

            <div class="modal fade" id="m<?php echo $row['id_point_vente'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_point_vente'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="point_de_ventes.php?id_point_vente=<?php echo $row['id_point_vente'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer point de vente n°<?php echo $row['id_point_vente'] ;?> </h1>
                                <input type="submit" name="supprimer" class="btn btn-block btn-danger"
                                    value="supprimer">
                  <input type="hidden" name="action" value="suppPointdevente">

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
           
            <form action="point_de_ventes.php" method="post" enctype="multipart/form-data">
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="titre_point_vente" name="titre_point_vente" class="form-control" placeholder="point de vente" required="required" autofocus="autofocus">
                      <label for="titre_point_vente">Nom point de vente	</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="presentation_point_vente" name="presentation_point_vente" class="form-control" placeholder="presentation" required="required" autofocus="autofocus">
                      <label for="presentation_point_vente"> presentation	</label>
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="form-label-group">
                      <input type="mail" id="mail_point_de_vente" name="mail_point_de_vente" class="form-control" placeholder="email" required="required" autofocus="autofocus">
                      <label for="mail_point_de_vente"> mail point de vente	</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-label-group">
                      <select name="type_point_vente" id="type_point_vente" class="form-control">
                      <option value="">type</option>  
                      <option value="gros">gros</option>
                        <option value="detail"> detail </option>

                      </select>
                    </div>
                  </div>
                

                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="info_point_vente" name="info_point_vente" class="form-control" placeholder="presentation" required="required" autofocus="autofocus">
                      <label for="info_point_vente"> Infos	</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-label-group">
                      <select name="etat_point_vente" id="etat_point_vente" class="form-control">
                      <option value="">disponibilité</option>  
                      <option value="disponible">disponible</option>
                        <option value="non_disponible">non disponible</option>

                      </select>
                    </div>
                  </div>
                  
                 
              
               
                  <input type="hidden" name="action" value="ajoutPointdevente">
               
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
