<?php 
/** NOTE!! file Stored in model */


class User{

    private  $lastname;
    private $firstname;
    private $email;
   private $username;
    private  $password;
    
    public $userAttributeCount=5;

    function getlastname(){
        return $this->lastname;
    }
    function getfirstname(){
        return $this->firstname;
    }
    function getpassword(){
        return $this->password;
    }
    function getemail(){
        return $this->email;
    }
    function getusername(){
        return $this->username;
    }

    
    function __construct($lastname,$firstname,$password,$email,$username){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->email = $email;
        $this->username = $username;
    }
    


    function affichage(){  
    
      // LOCATION DEPENDS ON THE WHERE THE COLLEE AND CALLED FILE ARE NoT DEPENDED ON THE CLASS FILE IS POSITION
     //require_once "showUser.html";
        
    
    } 


   

}
?>


