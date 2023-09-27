<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styleLanding.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Raleway:wght@100&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Playfair+Display&family=Raleway:wght@100;700&family=Varela+Round&display=swap" rel="stylesheet">
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title>Landing</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light p-0" style="background-color: #f67272;">
        <div class="container-fluid">
            <a class="navbar-brand" href="./landing.html">
                <img src="./image/CodeElixir.png" width="60px" height="60px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./landing.php">Tracking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Swiper JS -->
    <!-- Swiper -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./image/resources/4.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./image/resources/1.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./image/resources/2.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./image/resources/3.jpg" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>

    <!-- Heading -->

    <div class="mx-auto p-3 text-center fw-bold">
        <p class="heading fs-2 name">Team CodeElixir SIH-2023</p>
    </div>

    <hr className="horizontal-line" style="margin-left: 500px; margin-right: 500px;"/>
    <!-- Process Flow -->

    <div class="mx-auto p-3 text-center fw-bold">
        <p class="heading heading2 fs-4" >OUR PROCESS FLOW</p>
    </div>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-2">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./image/process/process1.jpg" width="200px">
                <h5 class="mt-3">Process-1</h5>
                <p>The dump truck is on its way to mining site</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./image/process/process2.jpg" width="200px" height="200px">
                <h5 class="mt-3">Process-2</h5>
                <p>Dump truck is being weighed at the mine entrance</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./image/process/process3.jpg" width="200px">
                <h5 class="mt-3">Process-3</h5>
                <p>After the RFID Tag Verification, it enters the mine</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="./image/process/process4.jpg" width="200px">
                <h5 class="mt-3">Process-4</h5>
                <p>Dumper goes towards its allocated Shovel</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="./image/process/process5.png" width="200px" height="200px">
                <h5 class="mt-3">Process-5</h5>
                <p>Shovel is loading material in its bucket</p>
            </div>
        </div>
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-2">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="./image/process/process6.png" width="200px" height="200px">
                <h5 class="mt-3">Process-6</h5>
                <p>Dump Truck is being loaded</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./image/process/process7.png" width="200px" height="200px">
                <h5 class="mt-3">Process-7</h5>
                <p>Dump Truck has reached its maximum load capacity</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./image/process/process8.jpeg" width="200px" height="200px">
                <h5 class="mt-3">Process-8</h5>
                <p>The loading process ends, Shovel is free</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./image/process/process9.gif" width="200px" height="200px">
                <h5 class="mt-3">Process-9</h5>
                <p>Dump Truck is being weighed at the mine exit</p>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./image/process/process10.jpg" width="200px" height="200px">
                <h5 class="mt-3">Process-10</h5>
                <p>After successful matching of load requirements, Dumper leaves</p>
            </div>
            <div class="col-lg-12 text-center mt-5 mb-5">
                <a href="facilities.php" class="btn rounded-5 fw-bold shadow-none">Learn More</a>
            </div>
        </div>
    </div>

    <!-- Download App Image -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img src="./image/mobile.png" class="img-fluid" alt="Mobile Image">
            </div>
            <div class="col-lg-6 col-md-12">
                <h1>Download Our App Now</h1>
                <p class="mt-5">Mobile app is provided to Dumper driver <br> Available in both Android and IOS <br>Mobile app is under development and will be available soon <br>Stay tuned <br> Team Code Elixir <br> SIH 2023
                </p>
            </div>
        </div>
    </div>

    <!-- Footer Text -->
    <h6 class="footer-text mt-3 text-center text-white p-3 m-0">Designed and Developed by CodeElixir</h6>

    <!-- SCRIPT -->

    <!-- SWIPER JS -->

    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
    </script>
</body>

</html>