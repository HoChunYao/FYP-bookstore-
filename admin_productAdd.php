<?php
include("admin_design.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Add Product</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="CSS_folder/admin_db.css">
    <link rel="stylesheet" href="CSS_folder/admin_addproduct.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <style>
        form{
            text-align: center;
            padding: 20px 10px;
            border: 1px solid black;
            width: 80%;
            background: white;
            border-radius: 20px;
        }
        .product-form{
            justify-content: center;
            display: flex;
            padding: 20px 0;
        }
        input[type=text],input[type=file]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .font-normal{
            text-align: center;
        }
        label{
            justify-content: left;
            display: flex;
        }
        .Add-product-button{
            width: 190px;
            height: 50px;
            margin: auto;
            border-radius: 4px;
            border: 1px;
            background: bisque;
        }
        .search label ion-icon {
            position: absolute;
            top: 17px;
            left: 10px;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>

            <!-- ======================= Add Product Form================== -->
            <div class="product-form">
                <form id="addProductForm" name="addProductForm" enctype="multipart/form-data" method="POST">
                    <h2 class="font-normal">Add Product</h2>
                        <label>Book Id</label>
                            <input type="text" name="book_id"    class=""  placeholder="Book_id"          required>

                        <label>Book Name</label>
                            <input type="text" name="book_name"  class=""  placeholder="Book_name"        required>

                        <label>Book Genre</label>
                            <input type="text" name="book_genre" class=""  placeholder="Book_Genre"       required>

                        <label>Book Description</label>
                            <input type="text" name="book_des"   class=""  placeholder="Book_Description" required>

                        <label>Book Price</label>
                            <input type="text" name="book_price" class=""  placeholder="Book_Price"       required>

                        <label>Book Quantity</label>
                            <input type="text" name="book_qty"   class=""  placeholder="Book_Quantity"    required>

                        <label>Staff ID</label>
                            <input type="text" name="staff_id"   class=""  placeholder="Staff_id"         required>

                        <label>Book_image</label>
                            <input type="file" name="book_img"   class=""                               required>

                        <div class="Add-product-button">
                            <button class="Add-product-button" type="button" >Submit</button>
                        </div>
                </form>
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