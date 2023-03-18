<?php
session_start();
$title = "Data Kamar";
include("../tmp/Dashboard/header.php");
include("../tmp/Dashboard/navbar.php");
include("../tmp/Dashboard/sidebar.php");

require('../function.php');

?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Kamar</h1>
    </div><!-- End Page Title -->



    <section class="section">
        <a href="addKamar.php" class="btn btn-primary btn-sm mb-3">Tambah Kamar</a>
        <div class="row">
            <table id="example" class="table table-striped table-bordered" style="width:100%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kamar</th>
                        <th>Gambar Kamar</th>
                        <th>Tipe Kamar</th>
                        <th>Jumlah Orang</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $loop = mysqli_query($koneksi, "select * from data_kamar");

                    while ($a = mysqli_fetch_array($loop)) { ?>
                        <tr>
                            <td>1</td>
                            <td><?= $a['nama_kamar'] ?></td>
                            <td>
                                <img src="../Assets/gambarKamar/<?= $a['gambar_kamar'] ?>" width="50" height="50" alt="">
                            </td>
                            <td><?= $a['tipe_kamar'] ?></td>
                            <td><?= $a['jumlah_orang'] ?></td>
                            <td><?= $a['deskripsi'] ?></td>
                            <td><?= $a['harga'] ?></td>
                            <td>
                                <a href="editKamar.php?edit=<?= $a['id'] ?>" type="button" class="btn btn-primary btn-sm">Edit</a>
                                <a href="../function.php?hapus=<?= $a['id'] ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a>
                            </td>
                        </tr>

                    <?php } ?>


                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Kamar</th>
                        <th>Gambar Kamar</th>
                        <th>Tipe Kamar</th>
                        <th>Jumlah Orang</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>


        </div>
    </section>



</main><!-- End #main -->

<?php include("../tmp/Dashboard/footer.php"); ?>