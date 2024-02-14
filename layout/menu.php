<?php
session_start();

?>
<!-- Topbar Start -->
<div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="small text-light" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="small text-light" href="#">Career</a></li>
                <li class="breadcrumb-item"><a class="small text-light" href="#">Terms</a></li>
                <li class="breadcrumb-item"><a class="small text-light" href="#">Privacy</a></li>
            </ol>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn-lg-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-primary m-0">Baker</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="../view/index.php" class="nav-item nav-link active">Home</a>
            <a href="../view/about.php" class="nav-item nav-link">About</a>
            <a href="../view/service.php" class="nav-item nav-link">Services</a>
            <a href="../view/product.php" class="nav-item nav-link">Products</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="../view/team.php" class="dropdown-item">Our Team</a>
                    <a href="../view/testimonial.php" class="dropdown-item">Testimonial</a>
                    <a href="../view/404.php" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="../view/contact.php" class="nav-item nav-link">Contact</a>



            <?php
            
            if (isset($_SESSION["isUser"])) {
                echo '<a href="../view/login.php" class="nav-item nav-link">(Hello) ' . $_SESSION["username"] . '</a>
                    <a href="../view/logout.php" class="nav-item nav-link">Logout</a>';
                echo '<a class="btn btn-lg-square btn-outline-light m-4 rounded-circle" href="../view/giohang.php"><i class="fa fa-shopping-cart"></i></a>';
            } else {
                echo '<a href="../view/login.php" class="nav-item nav-link">Login</a>
                    <a href="../view/Signin.php" class="nav-item nav-link">Signin</a>';
            }

            ?>

        </div>
        <div class=" d-none d-lg-flex">
            <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                <i class="fa fa-phone text-primary"></i>
            </div>
            <div class="ps-3">
                <small class="text-primary mb-0">Call Us</small>
                <p class="text-light fs-5 mb-0">+012 345 6789</p>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->