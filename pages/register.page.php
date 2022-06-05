<?php 
 include "./header.page.php"
    
?>

<div id="body_container">

<div id="register_container">

   <div class="text_signup">
        <h1>sign up</h1>
   </div>

   
      <?php
         include "../controller/registerError.contr.php";
         
      ?>
   

   <form action="../controller/register.contr.php" method="POST">

        <div class="register_input">
           <label for="">username</label> 
           <input type="text" name="username" placeholder="...">
        </div>

        <div class="register_input">
           <label for="">email</label> 
           <input type="text" name="email" placeholder="...">
        </div>

        <div class="register_input">
           <label for="">password</label> 
           <input type="password" name="password" placeholder="...">
        </div>

        <div class="register_input">
           <label for=""> Repeat password</label> 
           <input type="password" name="password_repeat" placeholder="...">
        </div>

        <button type="submit" name="register">  signup</button>
        
   </form>
   <div> <p> Already register? <a href="./login.page.php">Click hier</a></p></div>

</div>

</div>

<?php 
 include "./footer.page.php"
    
?>