<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Portfolio</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 1rem;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            transition: color 0.3s;
        }
        .navbar a:hover {
            color: #ddd;
        }
        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .container {
            padding: 2rem;
        }
        .fade-in {
            animation: fadeIn ease 1s;
        }
        @keyframes fadeIn {
            0% {
                opacity:0;
            }
            100% {
                opacity:1;
            }
        }
        .slide-in {
            animation: slideIn ease 1s;
        }
        @keyframes slideIn {
            0% {
                transform: translateY(20px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">MyPortfolio</a>
        <div>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Portfolio</a>
            <a href="#">Contact</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
