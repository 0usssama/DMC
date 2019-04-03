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
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter un produit</button>


        <table class="table table-striped custab">
            <thead>
            
                <tr>
                    <th>ID</th>
                    <th>Nom produit</th>
                    <th>ajouté le</th>
                    <th>prix détail</th>
                    <th>prix gros</th>
                    <th>quantité</th>
                  <th>marque</th>
                  <th>famille</th>
                  <th></th>
                  <th></th>
                 
                </tr>
            </thead>
                    <tr>
                        <td>1</td>
                        <td>Air max</td>
                        <td>23/02/2019</td>
                        <td>9000 DA</td>
                        <td>7000 DA</td>
                        <td>42</td>
                        <td>Nike</td>
                        <td>Chaussure</td>
                        <td>
        <a  class="btn btn-danger btn-block " href="#">Supprimer</a>

                        </td>
                        <td>
        <a  class="btn btn-warning btn-block  " href="#">Modifier</a>

                        </td>

                       
                    </tr>
                   
                   
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
           
            <form>
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="nom_prod" name="nom_prod" class="form-control" placeholder="Prix en détail" required="required" autofocus="autofocus">
                      <label for="nom_prod">Nom du produit</label>
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
                        <input type="text" id="qnt_detail" name="qnt_detail" class="form-control" placeholder="Prénom" required="required">
                        <label for="qnt_detail">qunaité en détail</label>
                      </div>
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
                <input type="submit" class="btn btn-primary btn-block" value="Ajouter">
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
