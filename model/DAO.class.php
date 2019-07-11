<?php

    // Definition de l'unique objet de DAO
    $dao = new DAO();

    // Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:../data/db/data.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
          try{
            $this->db = new PDO($this->database);
            if(!$this->db){
              die("Database error");
            }
          } catch (PDOException $e){
            die("PDO error:".$e->getMessage());
          }
        }

        //////////////////////////////////////////////////////////////////////////////
        // REQUETES
        //////////////////////////////////////////////////////////////////////////////


        // Crée un nouveau Topic
        // Retourne l'objet Topic qui vient d'etre crée
        function createTopic($nom, $nomCreateur) {
          $sth = $this->db->prepare("INSERT INTO topic (id, name, nameCreator, creation, closed)
            VALUES (MAX(id)+1, :name, :nameCreator, DATE_FORMAT(NOW(), '%Y-%m-%d %T'), 'f')");
          $sth->bindParam(":name",$nom);$sth->bindParam(":nameCreator",$nomCreateur);
          $sth->execute();
        }



    }

    ?>
