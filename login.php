<!DOCTYPE html>
<html lang="fr">
<?php session_start(); 

?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Se connecter</div>
      <div class="card-body">
        <form action="test_login.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Adresse email" required="required" autofocus="autofocus">
              <label for="inputEmail">Adresse email</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Mot de passe</label>
            </div>
          </div>
          <input type="submit" name="connecter" value="connecter" class="btn btn-primary btn-block">
          
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">s'inscrire</a>
        </div>
        <div class="<?php if(isset($_SESSION['erreurs']) && !empty($_SESSION['erreurs'])){echo 'alert alert-danger mt-4';} ?>" role="alert">
      <?php 
      if(isset($_SESSION['erreurs']) && !empty($_SESSION['erreurs']) ){
        echo '<ul>';
          foreach ($_SESSION['erreurs'] as $erreur) {
           echo '<li>' . $erreur . '</li>';
          }
      }
      ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
<?php 
$_SESSION['erreurs'] = '';
unset($_SESSION);
?>