<?php 
/** NOTE!! file Stored in model */


class type{

    private  $nom;
   
    
    
    public $userAttributeCount=4;

    function getnom(){
        return $this->nom;
    }
    
   

    
    function __construct($nom){
        $this->nom = $nom;
       
        
    }
    


    function affichage(){  
    
      // LOCATION DEPENDS ON THE WHERE THE COLLEE AND CALLED FILE ARE NoT DEPENDED ON THE CLASS FILE IS POSITION
     //require_once "showUser.html";
        
    
    } 


   

}
?>


