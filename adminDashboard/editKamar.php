<?php
session_start();
include("../tmp/Dashboard/header.php");
include("../tmp/Dashboard/navbar.php");
include("../tmp/Dashboard/sidebar.php");


$namaKamar = '';
$tipeKamar = '';
$jumlahOrang = '';
$deskripsi = '';
$harga = '';

if (isset($_GET['edit'])) {

    include_once('../function.php');

    $id = $_GET['edit'];
    $query = "SELECT * FROM data_kamar WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);

    $namaKamar = $result['nama_kamar'];
    $tipeKamar = $result['tipe_kamar'];
    $jumlahOrang = $result['jumlah_orang'];
    $deskripsi = $result['deskripsi'];
    $harga = $result['harga'];
}



?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Kamar Page</h1>
    </div><!-- End Page Title -->



    <section class="section">
        <a href="kamar.php" class="btn btn-danger mb-3">Kembali</a>
        <div class="row">
            <div class="card">
                <div class="card-body">



                    <h5 class="card-title">Edit Kamar</h5>

                    <!-- General Form Elements -->
                    <form action="function/add.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="id" value="<?= $id ?>" hidden>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" name="namaKamar" value="<?= $namaKamar ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Tipe Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipeKamar" value="<?= $tipeKamar ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Jumlah Orang</label>
                            <div class="col-sm-10">
                                <input type="text" name="jumlahOrang" value="<?= $jumlahOrang ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="deskripsi" style="height: 100px"><?= $deskripsi ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" name="harga" value="<?= $harga ?>" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Upload Gambar</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="gambar" type="file" id="formFile">
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Simpan</label>
                            <div class="col-sm-10">
                                <button type="submit" name="ubahKamar" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->


                </div>
            </div>
    </section>



</main><!-- End #main -->

<?php include("../tmp/Dashboard/footer.php"); ?>