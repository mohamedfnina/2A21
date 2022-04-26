<?php 

$myid = $_GET['id'];
include_once "../controller/userC.php";

$UserC= new userC();
$UserC->supprimer($myid); 
header('Location:afficheruser.php');




?>