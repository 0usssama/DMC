

<?php include('../includes/config.php') ;?>
<?php include('fonctionAdmin.php') ;?>





<!DOCTYPE html>
<html lang="fr">

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

<script type="text/javascript">

  function produitAAaAne(id){
     var envoi   = "admin/fonctionAdmin.php?id="+id+"&action=alaune"; 
     $.get(envoi);
     //alert(envoi);
  }

  function produitordre(id){
     var ordre   = document.getElementById(id).value; 
     var envoi   = "admin/fonctionAdmin.php?id="+id+"&ordre="+ordre+"&action=ordre";
     $.get(envoi);
     //alert(envoi); 
  }

</script>


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark   sticky-top" style="background-color: #ccc;">

    <a class="navbar-brand mr-1" href="client.php">DMC <small>Espace client</small></a>

   

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0" style="color: white">
      
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
    <a class="nav-link" href="client.php">
      <i class="fas fa-fw fa-1x mr-2 fa-users"></i>
      <span>Clients</span>
    </a>
  </li>
 

   
    <li class="nav-item">
        <a class="nav-link" href="commandes.php">
          <i class="fas fa-fw fa-1x mr-2 fa-cart-arrow-down"></i>
          <span>Commandes</span></a>
      </li>

      <li class="nav-item">
    <a class="nav-link" href="client.php">
      <i class="fas fa-fw fa-1x mr-2 fa-users"></i>
      <span>Clients</span>
    </a>
  </li>
 
</ul>
