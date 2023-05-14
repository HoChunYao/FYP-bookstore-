<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book Details</title>
        <link rel="stylesheet" type="text/css" href="CSS_folder/book_details.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            .card-body img{
                height: 300px;
                width: 200px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 image-container">
            <!-- First column (Book Image)-->
            <div class="card rounded-0">
                <div class="card-body">
                    <img src="media/book1.jpg" alt=" " title="" >
                </div>
            </div>
            </div>
            <div class="col-md-6 order-container">
            <!-- Second column (order details) -->
            <div class="card rounded-0">
                <div class="card-body">
                    <h3 class="card-title">Book 1</h3>
                    <h5>Author</h5>
                    <div class="star-rating">
                        <input id="star-1" type="radio" name="rating" value="1">
                        <label for="star-1" title="1 star">&#9733;</label>
                        <input id="star-2" type="radio" name="rating" value="2">
                        <label for="star-2" title="2 stars">&#9733;</label>
                        <input id="star-3" type="radio" name="rating" value="3">
                        <label for="star-3" title="3 stars">&#9733;</label>
                        <input id="star-4" type="radio" name="rating" value="4">
                        <label for="star-4" title="4 stars">&#9733;</label>
                        <input id="star-5" type="radio" name="rating" value="5">
                        <label for="star-5" title="5 stars">&#9733;</label>  
                    </div>
                    <h6>Stock : 50</h6>
                    <input type="number" id="quantity" name="cust_qty" min="1" max="10">
                    <a href="customer_addtocart.php">
                        <button>Add to Cart</button>
                    </a>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <!-- Third row (description) -->
            <div class="card rounded-0">
                <div class="card-body">
                <h5 class="card-title ">Description</h5>
                <p class="card-text">"Product Leadership" is a must-read book for anyone looking to understand the complex world of product management and leadership. Written by industry experts Rich Mironov, Martin Eriksson, and Nate Walkingshaw, this book offers a comprehensive guide on how to build, launch, and scale successful products.
Drawing on their decades of experience leading product teams in some of the world's most successful companies, the authors provide valuable insights into the key principles of product leadership. They cover topics such as product strategy, user research, product development, product marketing, and more.
The book is full of practical advice and real-world examples that will help product leaders navigate the challenges of building and scaling successful products. Whether you are a seasoned product leader or just starting out in your career, "Product Leadership" is an invaluable resource that will help you become a better leader and build products that your customers will love.
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <!-- Fourt row (user comment) -->
            <div class="card rounded-0">
                <div class="card-body">
                    <h5 class="card-title">Comment</h5> 
                    <div class="comment">
                        <h6>user6969</h6>
                        <label>&#9733;&#9733;&#9733;&#9733;&#9733;</label>
                        <p>5star</p>
                        <p class="card-text">nice book 100% recommended</p>
                    </div>
                    <div class="comment">
                        <h6>user6969</h6>
                        <label>&#9733;&#9733;&#9733;&#9733;&#9733;</label>
                        <p>5star</p>
                        <p class="card-text">nice book 100% recommended</p>
                    </div>
                    <div class="comment">
                        <h6>user6969</h6>
                        <label>&#9733;&#9733;&#9733;&#9733;&#9733;</label>
                        <p>5star</p>
                        <p class="card-text">nice book 100% recommended</p>
                    </div>
                    <div class="comment">
                        <h6>You</h6>
                        <div class="star-rating">
                            <input id="star-1" type="radio" name="rating" value="1">
                            <label for="star-1" title="1 star">&#9733;</label>
                            <input id="star-2" type="radio" name="rating" value="2">
                            <label for="star-2" title="2 stars">&#9733;</label>
                            <input id="star-3" type="radio" name="rating" value="3">
                            <label for="star-3" title="3 stars">&#9733;</label>
                            <input id="star-4" type="radio" name="rating" value="4">
                            <label for="star-4" title="4 stars">&#9733;</label>
                            <input id="star-5" type="radio" name="rating" value="5">
                            <label for="star-5" title="5 stars">&#9733;</label>  
                        </div>
                        <textarea placeholder="Write your comment here"></textarea>
                        <a href="#">
                        <button>Post Comment</button>
                        <a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </body>
</html>
<?php
include("footer.php");
?>