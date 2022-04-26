<?php 
/** NOTE!! file Stored in model */


class reclamation{

    private  $username;
    private $type_rec;
   private $desc;
    
    
    public $userAttributeCount=4;

    function getusername(){
        return $this->username;
    }
    function gettype_rec(){
        return $this->type_rec;
    }
    function getdesc(){
        return $this->desc;
    }
   

    
    function __construct($username,$type_rec,$desc){
        $this->username = $username;
        $this->type_rec = $type_rec;
        $this->desc = $desc;
        
    }
    


    function affichage(){  
    
      // LOCATION DEPENDS ON THE WHERE THE COLLEE AND CALLED FILE ARE NoT DEPENDED ON THE CLASS FILE IS POSITION
     //require_once "showUser.html";
        
    
    } 


   

}
?>


