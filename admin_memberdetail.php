<?php
include("admin_design.php");
include("dataconnection.php");
        $x=0;
        $sql = "SELECT * FROM user ";
        $result = $conn->query($sql);
        $y = mysqli_num_rows($result);
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
    <script>
        function confirmation(){
            var answer=confirm("Do you really want to delete this product?");
            return answer;
        }
    </script>
     <!-- ======================= Cards ================== -->
     <div class="cardBox" style="    grid-template-columns: repeat(2, 1fr);">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $y;?></div>
                        <div class="cardName">Active member</div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Unactive member</div>
                    </div>
                </div>
     </div>

    <!-- ======================= Show Member List ================== -->
    <div class="table">
                <table>
                    <tr>
                        <td colspan="8">
                            <h2>Member list</h2>
                        </td>
                        <td colspan="1">
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
                        <th colspan="2">Action</th>
                    </tr>
                    <?php
                        if ($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()) {
                            $x++;
                    ?>
                    <tr>
                        <div class="content">
                            <td><?php echo $x; ?></td>
                            <td><?php echo $row["user_id"] ?></td>
                            <td><?php echo $row["user_name"] ?> </td>
                            <td><?php echo $row["user_email"] ?></td>
                            <td><?php echo $row["user_phone"] ?></td>
                            <td><?php echo $row["user_point"] ?></td>
                            <td><?php echo $row["user_address"] ?></td>
                            <td><a href="admin_memberEdit.php?edit&mid=<?php echo $row["user_id"];?>">Edit</a></td>
                            <td><a href="admin_product.php?del&mid=<?php echo $row["user_id"];?>" onclick="return confirmation();">Delete</a></td>
                        </div>
                    </tr>
                    <?php 
                        }
                    ?>
                        <tr>
                                <td colspan="9" class="btn-center">
                                    <button type="button" class="add-btn" ><a href="admin_memberAdd.php">Add Member</a></button>
                                </td>
                        </tr>
                </table>
            </div>
            <?php
                if (isset($_GET["del"])) 
                {
                    $mid=$_GET["mid"];
                    $sql="DELETE FROM user where user_id='$mid'";
                    $result = $conn->query($sql);
                    
                    header("Refresh:0");
                }
            ?>
</body>
</html>
<?php
} else {
  echo "0 results";
}
$conn->close();
?>