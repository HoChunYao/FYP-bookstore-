<?php 

session_start(); 

include "dataconnection.php";

if (isset($_POST['staff_email']) && isset($_POST['staff_pw'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $stemail = validate($_POST['staff_email']);

    $pass = validate($_POST['staff_pw']);

    if (empty($stemail)) {

        header("Location: index.php?error=staff Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM staff WHERE staff_email='$stemail' AND staff_pw='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['staff_email'] === $stemail && $row['staff_pw'] === $pass) {

                echo "Logged in!";

                $_SESSION['staff_email'] = $row['staff_email'];

                $_SESSION['staff_pw'] = $row['staff_pw'];

                header("Location: admin_db.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect staff name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect staff name or password");

            exit();

        }

    }

}else{

    header("Location: index.php?error=error!!!");

    exit();

}