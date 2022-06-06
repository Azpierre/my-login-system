<?php 
 include "./header.page.php"
    
?>

<div id="body_container">

    <div id="login_container">
        
        <div class="text_login"> 
            <h1>login</h1>
        </div>

        <?php 
    
        include "../controller/loginError.contr.php";
    
        ?> 

        <form action="../controller/login.contr.php" method="POST">
            
            <div class="login_input">

                <label for="">username or email</label> 
                <input type="text" name="username" placeholder="...">
            </div>

            <div class="login_input">
                <label for="">password</label> 
                <input type="password" name="password" placeholder="...">
            </div>

            <button type="submit" name="login"> login</button>

        </form>

        <div class="forgot_password"> 
            <p>Forgot my password, <a href="./resetPassword.page.php">Click hier</a></p>
        </div>
    </div>



</div>

<?php 
 include "./footer.page.php"
    
?>