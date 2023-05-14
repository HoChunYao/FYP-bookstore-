<?php include("customer_design.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer History</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_folder/admin_table_design.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
    <div class="table">
                <table>
                    </tr>
                        <td colspan="9" style="text-align: center;">
                            <h2>Purchase History</h2>
                        </td>
                    </tr>

                    <tr>
                        <th>No.</th>
                        <th>Order detail Id</th>
                        <th>Order Id</th>
                        <th>Book Image</th>
                        <th>Book Name</th>
                        <th>Book Quantity</th>
                        <th>Book Price</th>
                        <th>Total price</th>
                        <th>Comment section</th>
                    </tr>

                    <tr >
                        <td rowspan="2">1.</td>
                        <td rowspan="2">OD001</td>
                        <td>Order001</td>
                        <td>
                            <img src="media/book1.jpg" alt="">
                        </td>
                        <td>Product leadership</td>
                        <td>1</td>
                        <td>RM 199.00</td>
                        <td>RM 199.00</td>
                        <td>
                            <a href="book_details.php">
                                <button class="comment-btn" type="button">comment</button>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>Order002</td>
                        <td>
                            <img src="media/book2.jpg" alt="">
                        </td>
                        <td>The Mind of a leader</td>
                        <td>2</td>
                        <td>RM 99.00</td>
                        <td>RM 198.00</td>
                        <td>
                            <a href="book_details.php">
                                <button class="comment-btn" type="button">comment</button>
                            </a>
                        </td>
                    </tr>
                    <tr >
                        <td >2.</td>
                        <td >OD002</td>
                        <td>Order003</td>
                        <td>
                            <img src="media/book1.jpg" alt="">
                        </td>
                        <td>Product leadership</td>
                        <td>1</td>
                        <td>RM 199.00</td>
                        <td>RM 199.00</td>
                        <td>
                            <a href="book_details.php">
                                <button class="comment-btn" type="button">comment</button>
                            </a>
                        </td>
                    </tr>
                </table>
        </div>
</body>
</html>
