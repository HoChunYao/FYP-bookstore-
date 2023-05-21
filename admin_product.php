<?php
session_start();
include("admin_design.php");
include("dataconnection.php");

        $sql = "SELECT * FROM book";
        $result = $conn->query($sql);
        $x = 0;
        $y = mysqli_num_rows($result);
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
    <script>
        function confirmation(){
            var answer=confirm("Do you really want to delete this product?");
            return answer;
        }
    </script>
            <!-- ======================= Cards ================== -->
            <div class="cardBox" style="grid-template-columns: repeat(3, 1fr);">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $y;?></div>
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
                        <th>No.</th>
                        <th>Book image</th>
                        <th>Book id</th>
                        <th>Book name</th>
                        <th>Genre</th>
                        <th>Book Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Staff Id</th>
                        <th colspan="2";>Action</th>
                    </tr>
                </div>
                <tbody>
                <?php
                        while($row = $result->fetch_assoc())
                        {
                            $x++;
                    ?>			
                    <tr>
                        <td><?php echo $x; ?></td>
                        <td><?php echo '<img src="book_img/'.$row['book_img'].'">' ?></td>
                        <td><?php echo $row["book_id"]; ?></td>
                        <td><?php echo $row["book_name"]; ?></td>
                        <td><?php echo $row["book_genre"]; ?></td>
                        <td><?php echo $row["book_des"]; ?></td>
                        <td><?php echo $row["book_price"]; ?></td>
                        <td><?php echo $row["book_qty"]; ?></td>
                        <td><?php echo $_SESSION["staff_id"]; ?></td>
                        <td><a href="admin_productEdit.php?edit&bid=<?php echo $row["book_id"];?>">Edit</a></td>
                        <td><a href="admin_product.php?del&bid=<?php echo $row["book_id"];?>" onclick="return confirmation();">Delete</a></td>
                    </tr>
				    <?php
				        }  		
			        ?>
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
    <?php
        if (isset($_GET["del"])) 
        {
            $bid=$_GET["bid"];
            $sql="DELETE FROM book where book_id='$bid'";
            $result = $conn->query($sql);
            
            header("Refresh:0");
        }
    ?>
    <!-- =========== Scripts =========  -->
    <script src="main.js">


    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/1cf0f3907a.js" crossorigin="anonymous"></script>
</body>

</html>