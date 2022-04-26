<?php 

class Transport {

    private $id;
    private $type;
    private $nbrplace;
    private $depart;
    private $arrivee;
    private $temps_ecoule;

    function __construct($type,$nbrplace,$depart,$arrivee,$temps_ecoule){
        $this->type = $type;
        $this->nbrplace = $nbrplace;
        $this->depart = $depart;
        $this->arrivee = $arrivee;
        $this->temps_ecoule = $temps_ecoule;
    }

    function getId() { 
        return $this->id; 
   } 

   function setId($id) {  
       $this->id = $id; 
   }
   function getType() { 
    return $this->type; 
} 

function setType($type) {  
   $this->type = $type; 
} 

function getNbrplace() { 
    return $this->nbrplace; 
} 

function setNbrplace($nbrplace) {  
   $this->nbrplace = $nbrplace; 
} 

function getDepart() { 
    return $this->depart; 
} 

function setDepart($depart) {  
   $this->depart = $depart; 
} 

function getArrivee() { 
    return $this->arrivee; 
} 

function setArrivee($arrivee) {  
   $this->arrivee = $arrivee; 
} 

function getTempsecoule() { 
    return $this->tempsecoule; 
} 

function setTempsecoule($tempsecoule) {  
   $this->tempsecoule = $tempsecoule; 
}  

   

}


	

?>