<?php
include("admin_design.php");
include('dataconnection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Add Staff</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="CSS_folder/admin_db.css">
    <link rel="stylesheet" href="CSS_folder/admin_addproduct.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <style>
        form{
            text-align: center;
            padding: 20px 10px;
            border: 1px solid black;
            width: 80%;
            background: white;
            border-radius: 20px;
        }
        .form{
            justify-content: center;
            display: flex;
            padding: 20px 0;
        }
        input[type=text],input[type=file]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .font-normal{
            text-align: center;
        }
        label .text{
            justify-content: left;
            display: flex;
        }
        .submit-btn{
            width: 190px;
            height: 50px;
            margin: auto;
            border-radius: 4px;
            border: 1px;
            background: bisque;
        }
        .submit-btn:hover{
            background-color: lightgreen;
        }
        .search label ion-icon {
            position: absolute;
            top: 17px;
            left: 10px;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
            <!-- ======================= Add Staff Form================== -->
            <div class="form">
                <form id="addVoucherForm" name="addVoucherForm" enctype="multipart/form-data" method="POST">
                    <h2 class="font-normal">Add Staff Member</h2>

                        <label class="text">Staff Name</label>
                            <input type="text" placeholder="staff_name" name="staff_name"            required>

                        <label class="text">Staff Email</label>
                            <input type="email" placeholder="staff_email" name="staff_email"      required>

                        <label class="text">Staff Password</label>
                            <input type="password"  placeholder="staff_password"  name="staff_pw"       required>

                        <label class="text">Staff Phone</label>
                            <input type="text"  placeholder="staff_phone" name="staff_phone" required>

                        <label class="text">Staff Gender</label>
                            <input type="text"  placeholder="staff_gender" name="staff_gender"        required>

                        <label class="text">Staff Image</label>
                            <input type="file" name="staff_img"  accept="image/jpg, image/jpeg, image/png" class=""       required>  

                            <button class="submit-btn" type="submit" name="Staffadd" >Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/1cf0f3907a.js" crossorigin="anonymous"></script>
</body>

</html>

<?php
        if (isset($_POST["Staffadd"])) 	
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
                $sql = "INSERT INTO user VALUES(' ','$sname','$semail','$spw','$sphone','$sgender','$simg')";
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

