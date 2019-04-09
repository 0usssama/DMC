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
        <h1>Produits ta3 Zaki</h1>
        <hr>
        <?php
        // join mazal cause the foreign keys are not ready
        $sql = "SELECT produit.id_prod, produit.nom_prod, produit.date_prod, produit.prix_detail, produit.prix_gros, produit.qnt_detail, produit.qnt_gros, marque.titre_marque, famille.titre_famille
        FROM produit
        JOIN marque 
        ON marque.id_marque = produit.id_marque
        JOIN famille
        ON famille.id_famille = produit.id_famille 
        
        ORDER BY id_prod DESC";
       
        ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter un produit</button>


        <table class="table table-striped custab">
            <thead>
            
                <tr>
                    <th>ID</th>
                    <th>Nom produit</th>
                    <th>ajouté le</th>
                    <th>prix détail</th>

                    <th>marque</th>
                    <th>famille</th>
                    <th>image p</th>
                    <th>images secondaires</th>
                    <th></th>
                </tr>

            </thead>
            <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>

            <tr>
                <td><?php echo $id_prod = $row['id_prod'] ;?></td>
                <td><?php echo $row['nom_prod'] ;?></td>
                <td><?php echo $row['date_prod'] ;?></td>
                <td>

                    <h6>detail: <?php echo $row['prix_detail'] ;?>DA</h6>
                    <h6>qte: <?php echo $row['qnt_detail'] ;?></h6>
 
                    <h6>gros: <?php echo $row['prix_gros'] ;?>DA</h6>
                    <h6>qte: <?php echo $row['qnt_gros'] ;?></h6>
                      
                </td>
                <td><?php echo $row['titre_marque'];?></td>
                <td><?php echo $row['titre_famille'];?></td>
                

                <?php $sqlimage = "SELECT * FROM image WHERE id_prod LIKE '$id_prod'"; ?>
                <?php 
                if($pdo->query($sqlimage)){
                foreach  ($pdo->query($sqlimage) as $rowimage) { ?>

                <?php  
                if($rowimage['url_imag']!=''){$imageprincipale = '../'.$rowimage['url_imag'];}
                if($rowimage['image1']!=''){$image1 = '../'.$rowimage['image1'];}
                if($rowimage['image2']!=''){$image2 ='../'.$rowimage['image2'];}
                if($rowimage['image3']!=''){$image3 = '../'.$rowimage['image3'];}
                ?>
                
                <?php } //foreach
                      }  //if ?>



                <td><img width="80" src="<?php echo $imageprincipale ;?>"></td>
                <td><img width="30" src="<?php echo $image1; ?>">
                    <img width="30" src="<?php echo $image2; ?>">
                    <img width="30" src="<?php echo $image3; ?>"></td>

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_prod'] ;?>">Supprimer</button></td>

                <?php  
                $imageprincipale = '';
                $image1 = '';
                $image2 = '';
                $image3 = '';
                ?>
            </tr>

            <div class="modal fade" id="m<?php echo $row['id_prod'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_prod'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajout</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="admin/produit.php?id_prod=<?php echo $row['id_prod'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer client n°<?php echo $row['id_prod'] ;?> </h1>
                                <input type="submit" name="supprimer" class="btn btn-block btn-danger"
                                    value="supprimer">
                                <input type="hidden" name="action" value="supProduit">
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
           
            <form action="admin/produit.php" method="post" enctype="multipart/form-data">
                
                 
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
                          
                          <?php
                            $sql = "SELECT * FROM marque";
                            if($pdo->query($sql)){
                              foreach  ($pdo->query($sql) as $row) {
                            ?>
                            <option value="<?php echo $row['id_marque']. '-' .$row['titre_marque']; ?>"><?php echo $row['id_marque']. '-' .$row['titre_marque']; ?></option>
                            <?php }
            }; ?>
                   
                        </select>
                 </div>
              
                <div class="form-group">
                
                     
                        <label for="famille">famille</label>
                        <select class="form-control" id="famille" name="famille">
                        <?php
                            $sql = "SELECT * FROM famille";
                            if($pdo->query($sql)){
                              foreach  ($pdo->query($sql) as $row) {
                            ?>
                            <option value="<?php echo $row['id_famille']. '-' .$row['titre_famille']; ?>"><?php echo $row['id_famille']. '-' .$row['titre_famille']; ?></option>
                            <?php }
            }; ?>
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
                 
                  <div class="form-group">
                    <div class="form-label-group">
                      <select name="etat_prod" id="etat_prod" class="form-control">
                      <option value="">disponibilité</option>  
                      <option value="disponible">disponible</option>
                        <option value="non_disponible">non disponible</option>

                      </select>
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
