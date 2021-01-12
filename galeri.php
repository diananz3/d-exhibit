<?php include 'header.php'; 
include 'functions.php'; 
?>

<section class="section pt-5">
    <div class="container">
      <div class="card mb-5" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body">
          <h5 class="card-title">Galeri</h5>
          <p class="card-text">Pada halaman ini menampilkan galeri pameran semua karya yang telah disubmit oleh para pengguna di bulan ini. 
          Galeri akan diperbarui setiap bulan. Jangan lewatkan Pameran di bulan ini, mulailah berkarya dan perlihatkan karya Anda yang luar biasa 
          di sini!</p>
          <a class="readmore" href="formpic.php">Upload Karya</a>
        </div>
      </div>
  </div>
  <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
      <?php foreach( $conn->query("SELECT * FROM karya
      WHERE MONTH(waktu) = MONTH(current_timestamp()) AND YEAR(waktu) = YEAR(current_timestamp)") as $karya ) : ?>
    <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4 " style="object-fit: cover; width: 500px; height: 500px;">
      <a href="detail.php?id=<?= $karya["id_pic"]; ?>" class="item-wrap fancybox" name="detail">
        <div class="work-info">
          <h3><?= $karya['judul']; ?></h3>
          <span>Detail</span>
        </div>
        <img class="img-fluid width: 100%; height: 100%" src="assets1/img/<?= $karya['data']; ?>">
      </a>
    </div>
    <?php endforeach; ?>
</div>
</section>
<?php 
include 'footer.php'; ?>