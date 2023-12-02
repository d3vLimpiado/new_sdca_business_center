<!-- Importing HEADER Template -->
<?php include('template/header.php'); ?>

<!-- All contents should be enclosed or put into this element. -->
<main class="main">
  <!-- MAIN CAROUSEL | HERO CAROUSEL -->
  <div class="main-content">
    <div class="carousel">
      <div class="carousel-cont">
        <!-- Modify this to edit or make the carousel image dynamic -->
        <div class="carousel-cont-img">
          <img src="<?php echo $url ?>assets/images/carousel_1.jpg" />
        </div>
        <div class="carousel-cont-img">
          <img src="<?php echo $url ?>assets/images/carousel_2.jpg" />
        </div>
        <div class="carousel-cont-img">
          <img src="<?php echo $url ?>assets/images/carousel_3.jpg" />
        </div>
      </div>
      <div class="carousel-controller">
      </div>
      <div class="carousel-right">
        <img alt="angle-right" src="<?php echo $url; ?>assets/icons/angle-right.svg" />
      </div>
      <div class="carousel-left">
        <img alt="angle-right" src="<?php echo $url; ?>assets/icons/angle-left.svg" />
      </div>
      <div class="carousel-preview">
        <div class="carousel-preview-bg"></div>
      </div>
    </div>
  </div>
</main>

<!-- Importing FOOTER Template -->
<?php include 'template/footer.php'; ?>