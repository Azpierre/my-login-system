<?php

    class showErrorMessage{

    public function showMessage(){

    if (isset($_GET["error"])) {
        switch ($_GET["error"]) {
            case 'emptyField':
                echo '<div class="message_red"> <p>Empty Email field</p> </div>';
                break;

            case 'emailIsNotValid':
                echo '<div class="message_red"> <p>Email address is not valid </p> </div>';
                break;

            case 'incorrectEmail':
                echo '<div class="message_red"> <p>Email address is incorrect </p> </div>';

                break;
            default:
                # code...
                break;
        }
    }

    if (isset($_GET["success"])) {
        
        echo '<div class="message_green"> <p>Check your email address to reset your Password</p> </div>';
        }
    }
    }

    $message = new showErrorMessage();
    $message->showMessage();
