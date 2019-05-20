<?php include 'fonctionSite.php'; ?>

<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>



    <!-- Content-->
   <div id="content">

  <div class="container">
  <h1 class="mt-4 mb-2 text-light display-4 font-weight-bold">Installation</h1>

  <div class="row mt-4 d-flex justify-content-center">
    <div class="col-md-6 text-light">
    <img src="images/slider/install.jpg" alt="" class="img-fluid">

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
   <?php include('services.php');?>  
    <!-- end Content-->
<!--footer starts from here-->
<footer class="footer">
  <div class="container bottom_border">
  <div class="row">
  <div class=" col-sm-3 col-md col-sm-2  col-10 col">
  <h5 class="headin5_amrc col_white_amrc pt2">Trouve Nous</h5>
  <!--headin5_amrc-->
 
  <p><i class="fa fa-location-arrow"></i>
Rue 11 Décembre BTN° 05 El Mouradia Alger</p> <br>
<p> Applez nous 24/24 7/7  </p>
  <p><i class="fa fa-phone"></i> 0555-41-06-13 </p>
  <p><i class="fa fa-phone"></i> 021-68-85-55  </p>

  <p><i class="fa fa fa-envelope"></i> dmcondz@gmail.com  </p>
  
  
  </div>
  
  
  <div class=" col-sm-4 col-md  col-6 col">
  <h5 class="headin5_amrc col_white_amrc pt2">Liens Rapides</h5>
  <!--headin5_amrc-->
  <ul class="footer_ul_amrc">
  <li><a href="index.html">Qui sommes Nous</a></li>
  <li><a href="client/commandes.php">Commandes</a></li>
  <li><a href="">Instalation</a></li>
  <li><a href="">Point Vente (Alger)</a></li>
  <li><a href="">Point Vente (Constantine)</a></li>
  <li><a href="">Point Vente (Oran)</a></li>
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
