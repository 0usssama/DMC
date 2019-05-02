    
    
           <style>
           .nav-link2 {
             color: white !important;
           }
           .nav-link3 {
             color: white !important;
             text-decoration: none;
           }
           
           </style>    

    
    
    <nav class="navbar navbar-expand-lg navbar-dark text-light  bg-secondary" style="color: white !important; ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto">
             
            
              <li class="nav-item dropdown" style="position: initial;">
                <a class="nav-link2 nav-link second_hover" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Produits
                </a>
                <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown2">
                 <div class="container">

                 <div class="row">
                 <?php
                $sql = "SELECT * FROM famille";

              if($bdd->query($sql)){
                
                  
                foreach ($bdd->query($sql) as $famille) {
               
             

                ?>
                
                     <div class="col-3 mt-4">
                       <div  style="border-left:5px solid rgb(219,2,23)">
                          <a href="famille/index.php?id=<?php echo $famille['id_famille']; ?>" class=" pt-4 pb-4 nav-link3 ">
                              <h5 class="pl-2" > <?php echo $famille['titre_famille']; ?></h5>
                              
                           </a>
                          
                       </div>
                        
                     </div>
                     
                  

<?php 
 
}
};

 
?>

                   

</div>
                    
                </div>
              </li>
                <li class="nav-item dropdown" style="position: initial;">
                    <a class="nav-link2 nav-link second_hover" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Marques
                    </a>
                    <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown3">
                     <div class="container">
                      <div class="row">
                     <?php
                $sql = "SELECT * FROM marque";

              if($bdd->query($sql)){
                
                  
                foreach ($bdd->query($sql) as $marque) {
               
             

                ?>

                       <div class="mt-4">
                         <div class="col ">
                            <a href="marque/index.php?id=<?php echo $marque['id_marque'] ?>" class="pt-4 pb-4 nav-link3 ">
                                <h5 class="pl-2" style="border-left:5px solid rgb(219,2,23)"><?php echo $marque['titre_marque']; ?></h5>
                             </a>
                            
                         </div>
                         
                     </div>


                     <?php 
                }
            }
                     ?>

</div>
                    </div>
                  </li>

                    <li class="nav-item dropdown" style="position: initial;">
                        <a class="nav-link2 nav-link second_hover" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown5">
                         <div class="container">
                           <div class="row mt-4">
                             <div class="col-md-4">
                                <a href="services/installation.php" class="pt-4 pb-4 nav-link3 ">
                                    <h5 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Installation</h5>
                                 </a>
                                
                             </div>
                             <div class="col-md-4">
                                <a href="services/serv_apr_vente.php" class="pt-4 pb-4 nav-link3 ">
                                    <h5 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Service client</h5>
                                 </a>
                                
                             </div>
                             <div class="col-md-4">
                                <a href="services/prix_choc.php" class="pt-4 pb-4 nav-link3 ">
                                    <h5 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Prix choc</h5>
                                 </a>
                                
                             </div>
                             
                            </div>
        
                           
                         </div>
                        </div>
                      </li>
                   <li class="nav-item dropdown" style="position: initial;">
                        <a class="nav-link2 nav-link second_hover" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Point De Vente
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown5">
                         <div class="container">
                           <div class="row mt-4">
                           <?php
                $sql = "SELECT * FROM point_de_vente";

              if($bdd->query($sql)){
                
                  
                foreach ($bdd->query($sql) as $point_de_vente) {
               
             

                ?>

                             <div class="col-md-4">
                                <a href="point_de_vente/index.php?id=<?php echo $point_de_vente['id_point_vente'] ;?>" class="pt-4 pb-4 nav-link3 ">
                                    <h5 class="pl-2" style="border-left:5px solid rgb(219,2,23)"><?php echo $point_de_vente['titre_point_vente'] ;?> </h5>
                                 </a>
                                
                             </div>
                        
                     <?php 
                }
            }
                     ?>   
                             
                            </div>
        
                           
                         </div>
                        </div>
                      </li>
                    
            </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 focusedInput" type="search" placeholder="Rechercher" aria-label="Search">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
      </div>
      
    </nav>