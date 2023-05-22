<?php
session_start();
if( !isset($_SESSION["staff_id"]) ){
    header("location:login_page.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="CSS_folder/admin_db.css">
    <link href="https://kit.fontawesome.com/b53b5df5eb.js" rel="stylesheet">
    <style>
        
    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="index.php">
                        <img src="media/logo.png" alt=" " title="" >
                        <span class="title" style="padding:10px ">UPbook</span>
                    </a>
                </li>

                <li class="active">
                    <a href="admin_db.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                <a href="admin_profile.php">
                        <span class="icon" style="line-height: 63px;">
                            <i class="fa-regular fa-user"></i>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="admin_delivery.php">
                        <span class="icon" style="line-height: 63px;">
                            <i class="fa-solid fa-truck"></i>
                        </span>
                        <span class="title">Delivery status</span>
                    </a>
                </li>

                <li >
                    <a href="admin_product.php">
                        <span class="icon" style="line-height: 63px;">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </span>
                        <span class="title">Product</span>
                    </a>
                </li>

                <li >
                    <a href="admin_voucher.php">
                        <span class="icon" style="line-height: 63px;">
                            <i class="fa-solid fa-gift"></i>
                        </span>
                        <span class="title">Reward item</span>
                    </a>
                </li>

                <li>
                    <a href="admin_memberdetail.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Member detail</span>
                    </a>
                </li>

                <li>
                    <a href="admin_enquiry.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">View enquiry</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="media/image.jpg" alt="">
                </div>
            </div>

            <div class="admin_image">
                <img src="#" alt="">
            </div>

            <!-- ======================= Cards ================== -->

            <!-- ======================= Cards ================== -->

    <!-- =========== Scripts =========  -->
    <script src="main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/1cf0f3907a.js" crossorigin="anonymous"></script>
</body>

</html>