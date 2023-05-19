<?php
include_once ('dataconnection.php');
if(isset($_POST["submit"])){
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $reason = $_POST['contact_qs'];

    $sql = "INSERT INTO enquiry 
    VALUES ('','$name','$email','$reason')";
    $result = $conn->query($sql);
if ($result === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}
$conn->close();
}
?>

