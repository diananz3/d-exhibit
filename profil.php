<?php include 'header.php'; 
include 'functions.php'; 
$id = $_SESSION["row"]["id_user"]?>

<section class="section pt-5">
<div class="container">
      <div class="card mb-5" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body">
          <h5 class="card-title">My Profile</h5>
          <p class="card-text">Pada halaman ini menampilkan semua karya yang sudah Anda submit sebelumnya. 
          Anda juga dapat menghapus karya tertentu</p>
        </div>
      </div>
  </div>
<div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
      <?php foreach( $conn->query("SELECT * FROM karya 
      WHERE user = $id") as $karya ) : ?>
    <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4" style="object-fit: fill;">
      <a href="detail.php?id=<?= $karya["id_pic"]; ?>" class="item-wrap fancybox">
        <div class="work-info">
          <h3><?= $karya['judul']; ?></h3>
          <span>Detail</span>
        </div>
        <img class="img-fluid" src="assets1/img/<?= $karya['data']; ?>">
      </a>
      <div class="row justify-content-center text-center">
        <a href="hapus.php?id=<?= $karya["id_pic"]; ?>" 
        onclick="return confirm('Yakin ingin menghapus karya Anda?');" class="btn btn-secondary btn-sm">Hapus
        </a>
      </div>
      
    </div>
    <?php endforeach; ?>
</div>
<div class="row justify-content-center text-center">
    <div class="col-5">
      <a type="button" class="readmore" href="logout.php">Log Out</a>
    </div>
  </div>
<div>
</section>
<?php include 'footer.php'; ?>