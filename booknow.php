<?php
session_start();
$title = "Book Now";
include("tmp/header.php");
include("tmp/navbar.php");

require('function.php');
?>

<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(Assets/images/big_image_1.jpg);">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">

                <div class="mb-5 element-animate">
                    <h1>Reservation</h1>
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
            <div class="col-md-6">
                <h2 class="mb-5">Reservation Form</h2>
                <form method="post">
                    <div class="row">
                        <div class="col-sm-6 form-group">

                            <label for="">Tanggal Kedatangan</label>
                            <div style="position: relative;">
                                <!-- <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span> -->
                                <input type='date' name="date1" class="form-control" id='arrival_date' required />
                            </div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <label for="">Tanggal Pulang</label>
                            <div style="position: relative;">
                                <!-- <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span> -->
                                <input type='date' name="date2" class="form-control" id='departure_date' required />
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="room">Kamar</label>
                            <select name="jumlah_kamar" id="room" class="form-control" required>
                                <option value="1 Kamar">1 Kamar</option>
                                <option value="2 Kamar">2 Kamar</option>
                                <option value="3 Kamar">3 Kamar</option>
                                <option value="4 Kamar">4 Kamar</option>
                                <option value="5 Kamar">5 Kamar</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="room">Orang</label>
                            <select name="jumlah_orang" id="room" class="form-control" required>
                                <option value="1 Orang">1 Orang</option>
                                <option value="2 Orang">2 Orang</option>
                                <option value="3 Orang">3 Orang</option>
                                <option value="4 Orang">4 Orang</option>
                                <option value="5 Orang">5+ Orang</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control " required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Tulis Catatan</label>
                            <textarea name="catatan" id="message" class="form-control " cols="30" rows="8" required></textarea>
                        </div>
                    </div>
                    <?php
                    if (!empty($_SESSION["cart"])) {
                        foreach ($_SESSION["cart"] as $cart => $a) { ?>
                            <input type="hidden" name="id" value="<?= $cart ?>">
                    <?php }
                    } else {
                        echo "";
                    } ?>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <button type="submit" name="reservasi" class="btn btn-primary" required>Reserve Now</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <?php if (!empty($_SESSION["cart"])) {

                foreach ($_SESSION["cart"] as $cart => $a) { ?>
                    <div class="col-md-5">
                        <h3 class="mb-5">Featured Room</h3>
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
                                <p><a href="function.php?hapusKamar=<?php echo $cart ?>" type="button" class="btn btn-primary btn-sm">Hapus</a></p>
                            </div>
                        </div>

                    </div>
            <?php };
            } else {
                echo "Belum Ada Kamar Yang Dipesan";
            } ?>
        </div>
    </div>
</section>
<!-- END section -->





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
<!-- END section -->

<?php include("tmp/footer.php") ?>