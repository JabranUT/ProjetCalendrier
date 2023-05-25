<?php

$host = '127.0.0.1';
$username = 'root';
$passwordDB = '';
$dbname = 'leloux_aboumerouane';



class DALUser extends ConnectionToDB
{

    public function loginLook($emailLogin, $passwordLogin)
    {
        $query = "SELECT * FROM users WHERE email = ? AND password = ?";
        $parameters = [$emailLogin, $passwordLogin];
        $resultLoginLook = $this->executeQuery($query, $parameters);

        return $resultLoginLook;
    }
   
    public function read($id_user = NULL) {
        $query = '';
        $parameters = [];

        if (empty($id_user)) {
            $query = 'SELECT * FROM users';
        } else {
            $query = 'SELECT * FROM users WHERE id_user = ?';
            $parameters = [$id_user];
        }
        $requeteLireUsers = $this->executeQuery($query, $parameters);

         return $requeteLireUsers;
   }

   public function update($id_user, $last_name, $first_name, $email, $password, $address, $phone) 
   {
         $query = "UPDATE users SET id_user = ?, last_name = ?, first_name = ?, email = ?, password = ?, address = ?, phone = ? WHERE id_user = ?";
         $parameters = [$id_user, $last_name, $first_name, $email, $password, $address, $phone, $id_user];
         $requeteModifyUser = $this->executeQuery($query, $parameters);
   
         return $requeteModifyUser;

   }

   public function delete($id_user)
   {
         $this->maRequete = 'DELETE FROM users WHERE id_user='.$id_user.'';
         $requeteDeleteUser = $this->getConnection()->prepare($this->maRequete);
         return $requeteDeleteUser->execute();

//  header("location: ../Controllers/Calendar_C.php");
   }

   public function add($last_name, $first_name, $email, $passwordU, $address, $phone)
   {
        $query = "INSERT INTO users (last_name, first_name, email, password, address, phone) VALUES (?, ?, ?, ?, ?, ?)";
        $parameters = [$last_name, $first_name, $email, $passwordU, $address, $phone];
        $requeteAddUser = $this->executeQuery($query, $parameters);
   
         return $requeteAddUser;
   }
}



