<?php include 'header.php'; 
include 'functions.php'; 
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$event = query("SELECT * FROM events WHERE id_event = $id")[0];

?>

<section class="section">
      <div class="container">
        <div class="row mb-4 align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Detail Event</h2>
            </div>
        </div>
      </div>
      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8" data-aos="fade-up">
              <img src="assets1/img/<?= $event['poster']; ?>" alt="No Poster" class="img-fluid">
            </div>
            <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="sticky-content">
                <h3 class="h3"><?= $event['nama_event']; ?></h3>
                <div class="mb-5">
                  <p><?= $event['note']; ?></p>

                </div>

                <h4 class="h4">Penyelenggara</h4>
                <div class="mb-5">
                  <p><?= $event['penyelenggara']; ?></p>
                </div>
                <p><a href="formevent.php?id_eve=<?= $event['id_event'] ?>" class="readmore">Daftar</a>
                <a href="submited.php?id=<?= $event['id_event'] ?>" class="readmore" style="float: right;">Peserta</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'footer.php'; ?>