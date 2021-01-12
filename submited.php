<?php include 'header.php'; 
include 'functions.php'; 

$id = $_GET["id"];
$event = query("SELECT * FROM events WHERE id_event = $id")[0];
?>

<section class="section pt-5">
    <div class="container">
      <div class="card mb-5" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body">
          <h5 class="card-title">Karya Peserta</h5>
          <p class="card-text">Pada halaman ini menampilkan galeri karya yang telah disubmit oleh para peserta.</p>
        </div>
      </div>
  </div>
  <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
      <?php foreach( $conn->query("SELECT * FROM eve
      WHERE id_event = $id") as $karya ) : ?>
    <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4 " style="object-fit: cover; width: 500px; height: 500px;">
        <a href="#" class="item-wrap fancybox" name="detail">
        <div class="work-info">
          <h3><?= $karya['judul']; ?></h3>
          <p><?= $karya['user']; ?></p>
        </div>
        <img class="img-fluid width: 100%; height: 100%" src="assets1/img/<?= $karya['data']; ?>">
      </a>
    </div>
    <?php endforeach; ?>
</div>
</section>
<?php 
include 'footer.php'; ?>