<?php include('fonctionSite.php');?>
<?php include('head.php');?>    
<?php include('header.php');?>  
<?php include('nav.php');?>  

    <!-- Content-->
    <?php
    $id_prod = $_GET['id'];
        // join mazal cause the foreign keys are not ready
        $sql = "SELECT produit.prix_gros, produit.prix_detail, produit.id_prod, produit.alaune_produit,  
        produit.nom_prod, produit.date_prod, 
        produit.description_prod,produit.caracteristiques_prod,
        
         marque.image_marque, famille.titre_famille
        FROM produit
        JOIN marque 
        ON marque.id_marque = produit.id_marque
        JOIN famille
        ON famille.id_famille = produit.id_famille 
        
       WHERE produit.id_prod = '" . $id_prod . "'";
        if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) {
        ?>
    <div id="content">
        <div class="container">


            <div class="container" id="images">
                <div class="row bg-white pt-4 d-flex lign-items-center mb-4 mt-3">

                    <div class="col-md-5 text-danger d-flex justify-content-center">
                        <div class="">
                            <h3 class="font-weight-bold  " style="color:rgb(219,2,23);font-weight:bold; ">
                            <?php echo $row['titre_famille'];?></h3>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="target=" _blank"
                            onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false"><button
                                style="width:100%; margin-top:10px;" type="button" class="btn btn-facebook btn-lg"><i
                                    class="fab fa-facebook-f"></i> Partager </button></a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-center align-items-center">

                        <img src="<?php echo $row['image_marque'];?>" alt="" class="img-fluid" style="height: 100px;">
                    </div>

                </div>
                <div class="row bg-white pt-4">
                    <div class="col-md-6 d-flex">

                        <div class="col-2">
                            <div class="previews">
                       
                            <?php $sqlimage = "SELECT * FROM image WHERE id_prod LIKE '$id_prod'"; ?>
                <?php 
                if($pdo->query($sqlimage)){
                foreach  ($pdo->query($sqlimage) as $rowimage) { ?>

                <?php  
                if(!empty($rowimage['url_imag'])){
                  $imageprincipale = '' . $rowimage['url_imag'];
                }
                if($rowimage['image1']!=''){$image1 = ''.$rowimage['image1'];}
                if($rowimage['image2']!=''){$image2 =''.$rowimage['image2'];}
                if($rowimage['image3']!=''){$image3 = ''.$rowimage['image3'];}
                ?>
                
                <?php } //foreach
                      }  //if ?>
                       <div class="row">
                                <pimg href="#" data-full="<?php echo $imageprincipale; ?>"><img width="67"
                                        src="<?php echo $imageprincipale; ?>" /></pimg>
                                </div>
                                <div class="row">
                                <pimg href="#" data-full="<?php echo $image1; ?>"><img width="67"
                                        src="<?php echo $image1; ?>" /></pimg>
                                </div>
                                <div class="row">
                                <pimg href="#" data-full="<?php echo $image2; ?>"><img width="67"
                                        src="<?php echo $image2; ?>" /></pimg>
                                </div>
                                <div class="row">
                                <pimg href="#" data-full="<?php echo $image3; ?>"><img width="67"
                                        src="<?php echo $image3; ?>" /></pimg>
                                </div>
                               
                             
                            </div>

                        </div>
                        <div class="col-10">
                            <div class="full">
                                <!-- first image is viewable to start -->
                                <img src="<?php echo  $imageprincipale; ?>" class="img-fluid" />
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6" style="text-align: left !important;">

                        <h1 class="pb-3"><?php if(isset($_SESSION['id_client']) && !empty($_SESSION['id_client'])){ ?>
<button class="btn btn-danger  btn-sm mt-1" style="float: right;" data-toggle="modal" data-target="#exampleModalvote<?php echo $id_prod ; ?>">   
 <?php } else {?>
<button class="btn btn-danger  btn-sm mt-1" style="float: right;" onclick="location.href='login.php'" > 
  <?php } ?>                    
  <?php
                     $sql = 'SELECT AVG(`nbr_etoils_ev`) as totatetoile, COUNT(`nbr_etoils_ev`) AS totalerow FROM evaluer WHERE id_prod= :id_prod';
                                                           
                    $stmt = $bdd->prepare($sql);
                    $stmt->bindParam(':id_prod', $id_prod);
                    $stmt->execute();
                    $resultArray = $stmt->fetch();
                  
                    if($resultArray['totalerow'] !== 0){
                     echo  round( $resultArray['totatetoile'], 1) ;
                    }else{
                      echo '0';
                    };
                    echo "/" . '5';

                    ?>


                    <span class="fa fa-star" ></span>
                   
                     </button><?php echo $row['nom_prod']; ?></h1>
     


 <p>
 <div style="display: flow-root;">


 

                         <h3 class="mt-4"  style="float: left;" ><?php echo $row['prix_detail'] . ' DA'; ?></h3>
   
                     

                      <button  style="float: right;" 
                      
                      <?php if(isset($_SESSION['id_client']) && !empty($_SESSION['id_client'])){ ?>
                       onclick="ajoutpannier('qte<?php echo $row['id_prod']; ?>');" 
                       data-toggle="modal" data-target="#mawdal"
                      <?php } else { ?>
                       onclick="location.href='login.php'"  
                       
                      <?php } ?>
                       class="btn btn-danger btn-sm mt-3" />
                        <i class="fas fa-shopping-cart"></i> Ajouter 
                      </button>
         
                              <input style="float: right; padding: 4px" type="number" class="qte" name="qte" min="0" value="1" id="qte<?php echo $row['id_prod']; ?>"> 
                     

 </div>
 </p>

                        <h3 class="mb-3" style="color:rgb(219,2,23);font-weight:bold; ">Caractéristiques</h3>
 
                            
                            <?php 

                            /*
                            [Gamme de vitesse :]
                            700 à 1000 billets minute ; 
                            [Capacité :]
                            Module d alimentation : 700 billets, Bac de réception : 200 billets, Poche de rejet : 200
                            billets ; 
                            [Capacité :]
                            Module d alimentation : 700 billets, Bac de réception : 200 billets, Poche de rejet : 200
                            billets ; 
                            [Capacité :]
                            Module d alimentation : 700 billets, Bac de réception : 200 billets, Poche de rejet : 200
                            billets ;
                            */ 
 
$caracteristiques_prod = $row['caracteristiques_prod'];
$caracteristiques_prod = str_replace('[', '<br><span style="font-weight:bold; color:rgba(196,0,0,1)">', $caracteristiques_prod); ?>

<?php $caracteristiques_prod = str_replace(']', '</span>', $caracteristiques_prod); ?>
<?php echo $caracteristiques_prod; // remplcer le texte entre [] par des titre et un saut de ligne ?>

                        <h3 style="color:rgb(219,2,23);font-weight:bold; " class="mt-5">Description</h3>
                        <p> <?php echo $row['description_prod'];?></p>
                    </div>
                </div>
              
            </div>

        </div>
    </div>

    <!-- end Content-->
    <?php }
            }; ?>


<style>
.star-rating {
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  /* width: 250px; remove this */
  height: 50px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  /* width: 20%; remove this */
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  /* width: 20%; remove this */
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
::after,
::before {
  height: 100%;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  text-align: center;
  vertical-align: middle;
}

.star-rating.star-5 {width: 250px;}
.star-rating.star-5 input,
.star-rating.star-5 i {width: 20%;}
.star-rating.star-5 i ~ i {width: 40%;}
.star-rating.star-5 i ~ i ~ i {width: 60%;}
.star-rating.star-5 i ~ i ~ i ~ i {width: 80%;}
.star-rating.star-5 i ~ i ~ i ~ i ~i {width: 100%;}

.star-rating.star-3 {width: 150px;}
.star-rating.star-3 input,
.star-rating.star-3 i {width: 33.33%;}
.star-rating.star-3 i ~ i {width: 66.66%;}
.star-rating.star-3 i ~ i ~ i {width: 100%;}



</style>
 
           <!-- Modal -->
<div class="modal fade" id="exampleModalvote<?php echo $id_prod ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <form action="vote.php?page=produit&id_client=<?php echo $_SESSION['id_client'] ; ?>&id_prod=<?php echo $id_prod ; ?>" method="post">
      <span class="star-rating star-5">
  <input type="radio" name="rating" value="1"><i></i>
  <input type="radio" name="rating" value="2"><i></i>
  <input type="radio" name="rating" value="3"><i></i>
  <input type="radio" name="rating" value="4"><i></i>
  <input type="radio" name="rating" value="5"><i></i>
</span>
<br>
<button class="btn btn-success mt-3" name="voter" type="submit">Voter</button>
</form>
      </div>
   
    </div>
  </div>
</div>




</div> 
<br>   
<?php include('marque_slider.php');?> 

<?php include('footer.php');?>  