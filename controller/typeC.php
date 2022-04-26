
<?php 
/** NOTE!! file Stored in controller */

class typeC {
    
  
    function type(){
        $pdo = config::getConnexion();
        try{
        $query = $pdo->prepare(
            'select * from typerecl '
        );
        
        $query->execute();
        $result= $query->fetchALL(); return $result;
        }
        
        catch(PDOExeption $e) {
            $e->getMessage();
        }
        
       /* foreach ($result as $row){
            echo $row['userName'];
        }*/
         }  

     




    
}

   







?>


