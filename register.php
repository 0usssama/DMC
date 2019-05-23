<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
<link rel="icon" type="image/png" href="images/marque/DMC_2.png" />

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin.min.css" rel="stylesheet">
  


<style type="text/css">
  #nomsociete{display: none;} /*rend l'element invisibleavec le css */
</style>
<script type="text/javascript">
  function affichepro(){
     document.getElementById('nomsociete').style.display = 'block';  /*change display: none; par display: block; */
  }

  function masquepro(){
     document.getElementById('nomsociete').style.display = 'none';  /*change display: block; par display:none ; */
  }
</script>



</head>

<script>

</script>

<style>
body{
  background-image: url('images/background.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}
.form-control:focus {
  border-color: rgba(220, 53, 69, 1) ;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(220, 53, 69, 0.6);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(220, 53, 69, 0.6);
}
</style>
<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Créer un compte</div>
      <div class="card-body">
        <form method="post" action="admin/fonctionAdmin.php" class="needs-validation">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nom_client" name="nom_client" class="form-control" placeholder="Nom" required="required" autofocus="autofocus">
                  <div class="valid-feedback">
        Looks good!
      </div>
                  <label for="nom_client">Nom</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="prenom_client" id="prenom_client" class="form-control" placeholder="Prénom" required="required">
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
              <input type="email" name="email_client" id="email_client" class="form-control" placeholder=" mail@gmail.com.." required="required">
              <label for="email_client">email</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="adresse_client" id="adresse_client" class="form-control" placeholder=" rue..." required="required">
              <label for="adresse_client">adresse</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="tel_client" id="tel_client" class="form-control" placeholder=" rue..." required="required">
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
  onclick="affichepro()" >
  <label class="form-check-label" for="exampleRadios1">
    professionnel
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="catego_client" id="exampleRadios2" value="particulier" checked
   onclick="masquepro()">
  <label class="form-check-label" for="exampleRadios2">
    particulier
  </label>
</div>

          </div>
          <div id="nomsociete" class="form-group">
            <div class="form-label-group">
              <input type="text" id="raison_social_client" class="form-control" placeholder="nom de la société" name="raison_social_client" >
              <label for="raison_social_client">nom de la société</label>
            </div>
          </div>
          <input type="hidden" name="action" value="ajoutClient">

         <input type="submit" value="s'inscrire" class="btn btn-danger btn-block" name="connecter">

         <div class="<?php if(isset($_SESSION['erreurs']) && !empty($_SESSION['erreurs'])){echo 'alert alert-danger mt-2';} ?>" role="alert">
    
  
  <?php 
  if(isset($_SESSION['erreurs']) && !empty($_SESSION['erreurs'])){
    echo '<ul>';
    foreach ($_SESSION['erreurs'] as $erreur) {
       echo '<li>' . $erreur . '</li>';

    }
    echo '</ul>';
  
  }
  ?>
          </div>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php" style="color: black">se connecter?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<?php
unset($_SESSION['erreurs']);

?>
</body>

</html>
