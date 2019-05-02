<?php include('fonctionSite.php');?>
<?php include('head.php');?>    
<?php include('header.php');?>  
<?php include('nav.php');?>  

    <!-- Content-->
   <div id="content">
      <div class="container">
        <?php 
          $id_marque = strip_tags($_GET['id']) ?? '';
          $sql = 'SELECT titre_marque FROM marque WHERE id_marque = '. "'". $id_marque ."'";
          if($bdd->query($sql)){
            foreach ($bdd->query($sql) as $marque) {
        
        ?>
          <h1 class="text-light pt-4 pb-4"><?php echo $marque['titre_marque']; ?></h1>
 
            <?php };} ?>

          <div class="row d-flex justify-content-center">

          <?php 
            $sql = "SELECT produit.id_prod, produit.nom_prod, produit.prix_detail, image.url_imag
            FROM produit
            JOIN image
            ON image.id_prod = produit.id_prod
            JOIN marque
            ON produit.id_marque = marque.id_marque
            
            
            
            WHERE produit.id_marque =";
            $sql .= "'" . $id_marque . "'";

           
            if($bdd->query($sql)){
                
                  
              foreach ($bdd->query($sql) as $produit) {
             
          
          ?>
             <div class="col-md-3 mb-4 d-flex justify-content-center">
                <div class="card" style="width:15rem;">
                  <a href="produit.php?id=<?php echo $produit['id_prod'];; ?>">
                    <img class="card-img-top img-responsive" style="width: auto" src="<?php echo $produit['url_imag']; ?>" alt="Card image top">
   
                  </a>                 
   
                  
                <div class="card-body ml-2 mr-2">
                <h5 class="card-title"> 
                <?php echo $produit['nom_prod']; ?></h5>
                
                <button class="btn btn-danger  btn-sm mt-1"  data-toggle="modal" data-target="#exampleModal<?php echo $produit['id_prod'] ; ?>"> 
                    <span class="text-light">
                    <span class="fa fa-star" ></span>
                   
                    </span>
                    </button>
              </div>
                
                      <div
                        class="d-flex justify-content-between align-items-right mr-3 ml-3 mb-2 "
                      >
   
                        <div class="price text-success">
                          <h5 class="mt-4"><?php echo $produit['prix_detail']; ?></h5>
                        </div>
    
                        <input type="number" class="qte" name="qte" min="0" value="1" id="qte<?php echo $produit['id_prod']; ?>"> 
                      <button 
                      <?php if(isset($_SESSION['id_client']) && !empty($_SESSION['id_client'])){ ?>
                       onclick="ajoutpannier('qte<?php echo $row['id_prod']; ?>');" 
                      <?php } else { ?>
                       onclick="location.href='login.php'"; 
                      <?php } ?>
                       class="btn btn-danger btn-sm mt-3">
                        <i class="fas fa-shopping-cart"></i> Ajouter
                      </button>
                    </div>
                  </div>   
             </div> 
                           
   
           <!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $produit['id_prod'] ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">evaluer le produit: 
    <span class="text-warning"> <?php echo $produit['nom_prod']; ?></span> 
         </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
      
      </form>
      </div>
   
    </div>
  </div>
</div>
 
             <?php 
              }
            }
             ?>
   
                
          </div>
        </div>
   </div>
   
    <!-- end Content-->






<?php include('services.php');?>  

<?php include('footer.php');?>  