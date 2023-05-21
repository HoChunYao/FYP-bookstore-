<?php 

session_start(); 

include "dataconnection.php";

if (isset($_POST['user_email']) && isset($_POST['user_pw'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uemail = validate($_POST['user_email']);

    $pass = validate($_POST['user_pw']);

    if (empty($uemail)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM user WHERE user_email='$uemail' AND user_pw='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_email'] === $uemail && $row['user_pw'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_email'] = $row['user_email'];

                $_SESSION['user_pw'] = $row['user_pw'];


                header("Location: customer_profile.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}