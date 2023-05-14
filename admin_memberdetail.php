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
                            <td>1.</td>
                            <td>M001</td>
                            <td>Ho Chun Yao </td>
                            <td>1211203559@student.mmu.edu.my</td>
                            <td>018-790 2295</td>
                            <td>1000</td>
                            <td>43, jalan bestari 21/4 taman nusa bestari 81300 johor bahru ,johor</td>
                            <td>
                                <button class="edit-btn" type="button">Edit</button>
                            </td>
                        </div>
                    </tr>

                    <tr>
                        <div class="content">
                            <td>2.</td>
                            <td>M002</td>
                            <td>Ho Chun Yao </td>
                            <td>1211203559@student.mmu.edu.my</td>
                            <td>018-790 2295</td>
                            <td>1000</td>
                            <td>43, jalan bestari 21/4 taman nusa bestari 81300 johor bahru ,johor</td>
                            <td>
                                <button class="edit-btn" type="button">Edit</button>
                            </td>
                        </div>
                    </tr>
                        <tr>
                                <td colspan="9" class="btn-center">
                                    <button type="button" class="add-btn" ><a href="admin_memberAdd.php">Add Member</a></button>
                                </td>
                        </tr>
                </table>
            </div>
</body>
</html>