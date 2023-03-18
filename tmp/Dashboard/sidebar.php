<!-- ======= Sidebar ======= -->
<?php
session_start();
$page = basename($_SERVER['PHP_SELF']);
require('../function.php');

$role = $_SESSION['role'];

?>
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <?php if ($role == 'admin') {  ?>

            <li class="nav-item">
                <a class="nav-link <?php if ($page != 'index.php') : echo 'collapsed';
                                    endif; ?>" href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($page != 'reservasi.php') : echo 'collapsed';
                                    endif; ?>" href="reservasi.php">
                    <i class="bi bi-archive"></i>
                    <span>Data Reservasi</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($page != 'kamar.php') : echo 'collapsed';
                                    endif; ?>" href="kamar.php">
                    <i class="bi bi-card-list"></i>
                    <span>Data Kamar</span>
                </a>
            </li><!-- End Register Page Nav -->

        <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link <?php if ($page != 'index.php') : echo 'collapsed';
                                    endif; ?>" href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($page != 'myReservasi.php') : echo 'collapsed';
                                    endif; ?>" href="myReservasi.php">
                    <i class="bi bi-archive"></i>
                    <span>Reservasi Saya</span>
                </a>
            </li><!-- End Contact Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="../rooms.php">
                    <i class="bi bi-envelope"></i>
                    <span>Pesan Kamar</span>
                </a>
            </li><!-- End Contact Page Nav -->
        <?php } ?>




        <li class="nav-item">
            <a class="nav-link collapsed" href="../logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Register Page Nav -->



    </ul>

</aside><!-- End Sidebar-->