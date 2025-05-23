<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - GINS Global Creative</title>
    <link rel="shorcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome untuk ikon Instagram -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            padding: 70px;
            height: 100%;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
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
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: rgb(246, 255, 0) !important;
        }

        .content-section {
            padding: 60px 20px;
            background-color: white;
            border-radius: 10px;
            margin: 10px auto;
            max-width: 900px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        h2 {
            margin-bottom: 20px;
        }

        .portfolio-item {
            margin-bottom: 30px;
            text-align: left;
        }

        .social-links li {
            list-style: none;
            margin: 10px 0;
        }

        .social-links i {
            margin-right: 8px;
        }

        .grid-container {
            display: grid;
            gap: 1rem;
            padding: 1rem;
            justify-items: center;
        }
    </style>
</head>

<body>
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
                <li class="nav-item"><a class="nav-link" href="index1.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="portofolio.php">Portfolio</a></li>
                <li class="nav-item active"><a class="nav-link" href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <div class="wrapper">
        <div class="content">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="content-section">
                        <h1 class="text-center"><b>Contact Info</b></h1>
                        <hr>
                        <p>Alamat: Bukit Mampang Residence. Blok Q no 02. Jl cemara, grogol. Limo. Depok. Jawa Barat. 1651</p>
                        <p>Telepon: <a href="tel:+6282152143945">+6282152143945</a></p>
                        <p>Email: <a href="mailto:ginsglobalcreative@gmail.com">ginsglobalcreative@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer-bottom text-center py-3">
                <small>© 2025 | GINS Global Creative</small>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
    </script>
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

</body>

</html>