<?php

// used to get mysql database connection
class Database {

    private $host;
    private $db_name;
    private $username;
    private $password;

    public function __construct() {
        $this->host     = 'localhost';//vous pouvez accéder à la base de données avec https://iutpa-wwwetud.univ-pau.fr/phpmyadmin. Elle est donc sur le même serveur que votre code PHP
        $this->db_name  = 'utilisateur';//TODO remplacer par 2023BASE<votre login>, base dans laquelle vous avez importé les deux fichiers sql fournit dans dataForStudents
        $this->username = 'root';//TODO remplacer par votre login UPPA
        $this->password = '';//TODO remplacer par votre login UPPA
    }

    // get the database connection
    public function getConnection() {
        try {
            return new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
        } catch (pdoException $e) {
            http_response_code(409);
            echo json_encode(
                array(
                    "message" => "Erreur de connexion à la base de donnée. Merci de ressayer plus tard."
                )
            );
            exit();
        }
    }
}
?>