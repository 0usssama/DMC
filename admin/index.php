<!DOCTYPE html>
<html lang="fr">
<?php session_start(); 
if(isset($_GET['connect'])){if($_GET['connect']=='0'){ session_destroy();}}

?>
<head>
<link rel="icon" type="image/png" href="../images/marque/DMC_2.png" />

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Admin </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.min.css" rel="stylesheet">

<style type="text/css">


.fond{
background-color: red;
}


</style>
</head>

<style>
body{
  background-image: url('../images/background_admin.jpg');
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




<body class="bg-dark" id="fond">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="text-center card-header">Admin</div>
      <div class="card-body">
        <form action="admin_login.php" method="post">
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
          <input type="hidden" name="connecter" value="connecter">
          <input type="submit" value="connecter" class="btn btn-danger btn-block">
          
        </form>
      
        <div class="<?php if(isset($_SESSION['erreurs']) && !empty($_SESSION['erreurs'])){echo 'alert alert-danger mt-4';} ?>" role="alert">
      <?php 
     // var_dump($_SESSION);
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
<?php 
$_SESSION['erreurs'] = '';
unset($_SESSION);
?>