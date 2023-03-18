<?php
session_start();
$title = "Reservasi Saya";
include("../tmp/Dashboard/header.php");
include("../tmp/Dashboard/navbar.php");
include("../tmp/Dashboard/sidebar.php");

require('../function.php')

?>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Halaman Reservasi Saya</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <table id="example" class="table table-striped table-bordered" style="width:100%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Nama Kamar</th>
                        <th>Tanggal Kedatangan</th>
                        <th>Tanggal Pulang</th>
                        <th>Jumlah Kamar</th>
                        <th>Jumlah Orang</th>
                        <th>Email</th>
                        <th>Catatan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    $user = $_SESSION['name'];
                    $loop = mysqli_query($koneksi, "select reservasi.id, nama_user,nama_kamar, tanggal_kedatangan, tanggal_pulang, jumlah_kamar, reservasi.jumlah_orang, email, catatan, reservasi.diterima from reservasi inner join data_kamar on reservasi.id_kamar = data_kamar.id where nama_user = '$user'");

                    foreach ($loop as $lo => $a) { ?>
                        <tr>
                            <td><?= $index ?></td>
                            <td><?= $a['nama_user'] ?></td>
                            <td><?= $a['nama_kamar'] ?></td>
                            <td><?= $a['tanggal_kedatangan'] ?></td>
                            <td><?= $a['tanggal_pulang'] ?></td>
                            <!-- <td>
                            <img src="../Assets/gambarKamar/add" width="50" height="50" alt="">
                        </td> -->
                            <td><?= $a['jumlah_kamar'] ?></td>
                            <td><?= $a['jumlah_orang'] ?></td>
                            <td><?= $a['email'] ?></td>
                            <td><?= $a['catatan'] ?></td>
                            <td>
                                <?php if ($a['diterima'] == true) { ?>
                                    <span class="btn btn-info btn-sm">Diterima</span>
                                <?php } else { ?>
                                    <span class="btn btn-warning btn-sm">Menunggu Konfirmasi</span>
                                <?php } ?>
                                <!-- <a href="../function.php?hapus=<?= $a['id'] ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a> -->
                            </td>
                        </tr>

                    <?php $index++;
                    } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Nama Kamar</th>
                        <th>Tanggal Kedatangan</th>
                        <th>Tanggal Pulang</th>
                        <th>Jumlah Kamar</th>
                        <th>Jumlah Orang</th>
                        <th>Email</th>
                        <th>Catatan</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>

</main><!-- End #main -->

<?php include("../tmp/Dashboard/footer.php"); ?>