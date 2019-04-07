<?php include 'head.php' ;?>

    <div id="content-wrapper">

      <div class="container-fluid">

          <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-8">
                  <form class="card card-sm">
                      <div class="card-body row no-gutters align-items-center">
                         
                          <!--end of col-->
                          <div class="col">
                              <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Rechercher un produit">
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
        <h1>Produits ta3 amine</h1>
        <hr>
        <?php
        // join mazal cause the foreign keys are not ready
        $sql = "SELECT * FROM produit";
       
        ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter un produit</button>


        <table class="table table-striped custab">
            <thead>
            
                <tr>
                    <th>ID</th>
                    <th>Nom produit</th>
                    <th>ajouté le</th>
                    <th>prix détail</th>
                    <th>prix gros</th>
                    <th>quantité détail</th>
                    <th>quantité gros</th>

                    <th>marque</th>
                    <th>famille</th>
                    <th></th>
                    <th></th>
                </tr>

            </thead>
            <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>

            <tr>
                <td><?php echo $row['id_prod'] ;?></td>
                <td><?php echo $row['nom_prod'] ;?></td>
                <td><?php echo $row['date_prod'] ;?></td>
                <td><?php echo $row['prix_detail'] ;?></td>
                <td><?php echo $row['prix_gros'] ;?></td>
                <td><?php echo $row['qnt_detail'] ;?></td>
                <td><?php echo $row['qnt_gros'] ;?></td>
                <td><?php echo 'marque';?></td>
                <td><?php echo 'famille';?></td>


                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_prod'] ;?>">Supprimer</button></td>
            </tr>

            <div class="modal fade" id="m<?php echo $row['id_prod'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_prod'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="supprimer/supprimer_produit.php?id_prod=<?php echo $row['id_prod'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer client n°<?php echo $row['id_prod'] ;?> </h1>
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
           
            <form action="ajouter/ajouter_produit.php" method="post" enctype="multipart/form-data">
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="nom_prod" name="nom_prod" class="form-control" placeholder="Nom du produit" required="required" autofocus="autofocus">
                      <label for="nom_prod">Nom du produit</label>
                    </div>
                  </div>

                <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="Image" name="imageprincipale" class="form-control" placeholder="Image" required="required" autofocus="autofocus">
                      <label for="Image">Image Principale</label>
                    </div>
                  </div>

                      <div class="form-group">
                          <div class="form-label-group">
                            <input type="text" id="prix_detail" name="prix_detail" class="form-control" placeholder="Prix en détail" required="required" autofocus="autofocus">
                            <label for="prix_detail">Prix en détail</label>
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                              <input type="text" id="prix_gros" name="prix_gros" class="form-control" placeholder="Prix en gros" required="required" autofocus="autofocus">
                              <label for="prix_gros">Prix en gros</label>
                            </div>
                          </div>

                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="number" id="qnt_detail" name="qnt_detail" class="form-control" placeholder="qnt_detail" required="required">
                        <label for="qnt_detail">quantité en détail</label>
                      </div>
                    </div>

  

                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="number" id="qnt_gros" name="qnt_gros" class="form-control" placeholder="qnt_gros" required="required">
                        <label for="qnt_gros">quantité en gros</label>
                      </div>
                    </div>

 
                    <div class="form-group">
                        <textarea id="caracteristiques_prod" name="caracteristiques_prod" class="form-control" required="required">Caracteristiques</textarea>
                    </div>

                    <div class="form-group">
                        <textarea id="description_prod" name="description_prod" class="form-control" required="required">Description</textarea>
                    </div>
               
                <div class="form-group">
                    <label for="marque">Marque</label>
                      <select class="form-control" id="marque" name="marque">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                 </div>
              
                <div class="form-group">
                
                     
                        <label for="famille">famille</label>
                        <select class="form-control" id="famille" name="famille">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="Image1" name="image1" class="form-control" placeholder="Image1" autofocus="autofocus">
                      <label for="Image1">Image 1</label>
                    </div>
                  </div>

                <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="Image2" name="image2" class="form-control" placeholder="Image2" autofocus="autofocus">
                      <label for="Image2">Image 2</label>
                    </div>
                  </div> 

                <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="Image3" name="image3" class="form-control" placeholder="Image3" autofocus="autofocus">
                      <label for="Image3">Image 3</label>
                    </div>
                  </div>
                 
                <input type="hidden" name="action" value="ajoutProduit">
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
