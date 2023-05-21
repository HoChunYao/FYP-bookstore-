<?php
    include("admin_design.php");
    include("dataconnection.php");

        $x=0;
        $sql = "SELECT * FROM enquiry ";
        $result = $conn->query($sql);
        $y = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Enquiry</title>
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
            <div class="cardBox" style="grid-template-columns: repeat(2, 1fr);">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $y;?> </div>
                        <div class="cardName">Total Enquiry</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Total Reply</div>
                    </div>

                    <div class="iconBx">
                        <i class="fa-solid fa-check"></i>
                    </div>
                </div>

            </div>
            <!-- ======================= Enquiry List ================== -->
            <div class="table">
                <table>
                    <tr>
                        <td colspan="3">
                            <h2>Enquiry</h2>
                        </td>
                        <td colspan="1">
                                <button type="button" class="all-btn" ><a href="admin_product.php">See all Enquiry</a></button>
                        </td>
                    </tr>
                <div class="table-head">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Question</th>
                    </tr>
                </div>

                <?php
                //php
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $x++;
                ?>

                <tbody>
                    <tr>
                        <td><?php echo $x;?></td>
                        <td><?php echo $row["contact_name"] ?></td>
                        <td><?php echo $row["contact_email"] ?></td>
                        <td><?php echo $row["contact_qs"] ?></td>
                    </tr>
                </tbody>
                <?php 
                //for while loop
                        }
                ?>
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

<?php
                    // for if loop
                    }
                    else {
                        echo "0 results";
                    }
                    $conn->close();
?>