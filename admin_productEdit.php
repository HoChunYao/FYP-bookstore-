<?php

include("admin_design.php");
include("dataconnection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Product Edit</title>
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
        <?php
            if (isset($_GET["edit"])) {
                $bid = $_GET["bid"];
                $sql="SELECT * FROM book WHERE book_id='$bid'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
            }
		?>

            <!-- ======================= Add Product Form================== -->
            <div class="product-form">
                <form id="addProductForm" name="addProductForm" enctype="multipart/form-data" method="POST">
                    <h2 class="font-normal">Update Product</h2>

                        <label>Book Id</label>
                            <input type="text" name="book_id" value="<?php echo $row["book_id"]?>" disabled>

                        <label>Book Name</label>
                            <input type="text" name="book_name" value="<?php echo $row["book_name"]?>" >

                        <label>Book Author</label>
                            <input type="text" name="book_author" value="<?php echo $row["book_author"]?>"  >

                        <label>Book Genre</label>
                            <input type="text" name="book_genre"value="<?php echo $row["book_genre"]?>" >

                        <label>Book Description</label>
                            <input type="text" name="book_des"  value="<?php echo $row["book_des"]?>" >

                        <label>Book Price</label>
                            <input type="text" name="book_price"value="<?php echo $row["book_price"]?>" >

                        <label>Book Quantity</label>
                            <input type="text" name="book_qty"  value="<?php echo $row["book_qty"]?>" >

                        <label>Staff ID</label>
                            <input type="text" name="staff_id"   class=""  value="<?php echo $row["staff_id"]?>"disabled>

                        <label>Book_image</label>
                            <input type="file" name="book_img"  accept="image/jpg, image/jpeg, image/png" class="" >

                        <div class="Add-product-button">
                            <button class="Add-product-button" type="submit" name="updatebook" >Submit</button>
                        </div>
                </form>
            </div>
            <?php

                if (isset($_POST["updatebook"])) 	
                {
                    $bname = $_POST["book_name"];  	 
                    $bauthor=$_POST["book_author"];
                    $bgenre = $_POST["book_genre"];
                    $bdes = $_POST["book_des"];
                    $bprice = $_POST["book_price"];	
                    $bqty = $_POST["book_qty"];
                    $sid = 1;

                    $bimg = $_FILES['book_img']['name'];
                    $bimg_size = $_FILES['book_img']['size'];
                    $bimg_tmp_name = $_FILES['book_img']['tmp_name'];
                    $bimg_folder = 'book_img/';
                    $target_file =$bimg_folder.$bimg;
                    $imageFileType = pathinfo($bimg,PATHINFO_EXTENSION);

                    $message=array();

                    if(!empty($bimg)){
                        if($bimg_size > 2000000){
                            $message[] = 'Image is too large';
                        }elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                            $message[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        }
                    }

                    if(count($message)==0){
                        $sql = "UPDATE book SET book_img='$bimg', book_name='$bname', book_author='$bauthor', book_genre='$bgenre', book_des='$bdes', book_price='$bprice',book_qty='$bqty'WHERE book_id='$bid';";
                        $result = $conn->query($sql);
                        if (move_uploaded_file($bimg_tmp_name, $target_file)) {

                            $message[] = "Image uploaded successfully";
                
                        }else{
                
                            $message[] = "Failed to upload image";
                
                    }
                        $conn -> close();
                    }
                    
                }
                if(isset($message)){
                    foreach($message as $message){
                        echo $message;
                    }
                }
                

            ?>
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