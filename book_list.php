<?php 
include("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book List</title>
        <link rel="stylesheet" type="text/css" href="CSS_folder/book_list.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    </head>
    <body>
        <div class="container-header">
            <h1>Browse</h1>
        </div>
        <div class="container">
            
            <div class="filter-container">
                <h3>Genre</h3>
                <div class="checkbox-container">
                    <input type="checkbox" name="genre" value="horror" id="horror1">
                    <label for="horror1">Horror</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="genre" value="romance" id="romance1">
                    <label for="romance1">Romance</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="genre" value="mystery" id="mystery1">
                    <label for="mystery1">Mystery</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="genre" value="science_fiction" id="science_fiction1">
                    <label for="science_fiction1">Science Fiction</label>
                </div>
                <h3>Price</h3>
                <div class="checkbox-container">
                    <input type="checkbox" name="price" value="under50" id="under50">
                    <label for="under50">&lt;50</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="price" value="50to100" id="50to100">
                    <label for="50to100">50-100</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="price" value="over100" id="over100">
                    <label for="over100">&gt;100</label>
                </div>
                <h3>Rating</h3>
                <div class="checkbox-container">
                    <input type="checkbox" name="rating" value="5star" id="5star">
                    <label for="5star">5 Star</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="rating" value="4star" id="4star">
                    <label for="4star">4 Star</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="rating" value="3star" id="3star">
                    <label for="3star">3 Star</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="rating" value="2star" id="2star">
                    <label for="2star">2 Star</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="rating" value="1star" id="1star">
                    <label for="1star">1 Star</label>
                </div>
            </div>
            <div class="product-container">
                <div class="cards">
                    <div class="card">
                        <img src="media/book2.jpg" alt=" " title="" >
                        <h3>book 2</h3>
                        <p class="price">RM 55.5</p>
                        <a href="book_detailsX.php">
                            <button>View Details</button>
                        </a>
                    </div>
                    <div class="card">
                        <img src="media/book1.jpg" alt=" " title="" >
                        <h3>book 1</h3>
                        <p class="price">RM 55.5</p>
                        <a href="book_detailsX.php">
                            <button>View Details</button>
                        </a>
                    </div>
                    <div class="card">
                        <img src="media/book2.jpg" alt=" " title="" >
                        <h3>book 2</h3>
                        <p class="price">RM 55.5</p>
                        <a href="book_details.php">
                            <button>View Details</button>
                        </a>
                    </div>
                    <div class="card">
                        <img src="media/book1.jpg" alt=" " title="" >
                        <h3>book 1</h3>
                        <p class="price">RM 55.5</p>
                        <a href="book_detailsX.php">
                            <button>View Details</button>
                        </a>
                    </div>
                    <div class="card">
                        <img src="media/book2.jpg" alt=" " title="" >
                        <h3>book 2</h3>
                        <p class="price">RM 55.5</p>
                        <a href="book_detailsX.php">
                            <button>View Details</button>
                        </a>
                    </div>
                    <div class="card">
                        <img src="media/book1.jpg" alt=" " title="" >
                        <h3>book 1</h3>
                        <p class="price">RM 55.5</p>
                        <a href="book_detailsX.php">
                            <button>View Details</button>
                        </a>
                    </div>
                    <div class="card">
                        <img src="media/book2.jpg" alt=" " title="" >
                        <h3>book 2</h3>
                        <p class="price">RM 55.5</p>
                        <a href="book_detailsX.php">
                            <button>View Details</button>
                        </a>
                    </div>
                    <div class="card">
                        <img src="media/book1.jpg" alt=" " title="" >
                        <h3>book 1</h3>
                        <p class="price">RM 55.5</p>
                        <a href="book_detailsX.php">
                            <button>View Details</button>
                        </a>
                    </div>
                    <div class="card">
                        <img src="media/book2.jpg" alt=" " title="" >
                        <h3>book 2</h3>
                        <p class="price">RM 55.5</p>
                        <a href="book_detailsX.php">
                            <button>View Details</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
    //script for one checkbox checked at one time
    $('input[type="checkbox"]').on('change', function() {
        $('input[type="checkbox"]').not(this).prop('checked', false);
    });
    //script for one checkbox checked at one time
</script>
</html>
<?php 
include("footer.php");
?>