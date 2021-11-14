<?php
include "../database/connection.php";
// register
// print_r($_POST['action']);
if(isset( $_POST["action"] ) == "register")
        {
        $email = $_POST['email'];
        $password = $_POST['password'];
        // echo $email. " ". $password;
        $SQL = "INSERT INTO `users`(`email`, `password`) VALUES ('". $email ."','". $password ."')";
        // echo $SQL;
        $SQL = mysqli_query($conn, $SQL);
        echo $SQL;
            if ($SQL)
            {
            echo "Done!";
            header("Location: http://localhost/Blog/index.php");
            }
        }
            else
            {
            echo "invalid Redirection";
            }
 ?>
