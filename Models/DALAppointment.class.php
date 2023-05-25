<?php

$host = '127.0.0.1';
$username = 'root';
$passwordDB = '';
$dbname = 'leloux_aboumerouane';



class DALAppointment extends ConnectionToDB{
   
   public function read($id_appointment=NULL){

      if(empty($id_appointment)){
         $this->maRequete = 'SELECT * FROM appointments ORDER BY date ASC, hour ASC';
      } else {
         $this->maRequete = 'SELECT * from appointments where id_appointment='.$id_appointment.'';
      }
      //var_dump($this->sql);
         $requeteLireAppointments = $this->getConnection()->prepare($this->maRequete);
         //var_dump($requeteLireAppointments);
         $requeteLireAppointments->execute();
         //var_dump($requeteLireAppointments);
         return $requeteLireAppointments;
      }  

   public function update($id_appointment, $last_name, $first_name, $email, $address, $phone, $date, $hour) {



  $this->maRequete = "UPDATE `appointments` SET `id_appointment` = '$id_appointment', `last_name` = '$last_name', `first_name` = '$first_name', `email` = '$email', `address` = '$address', `phone` = '$phone', `date` = '$date' , `hour` = '$hour'  WHERE `appointments`.`id_appointment` = '$id_appointment'";
  $requeteModifyAppointment = $this->getConnection()->prepare($this->maRequete);
  return $requeteModifyAppointment->execute();

   }

   public function delete($id_appointment){
      $this->maRequete = 'DELETE FROM appointments WHERE id_appointment='.$id_appointment.'';
        $requeteDeleteAppointment = $this->getConnection()->prepare($this->maRequete);
  return $requeteDeleteAppointment->execute();
//  header("location: ../Controllers/Calendar_C.php");
   }

   public function add($last_name, $first_name, $email, $address, $phone, $date, $hour){

   $this->maRequete = "INSERT INTO appointments (`id_appointment`, `last_name`, `first_name`, `email`, `address`, `phone`, `date`, `hour`) VALUES(NULL, '$last_name', '$first_name', '$email', '$address', '$phone', '$date', '$hour')";
   $requeteAddAppointment = $this->getConnection()->prepare($this->maRequete);
   return $requeteAddAppointment->execute();
   }
}



