<?php
include("admin_design.php");
include("dataconnection.php");

$sql = "SELECT * FROM staff";
$result = $conn->query($sql);

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
                    <input type="text" name="staff_id"    class=""  placeholder="<?php echo $row['staff_id'];?>"       disabled>

                <label class="text">Staff's Name</label>
                    <input type="text" name="staff_name"  class=""  placeholder="staff_name"        required>

                <label class="text">Staff Email</label>
                    <input type="text" name="staff_email" class=""  placeholder="staff_email"       required>

                <label class="text">Staff Gender</label>
                    <input type="text" name="staff_gender"   class=""  placeholder="staff_gender" required>

                <label class="text">Staff Phone</label>
                    <input type="text" name="staff_phone"   class=""  placeholder="staff_phone"         required>
                
                <label class="text">Staff Image</label>
                    <input type="file" name="staff_image"   class=""          required>

                    <button class="submit-btn" type="submit" >Submit</button>
            </form>
        </div>
</body>
</html>