<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Hostolib')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e9f7fe, #f2fcff);
            min-height: 100vh;
        }

        header {
            background-color: #007bff;
            padding: 15px 30px;
            color: white;
            font-size: 1.4em;
            text-align: center;
        }

        footer {
            margin-top: 60px;
            font-size: 0.9em;
            color: #666;
            text-align: center;
            padding: 20px;
        }

        main {
            padding: 40px 20px;
        }
    </style>
</head>
<body>

    <header>
        Hostolib
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Hostolib – All rights reserved</p>
    </footer>

</body>
</html>
