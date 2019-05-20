
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


                  
        

        
     
      
    </div>
  

<!--footer starts from here-->
<footer class="footer">
  <div class="container bottom_border">
  <div class="row">
  <div class=" col-sm-3 col-md col-sm-2  col-10 col">
  <h5 class="headin5_amrc col_white_amrc">Trouve Nous</h5>
  <!--headin5_amrc-->
 
  <p><i class="fa fa-location-arrow"></i>
Rue 11 Décembre BTN° 05 El Mouradia Alger</p> <br>
<p> Applez nous 24/24 7/7  </p>
  <p><i class="fa fa-phone"></i> 0555-41-06-13 </p>
  <p><i class="fa fa-phone"></i> 021-68-85-55  </p>

  <p><i class="fa fa fa-envelope"></i> dmcondz@gmail.com  </p>
  
  
  </div>
  
  
  <div class=" col-sm-4 col-md  col-6 col">
  <h5 class="headin5_amrc col_white_amrc "><i class="fas fa-link"></i>&nbsp;Liens Rapides</h5>
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
  <h5 class="headin5_amrc col_white_amrc">Voux pouvez nous trouver ici: </h5>
  <!--headin5_amrc ends here-->
  <iframe width="225" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=2.9874229431152344%2C36.74804664662009%2C2.990416288375855%2C36.74923298752009&amp;layer=mapnik&amp;marker=36.74863981936281%2C2.9889196157455444" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=36.74864&amp;mlon=2.98892#map=19/36.74864/2.98892&amp;layers=N">View Larger Map</a></small>
  <!--footer_ul2_amrc ends here-->
  </div>
  </div>
  <div class="row">
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
  <li><a href="facebook.com/woujoud"><i class="fab fa-facebook-f"></i></a></li>
  <li><a href=""><i class="fab fa-twitter"></i></a></li>
  <li><a href=""><i class="fab fa-linkedin"></i></a></li>
  <li><a href=""><i class="fab fa-instagram"></i></a></li>
  </ul>
  <!--social_footer_ul ends here-->
  </div>
  </div>
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
  <li style=" margin: 10px 5px !important; padding: 0px !important;"><a target="_blank" href="https://facebook.com"><i class="fab fa-facebook-f" style=" color: #2b6bd1"></i></a></li>
  <li style=" margin: 10px 5px !important; padding: 0px !important;"><a target="_blank" href="https://twitter.com/?lang=fr"><i class="fab fa-twitter" style=" color: #14b2e2"></i></a></li>
  <li style=" margin: 10px 5px !important; padding: 0px !important;"><a target="_blank" href="https://linkdin.com/"><i class="fab fa-linkedin" style=" color: #0d6a87"></i></a></li>
  <li style=" margin: 10px 5px !important; padding: 0px !important;"><a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram" style=" color: #d6a906"></i></a></li>
  </ul>

    </div>

        <script>
    $(document).ready(function() {
        $('pimg').click(function() {
             event.preventDefault(event);
            var largeImage = $(this).attr('data-full');
            $('.selected').removeClass();
            $(this).addClass('selected');
            $('.full img').hide();
            $('.full img').attr('src', largeImage);
            $('.full img').fadeIn();


        }); // closing the listening on a click
        $('.full img').on('click', function() {
           
            var modalImage = $(this).attr('src');

            $.fancybox.open(modalImage);
        });
    }); //closing our doc ready
    </script>
 

    
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


<script type="text/javascript">
  
<?php for ($i=1; $i < 6; $i++) { ?>

  
    function jaune<?php echo $i; ?>(id){
      var id = id ; 
      document.getElementById("etoilevote1"+id).style.color =  <?php if ($i>0){ ?>"#f4d142"<?php } else { ?>"#000"<?php } ?>;
      document.getElementById("etoilevote2"+id).style.color =  <?php if ($i>1){ ?>"#f4d142"<?php } else { ?>"#000"<?php } ?>;
      document.getElementById("etoilevote3"+id).style.color =  <?php if ($i>2){ ?>"#f4d142"<?php } else { ?>"#000"<?php } ?>;
      document.getElementById("etoilevote4"+id).style.color =  <?php if ($i>3){ ?>"#f4d142"<?php } else { ?>"#000"<?php } ?>;
      document.getElementById("etoilevote5"+id).style.color =  <?php if ($i>4){ ?>"#f4d142"<?php } else { ?>"#000"<?php } ?>;
    }

    function voter<?php echo $i; ?>(id){
      var vote = <?php echo $i; ?> ; 
      var id_prod = id ; 
      var envoi = "fonctionSite.php?action=vote&vote="+vote+"&id_prod="+id_prod;
      $.get(envoi); 
      alert('merci pour votre vote');
    }

<?php } ?>  

</script>


  </body>
</html>