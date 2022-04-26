
<?php 
require '../config.php';
/** NOTE!! file Stored in controller */

class recC   {
    function afficherRec($reclamation){
                
         echo $reclamation->getusername()."<br>";
         echo $reclamation->gettype_rec()."<br>";  
         echo $reclamation->getdesc()."<br>";
    
        
        $username=$reclamation->getusername();
        $type=$reclamation->gettype_rec();
        $desc=$reclamation->getdesc();
   

        
        

        $con = mysqli_connect ("localhost", "root", "", "2a21") ;
        if(! $con)die("ne pourrait pas se relier : ");
        $add_rec="INSERT INTO reclamation VALUES ('','$username','$type','$desc',0)" ;
        $querrycl=mysqli_query($con,$add_rec,)or die (mysqli_error($con)); 

        header('Location:afficherrec.php');


    }

    function  editC($reclamation,$id){
        echo $reclamation->getusername()."<br>";
        echo $reclamation->gettype_rec()."<br>";  
        echo $reclamation->getdesc()."<br>";

         $username=$reclamation->getusername();
        $type=$reclamation->gettype_rec();
        $desc=$reclamation->getdesc();
   
        $con = mysqli_connect ("localhost", "root", "", "2a21") ;
        if(! $con)die("ne pourrait pas se relier : ");

        $edit_user="UPDATE reclamation SET username='$username' ,type_rec='$type'  WHERE id='$id'" ;

        $querrycl=mysqli_query($con,$edit_user)or die (mysqli_error($con));

        header('Location:afficherrec.php');

    }

    function afficher(){
        $pdo = config::getConnexion();
        try{
        $query = $pdo->prepare(
            'select * from reclamation '
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
         function affichertype(){
            $pdo = config::getConnexion();
            try{
            $query = $pdo->prepare('SELECT nom FROM typerecl INNER JOIN reclamation ON typerecl.id = reclamation.type_rec	;'
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

        

         

     function supprimer ($enterID){
        $pdo = config::getConnexion();
        try {
             $query = $pdo->prepare(
                 'delete from reclamation where id = :id '
             );
             $query->execute([
                 'id' => $enterID
             ]);
             echo $query->rowCount() ." reclamation DELETED successfully ";

        } catch (PDOException $e) {
            $e->getMessage();
        }


     }

     function update (){
         try {
             $query = $pdo->prepare(
                 'update reclamation set  firstName = :firstName,
                 lastName = :lastName where id = :id'
             );
             $query->execute([
                 'firstName' => 'Yessine',
                 'lastName' => 'Jarray',
                 'id' => 1
             ]);
             echo $query->rowCount() . "records UPDATED successfully";
         }catch (PDOException $e) {
             $e->getMessage();
         }





     }




    
}

   







?>


