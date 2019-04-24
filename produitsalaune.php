        <?php // requette 
        $sql = "SELECT produit.id_prod, produit.nom_prod, produit.date_prod, produit.prix_detail, produit.prix_gros, produit.qnt_detail, produit.qnt_gros, marque.titre_marque, famille.titre_famille
        FROM produit
        JOIN marque 
        ON marque.id_marque = produit.id_marque
        JOIN famille
        ON famille.id_famille = produit.id_famille 
        
        WHERE produit.alaune_produit LIKE 1 ORDER BY ordre_produit ASC";
        ?>



<div class="container" id="alaune">
        <div class="row mb-5 mt-4">
          <div class="display-4 mx-auto mt-3 text-white font-weight-bold">Produits à la une</div>
        </div> <!-- row --->
       
        <div class="row d-flex justify-content-center">

<?php 
if($bdd->query($sql)){
foreach  ($bdd->query($sql) as $row) { 
  $id_prod = $row['id_prod'];
?>
                
                <?php // recuperation des images de la table image connectées par id produit
                $sqlimage = "SELECT * FROM image WHERE id_prod LIKE '$id_prod'"; ?>
                <?php 
                if($bdd->query($sqlimage)){
                foreach  ($bdd->query($sqlimage) as $rowimage) { ?>

                <?php  
                if($rowimage['url_imag']!=''){$imageprincipale = $rowimage['url_imag'];}
                if($rowimage['image1']!=''){$image1 = $rowimage['image1'];}
                if($rowimage['image2']!=''){$image2 = $rowimage['image2'];}
                if($rowimage['image3']!=''){$image3 = $rowimage['image3'];}
                ?>
                
                <?php } //foreach
                      }  //if ?>





        
           <div class="col-md-3 mb-4 d-flex justify-content-center">
              <div class="card" style="width:15rem;">
                <a href="produit/index.php?id=<?php echo $id_prod; ?>">
                  <img class="card-img-top img-responsive" src="<?php echo $imageprincipale; ?>" alt="Card image top">
                </a>                 
              <div class="card-body ml-2 mr-2">
              <h5 class="card-title"> 
                    <?php echo $row['nom_prod']; ?></h5>
                   
                    <button class="btn btn-danger  btn-sm mt-1"  data-toggle="modal" data-target="#exampleModal<?php echo $id_prod ; ?>"> 
                    <span class="text-light">
                    <span class="fa fa-star" ></span>
                   
                    </span>
                    </button>
               </div>
              
                    <div
                      class="d-flex justify-content-between align-items-right mr-3 ml-3 mb-2 "
                    >

                      <div class="price text-success">
                        <h5 class="mt-4"><?php echo $row['prix_detail'] . ' DA'; ?></h5>
                      </div>
  
                     
                      <input type="number" class="qte" name="qte" min="0" value="1" id="qte<?php echo $row['id_prod']; ?>"> 
                      <button onclick="ajoutpannier('qte<?php echo $row['id_prod']; ?>');" class="btn btn-danger btn-sm mt-3">
                        <i class="fas fa-shopping-cart"></i> Ajouter
                      </button>
                  </div>
                </div>   
           </div>



           <!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $id_prod ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">evaluer le produit: 
    <span class="text-warning"> <?php echo $row['nom_prod']; ?></span> 
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
 

<?php } //foreach
}  //if ?>

         
                      

           

              
        </div> <!-- row --->
       
        

</div> <!-- container --->