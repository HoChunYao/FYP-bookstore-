<?php

include("admin_design.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Delivery status</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="CSS_folder/admin_db.css">
    <link rel="stylesheet" href="CSS_folder/admin_table_design.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    
</head>
<script>

    function confirmation()
    {
        var answer=confirm("Do you really want to delete this product?");
        return answer;
    }

</script>
<body>
            <!-- ======================= Cards ================== -->
            <div class="cardBox" style="grid-template-columns: repeat(3, 1fr);">
                <div class="card">
                    <div>
                        <div class="numbers">20</div>
                        <div class="cardName">Total Delivery item</div>
                    </div>

                    <div class="iconBx">
                        <i class="fa-solid fa-truck"></i>
                        <!--<ion-icon name="eye-outline"></ion-icon>-->
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">10</div>
                        <div class="cardName">Completed</div>
                    </div>

                    <div class="iconBx">
                        <i class="fa-solid fa-check"></i>
                        <!--<ion-icon name="cart-outline"></ion-icon>-->
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
                        <td colspan="2">
                            <h2>Delivery Status</h2>
                        </td>
                        <td colspan="1">
                                <button type="button" class="all-btn" ><a href="admin_memberdetail.php">See All Status</a></button>
                        </td>
                    </tr>
                    <tr>
                        <th>Delivery ID</th>
                        <th>Delivery Status</th>
                        <th>Payment ID</th>
                    </tr>

                    <tbody>
                    <?php
                        $sql = "SELECT * FROM delivery";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc())
                        {
                    ?>			
                    <tr>
                        <td><?php echo $row["delivery_id"]; ?></td>
                        <td><?php echo $row["delivery_status"]; ?></td>
                        <td><?php echo $row["payment_id"]; ?></td>
                        <td><a href="edit_product.php?edit&did=<?php echo $row["delivery_id"];?>">Edit</a></td>
                        <td><a href="list_product.php?del&did=<?php echo $row["delivery_id"];?>" onclick="return confirmation();">Delete</a></td>
                    </tr>
				    <?php
				        }  		
			        ?>
                    </tbody>
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