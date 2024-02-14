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
            <h1 class="display-4 text-white animated slideInDown mb-3">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Product Start -->
    <div class="container-xxl bg-light my-6 py-6 pt-0" style="margin: 12rem 0;">
        <div class="container">
            <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-light mb-0">The Best Bakery In Your City</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="d-inline-flex align-items-center text-start">
                            <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                            <div class="ms-4">
                                <p class="fs-5 fw-bold mb-0">Call Us</p>
                                <p class="fs-1 fw-bold mb-0">+012 345 6789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// Bakery Products</p>
                <h1 class="display-6 mb-4">Explore The Categories Of Our Bakery Products</h1>
            </div>
            <div class="row g-4">
            <?php
            
            include '../controler/productControler.php';
            $data=NULL;
            $product=new productModel("","","","","","",0);
            $data=$product->getAllProduct();
            //var_dump($data);
            $_SESSION["listproduct"]=$data;
            //var_dump($_SESSION["listproduct"]);
            for($i=0;$i<count($data);$i++)
            {
                if($data!=NULL){
            
            echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">';
            echo '<form action="../controler/productControler.php" method="post">';
            echo '  <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">';
            echo '      <div class="text-center p-4">';
            echo '          <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">'.$data[$i]["gia"].' VND</div>';
            echo '          <h3 class="mb-3">'.$data[$i]["tenbanh"].'</h3>';

            echo '      </div>';
            echo '      <div class="position-relative mt-auto">';
            echo '          <img class="img-fluid" src="../'.$data[$i]["hinh"].'" alt="">';
            echo '          <div class="product-overlay" >';
            echo '              <a class="btn btn-lg-square btn-outline-light ms-3 rounded-circle" href="./chitietsp.php?id='.$data[$i]["mabanh"].'"><i class="fa fa-eye text-primary"></i></a>';
            echo '              <button type="submit" name="order_action" value="add"class="btn btn-lg-square btn-outline-light ms-3 rounded-circle" ><i class="fa fa-shopping-cart"></i></button>';
            echo '          </div>';
            echo '      </div>';
            echo '      <input type="hidden" name="id" value="'.$data[$i]["mabanh"].'">';
            echo '      <input type="hidden" name="name" value="'.$data[$i]["tenbanh"].'">';
            echo '      <input type="hidden" name="mota" value="'.$data[$i]["mota"].'">';
            echo '      <input type="hidden" name="gia" value="'.$data[$i]["gia"].'">';
            echo '      <input type="hidden" name="hinh" value="'.$data[$i]["hinh"].'">';
            echo '      <input type="hidden" name="maloai" value="'.$data[$i]["maloai"].'">';
            echo '  </div>';
            echo '  </form>';
            echo '</div>';
                }
            }

            ?>
            </div>

        </div>
    </div>
    <!-- Product End -->


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
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>