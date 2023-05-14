<?php
include("admin_design.php");
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
            <!-- ======================= Cards ================== -->
            <div class="cardBox" style="grid-template-columns: repeat(2, 1fr);">
                <div class="card">
                    <div>
                        <div class="numbers">10</div>
                        <div class="cardName">Total Voucher</div>
                    </div>

                    <div class="iconBx">
                        <i class="fa-solid fa-gift"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
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

                    <tr>
                        <th>No.</th>
                        <th>Voucher Id</th>
                        <th>Voucher image</th>
                        <th>Voucher name</th>
                        <th>Voucher point</th>
                        <th>Voucher Quantity</th>
                        <th>Staff Id</th>
                        <th>Action</th>
                    </tr>
                <div class="repeat">
                    <tr>
                        <td>1.</td>
                        <td>V001</td>
                        <td>
                            <img src="media/free_delivery.png" alt="">
                        </td>
                        <td>free delivery</td>
                        <td>1000 point</td>
                        <td>3000</td>
                        <td>1211203559</td>
                        <td>
                            <button class="edit-btn" type="button">Edit</button>
                        </td>
                    </tr>
                </div>

                    <tr>
                        <td>2.</td>
                        <td>V002</td>
                        <td>
                            <img src="media/5percent.png" alt="">
                        </td>
                        <td>5% offer</td>
                        <td>3000 point</td>
                        <td>3000</td>
                        <td>1211203559</td>
                        <td>
                            <button class="edit-btn" type="button">Edit</button>
                        </td>
                    </tr>

                    <tr>
                        <td>3.</td>
                        <td>V002</td>
                        <td>
                            <img src="media/10percent.png" alt="">
                        </td>
                        <td>10% offer</td>
                        <td>3000 point</td>
                        <td>3000</td>
                        <td>1211203559</td>
                        <td>
                            <button class="edit-btn" type="button">Edit</button>
                        </td>
                    </tr>

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

    <!-- =========== Scripts =========  -->
    <script src="main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/1cf0f3907a.js" crossorigin="anonymous"></script>
</body>

</html>