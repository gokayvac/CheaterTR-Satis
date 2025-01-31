<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isLoggedIn = isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <a href="/" class="logo">cheater.tr</a>
    <ul class="menu">
        <li><a href="/">Ana Sayfa</a></li>
        <li><a href="/">CheatGlobal</a></li>

    </ul>
    
    <div class="social-icons">
        <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
        <a href="#" class="icon discord"><i class="fab fa-discord"></i></a>
    </div>
</div>
    <style>
        .navbar {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.14);
            backdrop-filter: blur(15px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 30px;
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            border: 1px solid rgba(255, 255, 255, 0.1);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .navbar .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: #bb86fc;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            text-shadow: 0 0 15px rgba(187, 134, 252, 0.4);
        }

        .navbar .menu {
            list-style: none;
            display: flex;
            gap: 35px;
            margin: 0;
            padding: 0;
        }

        .navbar .menu a {
            color: rgba(224, 224, 224, 0.9);
            text-decoration: none;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            position: relative;
            padding: 8px 12px;
            transition: all 0.3s ease;
        }

        .navbar .menu a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #bb86fc;
            transition: width 0.3s ease;
        }

        .navbar .menu a:hover::before {
            width: 100%;
        }

        .navbar .menu a:hover {
            color: #ffffff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons .icon {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 10px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .social-icons .icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .social-icons .icon:hover::before {
            opacity: 1;
        }

        .social-icons .youtube {
            background: rgba(255, 0, 0, 0.2);
            border: 1px solid rgba(255, 0, 0, 0.3);
        }

        .social-icons .discord {
            background: rgba(88, 101, 242, 0.2);
            border: 1px solid rgba(88, 101, 242, 0.3);
        }

        .social-icons .instagram {
            background: rgba(217, 29, 242, 0.2);
            border: 1px solid rgba(242, 175, 29, 0.3);
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
                padding: 15px;
                width: 85%;
                top: 10px;
            }

            .menu {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }

            .social-icons {
                margin-top: 10px;
            }
        }
        body {
            height: 200vh; 
            background: linear-gradient(45deg, #1a1a1a, #2d2d2d);
        }

        .navbar.scrolled {
            top: 0;
            border-radius: 0;
            width: 100%;
            backdrop-filter: blur(20px);
            background: rgba(26, 26, 26, 0.9);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
    </style>

    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>