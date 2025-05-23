<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - GINS Global Creative</title>
    <link rel="shorcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            box-shadow: 0 2px 4px rgb(0, 0, 0);
            padding: 1rem 2rem;
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

        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            padding: 2rem;
            justify-items: center;
        }

        .grid-item:nth-child(1) {
            grid-column: 1 / -1;
            justify-self: center;
        }


        h2 {
            margin-bottom: 20px;
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
                <li class="nav-item active"><a class="nav-link" href="aboutus.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="portofolio.php">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <div class="wrapper">
        <div class="content">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="content-section">
                        <h2 class="text-center"><b>About Us</b></h2>
                        <hr>
                        <p>GINS Global Creative is a multidisciplinary creative house dedicated to bold, original ideas, with a strong focus on developing world-class Intellectual Properties (IP) rooted in Indonesia. Founded by cross-medium creator Gusti Gina, GINS operates across various creative industries, including film, literature, digital content, and social media.</p>
                        <p>We believe that powerful storytelling is more than entertainment; it is a cultural force that fosters dialogue and shapes perspectives. With a precise, emotionally resonant, and aesthetically driven approach, GINS consistently delivers works that are impactful, relevant, and enduring.</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="content-section">
                        <h2 class="text-center"><b>Our Divisions</b></h2>
                        <hr>
                        <p><b>Story Development</b></p>
                        <p>We craft and develop literary content ranging from novels and short stories to non-fiction with the potential to be adapted into films or series.</p>
                        <p><b>Digital Media</b></p>
                        <p>A robust network of over 15 digital platforms with nationwide reach, delivering high-impact visual storytelling, emotionally driven narratives, and viral content grounded in psychology, culture, and social trends.</p>
                        <p><b>Creative Lab</b></p>
                        <p>Our creative unit specializes in branding, visual campaigns, and strategic storytelling for brands, institutions, and collaborative projects.</p>
                        <p><b>GINS Talent & IP Management</b></p>
                        <p>We manage top creative talents and flagship IPs, overseeing the full lifecycle of creative assets from concept development to multi-platform execution.</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="content-section">
                        <h2 class="text-center"><b>Our Philosophy</b></h2>
                        <hr>
                        <p>We believe that stories can heal, challenge, and inspire transformation. Through a collaborative spirit, GINS integrates creativity, empathy, and a global outlook to produce content that is not only commercially viable but also culturally and emotionally meaningful.</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="content-section">
                        <h2 class="text-center"><b>Vision</b></h2>
                        <hr>
                        <p>To become a leading creative force from Indonesia with IPs that transcend cultural, generational, and media boundaries.</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="content-section">
                        <h2 class="text-center"><b>Mission</b></h2>
                        <hr>
                        <p>To elevate authentic Indonesian stories to the global stage.</p>
                        <p>To build a sustainable creative ecosystem for storytellers and creators.</p>
                        <p>To manage and grow local IPs with high cultural and economic value.</p>
                        <p>To bridge market demands with meaningful content without compromising narrative integrity.</p>
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
</body>

</html>