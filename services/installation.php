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
      background-image: url('images/sliderred.png');
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
      background-image: url("images/parallax.jpg");

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
  background-image: url('images/installation.jpg');
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
  background-color: #212529;
  
  height: 90vh;
}
.dropdown-menu h6{
color: black !important;
}
.second_hover:hover, .headerLink:hover{
    transition: background 0.5s ease;
      background: #dc3545;
      color: white !important;
    }
    .nav-link2 {
             color: white !important;
           }
           .nav-link3 {
             color: white !important;
             text-decoration: none;
           }   
  </style>
  <body>
    <!-- Image and text -->
    
    <header class="bg-white border-bottom border-danger"  style="border-bottom: 3px #dc3545 solid !important;">
      <div class="container-fluid">
        <div class="row align-items-center ">
          <div class="col-lg-3 col-md-12 col-sm-12">
              <nav class="navbar ">
                  <a class="navbar-brand" href="../index.php">
                  <img src="../images/marque/DMC_LOGO.png"  height="60" alt="">
                    
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
                              <a class="nav-link headerLink" href="#">Acceuil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link headerLink" href="#">A propos</a>
                            </li>
                            
                                  <li class="nav-item">
                                        <a class="nav-link headerLink" href="#">Contact</a>
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

       
    
               

    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto">
             
            
              <li class="nav-item dropdown" style="position: initial;">
                <a class="nav-link nav-link2 second_hover" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                          <a href="../famille/index.php?id=<?php echo $famille['id_famille']; ?>" class="pt-4 pb-4">
                              <h5 class="nav-link3 pl-2" > <?php echo $famille['titre_famille']; ?></h5>
                              
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
                    <a class="nav-link nav-link2 second_hover" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <h5 class="nav-link3 pl-2" style="border-left:5px solid rgb(219,2,23)"><?php echo $marque['titre_marque']; ?></h5>
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
                        <a class="nav-link nav-link2 second_hover" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown5">
                         <div class="container">
                           <div class="row mt-4">
                             <div class="col-md-4">
                                <a href="../services/installation.php" class="pt-4 pb-4">
                                    <h5 class="nav-link3 pl-2" style="border-left:5px solid rgb(219,2,23)">Installation</h5>
                                 </a>
                                
                             </div>
                             <div class="col-md-4">
                                <a href="../services/serv_apr_vente.php" class="pt-4 pb-4">
                                    <h5 class="nav-link3 pl-2" style="border-left:5px solid rgb(219,2,23)">Service client</h5>
                                 </a>
                                
                             </div>
                             <div class="col-md-4">
                                <a href="../services/prix_choc.php" class="pt-4 pb-4">
                                    <h5 class="nav-link3 pl-2" style="border-left:5px solid rgb(219,2,23)">Prix choc</h5>
                                 </a>
                                
                             </div>
                             
                            </div>
        
                           
                         </div>
                        </div>
                      </li>
                   <li class="nav-item dropdown" style="position: initial;">
                        <a class="nav-link3 nav-link nav-link2 second_hover" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <a href="../point_de_vente/index.php?id=<?php echo $point_de_vente['id_point_vente'] ;?>" class="pt-4 pb-4">
                                    <h5 class="pl-2 nav-link3" style="border-left:5px solid rgb(219,2,23)"><?php echo $point_de_vente['titre_point_vente'] ;?> </h5>
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

    <!-- Content-->
   <div id="content">

  <div class="container">
  <h1 class="mt-4 mb-2 text-light display-4 font-weight-bold">Installation</h1>

  <div class="row mt-4 d-flex justify-content-center">
    <div class="col-md-6 text-light">
    <img src="../images/slider/install.jpg" alt="" class="img-fluid">

    </div>
</div>
  <div class="row mt-5 text-light mb-5">
        <div class="col-md-6">
      <h4>OPTIMISEZ VOS PERFORMANCES GRÂCE AUX SCANNERS PROFESSIONNELS, TERMINAUX PORTABLES, TABLETTES ET IMPRIMANTES</h4>
      <p>Au quotidien, vous êtes de plus en plus sollicité dans votre activité et comptez sur la technologie pour vous apporter plus d’efficacité et de précision. C’est pourquoi DMC vend des scanners, terminaux portables, tablettes et imprimantes dans le seul but  de vous aider à repousser vos limites.

Forts de longues années d’expérience en matière d’innovation, nous concevons chaque produit pour vous et avec vous. Pour vos missions quotidiennes. Adapté à votre environnement de travail. Répondant à toutes vos exigences. Dopez vos performances grâce à nos scanners, terminaux portables, tablettes et imprimantes aux fonctions et formats conçus spécialement pour vous.</p>
        </div>
  <div class="col-md-6">
    <h4>LES STANDARD SERVICES DE DMC PEUVENT AIDER À CRÉER UNE STRATÉGIE DE LA MOBILITÉ CAPABLE DE RÉDUIRE LES RISQUES, DE CONTENIR LES COÛTS ET D'ACCÉLÉRER LA CROISSANCE</h4>
    <p>les Standard Services vous proposent des solutions complètes, adaptées à votre secteur et alignées sur vos besoins, pour vous aider à accélérer les résultats recherchés. Distribués et délivrés par son écosystème de partenaires de confiance, les Standard Services de Zebra vous permettent de rester sur la bonne voie et d'atteindre des niveaux de productivité et de rendement inégalés, pour un net avantage concurrentiel.</p>
        </div>
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
