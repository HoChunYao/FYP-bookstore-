<?php include("customer_design.php");?>

<html>
<head>
    <title>Delivery Status</title>
    <link rel="stylesheet" href="CSS_folder/admin_table_design.css">
    <style>
        span.pending{
            padding: 2px 4px;
            background: #e9b10a;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }
        span.delivered{
            padding: 2px 4px;
            background: #8de02c;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }
    </style>
</head>
<body>
<div class="table">
                <table>
                    </tr>
                        <td colspan="7" style="text-align: center;">
                            <h2>Delivery Status</h2>
                        </td>
                    </tr>

                    <tr>
                        <th>No.</th>
                        <th>Order detail Id</th>
                        <th>Order Id</th>
                        <th>Book Name</th>
                        <th>Total price</th>
                        <th>Delivery Status</th>
                        <th>Comment section</th>
                    </tr>

                    <tr >
                        <td rowspan="2" >1.</td>
                        <td rowspan="2">OD001</td>
                        <td>Order001</td>
                        <td>Product leadership </td>
                        <td rowspan="2" style="background: #f2f2f2;">RM 397.00</td>
                        <td rowspan="2" style="background: #f2f2f2;"><span class="delivered">Delivered</span></td>
                        <td>
                            <a href="book_details.php">
                                <button class="comment-btn" type="button">comment</button>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>Order002</td>
                        <td>The Mind of a leader</td>
                        <td>
                            <a href="book_details.php">
                                <button class="comment-btn" type="button">comment</button>
                            </a>
                        </td>
                    </tr>
                    <tr >
                        <td >2.</td>
                        <td >OD003</td>
                        <td>Order002</td>
                        <td>Product leadership </td>
                        <td >RM 199.00</td>
                            <td ><span class="pending">Pending</span></td>
                        <td>
                            <a href="book_details.php">
                                <button class="comment-btn" type="button">comment</button>
                            </a>
                        </td>
                    </tr>
                </table>
        </div>
</body>
</html>