<?php
include("admin_design.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Product Detail</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="CSS_folder/admin_db.css">
    <link rel="stylesheet" href="CSS_folder/admin_table_design.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <style>
        .all-btn a:hover{
            color: lightgreen;
        }
    </style>
</head>

<body>
            <!-- ======================= Cards ================== -->
            <div class="cardBox" style="grid-template-columns: repeat(3, 1fr);">
                <div class="card">
                    <div>
                        <div class="numbers">3 00</div>
                        <div class="cardName">Total Product</div>
                    </div>

                    <div class="iconBx">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <!-- ======================= Product List ================== -->
                            
            <div class="table">
                <table>
                <tr>
                    <td colspan="4"><h2>Product Detail</h2></td>
                    <a href="admin_product.php">
                    <td colspan="5"><button type="button" class="all-btn" >See all product</button></td>
                    </a>
                </tr>  
                <div class="table-head">
                    <tr>
                        <th>Book image</th>
                        <th>Book id</th>
                        <th>Book name</th>
                        <th>Genre</th>
                        <th>Book Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Staff Id</th>
                        <th>Action</th>
                    </tr>
                </div>
                <tbody>
                    <tr>
                        <td>
                            <img src="media/book1.jpg" alt="">
                        </td>
                        <td>1</td>
                        <td>Product Leardership</td>
                        <td>Education</td>
                        <td>...</td>
                        <td>RM 199.00</td>
                        <td>10</td>
                        <td>ST1001</td>
                        <td class="table-icon">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="media/book2.jpg" alt="">
                        </td>
                        <td>1</td>
                        <td>The mind of Leader</td>
                        <td>Education</td>
                        <td>...</td>
                        <td>RM 99.00</td>
                        <td>15</td>
                        <td>ST1001</td>
                        <td class="table-icon">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="media/book1.jpg" alt="">
                        </td>
                        <td>1</td>
                        <td>Product Leardership</td>
                        <td>Education</td>
                        <td>...</td>
                        <td>RM 199.00</td>
                        <td>10</td>
                        <td>ST1001</td>
                        <td class="table-icon">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="media/book2.jpg" alt="">
                        </td>
                        <td>1</td>
                        <td>The mind of Leader</td>
                        <td>Education</td>
                        <td>...</td>
                        <td>RM 99.00</td>
                        <td>15</td>
                        <td>ST1001</td>
                        <td class="table-icon">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </td>
                    </tr>
                </tbody>

                    <tr>
                        <div class="all-product">
                            <td colspan="9" class="btn-center">
                                <a href="admin_productAdd.php">
                                    <button type="button" class="add-btn" >Add Product</button>
                                </a>
                            </td>
                        </div>
                    </tr>
                </table>
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