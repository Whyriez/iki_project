<?php

$koneksi = mysqli_connect("localhost", "root", "", "project_iki");



if (isset($_POST['login'])) {
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($koneksi, "select * from users where email = '$email' and password = '$password'");
    $hitung = mysqli_num_rows($cekuser);

    if ($hitung > 0) {
        $ambilRole = mysqli_fetch_array($cekuser);
        $role = $ambilRole['role'];
        $name = $ambilRole['name'];

        if ($role == 'admin') {
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'admin';
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header('location: ../adminDashboard');
        } else {
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'user';
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header('location: ../userDashboard');
        }
    } else {
        echo 'data tidak ditemukan';
    }
}

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = 'user';
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, email,role, password) 
            VALUES ('$name', '$email', '$role', '$password')";
    $stmt = $koneksi->prepare($sql);

    $save = $stmt->execute();
    if ($save) header("Location: login.php");
}


if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $queryShow = "SELECT * FROM data_kamar WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("Assets/gambarKamar/" . $result['gambar_kamar']);

    $query = "DELETE FROM data_kamar WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);





    if ($sql) header("Location: adminDashboard/kamar.php");
}

if (isset($_POST['pesan'])) {
    if ($_SESSION['name']) {
        $id = $_POST['idKamar'];

        $sql =  "SELECT * FROM data_kamar WHERE id = '$id'";
        $query = mysqli_query($koneksi, $sql);
        $result = mysqli_fetch_object($query);

        $_SESSION["cart"][$id] = [
            "id" => $result->id,
            "nama_kamar" => $result->nama_kamar,
            "gambar_kamar" => $result->gambar_kamar,
            "tipe_kamar" => $result->tipe_kamar,
            "jumlah_orang" => $result->jumlah_orang,
            "deskripsi" => $result->deskripsi,
            "harga" => $result->harga
        ];
        if ($_SESSION["cart"] > 2) {
            echo "<script>alert('hanya bisa memesan 1 model kamar')</script>";
        }
        header('location: booknow.php');
    } else {
        header('location: Auth/login.php');
    }
}

if (isset($_GET["hapusKamar"])) {

    session_start();

    $id = $_GET["hapusKamar"];
    // session_destroy();
    unset($_SESSION['cart'][$id]);

    header('location: booknow.php');
}

if (isset($_POST['reservasi'])) {
    if ($_SESSION['name']) {
        $user = $_SESSION['name'];
        $date1 = date('Y-m-d', strtotime($_POST['date1']));
        $date2 = date('Y-m-d', strtotime($_POST['date2']));
        $jumlah_kamar = $_POST['jumlah_kamar'];
        $jumlah_orang = $_POST['jumlah_orang'];
        $email = $_POST['email'];
        $catatan = $_POST['catatan'];


        $idKamar =  $_POST['id'];

        // print_r($idKamar);

        $result = mysqli_query($koneksi, "INSERT INTO reservasi (nama_user, id_kamar, tanggal_kedatangan,tanggal_pulang,jumlah_kamar, jumlah_orang, email, catatan) VALUES ('$user','$idKamar','$date1','$date2','$jumlah_kamar','$jumlah_orang', '$email', '$catatan')");

        if ($result) {
            unset($_SESSION['cart'][$idKamar]);
            header('location: userDashboard/myReservasi.php');
        }
    } else {
        header('location: Assets/login.php');
    }
}

if (isset($_GET['terima'])) {
    $id = $_GET['terima'];
    $true = true;

    $query = "UPDATE reservasi SET diterima='$true' WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        echo "<script>
        window.location = 'adminDashboard/reservasi.php'</script>";
    }
}
