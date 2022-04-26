<?php

class Reservation {

    private $id;
    private $id_transport;
    private $id_client;
    private $cin;

    function getId() { 
        return $this->id; 
   } 

   function setId($id) {  
       $this->id = $id; 
   } 

   function getIdtransport() { 
        return $this->idtransport; 
   } 

   function setIdtransport($idtransport) {  
       $this->idtransport = $idtransport; 
   } 

   function getIdclient() { 
        return $this->idclient; 
   } 

   function setIdclient($idclient) {  
       $this->idclient = $idclient; 
   } 

   function getCin() { 
        return $this->cin; 
   } 

   function setCin($cin) {  
       $this->cin = $cin; 
   } 
   
}



?>