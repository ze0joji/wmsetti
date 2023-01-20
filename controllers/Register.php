<?php

$pagename = "Register";

function performRegistration()
{

    if (isset($_SESSION['username'])) {
        header("Location: /");


        if (isset($_POST['Sign Up'])) {
            $username = $_POST['newuser'];
            $password = $_POST['newpassword'];


            $new_username = "newuser"; //new user name
            $new_password = "newpassword"; //new user password

            $query = "CREATE USER '$new_username'@'%' IDENTIFIED BY '$new_password';";
            $query .= "GRANT SELECT ON shipco.* TO '$new_username'@'%';";

        }
    }
}

require "views/register.view.php";