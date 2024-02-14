<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Baker - Bakery Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/mycss.css" rel="stylesheet">
    <style>
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-top: 50px;
        }
        .qt-minus{
            font-size: 15px;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <?php
    include '../layout/menu.php';


    ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">Product Cart</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Product Cart</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <?php
    //session_start();
    //include '../controler/productControler.php';
    //session_start();
    //var_dump($_SESSION['cart_item']);
    $tong = 0;
    if (isset($_SESSION['cart_item'])) {
        for ($i = 1; $i <= count($_SESSION['cart_item']); $i++) {
            $tong = $tong + ($_SESSION['cart_item'][$i][3] * $_SESSION['cart_item'][$i][6]);
            echo '<div class="container">';
            echo '    <section id="cart">';
            echo '  <article class="product">';
            echo '      <header>';
            echo '          <a class="remove" href="../controler/productControler.php?idrm='.$_SESSION['cart_item'][$i][0].'">';
            echo '              <img src="../'.$_SESSION['cart_item'][$i][4].'" alt="">';
            echo '              <h3>Remove product</h3>';
            echo '          </a>';
            echo '      </header>';
            echo '      <div class="content">';
            echo '          <h1>' . $_SESSION['cart_item'][$i][1] . '</h1>';
            echo '      </div>';
            echo '      <footer class="content">';
            echo '          <span class="qt-minus">Số Lượng:</span>';
            echo '          <span class="qt">' . $_SESSION['cart_item'][$i][6] . '</span>';
            //echo '          <span class="qt-plus">+</span>';
            echo '          <h2 class="full-price">';
            echo '              ' . $_SESSION['cart_item'][$i][3] * $_SESSION['cart_item'][$i][6] . '';
            echo '          </h2>';
            echo '          <h2 class="price"> ';
            echo '              ' . $_SESSION['cart_item'][$i][3] . '';
            echo '          </h2>';
            echo '          <h2 class="price">';
            echo '         ';
            echo '          </h2>';
            echo '          ';
            echo '         ';
            echo '      </footer>';
            echo '      ';
            echo '  </article>';
            echo '</section>';
            echo '</div>';
        }
    }
    $_SESSION['tonggia']=$tong;
    echo '<form action="../controler/donhangControler.php" method="post">';
    echo '<footer id="site-footer">';
    echo '<div class="container clearfix">';
    echo '  <h1 class="total">Tổng: <span>' . $tong . ' VND</span></h1>';
    echo '  <button type="submit" name="add-to-cart" value="27545" class="button">Thanh Toán</button>';
    echo '</div>';
    echo '</footer>';
    echo '</form>';
    ?>
    <!-- Contact End -->




    <?php
    include '../layout/footer.php';
    ?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../ib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>