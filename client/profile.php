
<?php include 'head.php'; 

if(!isset($_SESSION['id_client'])){
header('location: ../index.php');
}
 ?>
    <div id="content-wrapper">

      <div class="container-fluid">

         
      <div class="row pt-5">
  
    <div class="col-md-6 d-flex justify-content-center row ">

    <?php 
    $id_client = $_SESSION['id_client'] ?? NULL;

    $sql = "SELECT * FROM client WHERE id_client = " . $id_client;


    if($pdo->query($sql)){
        foreach  ($pdo->query($sql) as $row) {
    ?>
        <div class="col-10">
        <h1><i class="fas fa-user-cog"></i>&nbsp; <br><?php echo $row['nom_client'] . " " .  $row['prenom_client'] ;?></h1>
     
     <h5><i class="fas fa-at"></i>&nbsp; <?php echo $row['email_client'] ;?></h5>
     <h5><i class="fas fa-phone"></i>&nbsp;<?php echo $row['tel_client'] ;?></h5>
     <h5><i class="fas fa-location-arrow"></i>&nbsp;<?php echo $row['adresse_client'] ;?></h5>
        </div>

    </div>

    <div class="col-md-5 ">

    <form method="post" action="profile.php" class="needs-validation">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nom_client" name="nom_client" value="<?php echo $row['nom_client'] ;?>" class="form-control" placeholder="Nom" required="required" autofocus="autofocus">
                  <div class="valid-feedback">
        Looks good!
      </div>
                  <label for="nom_client">Nom</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" value="<?php echo $row['prenom_client'] ;?>" name="prenom_client" id="prenom_client" class="form-control" placeholder="Prénom" required="required">
                  <div class="valid-feedback">
        Looks good!
      </div>
                  <label for="prenom_client">Prénom</label>
                </div>
              </div>
            </div>
          </div>
         
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" value="<?php echo $row['adresse_client'] ;?>" name="adresse_client" id="adresse_client" class="form-control" placeholder=" rue..." required="required">
              <label for="adresse_client">adresse</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" value="<?php echo $row['tel_client'] ;?>" name="tel_client" id="tel_client" class="form-control" placeholder=" rue..." required="required">
              <label for="tel_client">teléphone</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="password" id="motpass_client" name="motpass_client" class="form-control" placeholder="Password" required="required">
                  <label for="motpass_client">Mot de passe</label>
                </div>
              </div>
              
            </div>
          </div>
          <div class="form-group">
          <div class="form-check">
  <input class="form-check-input" type="radio" name="catego_client" id="exampleRadios1" value="professionnel"
  onclick="affichepro()" <?php if($row['catego_client'] == 'professionnel'){echo 'checked';} ?>>
  <label class="form-check-label" for="exampleRadios1">
    professionnel
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="catego_client" id="exampleRadios2" value="particulier" 
   onclick="masquepro()"  <?php if($row['catego_client'] == 'particulier'){echo 'checked';} ?>>
  <label class="form-check-label" for="exampleRadios2">
    particulier
  </label>
</div>

          </div>
          <div id="nomsociete" class="form-group">
            <div class="form-label-group">
              <input type="text" value="<?php echo $row['raison_social_client'] ;?>" id="raison_social_client" class="form-control" placeholder="nom de la société" name="raison_social_client" >
              <label for="raison_social_client">nom de la société</label>
            </div>
          </div>
          <input type="hidden" name="action" value="updateClient">

         <input type="submit" value="Modifier" class="btn btn-danger btn-block" name="inscrire">
        </form>
    </div>

    <?php }
            }; ?>
  </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

      </div>
    </div>
    <!-- /.content-wrapper -->
    <script type="text/javascript">

<?php if($row['catego_client'] == 'particulier'){echo "
     document.getElementById('nomsociete').style.display = 'none';  /*change display: block; par display:none ; */
    
    ";} ?>
    
  function affichepro(){
     document.getElementById('nomsociete').style.display = 'block';  /*change display: none; par display: block; */
  }

  function masquepro(){
     document.getElementById('nomsociete').style.display = 'none';  /*change display: block; par display:none ; */
  }
</script>


<?php include 'foot.php'; ?>