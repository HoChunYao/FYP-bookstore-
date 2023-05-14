<?php include("customer_design.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS_folder/admin_db.css">
    <!--<link href="CSS_folder/user_dash.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>-->
</head>
<body>
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
                            <h1 class="font-normal">Member Profile</h1>

                            <label class="text">Member Id</label>
                            <input type="user_id" id="user_id" value="M1001" disabled>

                            <label class="text">Member's Name</label>
                            <input type="user_name" id="user_name" value="Ho Chun Yao" disabled>

                            <label class="text">Member Email</label>
                            <input type="user_email" id="user_email" value="1211203559@student.mmu.edu.my" disabled>

                            <label class="text">Member Phone</label>
                            <input type="user_phone" id="user_phone" value="018-790 2295" disabled>

                            <label class="text">Member Gender</label>
                            <input type="user_phone" id="user_phone" value="Male" disabled>

                            <label class="text">Member Point</label>
                            <input type="user_phone" id="user_phone" value="300" disabled>

                            <button class="submit-btn" type="button" ><a href="customer_profileEdit.php">Edit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>