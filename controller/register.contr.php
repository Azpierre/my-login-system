<?php


if(isset($_POST["register"])){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_repeat= $_POST["password_repeat"];

    //INCLUDE CONTROLLERS
    include "../model/database.model.php";
    include "../model/queryData.model.php";
    include "./userRegister.contr.php";


    // INSTENTIATE CLASSES
    $register = new UserRegister($username, $email, $password, $password_repeat);
    $register->inputIsEmpty();
    $register->usernameInvalid();
    $register->emailInvalid();
    $register->passwordInvalid();
    $register->checkIfUserExist();

    // If there is no ERROR, register User
    
        $register->registerUser();
        
        header("location: ../pages/register.page.php?success=successfullRegister");
        exit(); 
    }else {
    header("location: ../pages/register.page.php");
}
