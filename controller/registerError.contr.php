
<?php

/* SHOW ERROR TO USER */

class registerError {

    public function showError(){
        if(isset($_GET["error"])){
            switch ($_GET["error"]) {
               case 'emptyInput':
                  echo '<div class="message_red"> <p>Fill in all fields</p> </div>';
                  break;
               case 'usernameInvalid':
                  echo '<div class="message_red"> <p>Choose a proper Username</p> </div>';
                  break;
               case 'emailInvalid':
                  echo '<div class="message_red"> <p>Email address is incorrect </p> </div>';
                  break;
               case 'passwordInvalid':
                  echo '<div class="message_red"> <p> Password muss be greater than 6 </p> </div>';
                  break;
               case 'passwordNotMatching':
                  echo '<div class="message_red"> <p>The Passwords are not matching</p> </div>';
                  break;
               
               default:
                  # code...
                  break;
            }
         } else if(isset($_GET["success"])){
            echo '<div class="message_green"> <p>you are successful register</p> </div>';
         }
    }
}

$showError = new registerError();
$showError->showError();