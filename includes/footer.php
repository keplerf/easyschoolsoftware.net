<section class="request-panel">
  <div class="container">
    <h4>Easy School Software</h4>
    <div class="request-quote">
      <a data-aos="fade-left" class='btn' href="#">Contact Us</a>
    </div>
  </div>
</section>
<footer class="footer">
  <div class="container">
    <div class="logo">
        <img src="images/looger-footer.png" alt="Easy Schol Software">
        <img class='social' src="images/linked.png" alt="Social media">
    </div>
    <div class="products">
      <h3>Products</h3>
      <ul>
        <li><a href="school-appointments.php">School Appointments OnLine</a></li>
        <li><a href="hot-lunches.php">Hot Lunches OnLine</a></li>
        <li><a href="mobile-app-for-schools.php">Appazur Mobile App</a></li>
        <li><a href="locker-administration.php">School Locker Management</a></li>
        <li><a href="counsellor-appointments.php">Counsellor Appointment Booking</a></li>
        <li><a href="student-scan-tracker.php">Student Scanning and Tracking</a></li>
        <li><a href="student-signup.php">Student Signup Forms</a></li>
        <li><a href="school-fees.php">Pay School Fees</a></li>
      </ul>
    </div>

    <div class="about">
      <h3>Products</h3>
      <ul>
        <li>About us</li>
        <li>More info</li>
      </ul>
    </div>

    <div class="contact">
      <h3>Contact us</h3>
      <ul>
        <li>1-888-475-6657</li>
        <li>604-996-7181</li>
        <li><a href="mailto:&#109;&#97;&#105;&#108;&#116;&#111;&#x3a;&#115;&#97;&#x6c;&#101;&#115;&#64;&#x65;&#97;&#x73;&#x79;&#115;&#x63;&#x68;&#111;&#x6f;&#108;&#115;&#x6f;&#102;&#116;&#x77;&#97;&#114;&#x65;&#x2e;&#110;&#x65;&#116;">&#115;&#97;&#x6c;&#101;&#115;&#64;&#x65;&#97;&#x73;&#x79;&#115;&#x63;&#x68;&#111;&#x6f;&#108;&#115;&#x6f;&#102;&#116;&#x77;&#97;&#114;&#x65;&#x2e;&#110;&#x65;&#116;</a></li>
      </ul>
    </div>
  </div>
</footer>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/aos.js"></script>
<!-- <script src="js/main.js"></script> -->
<script src="js/swiper.jquery.min.js"></script>
<script>

$(document).ready(function(){

  $('.toglee-nav').on('click', function(e){
    e.preventDefault();
    $('.navigation').toggleClass('active');
  })

  AOS.init();

  var SwiperBox2 = new Swiper('.SwiperBox2', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    // pagination: '.swiper-pagination',
    autoplay: 5000,
    autoplayDisableOnInteraction: true,

    nextButton: '.swiper-button-next2',
    prevButton: '.swiper-button-prev2',
    speed: 1700
   });
});


</script>
</html>
