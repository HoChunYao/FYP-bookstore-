<?php 

session_start(); 

include ("dataconnection.php");

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

        $result = $conn->query($sql);

        if (mysqli_num_rows($result) === 1) {

            $row = $result->fetch_assoc();

            if ($row['staff_email'] === $stemail && $row['staff_pw'] === $pass) {

                $_SESSION['staff_id'] = $row['staff_id'];

                $_SESSION['staff_pw'] = $row['staff_pw'];

                $_SESSION['staff_email'] = $row['staff_email'];

                $message="login succeffully";
                    echo "<SCRIPT> 
                    alert('$message')
                        window.location.replace('admin_db.php');
                    </SCRIPT>";
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