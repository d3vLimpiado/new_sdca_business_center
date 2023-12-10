<!-- Importing HEADER Template -->
<?php include('../template/header.php'); ?>

<!-- All contents should be enclosed or put into this element. -->
<main class="main">
  <div class="main-content">
    <h1>Orders</h1>
    <!-- <table class="order-table" data-order-table="no-items"> -->
    
    <table class="order-table" data-active-tab="0" data-order-table="">
      <thead>
        <tr>
          <th>
            <div class="order-table-tabs">
              <button class="order-table-tabs-1">For Claim / Pickup</button>
              <button class="order-table-tabs-2">Completed</button>
            </div>
          </th>
        </tr>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr class="order-table-item-no">
          <td colspan="5"><h2>No Items</h2></td>
        </tr>
        <tr classname="order-table-item" data-order-row-tab-0>
          <td class="order-table-item-col1">
            <div class="order-table-item-col1-content">
              <img src="<?php echo $url; ?>assets/images/products/pe_full.jpg" alt="item" />
              <div class="order-table-item-col1-content-details">
                <h3><a href="<?php echo $url; ?>pages/status.php">T Shirt 1</a></h3>
                <p>Php 500.00</p>
                <p>other info</p>
              </div>
            </div>
          </td>
          <td class="order-table-item-col3">2</td>
          <td class="order-table-item-col4">Php 1,000.00</td>
          <td class="order-table-item-col5">
            <button class="sdca-button-primary">Cancel</button>
          </td>
        </tr>
        <tr class="order-table-item" data-order-row-tab-1>
          <td class="order-table-item-col1">
            <div class="order-table-item-col1-content">
              <img src="<?php echo $url; ?>assets/images/products/pe_full.jpg" alt="item" />
              <div class="order-table-item-col1-content-details">
                <h3><a href="<?php echo $url; ?>pages/status.php">T Shirt 2</a></h3>
                <p>Php 500.00</p>
                <p>other info</p>
              </div>
            </div>
          </td>
          <td class="order-table-item-col3">2</td>
          <td class="order-table-item-col4">Php 1,000.00</td>
          <td class="order-table-item-col5">
            <button class="sdca-button-primary">Cancel</button>
          </td>
        </tr>
        <tr class="order-table-item" data-order-row-tab-1>
          <td class="order-table-item-col1">
            <div class="order-table-item-col1-content">
              <img src="<?php echo $url; ?>assets/images/products/pe_full.jpg" alt="item" />
              <div class="order-table-item-col1-content-details">
                <h3><a href="<?php echo $url; ?>pages/status.php">T Shirt 3</a></h3>
                <p>Php 500.00</p>
                <p>other info</p>
              </div>
            </div>
          </td>
          <td class="order-table-item-col3">2</td>
          <td class="order-table-item-col4">Php 1,000.00</td>
          <td class="order-table-item-col5">
            <button class="sdca-button-primary">Cancel</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</main>

<!-- Importing FOOTER Template -->
<?php include '../template/footer.php'; ?>