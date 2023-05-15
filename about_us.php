<?php 
include("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            body{
                font-family:"Segoe UI",Roboto,"Helvetica Neue","Noto Sans","Liberation Sans",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            }
            .img img{
                height:500px;
                width:700px;
            }
            .container-box{   
                padding:100px;
            }
            p{
                text-align:justify;
                font-size: 18px;
                line-height: 1.75;
            }
            .row-image{
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <p>test</p>
        <p>test2</p>
        <div class="container-box">
            <div class="row-image">
                <div class="col-md-6 mt-50">
                    <h1>About us </h1>
                <p>
                Welcome to UpBook, a unique bookstore created by a team of enthusiastic university IT students. Our love for books and technology inspired us to create a space where people can explore the world of literature in a modern and innovative way.
At UpBook, we offer a wide selection of books, ranging from classic literature to modern bestsellers, as well as books on various academic subjects. We are constantly updating our inventory to ensure that we have the latest and greatest titles available.
 Our goal is to provide a one-stop-shop for all book lovers, and our knowledgeable staff is always on hand to help you find what you're looking for.
At UpBook, we are committed to supporting our community and fostering a love of reading. We believe that books have the power to transform lives and bring people together, and we are proud to be a part of that mission.
Thank you for choosing UpBook, and we hope to see you soon!
                </p>
                </div>
                <div class="col-md-6">
                    <div class="img">
                        <img src="media/about_us.jpg" alt="" title="">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php 
include ("footer.php");
?>