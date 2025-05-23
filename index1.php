<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GINS Global Creative</title>
    <link rel="shorcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            padding-top: 70px;
        }

        .custom-navbar {
            background: rgb(0, 0, 0);
            /* semi transparan hitam */
            backdrop-filter: blur(8px);
            /* efek blur */
            -webkit-backdrop-filter: blur(8px);
            /* support Safari */
            transition: background-color 0.3s ease;
            z-index: 1030;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Saat discroll lebih jauh */
        .custom-navbar.scrolled {
            background: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .navlogo {
            width: 50px;
            padding: 10px;
        }

        .navbar {
            box-shadow: 0 2px 4px rgb(0, 0, 0);
            padding: 1rem 2rem;
        }

        .jumbotron {
            background: url('1.jpeg') no-repeat center center;
            background-size: 100% auto;
            color: white;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 4px #000;
            margin-bottom: 0;
        }

        .nav-link {
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: rgb(246, 255, 0) !important;
        }

        .custom-card {
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: box-shadow 0.3s ease-in-out;
        }

        .custom-card:hover {
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .custom-btn {
            background-color: #000;
            color: #fff;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .custom-btn:hover {
            background-color: yellow;
            color: black;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
        <img class="navlogo" src="logo.png" alt="logo">
        <a class="navbar-brand" href="index1.php">GINS Global Creative</a>
        <a class="navbar-brand">|</a>
        <a class="navbar-brand">Where Stories Turn Into Legacy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="index1.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="portofolio.php">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>


    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center"></div>
    </div>

    <!-- Card Section -->
    <div class="container py-5">
        <div class="row">
            <!-- About Us -->
            <div class="col-md-4 mb-4">
                <div class="custom-card border rounded p-3 h-100">
                    <h5 class="font-weight-bold">About Us</h5>
                    <hr>
                    <p>GINS Global Creative is a multidisciplinary creative house dedicated to bold, original ideas, with a strong focus on developing...</p>
                    <a href="aboutus.php" class="btn custom-btn btn-sm" target="_blank">Read More...</a>
                </div>
            </div>

            <!-- Portofolio -->
            <div class="col-md-4 mb-4">
                <div class="custom-card border rounded p-3 h-100">
                    <h5 class="font-weight-bold">Portofolio</h5>
                    <hr>
                    <p>On this page is a short portfolio, about anything from books and movies. ..</p>
                    <a href="portofolio.php" class="btn custom-btn btn-sm" target="_blank">Read More...</a>
                </div>
            </div>

            <!-- Contact Us -->
            <div class="col-md-4 mb-4">
                <div class="custom-card border rounded p-3 h-100">
                    <h5 class="font-weight-bold">Contact Us</h5>
                    <hr>
                    <p>Contact us for more information...</p>
                    <a href="contact.php" class="btn custom-btn btn-sm" target="_blank">Read More...</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.custom-navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

    <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            <small>© 2025 | GINS Global Creative</small>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>