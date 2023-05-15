<?php

$host = '127.0.0.1';
$username = 'root';
$passwordDB = '';
$dbname = 'projet_calendrier';



class DALUser extends ConnectionToDB{

   public function loginLook($emailLogin,$passwordLogin){

      //var_dump($emailLogin);
      //var_dump($passwordLogin);

      $this->maRequete = "SELECT * FROM users WHERE email='".$emailLogin."' AND password='".$passwordLogin."'";
         $requeteLoginLook = $this->getConnection()->prepare($this->maRequete);
         $requeteLoginLook->execute();
         return $requeteLoginLook;
   }
   
   public function read($id_user=NULL){

      if(empty($id_user)){
         $this->maRequete = 'SELECT * from users';
      } else {
         $this->maRequete = 'SELECT * from users where id_user='.$id_user.'';
      }
      //var_dump($this->sql);
         $requeteLireUsers = $this->getConnection()->prepare($this->maRequete);
         //var_dump($requeteLireAppointments);
         $requeteLireUsers->execute();
         //var_dump($requeteLireAppointments);
         return $requeteLireUsers;
      }  

   public function update($id_user, $last_name, $first_name, $email, $password, $address, $phone) {



  $this->maRequete = "UPDATE `users` SET `id_user` = '$id_user', `last_name` = '$last_name', `first_name` = '$first_name', `email` = '$email', `password` = '$password', `address` = '$address', `phone` = '$phone'  WHERE `users`.`id_user` = '$id_user'";
  $requeteModifyUser = $this->getConnection()->prepare($this->maRequete);
  return $requeteModifyUser->execute();

   }

   public function delete($id_user){
      $this->maRequete = 'DELETE FROM users WHERE id_user='.$id_user.'';
        $requeteDeleteUser = $this->getConnection()->prepare($this->maRequete);
  return $requeteDeleteUser->execute();
//  header("location: ../Controllers/Calendar_C.php");
   }

   public function add($last_name, $first_name, $email, $passwordU, $address, $phone){

   $this->maRequete = "INSERT INTO users (`id_user`, `last_name`, `first_name`, `email`, `password`, `address`, `phone`) VALUES(NULL, '$last_name', '$first_name', '$email', '$passwordU', '$address', '$phone')";
   $requeteAddUser = $this->getConnection()->prepare($this->maRequete);
   return $requeteAddUser->execute();
   }
}



