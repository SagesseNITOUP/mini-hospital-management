<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Doctolib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #f2f8ff;
        }

        .navbar {
            background-color: #007bdb;
        }

        .nav-link,
        .navbar-text {
            color: white !important;
            font-size: 0.9rem;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .cta-box {
            max-width: 400px;
            margin: 60px auto;
            background-color: white;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        .btn-primary {
            background-color: #007bdb;
            border: none;
        }

        .btn-warning {
            background-color: #ffd449;
            color: black;
            font-weight: 600;
            border: none;
        }

        .btn-warning:hover {
            background-color: #ffc107;
        }

        .btn {
            width: 100%;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid px-4">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard')  }}">AI Doctor</a>
        <div class="d-flex align-items-center ms-auto gap-3">
            <a href="#" class="btn btn-light btn-sm fw-semibold">Vous êtes soignant ?</a>
            <a href="#" class="nav-link"><i class="bi bi-question-circle me-1"></i> Centre d'aide</a>
            <div class="text-end">
                <a href="#" class="nav-link"><i class="bi bi-person"></i> <span class="fw-semibold">Se connecter</span><br><small class="text-white-50">Gérer mes RDV</small></a>
            </div>
        </div>
    </div>
</nav>

<!-- Login/Register CTA -->
<div class="text-center mt-5">
    <h5 class="fw-bold">Inscrivez-vous ou connectez-vous</h5>
</div>

<div class="cta-box">
    <div class="text-center mb-3">
        <p class="fw-semibold mb-1">Nouveau sur AI Doctor ?</p>
        <a class="btn btn-primary" href="{{route('register')}}" >S'INSCRIRE</a>
    </div>
    <div class="text-center">
        <p class="fw-semibold mb-1">J'ai déjà un compte AI Doctor</p>
        <a class="btn btn-warning" href="{{route('login')}}" >SE CONNECTER</a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
