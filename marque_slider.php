-->
<style>
#slider{
  height: 150px;
}
</style>

                  <div class=" bg-white  d-flex  justify-content-center pt-3 pb-3" id="slider">
                      <div class="your-class col-md-10 mt-5 slider mb-5">
                      <?php
      
      $sql = "SELECT * FROM marque";
      if($bdd->query($sql)){
        foreach  ($bdd->query($sql) as $marque) { 
      ?>
                      
                            <div> 
                              <a href="marque.php?id=<?php echo $marque['id_marque']; ?>">
                              <img src="<?php echo $marque['image_marque']; ?>" alt="" class="img-responsive" style="height: 40px;">
                              </a>
                            </div>
                          
            
                        
                            <?php }
            }; ?>
            
                         
                        </div>
            
                  </div>
            