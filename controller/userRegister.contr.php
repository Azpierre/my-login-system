<?php

    class UserRegister {
        private $username;
        private $email;
        private $password;
        private $password_repeat;

        public function __construct($username, $email, $password, $password_repeat)
        {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->password_repeat = $password_repeat;
        }

        // VALIDATE USERS INPUTS

            //Empty Inputs
        public function inputIsEmpty(){
            if (empty($this->username ) || empty($this->email) || empty($this->password ) || empty($this->password_repeat)) {
                header("location: ../pages/register.page.php?error=emptyInput");
                exit();
            }
        }

            //Username is not valid

        public function usernameInvalid(){
            if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
                header("location: ../pages/register.page.php?error=usernameInvalid");
                exit();
            }
        }

            //email is not valid

        public function emailInvalid(){
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                header("location: ../pages/register.page.php?error=emailInvalid");
                exit();
            }
        }

            //Password is not valid or is not matching
        public function passwordInvalid(){
            if (strlen($this->password) < 7) {
                header("location: ../pages/register.page.php?error=passwordInvalid");
                exit();
            }else if($this->password !== $this->password_repeat){
                header("location: ../pages/register.page.php?error=passwordNotMatching");
                exit();
            }
        }


            //Check if USER already exist

        public function checkIfUserExist(){

            $check = new QueryData();
            $checkResult = $check->checkUser($this->username,$this->email);

            if($checkResult){
                header("location: ../pages/register.page.php?error=userAlreadyTaken");
                exit();
            }
        }

            //register User

        public function registerUser(){

            $check = new QueryData();
            $check->setUser($this->username,$this->email, $this->password);

        }
      
    }