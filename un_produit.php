<?php $id_prod = $row['id_prod'];
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

<div class="col-md-3 mb-4 d-flex justify-content-center">
              <div class="card" style="width:15rem;">
                <a href="produit.php?id=<?php echo $id_prod; ?>">
              <!-- image fluide -->
                  <img class="card-img-top" style="width: auto" src="<?php echo $imageprincipale; ?>" alt="Card image top">
                </a>                 
              <div class="card-body ml-2 mr-2">
              <h5 class="card-title"> 
                    <?php echo $row['nom_prod']; ?></h5>
                   
<?php if(isset($_SESSION['id_client']) && !empty($_SESSION['id_client'])){ ?> 

                    <button class="btn btn-danger  btn-sm mt-1"  data-toggle="modal" data-target="#exampleModalvote<?php echo $id_prod ; ?>">   
 <?php } else {?>

<button class="btn btn-danger  btn-sm mt-1"  onclick="location.href='login.php'" > 
               
  <?php } ?>                    






                    <span class="text-light">
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
                   
                    </span>
                    </button>
               </div>
              
                    <div
                      class="d-flex justify-content-between align-items-right mr-3 ml-3 mb-2 "
                    >

                      <div class="price text-success">
                        <h6 class="mt-3"><?php echo $row['prix_detail'] . ' DA'; ?></h6>
                      </div>
  
                     
                      <input type="number" class="qte" name="qte" min="0" value="1" id="qte<?php echo $row['id_prod']; ?>"> 
                      <button
                      
                      <?php if(isset($_SESSION['id_client']) && !empty($_SESSION['id_client'])){ ?>
                       onclick="ajoutpannier('qte<?php echo $row['id_prod']; ?>');" 
                       data-toggle="modal" data-target="#mawdal"
                      <?php } else { ?>
                       onclick="location.href='login.php'"; 
                      <?php } ?>
                       class="btn btn-danger btn-sm mt-3" />
                        <i class="fas fa-shopping-cart"></i> Ajouter
                      </button>
                  </div>
                </div>   
           </div>


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
      <form action="vote.php?page=index&id_client=<?php echo $_SESSION['id_client'] ; ?>&id_prod=<?php echo $id_prod ; ?>" method="post">
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