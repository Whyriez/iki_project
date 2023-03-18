<?php
include_once('../../function.php');
if (isset($_POST['tambahKamar'])) {

    // var_dump($_POST);
    // var_dump($_FILES);
    // die();


    $namaKamar = $_POST['namaKamar'];
    $tipeKamar = $_POST['tipeKamar'];
    $jumlahOrang = $_POST['jumlahOrang'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    $harga = $_POST['harga'];


    $dir = "../../Assets/gambarKamar/";
    $tmpFile = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmpFile, $dir . $gambar);





    $result = mysqli_query($koneksi, "INSERT INTO data_kamar (nama_kamar, gambar_kamar,tipe_kamar,jumlah_orang, deskripsi, harga) VALUES ('$namaKamar','$gambar','$tipeKamar','$jumlahOrang', '$deskripsi', '$harga')");


    // $addKamar = mysqli_query($koneksi, "INSERT INTO data_kamar (nama_kamar, gambar_kamar,jumlah_orang, deskripsi, harga) 
    // VALUES ('$namaKamar','$gambar','$jumlahOrang', '$deskripsi', '$harga')");

    if ($result) {
        echo "<script>
        window.location = '../kamar.php'</script>";
    }
}


if (isset($_POST['ubahKamar'])) {
    $id = $_POST['id'];
    $namaKamar = $_POST['namaKamar'];
    $tipeKamar = $_POST['tipeKamar'];
    $jumlahOrang = $_POST['jumlahOrang'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    $harga = $_POST['harga'];

    $queryShow = "SELECT * FROM data_kamar WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    if ($_FILES['gambar']['name'] == "") {
        $gambar = $result['gambar_kamar'];
    } else {
        $gambar = $_FILES['gambar']['name'];
        unlink("../../Assets/gambarKamar/" . $result['gambar_kamar']);
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../../Assets/gambarKamar/" . $_FILES['gambar']['name']);
    }


    $query = "UPDATE data_kamar SET nama_kamar='$namaKamar',gambar_kamar='$gambar', tipe_kamar= '$tipeKamar',jumlah_orang='$jumlahOrang', deskripsi='$deskripsi', harga='$harga' WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        echo "<script>
        window.location = '../kamar.php'</script>";
    }
}
