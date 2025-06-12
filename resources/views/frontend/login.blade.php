<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mini Hospital - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: url('https://source.unsplash.com/1600x900/?medical,clinic') center center/cover no-repeat fixed;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
        }

        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .login-card {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            overflow: hidden;
        }

        .login-header {
            background-color: #007bcd;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .login-body {
            padding: 30px;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            height: 48px; /* Adjusted height */
        }

        .btn-login {
            background-color: #007bcd;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            font-weight: 600;
            transition: all 0.3s;
            height: 48px; /* Match input height */
        }

        .input-group-text {
            background-color: white;
            border-right: none;
            width: 45px; /* Fixed width for icons */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 48px; /* Match input height */
        }

        /* Adjusted input group to remove double borders */
        .input-group .form-control {
            border-left: none;
        }

        .input-group {
            margin-bottom: 20px;
        }

        /* Rest of your existing styles... */
        .login-footer {
            text-align: center;
            padding: 20px;
            border-top: 1px solid #eee;
        }

        .login-logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 205, 0.25);
            border-color: #007bcd;
        }

        .forgot-password {
            text-align: right;
            margin-bottom: 20px;
        }

        .social-login {
            margin: 20px 0;
        }

        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
            text-decoration: none;
            transition: all 0.3s;
            height: 48px; /* Match other input heights */
        }

        .social-btn.google {
            background-color: #fff;
            color: #757575;
            border: 1px solid #ddd;
        }

        .social-btn.google:hover {
            background-color: #f8f9fa;
        }

        .social-btn.facebook {
            background-color: #3b5998;
            color: white;
        }

        .social-btn.facebook:hover {
            background-color: #344e86;
        }

        .social-btn i {
            margin-right: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <div class="login-logo">Mini Hospital</div>
            <h2>Connectez-vous à votre compte</h2>
        </div>

        <div class="login-body">
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre e-mail">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                    </div>
                </div>

                <div class="forgot-password">
                    <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>
                </div>

                <button type="submit" class="btn btn-login">
                    <i class="bi bi-box-arrow-in-right"></i> Se connecter
                </button>

                <div class="social-login">
                    <p class="text-center text-muted my-3">Ou connectez-vous avec</p>

                    <a href="#" class="social-btn google">
                        <i class="bi bi-google"></i> Google
                    </a>

                    <a href="#" class="social-btn facebook">
                        <i class="bi bi-facebook"></i> Facebook
                    </a>
                </div>
            </form>
        </div>

        <div class="login-footer">
            <p class="mb-0">Vous n'avez pas de compte ? <a href="#" class="text-decoration-none">S'inscrire</a></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
