<header role="banner">
    <?php $page = basename($_SERVER['PHP_SELF']); ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">LuxuryHotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'index.php') : echo 'active';
                                            endif; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown <?php if ($page == 'rooms.php' || $page == 'standard.php' || $page == 'luxury.php' || $page == 'deluxe.php') : echo 'active';
                                                    endif; ?>">
                        <a class="nav-link dropdown-toggle" href="rooms.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rooms</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item <?php if ($page == 'rooms.php') : echo 'active';
                                                    endif; ?>" href="rooms.php">All Room</a>
                            <a class="dropdown-item <?php if ($page == 'standard.php') : echo 'active';
                                                    endif; ?>" href="standard.php">Standard Room</a>
                            <a class="dropdown-item <?php if ($page == 'luxury.php') : echo 'active';
                                                    endif; ?>" href="luxury.php">Luxury Room</a>
                            <a class="dropdown-item <?php if ($page == 'deluxe.php') : echo 'active';
                                                    endif; ?>" href="deluxe.php">Deluxe Room</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'about.php') : echo 'active';
                                            endif; ?>" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'contact.php') : echo 'active';
                                            endif; ?>" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'login.php') : echo 'active';
                                            endif; ?>" href="Auth/login.php">Login</a>
                    </li>

                    <li class="nav-item cta">
                        <a class="nav-link <?php if ($page == 'booknow.php') : echo 'active';
                                            endif; ?>" href=" booknow.php"><span>Book Now</span></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>