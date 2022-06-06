<?php 

    /* 
        ***TO DOs***

            #CHECK IF EMAIL INPUT IS EMPTY
            #CHECK IF EMAIL EXIST

    */

    class ResetPassword {

        private $email;

        function __construct($email)
        {
            $this->email = $email;
        }

        // CHECK IF INPUT IS EMPTY

        public function ifIsEmpty(){
            if (empty($this->email)) {
                header("location: ../pages/resetPassword.page.php?error=emptyField");
                exit();
            }
        }

         // CHECK IF INPUT IS EMPTY

         public function validateEmail(){
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                header("location: ../pages/resetPassword.page.php?error=emailIsNotValid");
                exit();
            }
        }

        // CHECK IF USER EMAIL EXIST

        public function checkIfUserEmailExist(){
            //init query
            $getData = new QueryData();
            $userEmail = $getData->getUserEmail($this->email);

            if ($userEmail->users_email !== $this->email) {
                header("location: ../pages/resetPassword.page.php?error=incorrectEmail");
                exit();
            }
            
        }

    }