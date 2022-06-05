<?php

/* SHOW ERROR TO USER */

class loginError {

    public function showError(){
        if(isset($_GET["error"])){
            switch ($_GET["error"]) {
               case 'emptyInput':
                  echo '<div class="message_red"> <p>Fill in all fields</p> </div>';
                  break;
               case 'userNotExist':
                  echo '<div class="message_red"> <p>Email or Username incorrect </p> </div>';
                  break;
               case 'passwordIncorrect':
                  echo '<div class="message_red"> <p> Password is incorrect </p> </div>';
                  break;
               
               default:
                  # code...
                  break;
            }
         } 
    }
}

$showError = new loginError();
$showError->showError();