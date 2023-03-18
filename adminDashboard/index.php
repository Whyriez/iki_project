<?php
session_start();
$title = "Dashboard";
include("../tmp/Dashboard/header.php");
include("../tmp/Dashboard/navbar.php");
include("../tmp/Dashboard/sidebar.php");
require('../function.php');



?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Selamat Datang <?php echo $_SESSION['name'] ?></h5>
                        <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php include("../tmp/Dashboard/footer.php"); ?>