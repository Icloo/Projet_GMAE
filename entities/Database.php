<?php

    class Database{
        public $host= "localhost";
        public $dbname= "bdd_blog";
        public $user= "root";
        public $pass="";


        public $bdd;


        function connect(){
            try {
                $this->bdd = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
                $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $error) {
                header('Location: ../erreur.php');
                exit;
            }
        }
    }