<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="CSS_folder/about_us.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/b53b5df5eb.js" crossorigin="anonymous"></script>
        <style>
            body{
                 
            }
            h1{
                font-weight:bold;
                padding:20px;
                text-align:center;
                font-size:64px;
            }
            a,a:visited{
                text-decoration:none;
                color:black;
            }
            .details{
                padding:70px;
                text-align:left;
                font-size:18px;
            }
            .details i{
                color:#E2DECB;
            }
            .form{
                padding-top:30px;
                
            }
            .button{
                background-color:#E2DECB;
                color:black;
            }
            .button:hover{
                background-color:grey;
                color:white;
            }
            .container{
                padding-bottom: 50px;
            }
        </style>
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 details">
                <a href="#">
                <p><i class="fa-solid fa-location-dot fa-xl"></i>    Persiaran Bestari, Cyber 11, 63000 Cyberjaya, Selangor</p>
                </a>
                <br>
                <p><i class="fa-solid fa-phone fa-xl"></i>    +6012-3456789 / 03-16516545</p>
                <br>
                <p><i class="fa-solid fa-envelope fa-xl"></i>    upbook23423@gmail.com</p>
                </div>
                <div class="col-md-6 form">
                <form action="contact_collect.php" method="post">
                    <div class="form-group">
                        <label for="nameInput">Full Name</label>
                        <input type="text" class="form-control" id="contact_name" placeholder="Enter your name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="emailInput">Email address</label>
                        <input type="email" class="form-control" id="contact_email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="feedback">Feedback</label>
                        <textarea class="form-control" id="contact_qs" placeholder="Text your message here"></textarea>
                    </div>
                    <br>
                    <button name="sumbit" type="submit" class="btn button">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php include("footer.php"); ?>