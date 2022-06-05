<?php 

    session_start();
    session_unset();
    session_destroy();

    //GOING BACK TO HOME

    header("location: ../pages/index.php");