<?php

    if(isset($_POST["reset_password"])){

        $email = $_POST["email"];

        //INITIALIZE CLASS
        include "../model/database.model.php";
        include "../model/queryData.model.php";
        include "./resetPassword.contr.php";


        $resetPassword = new ResetPassword($email);
        $resetPassword->ifIsEmpty();
        $resetPassword->validateEmail();
        $resetPassword->checkIfUserEmailExist();


        echo "hello";
    } else {
        header("location: ../pages/login.page.php");
        exit();
    }