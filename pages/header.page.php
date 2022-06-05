<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

    <header id="header_container">
        
        <nav>
            <div> <a href="./index.php">Home</a></div>
            <div class="signup_login">
                <?php
                    if(isset($_SESSION["username"])){
                       echo '<a href="./">'. $_SESSION["username"].'</a>'; 
                       echo '<a href="../controller/logout.contr.php">Log out</a>';
                    }
                    else{
                       echo '<a href="./register.page.php">Sign Up</a>';
                       echo '<a href="./login.page.php">login</a>';
                    }
                ?>
                
            </div>
        </nav>
        
    </header>

   

   
