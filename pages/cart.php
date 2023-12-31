<!-- Importing HEADER Template -->
<?php include('../template/header.php'); ?>

<!-- All contents should be enclosed or put into this element. -->
<main class="main">
  <div class="main-content">
    <h1 class="cart-page-title">Cart</h1>
    <div class="cart-content">
      <!-- <table class="cart-content-table" data-cart-table="no-items"> -->
      <table class="cart-content-table" data-cart-table="">
        <thead>
          <tr>
            <th><input type="checkbox" name="check-item-all" id="check-item-all"/></th>
            <th class="header-product">Product</th>
            <th class="header-qty">Quantity</th>
            <th class="header-total">Total</th>
          </tr>
        </thead>
        <tbody class="cart-content-table-items">
          <tr class="cart-content-table-items-no">
            <td colspan="4"><h2>No Items</h2></td>
          </tr>
          <tr class="cart-content-table-items-item">
            <td class="cart-item-checkbox">
              <input type="checkbox" class="cart-item-checkbox-check" name="check-item-1" id="check-item-1"/>
            </td>
            <td class="cart-item-content">
              <img class="item-content-img" src="<?php echo $url;?>assets/images/products/pe_full.jpg" alt="Product Item" />
              <div class="item-content-detail">
                <span class="item-content-detail-timer">Time Remaining:  00 : 30 : 00</span>
                <h3 class="item-content-detail-name">SDCA Red Shirt 1</h3>
                <span class="item-content-detail-price">₱500.00</span>
                <span class="item-content-detail-others">Size: XS</span>
              </div>
            </td>
            <td class="cart-item-qty">
              <div class="cart-item-qty-cont">
                <button class="cart-item-qty-cont-item">+</button>
                <div class="cart-item-qty-cont-item">2</div>
                <button class="cart-item-qty-cont-item">-</button>
              </div>
              <button class="sdca-button-primary cart-item-qty-remove">Remove</button>
            </td>
            <td class="cart-item-price">Php 1,000</td>
          </tr>
          <tr class="cart-content-table-items-item">
            <td class="cart-item-checkbox">
              <input type="checkbox" class="cart-item-checkbox-check" name="check-item-2" id="check-item-2"/>
            </td>
            <td class="cart-item-content">
              <img class="item-content-img" src="<?php echo $url;?>assets/images/products/pe_full.jpg" alt="Product Item" />
              <div class="item-content-detail">
                <span class="item-content-detail-timer">Time Remaining:  00 : 30 : 00</span>
                <h3 class="item-content-detail-name">SDCA Red Shirt 2</h3>
                <span class="item-content-detail-price">₱500.00</span>
                <span class="item-content-detail-others">Size: XS</span>
              </div>
            </td>
            <td class="cart-item-qty">
              <div class="cart-item-qty-cont">
                <button class="cart-item-qty-cont-item">+</button>
                <div class="cart-item-qty-cont-item">2</div>
                <button class="cart-item-qty-cont-item">-</button>
              </div>
              <button class="sdca-button-primary cart-item-qty-remove">Remove</button>
            </td>
            <td class="cart-item-price">Php 1,000</td>
          </tr>
          <tr class="cart-content-table-items-item">
            <td class="cart-item-checkbox">
              <input type="checkbox" class="cart-item-checkbox-check" name="check-item-3" id="check-item-3"/>
            </td>
            <td class="cart-item-content">
              <img class="item-content-img" src="<?php echo $url;?>assets/images/products/pe_full.jpg" alt="Product Item" />
              <div class="item-content-detail">
                <span class="item-content-detail-timer">Time Remaining:  00 : 30 : 00</span>
                <h3 class="item-content-detail-name">SDCA Red Shirt 3</h3>
                <span class="item-content-detail-price">₱500.00</span>
                <span class="item-content-detail-others">Size: XS</span>
              </div>
            </td>
            <td class="cart-item-qty">
              <div class="cart-item-qty-cont">
                <button class="cart-item-qty-cont-item">+</button>
                <div class="cart-item-qty-cont-item">2</div>
                <button class="cart-item-qty-cont-item">-</button>
              </div>
              <button class="sdca-button-primary cart-item-qty-remove">Remove</button>
            </td>
            <td class="cart-item-price">Php 1,000</td>
          </tr>
        </tbody>
      </table>
      <div class="cart-content-breakout">
        <div class="remove-cont">
          <button class="remove-cont-text">Select All (3)</button>
          <button class="sdca-button disabled remove-cont-btn">Remove</button>
        </div>
        <div class="cart-content-breakout-total">
          <span class="cart-content-breakout-total-text">Total</span>
          <span class="cart-content-breakout-total-val">Php 1,000</span>
        </div>
        <a href="<?php echo $url;?>pages/checkout.php" class="sdca-button-primary cart-content-breakout-checkout">Proceed to checkout</a>
      </div>
    </div>
  </div>
</main>

<!-- Importing FOOTER Template -->
<?php include '../template/footer.php'; ?>