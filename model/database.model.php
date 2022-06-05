<?php

/* CONNECT TO THE DATABASE 
    
    #PDO CONNECTION

*/
    class Database {
        private $host = "localhost";
        private $username = "mydb";
        private $password = "14pierre97";
        private $dbname = "login_system";

        protected function connect(){
            try {
                $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch (PDOException $e) {
                
                echo "Connection failed! " . $e->getMessage() . "<br/>";
                die();
            }

        }

    }