<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CarVilla</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <section id="featured-cars" class="featured-cars">
        <div class="container">
            <div class="section-header">
                <p>checkout <span>the</span> featured cars</p>
                <h2>featured cars</h2>
            </div>
            <div class="featured-cars-content">
                <div class="row">
                    <?php
                    $cars = [
                        ["title" => "BMW 6-series gran coupe", "price" => "$89,395", "image" => "assets/images/featured-cars/fc1.png"],
                        ["title" => "Chevrolet Camaro wmv20", "price" => "$66,575", "image" => "assets/images/featured-cars/fc2.png"],
                        ["title" => "Lamborghini V520", "price" => "$125,250", "image" => "assets/images/featured-cars/fc3.png"]
                    ];
                    foreach ($cars as $car) {
                        echo '
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-featured-cars">
                                <div class="featured-img-box">
                                    <div class="featured-cars-img">
                                        <img src="' . $car["image"] . '" alt="cars">
                                    </div>
                                    <div class="featured-model-info">
                                        <p>model: 2017 <span class="featured-mi-span">3100 mi</span> <span class="featured-hp-span">240HP</span> automatic</p>
                                    </div>
                                </div>
                                <div class="featured-cars-txt">
                                    <h2><a href="#">' . $car["title"] . '</a></h2>
                                    <h3>' . $car["price"] . '</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Subscribe to our Newsletter</h2>
                    <form method="POST" action="subscribe.php">
                        <input type="email" name="email" class="form-control" placeholder="Add Email" required>
                        <button type="submit" class="btn btn-primary mt-2">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
