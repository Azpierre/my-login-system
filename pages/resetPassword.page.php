<?php 
 include "./header.page.php"
    
?>

<div id="body_container">

    <div id="reset_container">
        
        <div class="text_reset"> 
            <h1>You forgot your password? No problem,</h1>
            <p> please enter your email address to reset your password</p>
        </div>

        <?php 
    
        include "../controller/loginError.contr.php";
    
        ?> 

        <form action="../controller/resetUserPassword.contr.php" method="POST">
            
            <div class="reset_input">

                <label for=""> email </label> 
                <input type="text" name="email" placeholder="...">
            </div>

            
            <div class="reset_btn">
                <button type="submit" name="reset_password"> Reset password</button>

            </div>

        </form>

    </div>



</div>

<?php 
 include "./footer.page.php"
    
?>