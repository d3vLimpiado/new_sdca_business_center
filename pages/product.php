<!-- Importing HEADER Template -->
<?php include('../template/header.php'); ?>
<!-- All contents should be enclosed or put into this element. -->
<main class="main">
  <div class="main-content">
    <span class="product-category-text">
      <a href="<?php echo $url; ?>">Home</a>
      <span>/</span>
      <a href="<?php echo $url; ?>pages/products.php">Uniforms</a>
    </span>
    <div class="product" data-product-state="stock" data-product-size="1">
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
              <a href="#" id="checkout" class="size-chart-text"><span>Size Chart</span></a>
            </span>
            <span><span>5</span><span class="stocks-text"> stocks available</span></span>
          </div>
          <div class="add-to-cart-and-checkout-container">
            <a href="#" class="add-to-cart sdca-button-primary add-to-cart" href="">Add to cart</a>
            <a href="<?php echo $url; ?>pages/checkout.php" class="checkout sdca-button-primary">Checkout</a>
            <button class="btn-no-stock sdca-button-primary disabled">Out of Stock</button>
          </div>
          <div class="details-container">
            <p class="details-text">Details</p>
            <p class="details-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mollis tellus. In scelerisque risus nec viverra finibus. Mauris tempus odio in quam volutpat finibus. Donec ac placerat orci, at gravida augue. Ut quis diam magna. Pellentesque urna arcu, euismod in lorem vel, convallis vehic.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- MODALS -->
    <div class="sdca-modal size-chart">
      <div class="sdca-modal-bg"></div>
      <div class="sdca-modal-custom-container">
        <div class="size-chart-pop-up-container">
          <div class="left-size-container">
            <table class="pop-up-inner-container">
              <tr>
                <th>Size</th>
                <th>Chest</th>
                <th>Waist</th>
                <th>Arms Length</th>
              </tr>
              <tr>
                <td>XS</td>
                <td>35"</td>
                <td>31"</td>
                <td>10.5"</td>
              </tr>
              <tr>
                <td>S</td>
                <td>33"</td>
                <td>33"</td>
                <td>11"</td>
              </tr>
              <tr>
                <td>M</td>
                <td>39"</td>
                <td>35"</td>
                <td>11.5"</td>
              </tr>
              <tr>
                <td>L</td>
                <td>41"</td>
                <td>37"</td>
                <td>12"</td>
              </tr>
              <tr>
                <td>XL</td>
                <td>43"</td>
                <td>39"</td>
                <td>12.5"</td>
              </tr>
              <tr>
                <td>2XL</td>
                <td>45"</td>
                <td>41"</td>
                <td>13"</td>
              </tr>
              <tr>
                <td>3XL</td>
                <td>45"</td>
                <td>41"</td>
                <td>13"</td>
              </tr>
              <tr>
                <td>4XL</td>
                <td>47"</td>
                <td>43"</td>
                <td>13.5"</td>
              </tr>
              <tr>
                <td>5XL</td>
                <td>49"</td>
                <td>45"</td>
                <td>14"</td>
              </tr>
              <tr>
                <td>Special</td>
                <td>51"</td>
                <td>47"</td>
                <td>14.5"</td>
              </tr>
            </table>
          </div>
          <div class="right-size-container">
            <img src="<?php echo $url ?>assets/images/products/polo.png" class="polo-sizing" alt="polo-shirt">
          </div>
        </div>
      </div>
    </div>
    <div class="sdca-modal prompt-message">
      <div class="sdca-modal-bg"></div>
      <div class="sdca-modal-custom-container">
        <div class="prompt-message-container">
          <span><img alt="exclamation-icon" class="prompt-icon" src="<?php echo $url; ?>assets/icons/products-icon/exclamation-icon.svg" /></span>
          <span class="caution-text">CAUTION!</span>
          <span>Please review and confirm your item within the next 30 minutes. Failure to do so will result in the item being automatically removed from your cart.</span>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Importing FOOTER Template -->
<?php include '../template/footer.php'; ?>