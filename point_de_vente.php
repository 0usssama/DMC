<?php include('fonctionSite.php');?>
<?php include('head.php');?>    
<?php include('header.php');?>  
<?php include('nav.php');?>  

    <!-- Content-->
   <div id="content">

    <?php 
    
    $id_point_vente = $_GET['id'] ?? NULL;
      $sql = "SELECT * FROM point_de_vente WHERE id_point_vente='". $id_point_vente . "'";

      if($bdd->query($sql)){
        
          
        foreach ($bdd->query($sql) as $point_de_vente) {
       
     
    ?>

  <div class="container">
  <h1 class="mt-4 mb-2 text-light display-4 font-weight-bold">DMC (<?php echo  $point_de_vente['titre_point_vente']; ?>) </h1>

  <div class="row mt-4 d-flex justify-content-center">
    <div class="col-md-6 text-light">
    <img src="../images/slider/install.jpg" alt="" class="img-fluid">

    </div>
</div>
  <div class="row mt-5 text-light mb-5">
        <div class="col-md-6">
      <p>
      <?php echo  $point_de_vente['presentation_point_vente']; ?>
      </p>
        </div>
  <div class="col-md-6">
    <p>
    <?php echo  $point_de_vente['info_point_vente']; ?>
    </p>
        </div>
  </div>
  
  

  </div>
  <?php 
  }
}
      
    
    ?>


   </div>
   
    <!-- end Content-->


<?php include('temoignage.php');?>  
<?php include('marque_slider.php');?> 
 
<?php include('footer.php');?>  
