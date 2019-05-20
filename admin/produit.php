<?php include 'head.php' ;  ?>


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
        <h1><i class="fas fa-box-open"></i> Produits</h1>
        <hr>
        <?php
        // join mazal cause the foreign keys are not ready
        $sql = "SELECT produit.id_prod, produit.alaune_produit, produit.id_marque, produit.id_famille,  produit.ordre_produit, produit.nom_prod, produit.date_prod, produit.prix_detail, produit.prix_gros, produit.qnt_detail, produit.qnt_gros, marque.titre_marque, famille.titre_famille, produit.caracteristiques_prod, produit.description_prod, produit.etat_prod 
        FROM produit
        JOIN marque 
        ON marque.id_marque = produit.id_marque
        JOIN famille
        ON famille.id_famille = produit.id_famille 
        
        ORDER BY id_prod DESC";
       
        ?>
        <button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#exampleModalScrollable"><i class="far fa-plus-square"></i>&nbsp;Ajouter un produit</button>


        <table class="table table-striped custab">
            <thead>
            
                <tr>
                    <th>ID</th>
                    <th>Nom produit</th>
                    <th>a la une</th>
                    <th>ordre</th>
                    <th>ajouté le</th>
                    <th>prix détail</th>

                    <th>marque</th>
                    <th>famille</th>
                    <th>images</th>
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

                <td><input type="checkbox" 
                 <?php if($row['alaune_produit'] == 1){?> checked="checked" <?php } ?> 
                  name="alaune" id="alaune<?php echo $id_prod;?>" onclick="produitAAaAne('alaune<?php echo $id_prod;?>')"></td>
                
                <td><input style=" width: 40px;" type="number" value="<?php echo $row['ordre_produit'] ;?>" name="ordre" id="ordre<?php echo $id_prod;?>" onmouseout="produitordre('ordre<?php echo $id_prod;?>')"></td>

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
                
                
                if(!empty($rowimage['url_imag'])){
                  
                  $imageprincipale = '../' . $rowimage['url_imag'];
                }
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

                <td class="text-center">

<button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#modifier<?php echo $row['id_prod'] ;?>"><i class="fas fa-edit"></i>
                      </button>
<br>
<br>

                  <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_prod'] ;?>">  <i class="fas fa-trash"></i>
                        </button></td>

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
                            <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="produit.php?id_prod=<?php echo $row['id_prod'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer produit n°<?php echo $row['id_prod'] ;?> </h1>
                                
                                    <button type="submit" name="supprimer" class="btn btn-block btn-danger"
                                    value="supprimer">
                                    <i class="fas fa-trash"></i>&nbsp;supprimer
                                    </button>
                                <input type="hidden" name="action" value="supProduit">
                            </form>

                        </div>

                    </div>
                </div>
            </div>




            <div class="modal fade" id="modifier<?php echo $row['id_prod'] ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle<?php echo $row['id_prod'] ;?>">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
            <form action="produit.php" method="post" enctype="multipart/form-data">
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="nom_prod<?php echo $row['id_prod'] ;?>" name="nom_prod" class="form-control" placeholder="Nom du produit" required="required" autofocus="autofocus" value="<?php echo $row['nom_prod'] ;?>">
                      <label for="nom_prod<?php echo $row['id_prod'] ;?>">Nom du produit</label>
                    </div>
                  </div>

                <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="Image<?php echo $row['id_prod'] ;?>" name="imageprincipale" class="form-control" placeholder="Image" autofocus="autofocus">
                      <label for="Image<?php echo $row['id_prod'] ;?>">Image Principale</label>
                    </div>
                  </div>

                          <div class="form-label-group">
                            <input type="text" id="prix_detail<?php echo $row['id_prod'] ;?>" name="prix_detail" class="form-control" placeholder="Prix en détail" required="required" autofocus="autofocus" value="<?php echo $row['prix_detail'] ;?>">
                            <label for="prix_detail<?php echo $row['id_prod'] ;?>">Prix en détail</label>
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                              <input type="text" id="prix_gros<?php echo $row['id_prod'] ;?>" name="prix_gros" class="form-control" placeholder="Prix en gros" required="required" autofocus="autofocus" value="<?php echo $row['prix_gros'] ;?>">
                              <label for="prix_gros<?php echo $row['id_prod'] ;?>">Prix en gros</label>
                            </div>
                          </div>
                      <div class="form-group">

                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="number" id="qnt_detail<?php echo $row['id_prod'] ;?>" name="qnt_detail" class="form-control" placeholder="qnt_detail" required="required" value="<?php echo $row['qnt_detail'] ;?>">
                        <label for="qnt_detail<?php echo $row['id_prod'] ;?>">quantité en détail</label>
                      </div>
                    </div>

  

                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="number" id="qnt_gros<?php echo $row['id_prod'] ;?>" name="qnt_gros" class="form-control" placeholder="qnt_gros" required="required" value="<?php echo $row['qnt_gros'] ;?>">
                        <label for="qnt_gros<?php echo $row['id_prod'] ;?>">quantité en gros</label>
                      </div>
                    </div>

 
                    <div class="form-group">
                        <textarea id="caracteristiques_prod<?php echo $row['id_prod'] ;?>" name="caracteristiques_prod" class="form-control" required="required"><?php echo $row['caracteristiques_prod'] ;?></textarea>
                    </div>

                    <div class="form-group">
                        <textarea id="description_prod<?php echo $row['id_prod'] ;?>" name="description_prod" class="form-control" required="required"><?php echo $row['description_prod'] ;?></textarea>
                    </div>
               
                <div class="form-group">
                    <label for="marque<?php echo $row['id_prod'] ;?>">Marque</label>
                      <select class="form-control" id="marque<?php echo $row['id_prod'] ;?>" name="id_marque">
                          
                          <?php
                            $sql = "SELECT * FROM marque";
                            if($pdo->query($sql)){
                              foreach  ($pdo->query($sql) as $row2) {
                            ?>
                            <option <?php if($row['id_marque']==$row2['id_marque']){ ;?>selected="selected" <?php } ?> value="<?php echo $row2['id_marque']; ?>"><?php echo $row2['id_marque']. '-' .$row2['titre_marque']; ?></option>
                            <?php }
            }; ?>
                   
                        </select>
                 </div>
              
                <div class="form-group">
                
                     
                        <label for="famille<?php echo $row['id_prod'] ;?>">famille</label>
                        <select class="form-control" id="famille<?php echo $row['id_prod'] ;?>" name="id_famille">
                        <?php
                            $sql = "SELECT * FROM famille";
                            if($pdo->query($sql)){
                              foreach  ($pdo->query($sql) as $row2) {
                            ?>
                            <option  <?php if($row['id_famille']==$row2['id_famille']){ ;?>selected="selected" <?php } ?>  value="<?php echo $row2['id_famille']; ?>"><?php echo $row2['id_famille']. '-' .$row2['titre_famille']; ?></option>
                            <?php }
            }; ?>
                          </select>
                
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="Image1<?php echo $row['id_prod'] ;?>" name="image1" class="form-control" placeholder="Image1" autofocus="autofocus">
                      <label for="Image1<?php echo $row['id_prod'] ;?>">Image 1</label>
                    </div>
                  </div>

                <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="Image2<?php echo $row['id_prod'] ;?>" name="image2" class="form-control" placeholder="Image2" autofocus="autofocus">
                      <label for="Image2<?php echo $row['id_prod'] ;?>">Image 2</label>
                    </div>
                  </div> 

                <div class="form-group">
                    <div class="form-label-group">
                      <input type="file" id="Image3<?php echo $row['id_prod'] ;?>" name="image3" class="form-control" placeholder="Image3" autofocus="autofocus">
                      <label for="Image3<?php echo $row['id_prod'] ;?>">Image 3</label>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <div class="form-label-group">
                      <select name="etat_prod" id="etat_prod<?php echo $row['id_prod'] ;?>" class="form-control">
                      <option value="<?php echo $row['etat_prod'] ;?>"><?php echo $row['etat_prod'] ;?></option>  
                      <option value="disponible">disponible</option>
                        <option value="non_disponible">non disponible</option>

                      </select>
                    </div>
                  </div>
                <input type="hidden" name="id_prod" value="<?php echo $row['id_prod'] ;?>">
                <input type="hidden" name="action" value="modifProduit">
                <input type="submit" class="btn btn-primary btn-block" value="Modifier" name="ajouter">
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
           
            <form action="produit.php" method="post" enctype="multipart/form-data">
                
                 
                <div class="form-row">
              <div class="col">
              <label for="nom_prod" class="label-file">Nom du produit</label>

              <input type="text" id="nom_prod" name="nom_prod" class="form-control input-file" placeholder="Nom du produit" required="required" autofocus="autofocus">
              </div>

              <div class="col">
              <label for="Image">Image Principale</label>

              <input type="file" id="Image" name="imageprincipale" class="form-control" placeholder="Image" required="required" autofocus="autofocus">
              </div>
  </div>

              <br>
              <div class="form-row">
              
              <div class="col">
              <label for="prix_detail">Prix en détail</label>

              <input type="text" id="prix_detail" name="prix_detail" class="form-control" placeholder="Prix en détail" required="required" autofocus="autofocus">
              </div>

              
              <div class="col">
              <label for="prix_gros">Prix en gros</label>

              <input type="text" id="prix_gros" name="prix_gros" class="form-control" placeholder="Prix en gros" required="required" autofocus="autofocus">
              </div>
              </div>

<br>
              <div class="form-row">
              <div class="col">
              <label for="qnt_detail">quantité en détail</label>

              <input type="number" id="qnt_detail" name="qnt_detail" class="form-control" placeholder="qnt_detail" required="required">
              </div>

              <div class="col">
              <label for="qnt_gros">quantité en gros</label>

              <input type="number" id="qnt_gros" name="qnt_gros" class="form-control" placeholder="qnt_gros" required="required">
              </div>
              </div>

<br>
              <div class="form-row">
              <div class="col">
              <textarea id="caracteristiques_prod" name="caracteristiques_prod" class="form-control" required="required">Caracteristiques</textarea>

              </div>
              <div class="col">
              <textarea id="description_prod" name="description_prod" class="form-control" required="required">Description</textarea>

              </div>
              </div>
<br>
              <div class="form-row">
              <div class="col">
                      <select class="form-control" id="marque" name="marque">
                          <option value="">Marque</option>
                          <?php
                            $sql = "SELECT * FROM marque";
                            if($pdo->query($sql)){
                              foreach  ($pdo->query($sql) as $row) {
                            ?>
                            <option value="<?php echo $row['id_marque']. '-' .$row['titre_marque']; ?>"><?php echo $row['id_marque']. '-' .$row['titre_marque']; ?></option>
                            <?php }
            }; ?>
              <label for="marque">Marque</label>
                   
                        </select>
              </div>

              <div class="col">
                        <select class="form-control" id="famille" name="famille">
                        <option value="">Famille</option>

                        <?php
                            $sql = "SELECT * FROM famille";
                            if($pdo->query($sql)){
                              foreach  ($pdo->query($sql) as $row) {
                            ?>
                            <option value="<?php echo $row['id_famille']. '-' .$row['titre_famille']; ?>"><?php echo $row['id_famille']. '-' .$row['titre_famille']; ?></option>
                            <?php }
            }; ?>
              <label for="famille">famille</label>

                          </select>
              </div>
              </div>
<br>
              <div class="form-row">
              <div class="col">

              <input type="file" id="Image1" name="image1" class="form-control" placeholder="Image1" autofocus="autofocus">
              </div>
              <div class="col">

              <input type="file" id="Image2" name="image2" class="form-control" placeholder="Image2" autofocus="autofocus">
              </div>
              </div>

<br>
         <div class="form-row">
         <div class="col">

         <input type="file" id="Image3" name="image3" class="form-control" placeholder="Image3" autofocus="autofocus">
         </div>
         <div class="col">
         <select name="etat_prod" id="etat_prod" class="form-control">
                      <option value="">disponibilité</option>  
                      <option value="disponible">disponible</option>
                        <option value="non_disponible">non disponible</option>

                      </select>
         </div>
         </div>   
<br>
         <div class="form-row">
         <input type="hidden" name="action" value="ajoutProduit">
                <input type="submit" class="btn right-float btn-danger " value="Ajouter" name="ajouter">
         </div>
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


<!--<?php if(isset($_SESSION['admin'])){
      if($_SESSION['admin']=='connecte'){ // a metre dans toute les page admin apar fonctionadmin ?> -->

<!-- <?php } }  // a metre dans toute les page admin apar fonctionadmin  ?> -->