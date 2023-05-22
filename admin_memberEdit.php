<?php
    
    include("admin_design.php");
    include("dataconnection.php");
?>
<html>
    <head>
        <title>Member Profile Edit</title>
        <link href="CSS_folder/admin_form_design.css" rel="stylesheet" type="text/css"/>
    </head>
<body>
    <?php
            if (isset($_GET["edit"])) {
                $mid = $_GET["mid"];
                $sql="SELECT * FROM user WHERE user_id='$mid'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
            }
		?>
        <div class="form">
            <form id="ProfileEditForm" name="ProfileEditForm" enctype="multipart/form-data" method="POST">
                <h2 class="font-normal">Update User Profile</h2>
                <label class="text">User Id</label>
                    <input type="text" name="user_id"    class=""  value="<?php echo $row['user_id'];?>"       disabled>

                <label class="text">User Name</label>
                    <input type="text" name="user_name"  class=""  value="<?php echo $row["user_name"]; ?>"       >

                <label class="text">User Email</label>
                    <input type="text" name="user_email" class=""  value="<?php echo $row["user_email"]; ?>"      >

                <label class="text">User Gender</label>
                    <input type="text" name="user_gender"   class=""  value="<?php echo $row["user_gender"]; ?>"   >

                <label class="text">User Phone</label>
                    <input type="text" name="user_phone"   class=""  value="<?php echo $row["user_phone"]; ?>"   >
                    
                <label class="text">User point</label>
                        <input type="text"  name="user_point" value="<?php echo $row["user_point"]; ?>"       >
                        
                <label class="text">User Address</label>
                        <input type="text"  name="user_address" value="<?php echo $row["user_address"]; ?>"        >


                    <button class="submit-btn" type="submit" name="userEdit">Submit</button>
            </form>
        </div>
</body>
</html>

<?php 
if (isset($_POST["userEdit"])) 	
{	 
    $mname=$_POST['user_name'];
    $memail = $_POST['user_email'];
    $mpw =$_POST['user_pw'];
    $mphone = $_POST['user_phone'];
    $mgender= $_POST['user_gender'];
    $mpoint= $_POST['user_point'];
    $madds= $_POST['user_address'];

    $mql = "UPDATE user SET user_name='$mname', user_pw='$mpw',user_email='$memail',user_gender='$mgender' 
                ,user_phone='$mphone',user_point='$mpoint',user_address='$madds' WHERE user_id='$mid' ";
    //$result = $conn->query($sql);
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
}
?>