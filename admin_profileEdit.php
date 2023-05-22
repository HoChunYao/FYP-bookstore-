<?php
    session_start();
    include("admin_design.php");
    include("dataconnection.php");

    if(isset($_SESSION['staff_email']) && isset($_SESSION['staff_pw']) ){

        $sid=$_SESSION['staff_id'];
        $semail=$_SESSION['staff_email'];
        $spw=$_SESSION['staff_pw'];

        $sql = "SELECT * FROM staff where staff_id ='$sid' ";
        
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
?>
<html>
    <head>
        <title>Admin Profile Edit</title>
        <link href="CSS_folder/admin_form_design.css" rel="stylesheet" type="text/css"/>
    </head>
<body>
        <div class="form">
            <form id="ProfileEditForm" name="ProfileEditForm" enctype="multipart/form-data" method="POST">
                <h2 class="font-normal">Admin Profile</h2>
                <label class="text">Staff Id</label>
                    <input type="text" name="staff_id"    class=""  value="<?php echo $row['staff_id'];?>"       disabled>

                <label class="text">Staff Name</label>
                    <input type="text" name="staff_name"  class=""  value="<?php echo $row["staff_name"]; ?>"       >

                <label class="text">Staff Email</label>
                    <input type="text" name="staff_email" class=""  value="<?php echo $row["staff_email"]; ?>"      >

                <label class="text">Staff Password</label>
                    <input type="password" name="staff_pw" class=""  placeholder="Staff_password"     >

                <label class="text">Staff Gender</label>
                    <input type="text" name="staff_gender"   class=""  value="<?php echo $row["staff_gender"]; ?>"   >

                <label class="text">Staff Phone</label>
                    <input type="text" name="staff_phone"   class=""  value="<?php echo $row["staff_phone"]; ?>"   >
                
                <label class="text">Staff Image</label>
                    <input type="file" name="staff_img"  accept="image/jpg, image/jpeg, image/png" class=""       > 

                    <button class="submit-btn" type="submit" name="staffEdit">Submit</button>
            </form>
        </div>
</body>
</html>
<?php
    }//if else 
    else{
        echo "error !!!";
    }

//$conn->close();
?>

<?php 
if (isset($_POST["staffEdit"])) 	
{	 
    $sname=$_POST['staff_name'];
    $semail = $_POST['staff_email'];
    $spw =$_POST['staff_pw'];
    $sphone = $_POST['staff_phone'];
    $sgender= $_POST['staff_gender'];
    
    $simg = $_FILES['staff_img']['name'];
    $simg_size = $_FILES['staff_img']['size'];
    $simg_tmp_name = $_FILES['staff_img']['tmp_name'];
    $simg_folder = 'staff_img/';
    $target_file =$simg_folder.$simg;
    $imageFileType = pathinfo($simg,PATHINFO_EXTENSION);

    $message=array();

    if(!empty($simg)){
        if($simg_size > 2000000){
            $message[] = 'Image is too large';
        }elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            $message[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    }

    if(count($message)==0){
        $sql = "UPDATE staff SET staff_img='$simg', staff_name='$sname', staff_pw='$spw',staff_email='$semail',staff_gender='$sgender' 
                ,staff_phone='$sphone' WHERE staff_id='$sid' ";
        $result = $conn->query($sql);
        if (move_uploaded_file($simg_tmp_name, $target_file)) {

            $message[] = "Image uploaded successfully";

        }else{

            $message[] = "Failed to upload image";

    }
        $conn -> close();
    }
    
}
if(isset($message)){
    foreach($message as $message){
        echo $message;
    }
}

?>