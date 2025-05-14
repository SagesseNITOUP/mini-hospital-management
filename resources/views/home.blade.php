<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome - Hostolib</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e9f7fe, #f2fcff);
        }

        .hero {
            position: relative;
            background: url('{{ asset('images/hospital-management.png') }}') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.55);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            max-width: 800px;
            margin-bottom: 80px;
            padding: 0 20px;
            animation: fadeIn 1.5s ease;
        }

        .hero-content h1 {
            font-size: 2.8em;
            margin-bottom: 15px;
        }

        .hero-content p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #f1f1f1;
        }

        .buttons a {
            display: inline-block;
            padding: 12px 24px;
            margin: 10px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-primary:hover, .btn-secondary:hover {
            opacity: 0.85;
        }

        .features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            margin: 60px auto;
            padding: 0 20px;
            max-width: 1000px;
            text-align: center;
        }

        .feature {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.07);
            width: 250px;
        }

        footer {
            margin: 60px auto 30px;
            font-size: 0.9em;
            color: #666;
            text-align: center;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2em;
            }
            .hero-content p {
                font-size: 1em;
            }
            .feature {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Welcome to Hostolib</h1>
            <p>Manage your hospital appointments easily, securely, and from anywhere.</p>
            <div class="buttons">
                <a href="{{ url('/register') }}" class="btn-primary">Sign Up</a>
                <a href="{{ url('/login') }}" class="btn-secondary">Login</a>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="feature">
            <h3>📅 Book Appointments</h3>
            <p>Choose a doctor and schedule your consultation in just a few clicks.</p>
        </div>
        <div class="feature">
            <h3>👨‍⚕️ Browse Doctors</h3>
            <p>Explore available specialties and medical professionals.</p>
        </div>
        <div class="feature">
            <h3>🔐 Secure Access</h3>
            <p>Your health information is encrypted and safely stored.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Hostolib – All rights reserved</p>
    </footer>

</body>
</html>
