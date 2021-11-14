<?php
include "../database/connection.php";
if(isset( $_POST["action"] ) == "login")
        {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $SQL = "SELECT `id`, `email`, `password` FROM `users` WHERE `email` = '". $email ."' AND `password` = '". $password ."'";
        $user = mysqli_query($conn, $SQL);
        $user = mysqli_fetch_array($user);
            if (isset($user["id"]) >0)
            {
              $_SESSION['loggedIn'] = $user['email'];
              if (isset($_SESSION['loggedIn']) == $user['email'])
              {
                header("Location: http://localhost/Blog/index.php");
              }         
            }
            else {
              header("Location: http://localhost/Blog/login.php?message= wrong email/password or user not registered");
            }
        }
            else
            {
            echo "invalid Redirection";
            }
 ?>
