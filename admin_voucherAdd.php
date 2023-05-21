<?php
session_start();
include("admin_design.php");
include("dataconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Add Voucher</title>
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
        .product-form{
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
        .word label{
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
            <!-- ======================= Add Product Form================== -->
            <div class="product-form">
                <form id="addVoucherForm" name="addVoucherForm" enctype="multipart/form-data" method="POST">
                    <h2 class="font-normal">Add Voucher</h2>
                    <div class="word">

                        <label>Reward Name</label>
                            <input type="text" name="reward_name"  class=""  placeholder="reward_name"        required>

                        <label>Reward Quantity</label>
                            <input type="text" name="reward_qty" class=""  placeholder="reward_quantity"       required>

                        <label>Reward Point</label>
                            <input type="text" name="reward_point"   class=""  placeholder="reward_point" required>

                        <label>Staff ID</label>
                            <input type="text" name="staff_id"   class=""  value="<?php echo "$_SESSION[staff_id]";?>" disabled>

                        <label>Reward image</label>
                            <input type="file" name="reward_img"  accept="image/jpg, image/jpeg, image/png" class="" >
                    </div>

                            <button class="submit-btn" type="submit" name="addreward" >Submit</button>
                </form>
            </div>
            <?php

                if (isset($_POST["addreward"])) 	
                {
                    $rwname = $_POST["reward_name"];  	 
                    $rwqty = $_POST["reward_qty"];
                    $rwpoint = $_POST["reward_point"];

                    $sid = 1;

                    $rwimg = $_FILES['reward_img']['name'];
                    $rwimg_size = $_FILES['reward_img']['size'];
                    $rwimg_tmp_name = $_FILES['reward_img']['tmp_name'];
                    $rwimg_folder = 'reward_img/';
                    $target_file =$rwimg_folder.$rwimg;
                    $imageFileType = pathinfo($rwimg,PATHINFO_EXTENSION);

                    $message=array();

                    if(!empty($rwimg)){
                        if($rwimg_size > 2000000){
                            $message[] = 'Image is too large';
                        }elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                            $message[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        }
                    }

                    if(count($message)==0){
                        $sql = "INSERT INTO reward VALUES('', '$rwname', '$rwqty', '$rwpoint', '$sid', '$rwimg')";
                        $result = $conn->query($sql);
                        if (move_uploaded_file($rwimg_tmp_name, $target_file)) {

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
    <!-- =========== Scripts =========  -->
    <script src="main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/1cf0f3907a.js" crossorigin="anonymous"></script>
</body>
</html>