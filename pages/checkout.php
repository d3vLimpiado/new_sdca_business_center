<!-- Importing HEADER Template -->
<?php include('../template/header.php'); ?>

<!-- All contents should be enclosed or put into this element. -->
<main class="main">
  <div class="main-content">
    <a href="<?php echo $url; ?>pages/cart.php">Go back</a>
    <h1>Billing</h1>
    <form action="#" class="form-billing">
      <div class="sdca-card form-billing-info">
        <div class="form-billing-info-multiple">
          <div class="form-billing-info-multiple-item">
            <label for="billing-firstname">First Name</label>
            <input class="sdca-input form-billing-input" id="billing-firstname" name="firstname" />
          </div>
          <div class="form-billing-info-multiple-item">
            <label for="billing-middlename">Middle Name</label>
            <input class="sdca-input form-billing-input" id="billing-middlename" name="middlename" />
          </div>
          <div class="form-billing-info-multiple-item">
            <label for="billing-lastname">Last Name</label>
            <input class="sdca-input form-billing-input" id="billing-lastname" name="lastname" />
          </div>
        </div>
        <div class="form-billing-info-one">
          <label for="billing-studentnum">Student Number</label>
          <input class="sdca-input form-billing-input" id="billing-studentnum" name="studentnum" />
        </div>
        <div class="form-billing-info-one">
          <label for="billing-email">Email</label>
          <input class="sdca-input form-billing-input" id="billing-email" name="email" />
        </div>
        <div class="form-billing-info-multiple">
          <div class="form-billing-info-multiple-item">
            <label for="billing-cellnum">Cellphone Number</label>
            <input class="sdca-input form-billing-input" type="text" id="billing-cellnum" name="cellnum" />
          </div>
          <div class="form-billing-info-multiple-item">
            <label for="billing-telnum">Telephone Number</label>
            <input class="sdca-input form-billing-input" type="text" id="billing-telnum" name="telnum" />
          </div>
        </div>
      </div>
      <div class="sdca-card form-billing-cart">
        <div class="form-billing-cart-top">
          <h2>Shopping<br/>Cart</h2>
          <i class="cart-icon"></i>
        </div>
        <table class="form-billing-cart-table">
          <thead>
            <tr>
              <th>Items</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr class="cart-item">
              <td class="cart-item-product">
                <div class="cart-item-product-1">
                  <img src="<?php echo $url;?>assets/images/products/pe_full.jpg" alt="Item">
                  <div class="item-detail">
                    <h3>SDCA Red Shirt</h3>
                    <p>Size: XS</p>
                  </div>
                </div>
              </td>
              <td>2</td>
              <td>Php 500.00</td>
              <td>Php 1,000.00</td>
            </tr>
            <tr class="cart-item">
              <td class="cart-item-product">
                <div class="cart-item-product-1">
                  <img src="<?php echo $url;?>assets/images/products/pe_full.jpg" alt="Item">
                  <div class="item-detail">
                    <h3>SDCA Red Shirt</h3>
                    <p>Size: XS</p>
                  </div>
                </div>
              </td>
              <td>2</td>
              <td>Php 500.00</td>
              <td>Php 1,000.00</td>
            </tr>
            <tr class="cart-item">
              <td class="cart-item-product">
                <div class="cart-item-product-1">
                  <img src="<?php echo $url;?>assets/images/products/pe_full.jpg" alt="Item">
                  <div class="item-detail">
                    <h3>SDCA Red Shirt</h3>
                    <p>Size: XS</p>
                  </div>
                </div>
              </td>
              <td>2</td>
              <td>Php 500.00</td>
              <td>Php 1,000.00</td>
            </tr>
          </tbody>
        </table>
        <div class="subtotal">
          <h4>Sub Total</h4>
          <span>Php 1,000.00</span>
        </div>
        <div class="check-box-items">
          <input id="termscondition" type="checkbox"/>
          <label class="termscondition" for="termscondition">Yes, I agree to the <a>Terms & Conditions</a></label>
        </div>
        <button class="sdca-button-primary checkout-btn">Checkout</button>
      </div>
    </form>

    <div class="sdca-modal">
      <div class="sdca-modal-bg"></div>
      <div class="sdca-modal-container">
        <div class="checkout-modal-content">
          <h1 class="checkout-modal-content-title">Terms & Conditions</h1>
          <div class="checkout-modal-content-text">
          1. Introduction:
          <br /> to the E-commerce Capstone Project for SDCA Business Center. By using our services or accessing our website, you agree to comply with the following terms and conditions.
          <br />2. Acceptance of Terms:
          <br />Your use of our services implies acceptance of these terms and conditions. Please read them carefully.
          <br />3. User Eligibility:
          <br />Users must be [13+] or older to participate in the E-commerce Project for SDCA Business Center.
          SDCA students, as well as their relatives, are welcome to use this website to participate in the E-commerce project.
          <br />4. User Accounts:
          <br />SDCA Students: Individuals with SDCA accounts can log in to access the E-commerce website through the SDCA Portal.
          For those without SDCA accounts, we offer a guest login module, allowing access to our E-commerce website.
          <br />Account Confidentiality: Users are responsible for safeguarding the confidentiality of their account information.
          <br />5. Intellectual Property:
          <br />All intellectual property associated with the E-commerce Project for SDCA Business Center, including trademarks and copyrights, is owned by SDCA.
          Users may not use or reproduce this intellectual property without permission.
          <br />6. Privacy Policy:
          <br />Refer to our privacy policy for information on data collection, use, and protection.
          <br />7. Payment and Billing:
          <br />Purchases must be completed within “30 minutes” of adding items to the cart.
          Failure to complete the purchase within this time frame may result in the automatic removal of items from the shopping cart.
          Payment terms, refund policies, and other financial details are outlined in our payment and billing policies.
          <br />9. Size Chart Disclaimer:
          <br />The size chart for our products may not be immediately available due to reliance on external suppliers.
          For accurate sizing information or assistance with size-related inquiries, we recommend users to reach out to our customer support. Additionally, users can visit the Business Center for personalized sizing guidance.
          <br />10.Discount and vouchers:
          <br />- No vouchers or discounts for students or employees at the business center will be authorized unless explicit approval from the Head of the Finance Department based on the provided details.
          <br />11. Limitations of Liability:
          <br />- The E-commerce Project for SDCA Business Center is not liable for any inconvenience, loss, or dissatisfaction arising from the unavailability of items in the shopping cart after the specified time.
          <br />- Users accept the risk associated with the time limitations on cart reservations.
          <br />12. Termination of Services:
          <br />- The E-commerce Project for SDCA Business Center reserves the right to terminate or suspend services for any reason.
          <br />13. Updates to Terms and Conditions:
          <br />- The E-commerce Project for SDCA Business Center reserves the right to update or modify these terms and conditions.
          <br />- Users will be notified of changes, and continued use of our services implies acceptance of the updated terms.
          </div>
          <div class="checkout-modal-content-button-group">
            <button class="sdca-button-primary">Agree</button>
            <button class="sdca-button">Don't Agree</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Importing FOOTER Template -->
<?php include '../template/footer.php'; ?>