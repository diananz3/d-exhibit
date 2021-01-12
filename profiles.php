<?php include 'header.php'; 
include 'functions.php';
$id = $_GET["id_user"];
$karya = query("SELECT * FROM karya WHERE user = $id")[0];
$user = $karya["user"];
$name = query("SELECT * FROM user WHERE id_user = $user")[0];
?>

<section class="section pt-5">
<div class="container">
      <div class="card mb-5" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body">
          <h5 class="card-title">Profile</h5>
          <p class="card-text">Pada halaman ini menampilkan semua karya dari <?= $name['username']?></p>
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
      
    </div>
    <?php endforeach; ?>
</div>
</section>
<?php include 'footer.php'; ?>