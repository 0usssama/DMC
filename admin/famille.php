
<?php include 'head.php' ;?>
    <div id="content-wrapper">

      <div class="container-fluid">

          <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-8">
                  <form class="card card-sm">
                      <div class="card-body row no-gutters align-items-center">
                         
                          <!--end of col-->
                          <div class="col">
                              <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Rechercher une famille">
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
        <h1>Familles</h1>
        <hr>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalScrollable">Ajouter une famille</button>
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="col-md-10">
                  <table class="table  custab">
                      <thead>
                      
                          <tr>
                              <th>ID</th>
                              <th>Nom famille</th>
                              <th></th>
                            
                             
                           
                          </tr>
                      </thead>
                              <tr>
                                  <td>1</td>
                                  <td>Imprimante laser</td>
                                
                               
                                  <td>
                  <a  class="btn btn-danger" href="#">Supprimer</a>
          
                                  </td>
                                 
          
                                 
                              </tr>
                             
                              <tr>
                                  <td>2</td>
                                  <td>Imprimante sans fil</td>
                                
                               
                                  <td>
                  <a  class="btn btn-danger" href="#">Supprimer</a>
          
                                  </td>
                                  
          
                                 
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
           
            <form>
                
                 
                <div class="form-group">
                    <div class="form-label-group">
                      <input type="text" id="titre_fami" name="titre_fami" class="form-control" placeholder="famille" required="required" autofocus="autofocus">
                      <label for="titre_fami">Nom  famille</label>
                    </div>
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
