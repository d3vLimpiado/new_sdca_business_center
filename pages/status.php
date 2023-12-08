<!-- Importing HEADER Template -->
<?php include('../template/header.php'); ?>

<!-- All contents should be enclosed or put into this element. -->
<main class="main">
  <div class="main-content">
    <a href="<?php echo $url;?>pages/orders.php">Go back to orders</a>
    <h1>Order Status</h1>
    <div class="sdca-card order-status">
      <div class="order-status-progress" data-progress-status="0">
        <i class="order-status-progress-processing"></i>
        <i class="order-status-progress-payment"></i>
        <i class="order-status-progress-prepared"></i>
        <i class="order-status-progress-claimed"></i>
        <i class="order-status-progress-completed"></i>
      </div>
      <table class="order-status-product">
        <thead>
          <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody class="order-status-product">
          <tr class="order-status-product-item">
            <td class="order-status-product-item-content">
              <img src="<?php echo $url; ?>assets/images/products/pe_full.jpg" alt="PE">
              <div class="order-status-product-item-content-details">
                <h3>T Shirt</h3>
                <p>Php 500.00</p>
                <p>Others</p>
              </div>
            </td>
            <td>2</td>
            <td>Php 1,000.00</td>
          </tr>
        </tbody>
      </table>
      <div class="order-status-subtotal">
        <p>Subtotal</p>
        <span>Php 1,000.00</span>
      </div>
    </div>
  </div>
</main>

<!-- Importing FOOTER Template -->
<?php include '../template/footer.php'; ?>