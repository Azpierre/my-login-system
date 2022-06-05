<?php 

    include "./header.page.php";

   
?>


    <div id="body_container">
        
<?php
    if (isset($_SESSION["username"])) {
       echo "<h1>Welcome to our page, ".$_SESSION["username"]."</h1>";
    }
    else{
        echo "<h1>Welcome to our page, Guest.</h1>";
    }
?>
        
    </div>

    
<?php 

    include "./footer.page.php";

?>

    