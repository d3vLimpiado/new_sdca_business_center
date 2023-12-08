<!-- Importing HEADER Template -->
<?php include('../template/header.php'); ?>
<!-- All contents should be enclosed or put into this element. -->
<main class="main">
  <div class="main-content">
    <span class="product-category-text">
      <a href="<?php echo $url; ?>">Home</a>
      <span>/</span>
      <span>Uniforms</span>
    </span>
    <div class="product">
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
            <span class="product-item">XS</span>
            <span class="product-item">S</span>
            <span class="product-item">M</span>
            <span class="product-item">L</span>
            <span class="product-item">XL</span>
            <span class="product-item">2XL</span>
            <span class="product-item">3XL</span>
            <span class="product-item">4XL</span>
            <span class="product-item">5XL</span>
            <span class="product-item">SPECIAL</span>
          </div>
          <div class="quantity-container">
            <div href="" class="quantity-border" id="decrease"><img alt="minus-icon" src="<?php echo $url; ?>assets/icons/products-icon/decrease-icon.svg" /></div>
            <input type="text" class="quantity-border" id="count" min="1" max="99" minlength="1" maxlength="2" value="1" />
            <div href="" class="quantity-border" id="increase"><img alt="add-icon" src="<?php echo $url; ?>assets/icons/products-icon/increase-icon.svg" /></div>
            <span class="size-chart-container">
              <a href="#" class="size-chart-text"><span>Size Chart</span></a>
            </span>
            <span><span>5</span><span class="stocks-text">stocks available</span></span>
          </div>
          <div class="add-to-cart-and-checkout-container">
            <a class="sdca-button-primary add-to-cart" href="">Add to cart</a>
            <a class="sdca-button-primary checkout" href="">Checkout</a>
          </div>
          <div class="details-container">
            <p class="details-text">Details</p>
            <p class="details-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mollis tellus. In scelerisque risus nec viverra finibus. Mauris tempus odio in quam volutpat finibus. Donec ac placerat orci, at gravida augue. Ut quis diam magna. Pellentesque urna arcu, euismod in lorem vel, convallis vehic.</p>
          </div>
          <div class="sdca-modal">
            <div class="sdca-modal-bg"></div>
            <div class="sdca-modal-custom-container">
              <div class="size-chart">
                emememememe
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Importing FOOTER Template -->
<?php include '../template/footer.php'; ?>