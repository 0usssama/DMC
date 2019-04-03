
<?php include 'head.php'; ?>
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
        <h1>Commandes</h1>
        <hr>


        <table class="table table-striped custab">
            <thead>
            
                <tr>
                    <th>ID</th>
                    <th>Client</th>
                    <th>date</th>
                    <th>etat</th>
                 
                  <th></th>
                  <th></th>
                 
                 
                </tr>
            </thead>
                    <tr>
                        <td>1</td>
                        <td>Benounnas Oussama</td>
                        <td>23/03/2019</td>
                         <td>en cours </td>
                      
                       
                      
                        <td>
        <a  class="btn btn-success btn-block " href="#">transférer</a>

                        </td>
                        <td>
                            <a  class="btn btn-danger btn-block " href="#">Supprimer</a>
                    
                                            </td>
                        

                       
                    </tr>
                   
                   
            </table>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

    </div>
    <!-- /.content-wrapper -->
<?php include 'foot.php'; ?>