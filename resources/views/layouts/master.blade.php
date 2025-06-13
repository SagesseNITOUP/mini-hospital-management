<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>AI Doctor - Vivez en meilleure santé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
@yield('content')

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p>&copy; 2025 AI Doctor. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
