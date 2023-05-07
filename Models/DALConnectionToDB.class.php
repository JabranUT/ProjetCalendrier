<?php



class DALConnectionToDB{

  private $host;
  private $dbname;
  private $username;
  private $password;
  private $executeConnection;

 function __construct($host,$dbname,$username,$password){

  $this->host=$host;
  $this->dbname=$dbname;
  $this->username=$username;
  $this->password=$password;

  }

    public function connection(){

      try{

        $dns='mysql:host='.$this->host.';dbname='.$this->dbname.'; charset=utf8';
        //'mysql:host=127.0.0.1;dbname=projet_calendrier;', 'root', ''
        $this->executeConnection= new PDO($dns,$this->username,$this->password);

        }catch(Exception $e){

        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());

      }
    }

    public function getConnection(){
      return $this->executeConnection;
    }

}
