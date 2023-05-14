<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login page</title>
    <!---<link rel="stylesheet" href="login.css">-->
    <!-- for eyes icons and uisng in the password  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
        .login_logo{
            display: flex;
            justify-content: space-around;
            padding: 0 100px;
            padding-top: 50px;
        }
        #admin_member{
            left: 900px;
        }
       .form{
            border: 1px solid black;
            border-radius: 4px;
            height: 370px;
            width: 390px;
            margin: auto;
            overflow: hidden;
            justify-content: center;
            display: flex;
            position: relative;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .info{
            margin: 70px 0;
            position: absolute;
            width:280px;
            transition: 0.5s;
            left: 64px;
            top: 10px;
        }
        .space_between{
            display: flex;
            justify-content: space-between;
            margin: 5px;
        }
        label.pad{
            padding: 5px;
        }
        .login_button{
            width: 85%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: linear-gradient(to right, #20BF55,#01BAEF);
            border: 0;
            outline: none;
            border-radius:30px;
            margin: 20px;
        }
        .background{
            padding: 20px 0;
        }
        .signup{
            color: grey;
            padding: 5px 0;
        }

        #usertype_button{
            width: 220px;
            position: relative;
            box-shadow: 0px 0px 30px 5px rgba(10, 143, 78, 0.75);
            border-radius: 30px;
            height: 50px;
            margin: 10px 0;
            justify-content: space-around;
            display: flex;
        }

        .button{
            padding: 10px 30px;
            cursor: pointer;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
        }

        #button-color{
            top: 0;
            left: 0;
            position: absolute;
            width: 110px;
            height: 100%;
            background: linear-gradient(to right, #20BF55,#01BAEF);
            border-radius: 30px;
            transition: 0.5s;
        }
        .psw a:hover{
            color: lightgreen;
        }
        .signup a:hover{
            color: lightgreen;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="login_logo">
            <img src="media\logodesign.png" alt="logo">
                <div class="form">
                    <div id="usertype_button">
                        <div id="button-color"></div>
                                <button type="button" class="button" onclick="user_member()">User </button>
                                <button type="button" class="button" onclick="admin_member()">Admin </button>
                    </div>

                    <form id="user_member" class="info" action="login_user.php" method="post">
                        <label class="pad">Username</label>
                            <input type="text" name="user_id" class="login" placeholder="Your Name" required>
                        <label class="pad">Password</label>
                            <input type="password" name="user_pw" class="login" placeholder="Password" required>
                        <div class="space_between">
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                            <span class="psw"><a href="#">Forgot Password?</a></span>
                        </div>
                        <div class="signup">
                            <label>Not a member yet?<a href="register_page.php">Sign Up </a></label>
                        </div>
                        <button class="login_button" type="submit">Login</button>
                    </form>

                    <form id="admin_member" class="info" action="login_staff.php" method="post">
                        <label id="pad">Admin Id</label>
                            <input type="text" name="staff_id" class="login" placeholder="Your Name" required>
                        <label id="pad">Password</label>
                            <input type="password" name="staff_pw" class="login" placeholder="Password" required>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        <button class="login_button" type="submit">Login</button>
                    </form>

                </div>
        </div>
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready
    </script>
    <script type="text/javascript">
        var a = document.getElementById("user_member");
        var b = document.getElementById("admin_member");
        var c = document.getElementById("button-color");
        //motion for the button
        function admin_member(){
            a.style.left = "-400px";
            b.style.left = "50px";
            c.style.left = "110px";
        }
        function user_member(){
            a.style.left = "50px";
            b.style.left = "450px";
            c.style.left = "0px";
        }
    </script>
</body>
</html>
<?php
include("footer.php");
?>