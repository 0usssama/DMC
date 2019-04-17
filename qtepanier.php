<?php session_start(); ?>
 
<a  class="btn btn-block btn-danger" href="pannier.php">
<i class="fa fa-shopping-cart"></i>
<span class="badge badge-light ml-2"><?php if(isset($_SESSION['qteTotal'])){echo $_SESSION['qteTotal'];}  else {echo 0;} ?> U</span>
<span class="badge badge-light ml-2"><?php if(isset($_SESSION['prixTotal'])){echo $_SESSION['prixTotal'];}  else {echo 0;} ?> DA</span>
</a>
