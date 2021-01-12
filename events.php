<?php 
include 'functions.php';
include 'header.php'; 

?>

<section class="section pt-5">
<div class="container">
      <div class="card mb-5" data-aos="fade-up" data-aos-delay="200">
        <div class="card-body">
          <h5 class="card-title">Events</h5>
          <p class="mb-5">Berikut adalah daftar Lomba yang tersedia untuk saat ini. 
          jangan lewatkan kesempatan, ikuti dan menangkan berbagai hadiah menarik!<br>
          Atau sebarkan Event Anda disini!</p>
          <a class="readmore" href="event.php">Tambah Events</a>
        </div>
      </div>
  </div>
<div class="container pt-5" data-aos="fade-up">
    <table class="table table-striped table-hover table-bordered">
        <tr style="background-color: #FFDCBA">
            <th>NO</th>
            <th>EVENT</th>
            <th>MULAI</th>
            <th>SELESAI</th>
            <th>MORE</th>
        </tr>

        <?php
        $no = 1; 
        foreach( $conn->query("SELECT * FROM events ORDER BY id_event DESC") as $event ) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $event['nama_event'] ?></td>
            <td><?php echo $event['mulai'] ?></td>
            <td><?php echo $event['selesai'] ?></td>
            <td>
                <a type="button" class="btn btn-secondary btn-sm"
                 href="detaileve.php?id=<?= $event["id_event"]; ?>">Detail</a>
             </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</section>

<?php include 'footer.php'; ?>