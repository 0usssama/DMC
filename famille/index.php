<?php include '../fonctionSite.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="slick/slick.css" />
    <link rel="stylesheet" href="slick/slick-theme.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <title>Hello, world!</title>
  </head>

  <style>
    html,
    body {
      height: 100%;
      background-image: url("../images/prism.png");
    }
    
    .carousel-item {
      height:74vh;
      min-height: 300px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      position: relative;
    }
    .carousel-item:after {
      content: "";
   
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
      background-image: url('../images/sliderred.png');
      background-size: cover;
      background-repeat: no-repeat;
    }
    .card-img-top {
    max-height: 200px;
    min-height: 150px;
    object-fit: cover;
}
    .produits .card:hover {
      border: 2px solid red;
    }
   

    .parallax {
      /* The image used */
      background-image: url("../images/parallax.jpg");

      /* Set a specific height */
      height: 500px;

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }
    .parallax:after {
      content: " ";
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0; /* Fill the entire space */
      background-color: rgba(0, 0, 0, 0.6);
    }

    
    .alpha {
      z-index: 2000;
    }
    .carousel-caption h2,
    .carousel-caption p {
      z-index: 2000;
    }
    .card-body{
      padding: 0;
     
    }
    
    
    .slider img{
      height: 70px;
    max-width: 100%;
    margin: 0 auto;
    }
    .fa-stack[data-count]:after{
  position:absolute;
  right:0%;
  top:1%;
  content: attr(data-count);
  font-size:30%;
  padding:.6em;
  border-radius:999px;
  line-height:.75em;
  color: white;
  background:rgba(255,0,0,.85);
  text-align:center;
  min-width:2em;
  font-weight:bold;
}
/*footer*/
.col_white_amrc { color:#FFF;}
footer { width:100%; min-height:250px; padding:10px 0px 25px 0px ;}
.pt2 { padding-top:40px ; margin-bottom:20px ;}
footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
.mb10 { padding-bottom:15px ;}
.footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
.footer_ul_amrc li {padding:0px 0px 5px 0px;}
.footer_ul_amrc li a{ color:#CCC;}
.footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
.fleft { float:left;}
.padding-right { padding-right:10px; }

.footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
.footer_ul2_amrc li p { display:table; }
.footer_ul2_amrc li a:hover { text-decoration:none;}
.footer_ul2_amrc li i { margin-top:5px;}

.bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
.foote_bottom_ul_amrc {
	list-style-type:none;
	padding:0px;
	display:table;
	margin-top: 10px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
}
.foote_bottom_ul_amrc li { display:inline;}
.foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

.social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
.social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
.social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li i {  width:20px; height:20px; text-align:center;}
/* end footer */


.nav-link{
  color: black !important;
}
.nav-link:hover{
  color:red !important;
}
.focusedInput:focus {
    border-color: rgba(255,0,0,.85);;
    outline: 0;
    outline: thin dotted \9;
    -moz-box-shadow: 0 0 8px rgba(255,0,0,.85);;
    box-shadow: 0 0 8px rgba(255,0,0,.85) !important;
}
#services{
  background-image: url('../images/installation.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
#alphaServices{
  background:rgba(255, 0, 0, 0.719);
  background-size: cover;
  background-repeat: no-repeat;
}
.black{
  color: black;
}
#services a{
  text-decoration: none;
  color: white;
}
.dropdown-menu{
  margin: 0;
  padding: 0;
  border: none;
  border-radius: 0;
  
  height: 90vh;
}
.dropdown-menu h6{
color: black !important;
}

.qte{
  width: 40px;
   /* height: 55px;*/
    margin-top: 16px;
    color: #fff;
    border: none;
    background-color: #555;
    text-align: center;
    border-radius: 3px;
    float: right;
  }

  </style>
  <body>
    <!-- Image and text -->
    
    <header class="bg-white border-bottom border-danger">
      <div class="container-fluid">
        <div class="row align-items-center ">
          <div class="col-lg-3 col-md-12 col-sm-12">
              <nav class="navbar ">
                  <a class="navbar-brand" href="../index.php">
                    <img src="../images/marque/m5.png"  height="60" alt="">
                  </a>
                </nav>
          </div>

         
          <div class="col-lg-9 col-md-12  d-flex justify-content-end">
                <nav class="navbar navbar-expand-lg navbar-light  ">
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                          <ul class="navbar-nav ">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">A propos</a>
                            </li>
                            
                                  <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                      </li>

                                     
                                          <li class="nav-item ml-3">
                                                <button type="button" class="btn btn-block btn-danger">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span class="badge badge-light ml-2">4</span>
                                                      </button>
                                              </li>
                                              <li class="nav-item ml-3">
                                                    <button type="button" class="btn btn-block btn-danger">
                                                            <i class="fa fa-1x fa-user mr-2"></i>Se connecter
                                                          </button>
                                                  </li>
                                              
                          
                          </ul>
                        </div>
                      </nav>


            </div>     
            
          
        </div>
      </div>

    </header>

        
    
               

    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto">
             
            
              <li class="nav-item dropdown" style="position: initial;">
                <a class="nav-link " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                          <a href="index.php?id=<?php echo $famille['id_famille']; ?>" class="pt-4 pb-4">
                              <h3 class="pl-2" > <?php echo $famille['titre_famille']; ?></h3>
                              
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
                    <a class="nav-link " href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a href="../marque/index.php?id=<?php echo $marque['id_marque'] ?>" class="pt-4 pb-4">
                                <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)"><?php echo $marque['titre_marque']; ?></h2>
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
                      <a class="nav-link " href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Promotions
                      </a>
                      <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown4">
                       <div class="container">
                         <div class="row mt-4">
                           <div class="col-md-4">
                              <a href="" class="pt-4 pb-4">
                                  <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Promotions</h2>
                               </a>
                              
                           </div>
                           <div class="col-md-4">
                              <a href="" class="pt-4 pb-4">
                                  <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Promotions</h2>
                               </a>
                              
                           </div>
                           <div class="col-md-4">
                              <a href="" class="pt-4 pb-4">
                                  <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Promotions</h2>
                               </a>
                              
                           </div>
                         </div>
      
                         <div class="row mt-4">
                            <div class="col-md-4">
                               <a href="" class="pt-4 pb-4">
                                   <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Promotions</h2>
                                </a>
      
                                
                               
                            </div>
                            <div class="col-md-4">
                                <a href="" class="pt-4 pb-4">
                                    <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Promotions</h2>
                                 </a>
       
                                 
                                
                             </div>
      
                             <div class="col-md-4">
                                <a href="" class="pt-4 pb-4">
                                    <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Promotions</h2>
                                 </a>
       
                                 
                                
                             </div>
                          </div>
      
                          <div class="row mt-4">
                              <div class="col-md-4">
                                 <a href="" class="pt-4 pb-4">
                                     <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Promotions</h2>
                                  </a>
                                 
                              </div>
                              <div class="col-md-4">
                                  <a href="" class="pt-4 pb-4">
                                      <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Promotions</h2>
                                   </a>
                                  
                               </div>
                               <div class="col-md-4">
                                  <a href="" class="pt-4 pb-4">
                                      <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Promotions</h2>
                                   </a>
                                  
                               </div>
                            </div>
                       </div>
                      </div>
                    </li>
                    <li class="nav-item dropdown" style="position: initial;">
                        <a class="nav-link " href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown5">
                         <div class="container">
                           <div class="row mt-4">
                             <div class="col-md-4">
                                <a href="services/installation.php" class="pt-4 pb-4">
                                    <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Installation</h2>
                                 </a>
                                
                             </div>
                             <div class="col-md-4">
                                <a href="services/serv_apr_vente.php" class="pt-4 pb-4">
                                    <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Service client</h2>
                                 </a>
                                
                             </div>
                             <div class="col-md-4">
                                <a href="services/prix_choc.php" class="pt-4 pb-4">
                                    <h2 class="pl-2" style="border-left:5px solid rgb(219,2,23)">Prix choc</h2>
                                 </a>
                                
                             </div>
                             
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
                
                  
              foreach ($bdd->query($sql) as $produit) {
             
          
          ?>
             <div class="col-md-3 mb-4 d-flex justify-content-center">
                <div class="card" style="width:15rem;">
                  <a href="../produit/index.php?id=<?php echo $produit['id_prod']; ?>">
                    <img class="card-img-top img-responsive" src="../<?php echo $produit['url_imag']; ?>" alt="Card image top">
   
                  </a>                 
   
                  
                <div class="card-body ml-2 mr-2">
                <h5 class="card-title"> 
                <?php echo $produit['nom_prod']; ?></h5>
                
                <button class="btn btn-danger  btn-sm mt-1"  data-toggle="modal" data-target="#exampleModal<?php echo $produit['id_prod'] ; ?>"> 
                    <span class="text-light">
                    <span class="fa fa-star" ></span>
                   
                    </span>
                    </button>
              </div>
                
                      <div
                        class="d-flex justify-content-between align-items-right mr-3 ml-3 mb-2 "
                      >
   
                        <div class="price text-success">
                          <h5 class="mt-4"><?php echo $produit['prix_detail']; ?></h5>
                        </div>
    
                        <input type="number" class="qte" name="qte" min="0" value="1" id="qte<?php echo $produit['id_prod']; ?>"> 
                      <button onclick="ajoutpannier('qte<?php echo $row['id_prod']; ?>');" class="btn btn-danger btn-sm mt-3">
                        <i class="fas fa-shopping-cart"></i> Ajouter
                      </button>
                    </div>
                  </div>   
             </div> 
                           
   
           <!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $produit['id_prod'] ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">evaluer le produit: 
    <span class="text-warning"> <?php echo $produit['nom_prod']; ?></span> 
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
 
             <?php 
              }
            }
             ?>
   
                
          </div>
        </div>
   </div>
   
    <!-- end Content-->

<!--footer starts from here-->
<footer class="footer">
  <div class="container bottom_border">
  <div class="row">
  <div class=" col-sm-4 col-md col-sm-4  col-12 col">
  <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
  <!--headin5_amrc-->
  <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
  <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
  <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
  <p><i class="fa fa fa-envelope"></i> info@example.com  </p>
  
  
  </div>
  
  
  <div class=" col-sm-4 col-md  col-6 col">
  <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
  <!--headin5_amrc-->
  <ul class="footer_ul_amrc">
  <li><a href="http://webenlance.com">Image Rectoucing</a></li>
  <li><a href="http://webenlance.com">Clipping Path</a></li>
  <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
  <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
  <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
  <li><a href="http://webenlance.com">Image Cropping</a></li>
  </ul>
  <!--footer_ul_amrc ends here-->
  </div>
  
  
  <div class=" col-sm-4 col-md  col-6 col">
  <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
  <!--headin5_amrc-->
  <ul class="footer_ul_amrc">
  <li><a href="http://webenlance.com">Remove Background</a></li>
  <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
  <li><a href="http://webenlance.com">Logo Design</a></li>
  <li><a href="http://webenlance.com">Vectorization</a></li>
  <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
  <li><a href="http://webenlance.com">Image Cropping</a></li>
  </ul>
  <!--footer_ul_amrc ends here-->
  </div>
  
  
  <div class=" col-sm-4 col-md  col-12 col">
  <h5 class="headin5_amrc col_white_amrc pt2">Voux pouvez nous trouver ici: </h5>
  <!--headin5_amrc ends here-->
  <iframe width="325" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=2.9874229431152344%2C36.74804664662009%2C2.990416288375855%2C36.74923298752009&amp;layer=mapnik&amp;marker=36.74863981936281%2C2.9889196157455444" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=36.74864&amp;mlon=2.98892#map=19/36.74864/2.98892&amp;layers=N">View Larger Map</a></small>
  <!--footer_ul2_amrc ends here-->
  </div>
  </div>
  </div>
  
  
  <div class="container">
  <ul class="foote_bottom_ul_amrc">
  <li><a href="http://webenlance.com">Home</a></li>
  <li><a href="http://webenlance.com">About</a></li>
  <li><a href="http://webenlance.com">Services</a></li>
  <li><a href="http://webenlance.com">Pricing</a></li>
  <li><a href="http://webenlance.com">Blog</a></li>
  <li><a href="http://webenlance.com">Contact</a></li>
  </ul>
  <!--foote_bottom_ul_amrc ends here-->
  <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>
  
  <ul class="social_footer_ul">
  <li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
  <li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
  <li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
  <li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
  </ul>
  <!--social_footer_ul ends here-->
  </div>
  
  </footer>
  
  

<!-- Modal -->
<div class="modal fade" id="mawdal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Produit ajouté</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Votre produit est ajouté au pannier
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">continuer</button>
       
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="slick/slick.js"></script>
    <script>
     $(document).ready(function(){

      $('button').click(function(){
   
   $('#mawdal').modal('show');
 
 })


      $('.your-class').slick({
        slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: true,
  autoplaySpeed: 3000,
      });


      $('.your-class2').slick({
        slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
      });

    });

    $('.service_top').hover(function(){
      $(this).toggleClass('black');
    })

    
   
    
    </script>



    <div style="width: 50px; height: 220px; position: fixed; z-index: 9999999999999; left: 0px; top: 40%;">

    	  <ul class="social_footer_ul" style="margin: 0px !important; padding: 0px !important;">
  <li style=" margin: 10px 5px !important; padding: 0px !important;"><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
  <li style=" margin: 10px 5px !important; padding: 0px !important;"><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
  <li style=" margin: 10px 5px !important; padding: 0px !important;"><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
  <li style=" margin: 10px 5px !important; padding: 0px !important;"><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
  </ul>


    </div>

  </body>
</html>
