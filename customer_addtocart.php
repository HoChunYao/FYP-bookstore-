<?php include("header.php"); ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link href="CSS_folder/addtocart.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
  <title>Add to Cart</title>
  <style>
    h1{
      font-size: 20px;
    }
  </style> 
</head>

<body>
<!--<div id="top">
		<?php include("header.php"); ?>
	</div>-->
    <main>
    <div class="basket">
      <div class="basket-module">
        <label for="promo-code">Enter a promotional code</label>
        <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
        <button class="promo-code-cta">Apply</button>
      </div>
      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Price</li>
          <li class="quantity">Quantity</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="media/book1.jpg" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1>Prodcut Leadership</h1>
            <p>Product Code - 81300</p>
          </div>
        </div>
        <div class="price">26.00</div>
        <div class="quantity">
          <input type="number" value="4" min="1" class="quantity-field">
        </div>
        <div class="subtotal">104.00</div>
        <div class="remove">
          <button>Remove</button>
        </div>
      </div>
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="media/book2.jpg" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1>The mind of a leader</h1>
            <p>Product Code - 81300</p>
          </div>
        </div>
        <div class="price">26.00</div>
        <div class="quantity">
          <input type="number" value="1" min="1" class="quantity-field">
        </div>
        <div class="subtotal">26.00</div>
        <div class="remove">
          <button>Remove</button>
        </div>
      </div>
    </div>
    <aside>
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
        <div class="summary-delivery">
          <select name="delivery-collection" class="summary-delivery-selection">
              <option value="0" selected="selected">Select Collection or Delivery</option>
              <option value="collection">Collection</option>
              <option value="first-class">Royal Mail 1st Class</option>
              <option value="second-class">Royal Mail 2nd Class</option>
              <option value="signed-for">Royal Mail Special Delivery</option>
          </select>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total">130.00</div>
        </div>
        <div class="summary-checkout">
          <a href="payment.php">
            <button class="checkout-cta">Go to Secure Checkout</button>
          </a>
        </div>
      </div>
    </aside>
  </main>
</body>
<div id="bottom">
		<?php include("footer.php"); ?>
</div>
</html>