<?php include('fonctionSite.php');?>
<?php include('head.php');?>    
<?php include('header.php');?>  
<?php include('nav.php');?>  

    <!-- Content-->
   <div id="content">
      <div class="container">
        <?php 
          $id_famille = strip_tags($_GET['id']) ?? '';
          $sql = 'SELECT titre_famille FROM famille WHERE id_famille = '. "'". $id_famille ."'";
          if($bdd->query($sql)){
            foreach ($bdd->query($sql) as $famille) {
        
        ?>
          <h1 class="text-light pt-4 pb-4"><?php echo $famille['titre_famille']; ?></h1>
 
            <?php };} ?>

          <div class="row d-flex justify-content-center">

          <?php 
            $sql = "SELECT produit.id_prod, produit.nom_prod, produit.prix_detail, image.url_imag
            FROM produit
            JOIN image
            ON image.id_prod = produit.id_prod
            JOIN famille
            ON produit.id_famille = famille.id_famille
            
            
            
            WHERE produit.id_famille =";
            $sql .= "'" . $id_famille . "'";

           
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