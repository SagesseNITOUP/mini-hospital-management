<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Page</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: url('/images/eed8191a10a1a2beb74a3526a2d2344d.jpg') no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}



        .login-container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            transition: border 0.3s;
        }

        .form-group input:focus {
            border-color: #007BFF;
            outline: none;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .login-footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
        }

        .login-footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login Page</h2>
    <form method="POST" action="{{ route('submit-login') }}">
        <!-- For Laravel, insert @csrf here -->
        @csrf
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <button type="submit" class="login-btn">Login</button>

        <div class="login-footer">
            <p>Don't have an account? <a href="{{ route('register')  }}">Sign up</a></p>
            <p><a href="#">Forgot Password?</a></p>
        </div>
    </form>
</div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function (e) {
            e.preventDefault();

            // Reset errors
            document.getElementById("emailError").textContent = "";
            document.getElementById("passwordError").textContent = "";
            document.getElementById("email").classList.remove("error-border");
            document.getElementById("password").classList.remove("error-border");

            let email = document.getElementById("email").value.trim();
            let password = document.getElementById("password").value.trim();
            let hasError = false;

            // Email validation
            if (email === "") {
                document.getElementById("emailError").textContent = "Email is required";
                document.getElementById("email").classList.add("error-border");
                hasError = true;
            } else if (!/^\S+@\S+\.\S+$/.test(email)) {
                document.getElementById("emailError").textContent = "Please enter a valid email";
                document.getElementById("email").classList.add("error-border");
                hasError = true;
            }

            // Password validation
            if (password === "") {
                document.getElementById("passwordError").textContent = "Password is required";
                document.getElementById("password").classList.add("error-border");
                hasError = true;
            } else if (password.length < 6) {
                document.getElementById("passwordError").textContent = "Password must be at least 6 characters";
                document.getElementById("password").classList.add("error-border");
                hasError = true;
            }

            if (!hasError) {
                // You can submit form via AJAX or allow real submission here
                alert("Form submitted successfully!");
                // this.submit(); // for real form submission
            }
        });
    </script>
</body>
</html>
