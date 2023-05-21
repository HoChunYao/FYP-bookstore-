<?php
session_start();
include("admin_design.php");
include("dataconnection.php");
    $sql = "SELECT * FROM reward";
    $result = $conn->query($sql);
    $x=0;
    $y = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Voucher Detail</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="CSS_folder/admin_db.css">
    <link rel="stylesheet" href="CSS_folder/admin_table_design.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
</head>

<body>
    <script>
        function confirmation(){
            var answer=confirm("Do you really want to delete this product?");
            return answer;
        }
    </script>
            <!-- ======================= Cards ================== -->
            <div class="cardBox" style="grid-template-columns: repeat(2, 1fr);">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $y; ?></div>
                        <div class="cardName">Total Voucher</div>
                    </div>
                    <div class="iconBx">
                        <i class="fa-solid fa-gift"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Total Used</div>
                    </div>
                    <div class="iconBx">
                        <i class="fa-solid fa-check"></i>
                    </div>
                </div>
            </div>
            <!-- ======================= Product List ================== -->
            <div class="table">
                <table>
                    </tr>
                        <td colspan="7">
                            <h2>Voucher Detail</h2>
                        </td>
                        <td colspan="1">
                                <button type="button" class="all-btn" ><a href="admin_voucher.php">See all Voucher</a></button>
                        </td>
                    </tr>
                    <div class="table-head">
                        <tr>
                            <th>No.</th>
                            <th>Voucher image</th>
                            <th>Voucher Id</th>
                            <th>Voucher name</th>
                            <th>Voucher Quantity</th>
                            <th>Voucher point</th>
                            <th>Staff Id</th>
                            <th colspan='2';>Action</th>    
                        </tr>
                    </div>
                    <tbody>
                    <tr>
                    <?php
                        while($row = $result->fetch_assoc())
                        {
                            $x++;
                    ?>			
                    <tr>
                        <td><?php echo $x;?></td>
                        <td><?php echo '<img src="reward_img/'.$row['reward_img'].'">' ?></td>
                        <td><?php echo $row["reward_id"]; ?></td>
                        <td><?php echo $row["reward_item"]; ?></td>
                        <td><?php echo $row["reward_qty"]; ?></td>
                        <td><?php echo $row["reward_point"]; ?></td>
                        <td><?php echo $_SESSION["staff_id"]; ?></td>
                        <td><a href="admin_voucherEdit.php?edit&rwid=<?php echo $row["reward_id"];?>">Edit</a></td>
                        <td><a href="admin_voucher.php?del&rwid=<?php echo $row["reward_id"];?>" onclick="return confirmation();">Delete</a></td>
                    </tr>
				    <?php
				        }  		
			        ?>
                    </tr>
                    </tbody>


                    <tr>
                        <!--<div class="all-product">-->
                            <td colspan="9" class="btn-center">
                                <a href="admin_voucherAdd.php">
                                    <button type="button" class="add-btn" ><a href="admin_voucherAdd.php">Add Voucher</button>
                                </a>
                            </td>
                        <!--</div>-->
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php
        if (isset($_GET["del"])) 
        {
            $rwid=$_GET["rwid"];
            $sql="DELETE FROM reward where reward_id='$rwid'";
            $result = $conn->query($sql);

            header("Refresh:0");
        }
    ?>
    <!-- =========== Scripts =========  -->
    <script src="main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/1cf0f3907a.js" crossorigin="anonymous"></script>
</body>
</html>