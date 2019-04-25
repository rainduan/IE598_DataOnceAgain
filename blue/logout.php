<?php
session_start();

if(session_destroy()) {
    header("Location: ./index.php");
    setcookie(email, "", time() + (1), "/");
    setcookie(name, "", time() + (1), "/");
    setcookie(sup, "", time() - (1), "/");
    setcookie(pwd, "", time() + (1), "/");
    //setcookie("kli", "", time() + (1), "/");

}

?>