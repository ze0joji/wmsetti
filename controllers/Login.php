<?php

$pagename = "Login";

function performAuth()
{
// check if user is already logged in
if (isset($_SESSION['username'])) {
   header("Location: /");
   exit();
}

if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   // check if username and password match
   if ($username == 'admin' && $password == 'password') {
       $_SESSION['username'] = $username;
       header("Location: /");
       exit();
   } else {
        header("Location: /login");
       echo "Invalid username or password.";
            exit();
   }
}

}






require "views/Login.view.php";