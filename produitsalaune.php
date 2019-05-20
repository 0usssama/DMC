        <?php // requette 
        $sql = "SELECT produit.id_prod, produit.nom_prod,produit.date_prod, produit.prix_detail, produit.prix_gros, produit.qnt_detail, produit.qnt_gros, marque.titre_marque, famille.titre_famille
        FROM produit
        JOIN marque 
        ON marque.id_marque = produit.id_marque
        JOIN famille
        ON famille.id_famille = produit.id_famille 
        
        WHERE produit.alaune_produit LIKE 1 ORDER BY ordre_produit ASC";
        ?>



<div class="container" id="alaune">
        <div class="row mb-5 mt-4">
          <div class="display-4 mx-auto mt-3 text-white font-weight-bold"><i class="fas fa-poll"></i>&nbsp;Produits à la une</div>
        </div> <!-- row --->
       
        <div class="row d-flex justify-content-center">

<?php 
if($bdd->query($sql)){
foreach  ($bdd->query($sql) as $row) { 



include('un_produit.php'); ?>
        
           
 

<?php } //foreach
}  //if ?>

         
                      

           

              
        </div> <!-- row --->
       
        

</div> <!-- container --->