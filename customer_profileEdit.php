<?php
include("customer_design.php");
?>
<html>
    <head>
        <title>Customer Profile Edit</title>
        <link href="CSS_folder/admin_form_design.css" rel="stylesheet" type="text/css"/>
    </head>
<body>
        <div class="form">
            <form id="ProfileEditForm" name="ProfileEditForm" enctype="multipart/form-data" method="POST">
                <h2 class="font-normal">Member Profile</h2>
                <label class="text">Member Id</label>
                    <input type="text" name="user_id"    class=""  value="M1001"        disabled>

                <label class="text">Member's Name</label>
                    <input type="text" name="user_name"  class=""  placeholder="member_name"        required>

                <label class="text">Member Email</label>
                    <input type="text" name="user_email" class=""  placeholder="member_email"       required>

                <label class="text">Member Gender</label>
                    <input type="text" name="user_gender"   class=""  placeholder="member_gender"  required>

                <label class="text">Member Phone</label>
                    <input type="text" name="user_phone"   class=""  placeholder="member_phone"         required>

                    <button class="submit-btn" type="button" ><a href="customer_profile.php">Submit</button>
            </form>
        </div>
</body>
</html>