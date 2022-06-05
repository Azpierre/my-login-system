<?php

    class UserLogin {
        private $username;
        private $password;
      

        public function __construct($username,  $password)
        {
            $this->username = $username;
            $this->password = $password;
            
        }

        // VALIDATE USERS INPUTS

            //Empty Inputs
        public function inputIsEmpty(){
            if (empty($this->username ) || empty($this->password )) {
                header("location: ../pages/login.page.php?error=emptyInput");
                exit();
            }
        }

        // CHECK IF USER EXIST

        public function checkIfExist(){
            $check = new QueryData();
            $checkResult = $check->checkUser($this->username,$this->username);

            if(!$checkResult){
                header("location: ../pages/login.page.php?error=userNotExist");
                exit();
            }
        }

        // CHECK PASSWORDS

        public function checkPasswordExist(){
            $checkPassword = new QueryData();
            $hashPassword = $checkPassword->checkPassword($this->username, $this->username);
            

            if ($hashPassword == false) {
                
                header("location: ../pages/login.page.php?error=passwordIncorrect");
                exit();
                
            }

            $checkPasswordResult = $hashPassword->users_password ;

            if (password_verify($this->password,$checkPasswordResult)) {
                return true;
            }else {

                header("location: ../pages/login.page.php?error=passwordIncorrect");
                exit();
            }

        }

        //GET USERS DATA 

        public function getUserData(){
            $getData = new QueryData();
            $user = $getData->getUserData($this->username,$this->username);

            session_start();

            //SET DATA IN USERS

            $_SESSION["username"] = $user->users_username;
            $_SESSION["email"] = $user->users_email;
        }

           
      
    }