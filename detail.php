<?php include 'header.php'; 
include 'functions.php'; 
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$karya = query("SELECT * FROM karya WHERE id_pic = $id")[0];

?>

<section class="section">
      <div class="container">
        <div class="row mb-4 align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Detail Gambar</h2>
            </div>
        </div>
      </div>
      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8" data-aos="fade-up">
              <img src="assets1/img/<?= $karya['data']; ?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="sticky-content">
                <h3 class="h3"><?= $karya['judul']; ?></h3>
                <div class="mb-5">
                  <p><?= $karya['note']; ?></p>

                </div>

                <h4 class="h4">Contact</h4>
                <div class="mb-5">
                  <p><?= $karya['email']; ?></p>
                </div>
                <p><a href="profiles.php?id_user=<?= $karya["user"]; ?>" class="readmore">Visit Profile</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'footer.php'; ?>