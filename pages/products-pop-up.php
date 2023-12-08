<!-- Importing HEADER Template -->
<?php include('../template/header.php'); ?>
<!-- All contents should be enclosed or put into this element. -->
<main class="main">
  <div class="main-content">
    <div class="product">
      <!-- <span class="product-category-text">
        <span>Home</span>
        <span>/</span>
        <span>Uniforms</span>
      </span> -->
      <div class="left-container">
        <div class="left-inner-container">
          <div class="product-and-model-container">
            <div class="model-container">
              <img src="<?php echo $url ?>assets/images/products/model-1-front.png" class="main-product-model" alt="red-shirt">
              <img src="<?php echo $url ?>assets/images/products/model-2-back.png" class="main-product-model" alt="red-shirt">
              <img src="<?php echo $url ?>assets/images/products/model-3-face.png" class="main-product-model" alt="red-shirt">
            </div>
              <img src="<?php echo $url ?>assets/images/products/red-shirt.png" class="main-product" alt="red-shirt">
          </div>
          <div class="options-container">
            <a href=""><img src="<?php echo $url ?>assets/images/products/red-shirt.png" class="option-items" alt="red-shirt"></a>
            <a href=""><img src="<?php echo $url ?>assets/images/products/blue-shirt.png" class="option-items" alt="red-shirt"></a>
            <a href=""><img src="<?php echo $url ?>assets/images/products/red-shirt.png" class="option-items" alt="red-shirt"></a>
          </div>
        </div>
      </div>
      <div class="right-container">
        <div class="right-inner-container">
          <div class="product-name">SDCA Red Shirt</div>
          <div class="product-price">₱500.00</div>
          <div class="product-sizing-container">
            <a href=""><span class="product-item">XS</span></a>
            <a href=""><span class="product-item">S</span></a>
            <a href=""><span class="product-item">M</span></a>
            <a href=""><span class="product-item">L</span></a>
            <a href=""><span class="product-item">XL</span></a>
            <a href=""><span class="product-item">2XL</span></a>
            <a href=""><span class="product-item">3XL</span></a>
            <a href=""><span class="product-item">4XL</span></a>
            <a href=""><span class="product-item">5XL</span></a>
            <a href=""><span class="product-item">SPECIAL</span></a>
          </div>
          <div class="quantity-container">
            <div href="" class="quantity-border" id="decrease" onClick="decrease()"><img alt="minus-icon" src="<?php echo $url; ?>assets/icons/products-icon/decrease-icon.svg" /></div>
            <input type="text" class="quantity-border" id="count" min="1" max="99" minlength="1" maxlength="2">
            <div href="" class="quantity-border" id="increase" onClick="increase()"><img alt="add-icon" src="<?php echo $url; ?>assets/icons/products-icon/increase-icon.svg" /></div>
            <span class="size-chart-container">
              <a href="" class="size-chart-text"><span>Size Chart</span></a>
            </span>
            <span><span>5</span><span class="stocks-text">stocks available</span></span>
          </div>
          <div class="add-to-cart-and-checkout-container">
            <a href=""><div class="add-to-cart">Add to cart</div></a>
            <a href=""><div class="checkout">Checkout</div></a>
          </div>
          <div class="details-container">
            <p class="details-text">Details</p>
            <p class="details-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mollis tellus. In scelerisque risus nec viverra finibus. Mauris tempus odio in quam volutpat finibus. Donec ac placerat orci, at gravida augue. Ut quis diam magna. Pellentesque urna arcu, euismod in lorem vel, convallis vehic.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Importing FOOTER Template -->
<?php include '../template/footer.php'; ?>