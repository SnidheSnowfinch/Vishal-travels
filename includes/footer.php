
<footer>
  <div class="footer-container">
    <div class="footer-col footer-logo">

      <img src="bootstrap/images/logo.png" alt="Logo" />
      <p>Vishal travels boasts about its pocket-friendly and transparent pricing policy. We assure you that with our Pune to Shirdi Bus Services you will have a very memorable trip.</p>
      <div class="footer-contact">
        <p><i class="bi bi-geo-alt-fill orange"></i> Vishal travels . Flat no 201, abc Building, Guyson Shrusthi Society, Tukai darshan Hadocr, Pune-00000</p>
        <p><i class="bi bi-telephone-fill orange"></i> +91 0000000000</p>
        <p><i class="bi bi-envelope-fill orange"></i> vishaltravels9119@gmail.com</p>
      </div>
      <div class="social-icons">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-whatsapp"></i></a>


      </div>
    </div>

    <div class="footer-col footer-arrow">
      <h3>Our Services</h3>
      <a href="#">Tempo Traveller Pune</a>
      <a href="#">Tempo Traveller on Rent Pune</a>
      <a href="#">Bus on Rent in Pune</a>
      <a href="#">Tempo Traveller on Rent</a>
      <a href="#">Tempo Traveller Rent in Pune</a>
      <a href="#">Tempo Traveller Hire in Pune</a>
      <a href="#">Mini Bus for Rent</a>
      <a href="#">Bus on Rent Hire</a>
      <a href="#">Bus on Rent Pune</a>
      <a href="#">Bus Rental in Pune</a>
      <a href="#">Hire Tempo Traveller</a>
      <a href="#">Bus Hire in Pune</a>
      <a href="#">Tempo Traveller Hire in Pune</a>
      <a href="#">AC Tempo Traveller Rent Pune</a>
    </div>

    <div class="footer-col footer-arrow">
      <h3>Our Services</h3>
      <a href="#">Bus Hire for Outstation</a>
      <a href="#">Bus on Rent for Local</a>
      <a href="#">Bus Rental for Wedding</a>
      <a href="#">Bus Rent for Marriage</a>
      <a href="#">Bus Rental For Corporate Events</a>
      <a href="#">Bus Rental for Tour</a>
      <a href="#">Bus Rental For Corporate in Pune</a>
      <a href="#">Tempo Traveller on Rent in Pune</a>
      <a href="#">AC Bus On Rent</a>
      <a href="#">Non Ac Bus Rental Service</a>
      <a href="#">Bus on Hire on Pune to Mahabaleshwar Package Tour</a>
      <a href="#">Bus Hire for Picnic</a>
      <a href="#">Bus on Rent For Event in Pune</a>
      <a href="#">Bus on Hire Pune</a>
    </div>

    <div class="footer-col footer-arrow">
      <h3>Our Services</h3>
      <a href="#">13 seater Tempo Traveller on Rent in Pune</a>
      <a href="#">17 Seater Tempo Traveller on Rent in Pune</a>
      <a href="#">20 Seater Bus on Rent in Pune</a>
      <a href="#">32 Seater Tempo Traveller Service</a>
      <a href="#">40 Seater Bus on Rent in Pune</a>
      <a href="#">50 Seater Bus on Rent in Pune</a>
      <a href="#">Luxury Force Urbania on Rent in Pune</a>
      <a href="#">Pune to Mahabaleshwar Urbania Bus Hire on Rent</a>
      <a href="#">Pune to Shirdi Force Urbania on Rent</a>
      <a href="#">Urbania Luxury Bus Rentals in Pune</a>
      <a href="#">Pune to outstation Urbania Bus Hire in Pune</a>
      <a href="#">Pune to Ashtavinayak Urbania Tour Package</a>
      <a href="#">Urbania Tourist Bus on Rent in Pune</a>
    </div>
  </div>
</footer>
<script>
   document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      console.log("Observed:", entry.target);
      if (entry.isIntersecting) {
        console.log("Showing:", entry.target); 
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1
  });

  document.querySelectorAll('.fade-in-on-scroll').forEach(el => {
    observer.observe(el);
  });
});
    let currentSlide = 0;
    const slider = document.getElementById("testimonialSlider");
    const cards = slider.querySelectorAll(".testimonial-card");

    function moveSlide(direction) {
      const totalSlides = cards.length;
      currentSlide += direction;

      // Clamp the value to stay within range
      if (currentSlide < 0) currentSlide = 0;
      if (currentSlide > totalSlides - 2) currentSlide = totalSlides - 2;

      const cardWidth = cards[0].offsetWidth + 20; // card width + margin
      slider.style.transform = `translateX(-${currentSlide * cardWidth}px)`;
    }
    function toggleMenu(toggler) {
      toggler.classList.toggle('active');
      document.getElementById('navMenu').classList.toggle('show');
    }
   
  </script>
</body>

</html>