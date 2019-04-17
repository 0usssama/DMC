<?php
session_start();
unset($_SESSION['id_client']);
session_destroy();
$_SESSION= [];
header('location: index.php');

?>