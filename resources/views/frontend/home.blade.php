<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>AI Doctor - Vivez en meilleure santé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #007bcd;
            --secondary-blue: #0066a8;
        }

        body {
            background: url('https://source.unsplash.com/1600x900/?clinic,hospital') center center/cover no-repeat fixed;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .hero {
            background-color: var(--primary-blue);
            min-height: 80vh;
            border-bottom-left-radius: 60px;
            border-bottom-right-radius: 60px;
            padding: 60px 0;
            position: relative;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
        }

        .hero-image {
            position: absolute;
            bottom: 0;
            right: 0;
            max-height: 100%;
            object-fit: contain;
        }


        .navbar {
            background-color: var(--primary-blue) !important;
            padding: 15px 0;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: white !important;
        }

        .nav-link:hover {
            color: white !important;
        }



        .btn-outline-light:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: white;
        }

        .login-btn:hover {
            text-decoration: underline;
        }

        .search-btn:hover {
            text-decoration: underline;
        }

        input::placeholder {
            color: #6c757d !important;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .footer {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px 0;
        }

        .search-form .search-bar {
            max-width: 800px;
            width: 100%;
            background-color: white;
        }

        .search-form input::placeholder {
            color: #6c757d;
        }

        .privacy-section {
            background-color: #f8f9fa;
            padding: 60px 0;
            margin: 40px 0;
        }

        .privacy-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 800px;
            margin: 0 auto;
        }

        .privacy-content {
            padding: 30px;
        }

        .privacy-btn {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 20px;
        }

        .navbar .btn-white {
            background-color: #fff;
            color: #007bff;
        }

        .navbar .btn-white:hover {
            background-color: #f0f0f0;
            color: #0056b3;
        }

        .navbar a {
            text-decoration: none;
        }

        .navbar .small {
            font-size: 0.875rem;
        }


    </style>
</head>
<body>

<!-- Updated Navbar with visible login and appointment buttons -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">AI Doctor</a>

        <!-- RIGHT NAV ITEMS -->
        <div class="d-flex align-items-center gap-3 ms-auto">
            <!-- Button -->
            <a href="#" class="btn btn-white text-primary fw-semibold px-3 rounded-pill border-0 shadow-sm">Vous êtes soignant ?</a>

            <!-- Help Link -->
            <a href="#" class="text-white d-flex align-items-center gap-1 small">
                <i class="bi bi-question-circle"></i>
                Centre d’aide
            </a>

            <!-- Login Link -->
            <div class="d-flex flex-column align-items-start">
                <a href="{{ route('connexion')  }}" class="text-white fw-semibold d-flex align-items-center gap-1">
                    <i class="bi bi-person"></i>
                    Se connecter
                </a>
                <a href="{{ route('connexion')  }}" class="text-light text-decoration-none small ms-4">Gérer mes RDV</a>
            </div>
        </div>



    </div>
</nav>

<!-- Hero Section -->
<section class="hero text-white position-relative overflow-hidden">
    <div class="container position-relative z-2">
        <div class="row align-items-center">
            <!-- LEFT SIDE -->
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="hero-title mb-4">Vivez en meilleure santé</h1>

                <!-- Search Form -->
                <form class="search-form d-flex justify-content-center justify-content-lg-start">
                    <div class="input-group rounded-pill bg-white shadow overflow-hidden flex-nowrap" style="max-width: 850px; width: 100%;">
                        <!-- Search Icon -->
                        <span class="input-group-text bg-white border-0">
              <i class="bi bi-search text-muted"></i>
            </span>
                        <input type="text" class="form-control border-0" placeholder="Nom, spécialité, établissement…">

                        <div class="vr mx-2 d-none d-md-block"></div>

                        <!-- Location Icon -->
                        <span class="input-group-text bg-white border-0">
              <i class="bi bi-geo-alt text-muted"></i>
            </span>
                        <input type="text" class="form-control border-0" placeholder="Où ?">

                        <button type="submit" class="btn btn-dark d-flex align-items-center px-4 rounded-0 rounded-end">
                            <i class="bi bi-send me-2"></i> Rechercher
                        </button>
                    </div>
                </form>
            </div>

            <!-- RIGHT SIDE: IMAGE -->
            <div class="col-lg-5 d-none d-lg-block position-relative">
                <img src="/mnt/data/b31e7842-2e37-42ee-a849-17320a756ad0.png" alt="Doctor and patient" class="img-fluid hero-image" />
            </div>
        </div>
    </div>
</section>


<!-- Services Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4 text-white text-shadow">Our Services</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Emergency Care</h5>
                        <p class="card-text">24/7 emergency support with expert medical team on standby.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Outpatient Services</h5>
                        <p class="card-text">Quick and efficient diagnosis and treatment by our professionals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Pharmacy</h5>
                        <p class="card-text">Well-stocked in-house pharmacy for all essential medicines.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Section -->
<section class="privacy-section">
    <div class="container">
        <div class="privacy-card">
            <div class="privacy-content text-center">
                <h2 class="mb-4">Votre santé. Vos données.</h2>
                <p class="lead">La confidentialité de vos informations personnelles est une priorité absolue pour AI Doctor et guide notre action au quotidien.</p>
                <button class="privacy-btn">DÉCOUVRIR NOS ENGAGEMENTS</button>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p>&copy; 2025 AI Doctor. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
