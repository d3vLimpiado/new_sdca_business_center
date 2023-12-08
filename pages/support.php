<!-- Importing HEADER Template -->
<?php include('../template/header.php'); ?>

<!-- All contents should be enclosed or put into this element. -->
<main class="main">
  <div class="main-content">
    <section class="sdca">
      <div>
        <img class="sdca-logo" src="<?php echo $url; ?>assets/images/sdca_logo_long.png" alt="SDCA Logo">
        <p class="desc">
          "The St. Dominic College of Asia, commonly known by its acronym SDCA, stands as a private co-educational institution providing both basic and higher education in Bacoor, Cavite, Philippines. Established in 2003 by Don Gregorio and Doña Dominga Andaman, it was initially named St. Dominic College of Arts & Sciences. SDCA offers a comprehensive range of education levels, including preschool, primary, secondary, tertiary, postgraduate, and vocational programs. As November 2023 approaches, St. Dominic College of Asia eagerly anticipates celebrating its 20th Founding Anniversary."

          HISTORY

          The school's origins can be traced back to the establishment of St. Dominic Medical Center (SDMC) in 1991, a visionary project initiated by founders Don Gregorio and Doña Dominga Andaman. Twelve years after the inception of the medical center in Cavite, the educational arm, St. Dominic College of Arts & Sciences, was introduced in 2003.

          Initially focusing on programs in Caregiving and BS Nursing in collaboration with SDMC, St. Dominic has since transformed into a comprehensive collegiate institution comprising four distinct schools: the School of Health Science Professions (SHSP), the School of Arts, Sciences & Education (SASE), the School of International Hospitality & Tourism Management (SIHTM), and the School of Business & Computer Studies (SBCS).

          In 2009, the institution underwent an official name change, transitioning from St. Dominic College of Arts & Sciences to St. Dominic College of Asia.

          The year 2011 marked a pivotal transition in leadership as Dr. Marita A. Andaman-Rillo, the eldest daughter of the founders, passed on the presidency of SDCA to the youngest Andaman son, Dr. Gregorio A. Andaman, Jr. Dr. Andaman, in his inaugural year as president, introduced the institution's rallying cry, "Revolutionizing Education." This period witnessed significant milestones, including the establishment of the Basic Education Unit (covering Preschool, Elementary, and High School) and the accreditation of programs in Business Administration, Information Technology, Education, Psychology, Hospitality Management, and Nursing by the Philippine Association of Colleges and Universities Commission on Accreditation (PACUCOA) in 2012.
        </p>
      </div>
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1931.7258287975037!2d120.96029419999999!3d14.4587351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cd9273416e43%3A0x96542d86e50a4106!2sSt.%20Dominic%20College%20of%20Asia!5e0!3m2!1sen!2sph!4v1701610300935!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    <section class="business-center">
      <img src="<?php echo $url; ?>assets/images/business_center_logo_long.png" alt="SDCA Business Center" class="sdca-logo-business">
      <p class="desc">The SDCA Business Center, nestled on campus, serves as the pulse of academic readiness. It's not just a place to acquire supplies and uniforms; it's a nexus of excellence. Offering top-tier school essentials and impeccably tailored uniforms, the Business Center exemplifies SDCA's pledge to empower students for success. Seamlessly integrated into vibrant campus life, it ensures each student has the tools to thrive in their educational journey.

        Beyond the neatly arranged aisles of notebooks and uniforms, the SDCA Business Center is a gateway to unity and pride. It's a space where students don't just prepare for learning but also embrace a collective identity. The knowledgeable and friendly staff elevate routine shopping into a personalized experience, understanding the distinctive needs of SDCA students.

        This isn't merely a transactional space; the Business Center echoes the very spirit of SDCA. It's a place where the pursuit of knowledge intersects with the pride of belonging, weaving a community united by a shared commitment to excellence. Step inside, and you'll find more than supplies; you'll encounter a cornerstone of the SDCA experience, reinforcing the institution's dedication to fostering not only academic growth but also a sense of camaraderie and shared purpose.</p>
    </section>

    <section class="contact">
      <h1>Contact</h1>
      <div class="contact-info">
        <!-- Edit this with correct DATA -->
        <p class="contact-info-item">
          <i class="phone"></i>
          <span>+639-000-0000</span>
        </p>
        <p class="contact-info-item">
          <i class="address"></i>
          <span>Emilio Aguinaldo Hwy, Bacoor, 4102 Cavite</span>
        </p>
        <p class="contact-info-item">
          <i class="mail"></i>
          <span>sdca@example.com</span>
        </p>
      </div>
      <form class="contact-form" action="">
        <div class="contact-form-item">
          <label>Your name</label>
          <input />
        </div>
        <div class="contact-form-item">
          <label>Mail</label>
          <input />
        </div>
        <div class="contact-form-item">
          <label>Message</label>
          <textarea></textarea>
        </div>
        <button class="sdca-button-primary" type="submit">
          Send
        </button>
      </form>
    </section>
  </div>
</main>

<!-- Importing FOOTER Template -->
<?php include '../template/footer.php'; ?>