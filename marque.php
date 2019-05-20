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
                
                  
              foreach ($bdd->query($sql) as $row ) {
             
      
             include('un_produit.php'); 

  
              }
            }
             ?>
   
                
          </div>
        </div>
   </div>
   
    <!-- end Content-->






<?php  include('services.php');?> 
<?php include('marque_slider.php');?> 
 
<?php include('footer.php');?> 