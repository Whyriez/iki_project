<?php
$title = "Deluxe";
include("tmp/header.php");
include("tmp/navbar.php");
require('function.php')

?>
<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(Assets/images/big_image_1.jpg);">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">

                <div class="mb-5 element-animate">
                    <h1>Our Rooms</h1>
                    <p>Discover our world's #1 Luxury Room For VIP.</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END section -->


<section class="site-section">
    <div class="container">
        <div class="row">
            <?php $loop = mysqli_query($koneksi, "select * from data_kamar where tipe_kamar = 'deluxe'");

            while ($a = mysqli_fetch_array($loop)) { ?>
                <div class="col-md-4 mb-4">
                    <div class="media d-block room mb-0">
                        <figure>
                            <img src="Assets/gambarKamar/<?= $a['gambar_kamar'] ?>" alt="Generic placeholder image" class="img-fluid">
                        </figure>
                        <div class="media-body">
                            <h3 class="mt-0"><a href="#"><?= $a['nama_kamar'] ?></a></h3>
                            <ul class="room-specs">
                                <li><span class="ion-ios-keypad"></span> <?= $a['tipe_kamar'] ?></li>
                                <li><span class="ion-ios-people-outline"></span> <?= $a['jumlah_orang'] ?></li>
                                <li><span class="ion-ios-pricetag"></span>Rp.<?= number_format($a['harga']) ?></li>
                            </ul>
                            <p><?= $a['deskripsi'] ?></p>
                            <p><a href="#" class="btn btn-primary btn-sm">Pesan Sekarang</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>



        </div>
    </div>
    </div>
</section>




<section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(Assets/images/img_5.jpg);">
    <div class="container">
        <div class="row justify-content-center align-items-center intro">
            <div class="col-md-9 text-center element-animate">
                <h2>Relax and Enjoy your Holiday</h2>
                <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere facilis, dolores!</p>

            </div>
        </div>
    </div>
</section>

<?php include("tmp/footer.php") ?>