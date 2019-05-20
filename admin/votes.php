
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
      <i class="fas fa-fw fa-1x mr-2 fa-star"></i>
        Votes</h1>
        <hr>
         <?php
      
        $sql = "SELECT * FROM famille";
       
        ?>
       
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="col-md-10">
                  <table class="table  custab">
                      <thead>
                      
                          <tr>
                              <th>Client</th>
                              <th>Produits votés</th>
                            
                              
                            
                             
                           
                          </tr>
                      </thead>

                      <?php 
        $sql = "SELECT * FROM client";

            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $client) { ?>
                      <tr>
                      <td>
                   <?php echo $client['nom_client']. ' '. $client['prenom_client']; ?>
                      </td>

                      <td>
                      <ul>
                      <?php
                    $sql ="SELECT * FROM produit";
                   

                    if($pdo->query($sql)){
                      foreach  ($pdo->query($sql) as $produit1) {
                    ?>
  <?php
                    $sql ="SELECT produit.nom_prod, AVG(evaluer.nbr_etoils_ev) as totaleEtoile , evaluer.date_ev
                    FROM evaluer
                    JOIN produit
                    ON produit.id_prod = evaluer.id_prod
                    WHERE id_client=
                    ";
                    $sql .= $client['id_client'];
                    $sql .= " AND evaluer.id_prod = ";
                    $sql .= $produit1['id_prod'];

                    if($pdo->query($sql)){
                      foreach  ($pdo->query($sql) as $produit2) {
                    ?>
                      <li><?php echo $produit2['nom_prod']; ?> <b>(<?php echo round($produit2['totaleEtoile'], 1); ?>) (<?php echo $produit2['date_ev']; ?> )</b></li>
                      
                      <?php }
            }; ?>   


                      <?php }
            }; ?>   
                  
                      </ul>
                      </td>
                      </tr>
                      <?php }
            }; ?>   
                             
                      </table>
              </div>
            </div>
          </div>

       

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

    </div>
    <!-- /.content-wrapper -->
    <?php include 'foot.php' ;?>
