<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <style>
            #ewallet,#onlineBanking{
                display:none;
            }
            body{
                font-family:"Segoe UI",Roboto,"Helvetica Neue","Noto Sans","Liberation Sans",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                background-color:grey;
            }
            .container{
                background-color:white;
                padding:10px;
                border: 1px;
                margin-top:200px;
                margin-left:30%;
                margin-right:30%;
                border-radius:15px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 30%);
            }  
            input[type=text],input[type=number]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            } 
            label img{
                height:100px;
                width:100px;
                border-radius:15px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 30%);
            }
            li{
                display:inline-block;
            }
            li input[type="checkbox"],
            li label {
                display: inline-block;
                vertical-align: middle;
            }

            li label img {
                margin-right: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Payment Gateway</h1>
            <div class="payment-method">
                <label for="payment-method">Choose a payment method:</label>
                <select onchange="toggleForm()"name="payment-method" class="method">
                    <option value="card" selected="selected">Debit / CreditCard</option>
                    <option value="ewallet">Ewallet</option>
                    <option value="onlineBanking">Online Banking</option>
                </select>
            </div>
            <form id="card" class="info" action="login_user.php" method="post">

                <label class="input-title" for="c-number">Card Number*</label>
                <input type="text" name="c-number" id="c-number" class="" placeholder="XXXX XXXX XXXX XXXX" maxlength="16" required>

                <label for="c-name" class="input-title cardholder-name">Name on card*</label>
                <input type="text" name="c-number" id="c-name" class="" placeholder="John Doe" required>
            
                <label class="input-title">Expiry Date*</label>
                <input type="number" name="c-number" id="c-expiry" class="" placeholder="XX/XX" required>

            </form>

            <form id="ewallet" class="info" action="register.php"  method="post">
                <img src="media/qr.png">
            </form>

            <form id="onlineBanking" class="info" action="register.php"  method="post">
            <ul>
            <li>
                <input type="checkbox" id="myCheckbox1" />
                <label for="pbe"><img src="media/pbe.png" /></label>
            </li>
            <li>
                <input type="checkbox" id="myCheckbox2" />
                <label for="cimb"><img src="media/cimb.jpeg" /></label>
            </li>
            <li>
                <input type="checkbox" id="myCheckbox3" />
                <label for="mbb"><img src="media/mbb.png" /></label>
            </li>
            </ul>
            </form>
                <a href="#">
                    <button type="submit" class="button-button">Cancel</button>
                </a>
                <a href="#">
                    <button type="submit" class="button-button">Proceed</button>
                </a>
        </div>
    </body>
    <script>
        function toggleForm() {
            var select = document.querySelector('select');
            var selectedOption = select.options[select.selectedIndex].value;
            if (selectedOption == "card") {
            document.getElementById('card').style.display = "block";
            document.getElementById('ewallet').style.display = "none";
            document.getElementById('onlineBanking').style.display = "none";
            } else if (selectedOption == "ewallet") {
            document.getElementById('ewallet').style.display = "block";
            document.getElementById('card').style.display = "none";
            document.getElementById('onlineBanking').style.display = "none";
            } else if (selectedOption == "onlineBanking") {
            document.getElementById('onlineBanking').style.display = "block";
            document.getElementById('card').style.display = "none";
            document.getElementById('ewallet').style.display = "none";
            }
        }
    </script>
</html>