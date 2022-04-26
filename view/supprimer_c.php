<?php 

$myid = $_GET['id'];
include_once "../controller/recC.php";

$recC= new recC();
$recC->supprimer($myid); 
header('Location:afficherrec.php');




?>