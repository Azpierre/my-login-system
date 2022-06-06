<?php 



    class QueryData extends Database {



        //Check if User exist

        public function checkUser($username, $email){

            //SQL statement
            
            $sql = "SELECT * from users WHERE users_username = ? OR users_email = ?;";
            $stmt = $this->connect()->prepare($sql);

            //bind values to the statement

            $stmt->bindValue(1, $username, PDO::PARAM_STR);
            $stmt->bindValue(2, $email, PDO::PARAM_STR); 
            $stmt->execute();
            

            $row = $stmt->fetch(PDO::FETCH_OBJ);
            
            if($stmt->rowCount() >0){
                return $row;
            } else {
                return false;
            }
        }

        //Set User

        public function setUser($username, $email, $password){
            $sql = "INSERT INTO users (users_username,users_email,users_password) VALUES (?,?,?);";
            $stmt = $this->connect()->prepare($sql);

            //Hash the password

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            ////bind values to the statement

            $stmt->bindValue(1, $username, PDO::PARAM_STR);
            $stmt->bindValue(2, $email, PDO::PARAM_STR);
            $stmt->bindValue(3, $hashedPassword, PDO::PARAM_STR);
            $stmt->execute();
               
        }

        //CHECK PASSWORD

        public function checkPassword($username, $email){
            $sql = "SELECT users_password FROM users WHERE users_username=? OR users_email=?;";
            $stmt= $this->connect()->prepare($sql);

            $stmt->bindValue(1, $username, PDO::PARAM_STR);
            $stmt->bindValue(2, $email, PDO::PARAM_STR);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_OBJ);


            if($stmt->rowCount()>0){
                
                return $row;

            }else{
                return false;
            }

        }

        //GET USER INFO DATA 

        public function getUserData($username, $email){

            $sql = "SELECT * FROM users WHERE users_username=? OR users_email=?;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindValue(1, $username, PDO::PARAM_STR);
            $stmt->bindValue(2, $email, PDO::PARAM_STR);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_OBJ);

            if($stmt->rowCount() > 0){
                return $row;
            }else{
                return false;
            }

        }

        //GET USER INFO DATA 

        public function getUserEmail( $email){

            $sql = "SELECT users_email FROM users WHERE users_email=?;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
           $stmt->execute();

           $row = $stmt->fetch(PDO::FETCH_OBJ);

           if ($stmt->rowCount() > 0) {
               return $row;
           }else{
               return false;
           }
            
        }


     }