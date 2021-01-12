<?php include 'header.php'; ?>

<section class="section pt-5">
      <div class="container">
      <div class="card mb-5" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body">
          <h5 class="card-title">Halaman Awal</h5>
          <h6 class="card-text">Selamat datang di E-Xhibit! <strong><?= $_SESSION["row"]["username"]; ?></strong>, Temukan 
          inspirasi, Berkarya, dan Menginspirasi</h6>
          <a class="readmore" href="profil.php">>>My Profile</a>
        </div>
      </div>

        <div class="owl-carousel testimonial-carousel">

          <div class="testimonial-wrap" style="background-color: #FFDCBA">
            <div class="testimonial">
              <img src="assets1/img/person_1.jpg" alt="Image" class="img-fluid">
              <blockquote >
                <p>Teruslah berkarya! Perlihatkan semua karya terbaikmu disini di E-Xhibit! dan
                blabasbd aba a ab blalalalallalalala</p>
              </blockquote>
              <p>&mdash; Jean Hicks</p>
            </div>
          </div>

          <div class="testimonial-wrap" style="background-color: #FFDCBA">
            <div class="testimonial">
              <img src="assets1/img/person_2.jpg" alt="Image" class="img-fluid">
              <blockquote>
                <p>E-Xhibit! akan membantu karyamu dilihat banyak orang. blblbalabaalalal
                balalalalallala</p>
              </blockquote>
              <p>&mdash; Chris Stanworth</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    

  
<?php include 'footer.php'; ?>