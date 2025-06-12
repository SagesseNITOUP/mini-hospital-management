<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mini Hospital - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: url('https://source.unsplash.com/1600x900/?hospital,doctor') center center/cover no-repeat fixed;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
        }

        .register-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .register-card {
            background-color: rgba(255, 255, 255, 0.97);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 550px;
            overflow: hidden;
        }

        .register-header {
            background-color: #007bcd;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .register-body {
            padding: 30px;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            height: 48px;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 205, 0.25);
            border-color: #007bcd;
        }

        .btn-register {
            background-color: #007bcd;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            font-weight: 600;
            transition: all 0.3s;
            height: 48px;
            font-size: 16px;
        }

        .btn-register:hover {
            background-color: #0069b4;
            transform: translateY(-2px);
        }

        .input-group-text {
            background-color: white;
            border-right: none;
            width: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 48px;
        }

        .input-group .form-control {
            border-left: none;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
        }

        .name-fields {
            display: flex;
            gap: 15px;
        }

        .name-fields .form-group {
            flex: 1;
        }

        .register-footer {
            text-align: center;
            padding: 20px;
            border-top: 1px solid #eee;
        }

        .login-link {
            color: #007bcd;
            font-weight: 500;
        }

        .password-strength {
            height: 4px;
            background: #e9ecef;
            margin-top: -10px;
            margin-bottom: 15px;
            border-radius: 2px;
            overflow: hidden;
        }

        .password-strength-bar {
            height: 100%;
            width: 0%;
            background: #dc3545;
            transition: all 0.3s;
        }

        .terms-check {
            display: flex;
            align-items: flex-start;
            margin: 20px 0;
        }

        .terms-check input {
            margin-right: 10px;
            margin-top: 3px;
        }

        @media (max-width: 576px) {
            .name-fields {
                flex-direction: column;
                gap: 0;
            }

            .register-body {
                padding: 25px;
            }
        }
    </style>
</head>
<body>

<div class="register-container">
    <div class="register-card">
        <div class="register-header">
            <div class="login-logo" style="font-size: 24px; font-weight: bold; margin-bottom: 10px;">Mini Hospital</div>
            <h2>Créez votre compte</h2>
            <p class="mb-0">Rejoignez notre communauté médicale</p>
        </div>

        <div class="register-body">
            <form method="POST" action="{{ route('submit-register') }}">
                @csrf

                <div class="name-fields">
                    <div class="form-group">
                        <label for="firstName" class="form-label">Prénom</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Votre prénom" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lastName" class="form-label">Nom</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Votre nom" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="exemple@email.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Téléphone</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-phone"></i></span>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="+33 6 12 34 56 78">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Créez un mot de passe" required>
                    </div>
                    <div class="password-strength">
                        <div class="password-strength-bar" id="password-strength-bar"></div>
                    </div>
                    <small class="text-muted">Minimum 8 caractères avec chiffres et lettres</small>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirmez le mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Retapez votre mot de passe" required>
                    </div>
                </div>

                <div class="terms-check">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label for="terms" class="form-check-label">
                        J'accepte les <a href="#" class="text-decoration-none">conditions d'utilisation</a> et la <a href="#" class="text-decoration-none">politique de confidentialité</a>
                    </label>
                </div>

                <button type="submit" class="btn btn-register">
                    <i class="bi bi-person-plus"></i> S'inscrire
                </button>
            </form>

        </div>

        <div class="register-footer">
            <p class="mb-0">Vous avez déjà un compte ? <a href="{{route('login')}}" class="login-link">Connectez-vous</a></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
