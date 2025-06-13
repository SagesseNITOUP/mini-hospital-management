<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">AI Doctor</a>

        <div class="d-flex align-items-center gap-3 ms-auto">
            <a href="#" class="btn btn-white text-primary fw-semibold px-3 rounded-pill border-0 shadow-sm">Vous êtes soignant ?</a>

            <a href="#" class="text-white d-flex align-items-center gap-1 small">
                <i class="bi bi-question-circle"></i>
                Centre d’aide
            </a>

            <div class="d-flex flex-column align-items-start">
                <a href="{{ route('connexion') }}" class="text-white fw-semibold d-flex align-items-center gap-1">
                    <i class="bi bi-person"></i>
                    Se connecter
                </a>
                <a href="{{ route('connexion') }}" class="text-light text-decoration-none small ms-4">Gérer mes RDV</a>
            </div>
        </div>
    </div>
</nav>
