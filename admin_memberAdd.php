<?php
include("admin_design.php");
include('dataconnection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Add Member</title>
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
            <!-- ======================= Add Product Form================== -->
            <div class="form">
                <form id="addVoucherForm" name="addVoucherForm" enctype="multipart/form-data" method="POST">
                    <h2 class="font-normal">Add Member</h2>
                        <label class="text">Member Id</label>
                            <input type="text" placeholder="member_id" name="member_id"               required>

                        <label class="text">Member Name</label>
                            <input type="text" placeholder="member_name" name="member_name"            required>

                        <label class="text">Member email</label>
                            <input type="email" placeholder="member_email" name="member_email"      required>

                        <label class="text">Member Password</label>
                            <input type="password"  placeholder="member_password"  name="member_pw"       required>

                        <label class="text">Member phone</label>
                            <input type="text"  placeholder="member_phone" name="member_phone" required>

                        <label class="text">Member Gender</label>
                            <input type="text"  placeholder="member_gender" name="member_gender"        required>

                        <label class="text">Member Point</label>
                            <input type="text"  placeholder="member_point"  name="member_point"       required>
                        
                        <label class="text">Member Address</label>
                            <input type="text"  placeholder="member_address" name="member_address"        required>

                            <button class="submit-btn" type="submit" name="memberadd" >Submit</button>
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
        if (isset($_POST["memberadd"])) 	
        {
            $mid = $_POST['member_id'];  	 
            $mname=$_POST['member_name'];
            $memail = $_POST['member_email'];
            $mpw =$_POST['member_pw'];
            $mphone = $_POST['member_phone'];
            $mgender= $_POST['member_gender'];	
            $mpoint = $_POST['member_point'];
            $madds=$_POST['member_address'];
         
            $sql = "INSERT INTO user VALUES('$mid','$mname','$memail','$mpw','$mphone','$mgender','$mpoint','$madds')";

            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              
              mysqli_close($conn);
        }
?>

