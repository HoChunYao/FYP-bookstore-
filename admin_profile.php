<?php
include("admin_design.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Profile</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="CSS_folder/admin_db.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <style>
        .profile_image img{
            width: 30%;
            height: 50%;
            border-radius: 30px;
            margin: 30px;
            border: 1px solid;
        } 
        .profile{
            border: 1px;
            border-radius: 30px;
            background: white;
            margin: 0 20px;
        }
        .profile_image{
            display: flex;
            justify-content: space-between;
        }
        form{
            text-align: center;
            padding: 20px 10px;
            width: 80%;
            background: white;
        }
        input{
            width: 100%;
            padding: 10px 15px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 16px;
        }
        .text{
            display: flex;
            margin: 0 5px;
            font-size:18px;
        }
        .profile-info{
            padding-top:10px;
            width: 300px;
            align-items: center;
        }
        h4 {
            color: #919aa3 !important;
        }
        .profile-info button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            margin: 10px 0;
            border-radius:16px;
        }
        button:hover {
            opacity: 0.7;
        }
        button a{
            text-decoration:none;
            color:white;
        }
        button a:visited{
            text-decoration:none;
            color: white;
        }
    </style>
</head>

<body>
            <!-- ======================= Profile ================== -->
            <div class="profile">
                <div class="profile_image">
                    <img src="media/image.jpg" alt="">

                    <div class="profile-info">
                            <h1 class="font-normal">Admin Profile</h1>

                            <label class="text">Staff Id</label>
                            <input type="s_id" id="s_id" value="ST1001" disabled>

                            <label class="text">Staff's Name</label>
                            <input type="s_name" id="s_name" value="Ho Chun Yao" disabled>

                            <label class="text">Staff Email</label>
                            <input type="s_email" id="s_email" value="1211203559@student.mmu.edu.my" disabled>

                            <label class="text">Staff Phone</label>
                            <input type="s_phone" id="s_phone" value="018-790 2295" disabled>

                            <label class="text">Staff Gender</label>
                            <input type="s_phone" id="s_phone" value="Male" disabled>

                            <button class="submit-btn" type="button" ><a href="admin_profileEdit.php">Edit</button>
                        </form>
                    </div>
                </div>

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