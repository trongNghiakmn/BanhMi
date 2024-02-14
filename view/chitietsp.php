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
    <style>
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 40%;
            margin-top: 50px;
        }

        .price_colored {
            font-size: 30px;
            border: none;
            cursor: pointer;
            width: 40%;
            color: #eb0029;
        }

        .mota_colored {
            border: none;
            cursor: pointer;
            margin-top: 30px;
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
            <h1 class="display-4 text-white animated slideInDown mb-3">Product Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Product Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <section class="bg-sand padding-large">
        <div class="container">
            <div class="row">

                <?php
                include '../util/mySQLUtil.php';
                include '../model/productModel.php';
                include '../model/loaiModel.php';
                // include '../controler/productControler.php';
                // include '../controler/loaiControler.php';
                $mabanh = $_GET["id"];
                $data = NULL;
                $product = new productModel("", "", "", "", "", "", 0);
                $data = $product->getAllProduct();
                $product = null;
                
                
                for ($i = 0; $i < count($data); $i++) {
                    if ($data[$i]["mabanh"] == $mabanh) {
                        $product = $data[$i];
                        break;
                    }
                }
                $loai=new loaiModel("","");
                $dsl=$loai->getAllLoai();
                $loai=null;
                for ($i = 0; $i < count($dsl); $i++) {
                    if ($dsl[$i]["maloai"] == $product["maloai"]) {
                        $loai = $dsl[$i];
                        break;
                    }
                }
                $_SESSION["listloai"]=$dsl;
                //var_dump($_SESSION["listloai"]);
                ?>

                <div class="col-md-6">
                    <a href="#" class="product-image"><img width="420px" height="320px" src="../<?php echo $product["hinh"]; ?>"></a>
                </div>
                <div class="col-md-6 pl-5">
                    <div class="product-detail">
                        <h1 style="color: #04AA6D;"><?php echo $product["tenbanh"]; ?></h1>
                        <p class="mota_colored">Loại: <?php echo $loai["tenloai"]; ?></p>
                        <p class="mota_colored">Mô tả: <?php echo $product["mota"]; ?></p>
                        <span class="price_colored"><?php echo "Giá: " . $product["gia"] . " VND"; ?></span><br>

                        <button type="submit" name="add-to-cart" value="27545" class="button">Thêm vào giỏ hàng</button>

                    </div>
                </div>

            </div>
        </div>
    </section>
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
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>