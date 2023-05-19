<?php
include("admin_design.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="CSS_folder/admin_table_design.css">
        <title>Admin Member Detail</title>
    <style>
        td.btn-center{
            text-align: center;
        }
    </style>
    </head>
<body>
     <!-- ======================= Cards ================== -->
     <div class="cardBox" style="    grid-template-columns: repeat(2, 1fr);">
                <div class="card">
                    <div>
                        <div class="numbers">2</div>
                        <div class="cardName">Active member</div>
                    </div>

                    <!--<div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>-->
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Unactive member</div>
                    </div>

                <!--    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>-->
                </div>
     </div>

    <!-- ======================= Product List ================== -->
    <div class="table">
                <table>
                    <tr>
                        <td colspan="4">
                            <h2>Member list</h2>
                        </td>
                        <td colspan="4">
                                <button type="button" class="all-btn" ><a href="admin_memberdetail.php">See All Member</a></button>
                        </td>
                    </tr>

                    <tr>
                        <th>No.</th>
                        <th>Member ID</th>
                        <th>Member Name</th>
                        <th>Member Email</th>
                        <th>Member Phone</th>
                        <th>Member Point</th>
                        <th>Member Address</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <div class="content">
                        <?php
                            $sql = "SELECT * FROM delivery";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc())
                            {
                        ?>			
                        <tr>
                            <td><?php echo $row["member_id"]; ?></td>
                            <td><?php echo $row["delivery_status"]; ?></td>
                            <td><?php echo $row["payment_id"]; ?></td>
                            <td><a href="edit_product.php?edit&did=<?php echo $row["delivery_id"];?>">Edit</a></td>
                            <td><a href="list_product.php?del&did=<?php echo $row["delivery_id"];?>" onclick="return confirmation();">Delete</a></td>
                        </tr>
                        <?php
                            }  		
                        ?>
                        </tbody>
                        </div>
                    </tr>

        
                </table>
            </div>
</body>
</html>