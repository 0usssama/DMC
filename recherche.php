<?php include('fonctionSite.php');?>
<?php include('head.php');?>    
<?php include('header.php');?>  
<?php include('nav.php');?>  
<?php if(isset($_POST['recherche'])){$recherche = $_POST['recherche'];?> 
    <!-- Content-->
   <div id="content">
      <div class="container">
        
          <h3 class="text-light pt-4 pb-4">resultat de recherche pour : <?php echo $recherche; ?>:</h3>
  

          <div class="row d-flex justify-content-center">

          <?php 
                   $sql = "SELECT produit.id_prod, produit.nom_prod, produit.date_prod, produit.prix_detail, produit.prix_gros, produit.qnt_detail, produit.qnt_gros, marque.titre_marque, famille.titre_famille
        FROM produit
        JOIN marque 
        ON marque.id_marque = produit.id_marque
        JOIN famille
        ON famille.id_famille = produit.id_famille 
        
        
            WHERE produit.nom_prod LIKE '$recherche' OR  famille.titre_famille LIKE '$recherche' OR  marque.titre_marque LIKE '$recherche' OR   produit.description_prod LIKE '%$recherche%' OR  produit.caracteristiques_prod LIKE '%$recherche%' ";

           
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






<?php } include('services.php');?>  

<?php include('footer.php');?>  