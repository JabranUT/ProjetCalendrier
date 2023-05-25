<?php

class ConnectionToDB {
    private $host;
    private $dbname;
    private $username;
    private $passwordDB;
    private $pdo;

    public function __construct($host, $dbname, $username, $passwordDB) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->passwordDB = $passwordDB;
    }

    public function connection() {
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8';
            $this->pdo = new PDO($dsn, $this->username, $this->passwordDB);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }

    public function executeQuery($query, $parameters = []) {
        try {
            $cleanedParameters = [];
            foreach ($parameters as $param) {
                $cleanedParameters[] = htmlspecialchars($param, ENT_QUOTES, 'UTF-8');
            }

            $statement = $this->pdo->prepare($query);
            $statement->execute($cleanedParameters);

            $cleanedParameters = null; // Supprime les références aux paramètres pour nettoyer la mémoire

            return $statement;
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
}


    // Exemple d'utilisation : $connection->executeQuery("SELECT * FROM table");
}

