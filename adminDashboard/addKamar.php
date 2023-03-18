<?php
session_start();
include("../tmp/Dashboard/header.php");
include("../tmp/Dashboard/navbar.php");
include("../tmp/Dashboard/sidebar.php");


?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Kamar Page</h1>
    </div><!-- End Page Title -->



    <section class="section">
        <a href="kamar.php" class="btn btn-danger mb-3">Kembali</a>
        <div class="row">
            <div class="card">
                <div class="card-body">



                    <h5 class="card-title">Tambah Kamar</h5>

                    <!-- General Form Elements -->
                    <form action="function/add.php" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" name="namaKamar" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Tipe Kamar</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipeKamar" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Jumlah Orang</label>
                            <div class="col-sm-10">
                                <input type="text" name="jumlahOrang" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="deskripsi" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" name="harga" class="form-control">
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
                                <button type="submit" name="tambahKamar" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->


                </div>
            </div>
    </section>



</main><!-- End #main -->

<?php include("../tmp/Dashboard/footer.php"); ?>