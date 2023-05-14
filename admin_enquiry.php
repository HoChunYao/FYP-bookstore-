<?php
include("admin_design.php");
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
                        <div class="numbers">4</div>
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
            <!-- ======================= Product List ================== -->
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
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Curious guy</td>
                        <td>curious123@gmail.com</td>
                        <td>Can i get refund if i buy that book 5 days ago?</td>
                    </tr>

                    <tr>
                        <td>2.</td>
                        <td>Furious guy</td>
                        <td>Furious123@gmail.com</td>
                        <td>Can i get free gift if i buy 10 books?</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Happy guy</td>
                        <td>happy123@gmail.com</td>
                        <td>Did the store provide us free bookmark?</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Sad guy</td>
                        <td>Sad@gmail.com</td>
                        <td>When will the book Two Piece by Eiichiro Ado available for sale?</td>
                    </tr>
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