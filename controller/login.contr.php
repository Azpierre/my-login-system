<?php

    if (isset($_POST["login"])) {

        // GET LOGIN FORM DATA

        $username = $_POST["username"];
        $password = $_POST["password"];
        

        //  INCLUDES FILES

        include "../model/database.model.php";
        include "../model/queryData.model.php";
        include "../controller/userLogin.contr.php";

        // VALIDATE USER INPUTS

            $logUser = new UserLogin($username, $password);
            $logUser->inputIsEmpty();
            $logUser->checkIfExist();
            $logUser->checkPasswordExist();
            $logUser->getUserData();

        // IF SUCCESSFUL LOG IN
            echo "your are log in";
            
            header("location: ../pages/index.php?success=successfulLogin");



    }else {
        header("location: ../pages/login.page.php?error=emptyInput");
    }