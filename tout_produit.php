<?php include('fonctionSite.php');?>
<?php include('head.php');?>    
<?php include('header.php');?>  
<?php include('nav.php');?>  
     <!-- Content-->
   <div id="content">
      <div class="container">
        
          <h3 class="text-light pt-4 pb-4">Tout les produits:</h3>
  

          <div class="row d-flex justify-content-center">

          <?php 
                   $sql = "SELECT produit.id_prod, produit.nom_prod, produit.date_prod, produit.prix_detail, produit.prix_gros, produit.qnt_detail, produit.qnt_gros, marque.titre_marque, famille.titre_famille
        FROM produit
        JOIN marque 
        ON marque.id_marque = produit.id_marque
        JOIN famille
        ON famille.id_famille = produit.id_famille 
        
         ";

           
            if($bdd->query($sql)){
                
                  
              foreach ($bdd->query($sql) as $row) {
             
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