
<?php 
require '../config.php';
/** NOTE!! file Stored in controller */

class UserC   {
    function afficherUser($user){
                
         echo $user->getlastname()."<br>";
         echo $user->getfirstname()."<br>";  
         echo $user->getemail()."<br>";
      
        $lastname=$user->getlastname();
        $firstname=$user->getfirstname();
        $email=$user->getemail();
        $username=$user->getusername();
        $password=$user->getpassword();

        
        

        $con = mysqli_connect ("localhost", "root", "", "2a21") ;
        if(! $con)die("ne pourrait pas se relier : ");
        $add_user="INSERT INTO user VALUES ('','$username','$firstname','$lastname','$email','$password')" ;
        $querrycl=mysqli_query($con,$add_user,)or die (mysqli_error($con));

        header('Location:afficheruser.php');


    }

    function  editUser($user,$id){
        echo $user->getlastname()."<br>";
        echo $user->getfirstname()."<br>";
        echo $user->getemail()."<br>";
        echo $user->getusername()."<br>";
        echo $user->getpassword()."<br>";

        $lastname=$user->getlastname();
        $firstname=$user->getfirstname();
        $email=$user->getemail();
        $username=$user->getusername();
        $password=$user->getpassword();
        $con = mysqli_connect ("localhost", "root", "", "2a21") ;
        if(! $con)die("ne pourrait pas se relier : ");

        $edit_user="UPDATE user SET userName='$username' ,firstName='$firstname', lastName='$lastname', email='$email', pwd='$password' WHERE id='$id'" ;
        $querrycl=mysqli_query($con,$edit_user)or die (mysqli_error($con));

        header('Location:afficheruser.php');

    }

    function afficher(){
        $pdo = config::getConnexion();
        try{
        $query = $pdo->prepare(
            'select * from user '
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
                 'delete from user where id = :id '
             );
             $query->execute([
                 'id' => $enterID
             ]);
             echo $query->rowCount() ." records DELETED successfully ";

        } catch (PDOException $e) {
            $e->getMessage();
        }


     }

     function update (){
         try {
             $query = $pdo->prepare(
                 'update user set  firstName = :firstName,
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


