
      <!--
              <div class=" parallax d-flex align-items-center">
                    <div class="alpha">
                      <div
                        class="display-4 mx-auto mt-3 text-white text-center font-weight-bold pl-2 pr-2"
                      >
                        VOUS CHERCHEZ UN FOURNISSEUR EFFICACE, FIABLE & COMPÉTITIF ?
                        <br />
                        DMC EST LE PARTENAIRE IDÉAL DES INSTALLATEURS PROFESSIONNELS !
                      </div>
                    </div>
                  </div>

                  -->
                  <div class=" bg-white  d-flex  justify-content-center pt-3 pb-3" id="slider">
                      <div class="your-class col-md-10 mt-5 slider mb-5">
                      <?php
      
      $sql = "SELECT * FROM marque";
      if($bdd->query($sql)){
        foreach  ($bdd->query($sql) as $marque) { 
      ?>
                      
                            <div><img src="<?php echo $marque['image_marque']; ?>" alt="" class="img-responsive"></div>
                          
            
                        
                            <?php }
            }; ?>
            
                         
                        </div>
            
                  </div>
            
                  <div class="row bg-danger  d-flex  justify-content-center pt-3 pb-3 ml-0 mr-0">
                    <div class="display-4 text-light font-weight-bold mb-2">ils nous ont fait confiance!</div>
                      <div class="your-class2 col-md-10 mt-5 slider text-light">
                          
                      
                           
              
                            <div>
            
                                <blockquote>
                                    <div class="row">
                                      <div class="col-sm-3 text-center">
                                        <img class="rounded-circle" src="images/zaki.jpg" style="height:200px; width: 200px">
                                      </div>
                                      <div class="col-sm-9">
                                    <i class="fas fa-2x fa-quote-left"></i>
            
                                    <h4> Lorsqu’est venu le temps de choisir notre fournisseur, nous recherchions quelqu’un en qui nous aurions confiance. Lorsque nous avons rencontré DMC, nous avons tout de suite apprécié son approche. Que ce soit par ses critères de qualité ou par son écoute pour nos besoins.</h4>
                                    <small>Belhas Zakaria- fondateur DMC</small>
                                   
            
                                      </div>
                                    </div>
                                  </blockquote>
                            </div>
            
            
                            <div>
            
                                <blockquote>
                                    <div class="row">
                                      <div class="col-sm-3 text-center">
                                          <img class="rounded-circle" src="images/amine.jpg" style="height:200px; width: 200px">
                                       
                                      </div>
                                      <div class="col-sm-9">
                                    <i class="fas fa-2x fa-quote-left"></i>
                                        <h4>Que dire du service que nous avons reçu! Les gars sont disponibles presque 24/24! Pendant la construction, nous étions toujours les bienvenus sur le chantier. Nous n’avons jamais eu l’impression d’être des numéros.</h4>
                                        <small>Adjroud Amine</small>
                                   
            
                                      </div>
                                    </div>
                                  </blockquote>
                            </div>
            
                            <div>
            
                                <blockquote>
                                    <div class="row">
                                      <div class="col-sm-3 text-center">
                                          <img class="rounded-circle" src="images/el7aj.jpg" style="height:200px; width: 200px">
                                       
                                      </div>
                                      <div class="col-sm-9">
                                    <i class="fas fa-2x fa-quote-left"></i>
                                       <h4>
                                       Service conseil très professionnel, un suivi dossier impeccable, une équipe qualifiée et disponible; voilà ce qui résume mon expérience avec DMC ! J'ai opté pour un produit avec une qualité .
                                       </h4>
                                        <small>Chamouti el 7aj</small>
                                   
            
                                      </div>
                                    </div>
                                  </blockquote>
                            </div>
            
                        
            
                        
            
                            <div>
            
                              <blockquote>
                                  <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="rounded-circle" src="images/bilel.jpg" style="height:200px; width: 200px">
                                     
                                    </div>
                                    <div class="col-sm-9">
                                  <i class="fas fa-2x fa-quote-left"></i>
                                      <h4>7agrouna ya khoya  ya khoya 3Lajal 1.5 grib 3awedna el semestre </h4>
                                      <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde eligendi temporibus quia, consequatur error sunt adipisci mollitia expedita deleniti eum voluptatem animi. Vel veniam sapiente aliquid repellat esse officia aliquam.</h4>
            
                                     <h3> BILEL</h3>
                                 
            
                                    </div>
                                  </div>
                                </blockquote>
                          </div>
            
                         
                        </div>
            
                  </div>
        

        
     
      
    </div>

<!--footer starts from here-->
<footer class="footer">
  <div class="container bottom_border">
  <div class="row">
  <div class=" col-sm-4 col-md col-sm-4  col-12 col">
  <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
  <!--headin5_amrc-->
  <p class="mb10">
  eurl DMC  est une entreprise de ventes des équipements ...., créée en 2019
  </p>
  <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
  <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
  <p><i class="fa fa fa-envelope"></i> info@example.com  </p>
  
  
  </div>
  
  
  <div class=" col-sm-4 col-md  col-6 col">
  <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
  <!--headin5_amrc-->
  <ul class="footer_ul_amrc">
  <li><a href="">Image Rectoucing</a></li>
  <li><a href="">Clipping Path</a></li>
  <li><a href="">Hollow Man Montage</a></li>
  <li><a href="">Ebay & Amazon</a></li>
  <li><a href="">Hair Masking/Clipping</a></li>
  <li><a href="">Image Cropping</a></li>
  </ul>
  <!--footer_ul_amrc ends here-->
  </div>
  
  
  <div class=" col-sm-4 col-md  col-6 col">
  <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
  <!--headin5_amrc-->
  <ul class="footer_ul_amrc">
  <li><a href="">Remove Background</a></li>
  <li><a href="">Shadows & Mirror Reflection</a></li>
  <li><a href="">Logo Design</a></li>
  <li><a href="">Vectorization</a></li>
  <li><a href="">Hair Masking/Clipping</a></li>
  <li><a href="">Image Cropping</a></li>
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
  <li><a href="index.php">Acceuil</a></li>
  <li><a href="#alaune">Produits à la une</a></li>
  <li><a href="#alphaServices">Services</a></li>
  <li><a href="">A propos</a></li>
  <li><a href="">Contact</a></li>
  </ul>
  <!--foote_bottom_ul_amrc ends here-->
  <p class="text-center">Copyright @2019 | Designed With by <a href="https://www.woujoud.net/">el woujoud</a></p>
  
  <ul class="social_footer_ul">
  <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
  <li><a href=""><i class="fab fa-twitter"></i></a></li>
  <li><a href=""><i class="fab fa-linkedin"></i></a></li>
  <li><a href=""><i class="fab fa-instagram"></i></a></li>
  </ul>
  <!--social_footer_ul ends here-->
  </div>
  
  </footer>
  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="admin/vendor/jquery/jquery.js"></script>
    <script src="admin/js/popper.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.js"></script>
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
 <!-- rechargement du compteur de produit chaque 4 seconde  -->
  <script>
$(document).ready(function () {
    $("#qtepanier").load("qtepanier.php");
     var refreshId = setInterval(function () {
        $("#qtepanier").load("qtepanier.php");
     }, 4000);
    $.ajaxSetup({
        cache: false
    });
});
</script>
 <!-- fin  -->
  </body>
</html>