<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="CSS_folder/header.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
</head>
<body>
    <header>
        <nav class="nav2">
            <div class="list">      
                <div class="logo">
                <ul class="ul1">
                    <button type="button" class="logo1" onclick="window.location.href='index.php';">
                        <img src="media/logo.png "height=" 45px" width="74px;" >
                    </button>
                </ul>
                </div>
                <div class="mainmenu">
                    <ul class="ul1">
                        <div class="search-cont">
                            <form action="/action_page.php">
                                <li> <input type="text" placeholder="Search.." name="search" class="searchbar">
                              <button type="submit" class="search-btn"><i class="fa fa-search"></i></button><li> 
                            </form>
                        </div>
                        
                            <div class="dropdown">
                            <li><button type="button" class ="nav1" onclick="window.location.href='book_list.php';"><b>Books</b></button>
                            <div class="dropdown-content">
                                <a href="#">Horror</a>
                                <a href="#">Science Fiction</a>
                                <a href="#">Education</a>
                            </div>
                        </li>    
                        </div>
                        <li> <button type="button" class ="nav1" onclick="window.location.href='about_us.php';"><b>About Us</b></button></li>
                        <li> <button type="button" class ="nav1" onclick="window.location.href='contact_us.php';"><b>Contact Us </b></button></li>
                        <li> <button type="button" class ="nav1" onclick="window.location.href='customer_addtocart.php';"><b>Cart </b></button></li>
                    </ul>
                </div>
                <div class="alllogin">
                    <ul class="ul1">
                        <a href="login_page.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <body>
</html>