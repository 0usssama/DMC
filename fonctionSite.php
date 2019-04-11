<?php
session_start();
$_SESSION['admin']='connecte';
$user = 'root';

if(PHP_OS == 'WINNT'){//working on different OS
  $pass = '';//dynamically
}else{
  $pass = 'LinuxMate2019:D';//well this one 

}
$bdd = new PDO('mysql:host=localhost;dbname=dmc', $user, $pass);



?>