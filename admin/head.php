

<?php require_once('../includes/config.php') ;?>
<?php require_once('fonctionAdmin.php') ;?>





<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Blank Page</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<style>
.form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
</style>
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Espace admin</a>

   

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
         
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Se déconnecter</a>
        </div>
      </li>
    </ul>

  </nav>
  <div id="wrapper">

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
<li class="nav-item">
    <a class="nav-link" href="admin.php">
      <i class="fas fa-fw fa-2x fa-user"></i>
      <span>Admins</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="client.php">
      <i class="fas fa-fw fa-2x fa-users"></i>
      <span>Clients</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="produit.php">
      <i class="fas fa-fw fa-2x fa-cubes"></i>
      <span>Produits</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="famille.php">
      <i class="fas fa-fw fa-2x fa-layer-group"></i>
      <span>Famille</span></a>
  </li>

  <li class="nav-item">
      <a class="nav-link" href="marque.php">
        <i class="fas fa-fw fa-2x fa-building"></i>
        <span>Marque</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="commandes.php">
          <i class="fas fa-fw fa-2x fa-cart-arrow-down"></i>
          <span>Commandes</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="point_de_ventes.php">
            <i class="fas fa-fw fa-2x fa-map-marker"></i>
            <span>Points de ventes</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="images.php">
              <i class="fas fa-fw fa-2x fa-th"></i>
              <span>Images</span></a>
          </li>


          <li class="nav-item">
              <a class="nav-link" href="publications.php">
                <i class="fas fa-fw fa-2x fa-newspaper"></i>
                <span>Publications</span></a>
            </li>

           
              <li class="nav-item">
                  <a class="nav-link" href="promotions.php">
                    <i class="fas fa-fw fa-2x fa-percentage"></i>
                    <span>Promotions</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="votes.php">
                      <i class="fas fa-fw fa-2x fa-star"></i>
                      <span>Votes</span></a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="factures.php">
                        <i class="fas fa-fw fa-2x fa-file-alt"></i>
                        <span>Facture</span></a>
                    </li>
</ul>
