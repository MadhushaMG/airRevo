<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="description" content="AIR provides innovative digital solutions for finance, entertainment, and logistics. Discover our global business portfolio.">
    <meta name="keywords" content="AIR, business solutions, finance, entertainment, logistics">
    <title>AIR - International Business Portfolio</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'" />
    
    <!-- AOS Animation Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'" />
    
    <style>
        :root {
            --primary: #2ecc71;
            --secondary: #3498db;
            --dark: #1a2525;
            --light: #e8f8f5;
            --gray: #7f8c8d;
            --card-bg: rgba(26, 37, 37, 0.8);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark);
            color: white;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Preloader */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #0B1123;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            transition: opacity 0.5s ease;
        }

        #preloader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        #preloader svg {
            max-width: 800px;
            width: 100%;
            height: auto;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: rgba(26, 37, 37, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: background-color 0.3s ease;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: 700;
            color: white;
            text-decoration: none;
        }

        .logo span {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-left: 5px;
        }

        .menu {
            display: flex;
            list-style: none;
            margin: 0;
        }

        .menu li {
            margin: 0 15px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .menu a:hover,
        .menu a.active {
            color: var(--primary);
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-outline {
            border: 1px solid var(--primary);
            color: white;
            background: transparent;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.4);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        /* Mobile Top Bar */
        .mobile-top-bar {
            display: none;
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(26, 37, 37, 0.95);
            backdrop-filter: blur(12px);
            padding: 10px 15px;
            z-index: 1100;
            align-items: center;
            justify-content: space-between;
            height: 56px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .mobile-top-bar .logo {
            font-size: 20px;
        }

        .mobile-top-bar .icon-btn {
            font-size: 20px;
            color: white;
            padding: 8px;
            background: none;
            border: none;
            transition: opacity 0.3s;
        }

        .mobile-top-bar .icon-btn:hover {
            opacity: 0.7;
        }

        /* Hero Section */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 20px;
            background: linear-gradient(135deg, var(--dark), #2d3e50);
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://cdn.pixabay.com/photo/2016/11/22/23/08/lights-1850620_1280.jpg') no-repeat center center/cover;
            filter: brightness(0.4) blur(2px);
            z-index: 1;
        }

        .hero-network {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
        }

        .hero-network canvas {
            width: 100%;
            height: 100%;
            display: block;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            max-width: 800px;
            padding: 20px;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #ffffff, var(--light));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-title span {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-description {
            font-size: 1.125rem;
            color: var(--light);
            line-height: 1.8;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .hero-buttons .btn-primary,
        .hero-buttons .btn-outline {
            padding: 12px 32px;
            font-size: 1rem;
            border-radius: 50px;
        }

        .hero-buttons .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(46, 204, 113, 0.5);
        }

        /* Clients Section */
        .clients {
            padding: 40px 0;
            background-color: rgba(26, 37, 37, 0.8);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .clients-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .marquee-container {
            overflow: hidden;
            width: 100%;
            position: relative;
        }

        .marquee, .marquee2 {
            display: flex;
            white-space: nowrap;
            animation: marquee 50s linear infinite;
        }

        .marquee2 {
            position: absolute;
            top: 0;
            left: 100%;
        }

        .client-text {
            margin-right: 50px;
            font-size: 16px;
            padding: 10px 0;
            color: white;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .client-text:hover {
            color: var(--primary);
        }

        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        /* Services Section */
        .services {
            padding: 80px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-subtitle {
            font-size: 16px;
            color: var(--primary);
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .section-description {
            font-size: 18px;
            color: var(--light);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .service-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s;
            position: relative;
            min-height: 320px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
            opacity: 0.5;
            transition: opacity 0.3s;
        }

        .service-card:hover .service-image {
            opacity: 0.7;
        }

        .service-content {
            position: relative;
            z-index: 1;
        }

        .service-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .service-description {
            font-size: 14px;
            color: var(--light);
            margin-bottom: 15px;
        }

        .service-link {
            color: var(--primary);
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .service-link:hover {
            text-decoration: underline;
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background-color: rgba(26, 37, 37, 0.5);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .feature-card {
            background-color: var(--card-bg);
            border-radius: 12px;
            padding: 30px;
            transition: transform 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .feature-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .feature-description {
            font-size: 16px;
            color: var(--light);
            line-height: 1.6;
        }

        /* Stats Section */
        .stats {
            padding: 80px 0;
            background-color: rgba(26, 37, 37, 0.8);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stat-item {
            padding: 20px;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 16px;
            color: var(--light);
        }

        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: linear-gradient(135deg, rgba(46, 204, 113, 0.1), rgba(52, 152, 219, 0.1));
        }

        .cta-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .cta-content {
            max-width: 600px;
        }

        .cta-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .cta-description {
            font-size: 18px;
            color: var(--light);
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 15px;
        }

        .cta-image {
            max-width: 400px;
            border-radius: 12px;
            height: auto;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            padding: 80px 0 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .footer-about p {
            font-size: 14px;
            color: var(--gray);
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .footer-social {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s;
            text-decoration: none;
        }

        .social-link:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.3s;
            font-size: 14px;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .copyright {
            font-size: 14px;
            color: var(--gray);
        }

        .bottom-links {
            display: flex;
            gap: 20px;
        }

        .bottom-links a {
            color: var(--gray);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .bottom-links a:hover {
            color: white;
        }

        /* Mobile Navigation */
        .mobile-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(26, 37, 37, 0.95);
            backdrop-filter: blur(12px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            z-index: 1000;
            padding: 10px 0;
            justify-content: space-around;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            display: none;
        }

        .mobile-nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            text-decoration: none;
            font-size: 12px;
            padding: 8px;
            transition: color 0.3s;
        }

        .mobile-nav-item i {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .mobile-nav-item.active {
            color: var(--primary);
        }

        /* Media Queries */
        @media (max-width: 1024px) {
            .hero-title {
                font-size: 3rem;
            }

            .cta-container {
                flex-direction: column;
                text-align: center;
            }

            .cta-image {
                max-width: 300px;
            }
        }

        @media (max-width: 768px) {
            header {
                display: none;
            }

            .mobile-top-bar {
                display: flex;
            }

            .menu {
                position: fixed;
                top: 56px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 56px);
                background-color: var(--dark);
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transition: left 0.3s ease;
                z-index: 900;
            }

            .menu.active {
                left: 0;
            }

            .menu li {
                margin: 20px 0;
            }

            .menu a {
                font-size: 24px;
            }

            .mobile-nav {
                display: flex;
            }

            .hero {
                padding: 60px 20px;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .logo {
                font-size: 20px;
            }

            .auth-buttons {
                display: none;
            }

            .hero {
                min-height: 80vh;
                padding: 40px 15px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 0.875rem;
            }

            .hero-description {
                font-size: 0.875rem;
            }

            .hero-buttons .btn {
                padding: 10px 24px;
                font-size: 0.875rem;
            }

            .stat-number {
                font-size: 36px;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes floatAnimation {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        .animated-element {
            animation: fadeIn 0.8s ease forwards;
        }

        .floating {
            animation: floatAnimation 3s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 450">
            <defs>
                <g id="feather">
                    <path d="M150,150 l-30,-100 a30,30 0 0,1 60,0 Z" fill="#7DC65C" style="fill-opacity: 0.85;"/>
                </g>
                <g id="crown">
                    <path d="M150,75 l-1.25,-6 a1.25,1.25 0 0,1 2.5,0 Z" fill="#fff"/>
                </g>
                <filter id="glow" x="-20%" y="-20%" width="140%" height="140%">
                    <feGaussianBlur stdDeviation="3" result="blur"/>
                    <feComposite in="SourceGraphic" in2="blur" operator="over"/>
                </filter>
                <filter id="textShadow" x="-10%" y="-10%" width="120%" height="120%">
                    <feDropShadow dx="0" dy="0" stdDeviation="2" flood-color="#7DC65C" flood-opacity="0.8"/>
                </filter>
                <mask id="revealMask">
                    <rect x="0" y="0" width="800" height="450" fill="white">
                        <animate attributeName="y" values="450;0" dur="1.5s" begin="0.5s" fill="freeze"/>
                    </rect>
                </mask>
            </defs>
            <g mask="url(#revealMask)">
                <g id="peacockLogo" transform="translate(400, 200) scale(1.2)">
                    <g id="staggeredFeathers">
                        <use xlink:href="#feather" x="-150" y="-150" opacity="0">
                            <animate attributeName="opacity" values="0;1" dur="0.5s" begin="1s" fill="freeze"/>
                            <animateTransform attributeName="transform" type="rotate" from="23,0,0" to="20,0,0" dur="3s" begin="1.5s" repeatCount="indefinite"/>
                        </use>
                        <use xlink:href="#feather" x="-150" y="-150" transform="rotate(46, 0, 0)" opacity="0">
                            <animate attributeName="opacity" values="0;1" dur="0.5s" begin="1.2s" fill="freeze"/>
                            <animateTransform attributeName="transform" type="rotate" from="46,0,0" to="40,0,0" dur="3.5s" begin="1.7s" repeatCount="indefinite"/>
                        </use>
                        <use xlink:href="#feather" x="-150" y="-150" transform="rotate(69, 0, 0)" opacity="0">
                            <animate attributeName="opacity" values="0;1" dur="0.5s" begin="1.4s" fill="freeze"/>
                            <animateTransform attributeName="transform" type="rotate" from="69,0,0" to="60,0,0" dur="4s" begin="1.9s" repeatCount="indefinite"/>
                        </use>
                        <use xlink:href="#feather" x="-150" y="-150" transform="rotate(-23, 0, 0)" opacity="0">
                            <animate attributeName="opacity" values="0;1" dur="0.5s" begin="1.6s" fill="freeze"/>
                            <animateTransform attributeName="transform" type="rotate" from="-23,0,0" to="-20,0,0" dur="3.2s" begin="2.1s" repeatCount="indefinite"/>
                        </use>
                        <use xlink:href="#feather" x="-150" y="-150" transform="rotate(-46, 0, 0)" opacity="0">
                            <animate attributeName="opacity" values="0;1" dur="0.5s" begin="1.8s" fill="freeze"/>
                            <animateTransform attributeName="transform" type="rotate" from="-46,0,0" to="-40,0,0" dur="3.7s" begin="2.3s" repeatCount="indefinite"/>
                        </use>
                        <use xlink:href="#feather" x="-150" y="-150" transform="rotate(-69, 0, 0)" opacity="0">
                            <animate attributeName="opacity" values="0;1" dur="0.5s" begin="2s" fill="freeze"/>
                            <animateTransform attributeName="transform" type="rotate" from="-69,0,0" to="-60,0,0" dur="4.2s" begin="2.5s" repeatCount="indefinite"/>
                        </use>
                    </g>
                    <g transform="translate(-150, -150) rotate(-45, 150, 75)" opacity="0">
                        <use xlink:href="#crown" x="0" y="0"/>
                        <use xlink:href="#crown" x="0" y="0" transform="translate(1, 0) rotate(30, 150, 75)"/>
                        <use xlink:href="#crown" x="0" y="0" transform="translate(-1, 0) rotate(-30, 150, 75)"/>
                        <animate attributeName="opacity" values="0;1" dur="0.5s" begin="2.2s" fill="freeze"/>
                        <animateTransform attributeName="transform" type="rotate" from="-45,150,75" to="-60,150,75" dur="5s" begin="2.7s" repeatCount="indefinite" additive="sum"/>
                    </g>
                    <g transform="translate(-150, -150)" opacity="0">
                        <path d="M105,145 c60,-10 10,-95 40,-80 l5,0 c-30,5 45,40 0,110 M139,66 a1,1 0 1,0 2,0 a1,1 0 1,0 -2,0" fill="#fff" fill-rule="evenodd" transform="translate(0, 5) rotate(10, 105, 145)"/>
                        <animate attributeName="opacity" values="0;1" dur="0.5s" begin="2.4s" fill="freeze"/>
                    </g>
                    <circle cx="0" cy="0" r="120" fill="none" stroke="#7DC65C" stroke-width="2" opacity="0" filter="url(#glow)">
                        <animate attributeName="opacity" values="0;0.5" dur="1s" begin="2.6s" fill="freeze"/>
                        <animate attributeName="r" values="100;120;100" dur="5s" begin="3s" repeatCount="indefinite"/>
                    </circle>
                </g>
                <g id="companyText" filter="url(#textShadow)">
                    <g transform="translate(400, 330)">
                        <text x="-140" y="0" font-family="Arial, sans-serif" font-size="60" font-weight="bold" fill="#ffffff" text-anchor="start" opacity="0">
                            <tspan x="-140" fill="#7DC65C">A</tspan>
                            <animate attributeName="opacity" values="0;1" dur="0.3s" begin="3s" fill="freeze"/>
                        </text>
                        <text x="-100" y="0" font-family="Arial, sans-serif" font-size="60" font-weight="bold" fill="#ffffff" text-anchor="start" opacity="0">
                            <tspan x="-100" fill="#7DC65C">I</tspan>
                            <animate attributeName="opacity" values="0;1" dur="0.3s" begin="3.2s" fill="freeze"/>
                        </text>
                        <text x="-80" y="0" font-family="Arial, sans-serif" font-size="60" font-weight="bold" fill="#ffffff" text-anchor="start" opacity="0">
                            <tspan x="-80" fill="#7DC65C">R</tspan>
                            <animate attributeName="opacity" values="0;1" dur="0.3s" begin="3.4s" fill="freeze"/>
                        </text>
                        <text x="-20" y="0" font-family="Arial, sans-serif" font-size="60" font-weight="bold" fill="#ffffff" text-anchor="start" opacity="0">
                            <tspan x="-20">R</tspan>
                            <animate attributeName="opacity" values="0;1" dur="0.3s" begin="3.6s" fill="freeze"/>
                        </text>
                        <text x="20" y="0" font-family="Arial, sans-serif" font-size="60" font-weight="bold" fill="#ffffff" text-anchor="start" opacity="0">
                            <tspan x="20">E</tspan>
                            <animate attributeName="opacity" values="0;1" dur="0.3s" begin="3.8s" fill="freeze"/>
                        </text>
                        <text x="60" y="0" font-family="Arial, sans-serif" font-size="60" font-weight="bold" fill="#ffffff" text-anchor="start" opacity="0">
                            <tspan x="60">V</tspan>
                            <animate attributeName="opacity" values="0;1" dur="0.3s" begin="4s" fill="freeze"/>
                        </text>
                        <text x="100" y="0" font-family="Arial, sans-serif" font-size="60" font-weight="bold" fill="#ffffff" text-anchor="start" opacity="0">
                            <tspan x="100">O</tspan>
                            <animate attributeName="opacity" values="0;1" dur="0.3s" begin="4.2s" fill="freeze"/>
                        </text>
                    </g>
                    <text x="400" y="375" font-family="Arial, sans-serif" font-size="22" fill="#ffffff" text-anchor="middle" opacity="0">
                        ELEVATE YOUR EXPERIENCE
                        <animate attributeName="opacity" values="0;0.9" dur="1s" begin="4.5s" fill="freeze"/>
                    </text>
                </g>
                <g id="decorativeLines">
                    <line x1="250" y1="330" x2="250" y2="330" stroke="#7DC65C" stroke-width="2" opacity="0">
                        <animate attributeName="x2" values="250;200" dur="0.5s" begin="4.8s" fill="freeze"/>
                        <animate attributeName="opacity" values="0;1" dur="0.2s" begin="4.8s" fill="freeze"/>
                    </line>
                    <line x1="550" y1="330" x2="550" y2="330" stroke="#7DC65C" stroke-width="2" opacity="0">
                        <animate attributeName="x2" values="550;600" dur="0.5s" begin="4.8s" fill="freeze"/>
                        <animate attributeName="opacity" values="0;1" dur="0.2s" begin="4.8s" fill="freeze"/>
                    </line>
                </g>
            </g>
            <g id="sparkles">
                <circle cx="250" cy="150" r="1.5" fill="#7DC65C" opacity="0">
                    <animate attributeName="opacity" values="0;0.7;0" dur="2s" begin="1.5s" repeatCount="2"/>
                </circle>
                <circle cx="350" cy="100" r="1.2" fill="#7DC65C" opacity="0">
                    <animate attributeName="opacity" values="0;0.7;0" dur="2s" begin="1.7s" repeatCount="2"/>
                </circle>
                <circle cx="450" cy="170" r="1.3" fill="#7DC65C" opacity="0">
                    <animate attributeName="opacity" values="0;0.7;0" dur="2s" begin="1.9s" repeatCount="2"/>
                </circle>
                <circle cx="550" cy="120" r="1.1" fill="#7DC65C" opacity="0">
                    <animate attributeName="opacity" values="0;0.7;0" dur="2s" begin="2.1s" repeatCount="2"/>
                </circle>
                <circle cx="300" cy="220" r="1.4" fill="#7DC65C" opacity="0">
                    <animate attributeName="opacity" values="0;0.7;0" dur="2s" begin="2.3s" repeatCount="2"/>
                </circle>
                <circle cx="400" cy="280" r="1.2" fill="#7DC65C" opacity="0">
                    <animate attributeName="opacity" values="0;0.7;0" dur="2s" begin="2.5s" repeatCount="2"/>
                </circle>
                <circle cx="500" cy="240" r="1.3" fill="#7DC65C" opacity="0">
                    <animate attributeName="opacity" values="0;0.7;0" dur="2s" begin="2.7s" repeatCount="2"/>
                </circle>
            </g>
            <g id="finalFlash">
                <circle cx="400" cy="200" r="0" fill="none" stroke="#7DC65C" stroke-width="2" opacity="0">
                    <animate attributeName="r" values="0;300;350" dur="1s" begin="5.5s" fill="freeze"/>
                    <animate attributeName="opacity" values="0;0.5;0" dur="1s" begin="5.5s" fill="freeze"/>
                </circle>
            </g>
        </svg>
    </div>

    <!-- Mobile Top Bar -->
    <div class="mobile-top-bar">
        <a href="#home" class="logo" aria-label="AIR Homepage">
            <i class="fas fa-wind"></i> <span>AIR</span>
        </a>
        <div>
            <button class="icon-btn search-btn" aria-label="Search"><i class="fas fa-search"></i></button>
            <button class="icon-btn" id="mobile-menu-btn" aria-label="Toggle Menu"><i class="fas fa-bars"></i></button>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#home" class="logo" aria-label="AIR Homepage">
                    <i class="fas fa-wind"></i> <span>AIR</span>
                </a>
                <ul class="menu" id="menu">
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="auth-buttons">
                    <a href="#login" class="btn btn-outline">Login</a>
                    <a href="#signup" class="btn btn-primary">Sign Up</a>
                </div>
                <button class="mobile-menu-btn" id="desktop-menu-btn" aria-label="Toggle Menu">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-network">
            <canvas id="networkCanvas" aria-hidden="true"></canvas>
        </div>
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <p class="hero-subtitle">Global Business Innovation</p>
                <h1 class="hero-title">Empowering Success with <span>AIR Solutions</span></h1>
                <p class="hero-description">
                    Unleash your business potential with AIR's cutting-edge digital solutions in finance, entertainment, and logistics.
                </p>
                <div class="hero-buttons">
                    <a href="#get-started" class="btn btn-primary">Get Started</a>
                    <a href="#learn-more" class="btn btn-outline">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="clients" id="clients">
        <div class="container">
            <div class="clients-content">
                <p class="clients-title">Our Companies</p>
                <div class="marquee-container">
                    <div class="marquee">
                        <span class="client-text">AIR Finance</span>
                        <span class="client-text">AIR Pay</span>
                        <span class="client-text">AIR Exchange</span>
                        <span class="client-text">AIR Express</span>
                        <span class="client-text">AIR Entertainment</span>
                        <span class="client-text">AIR Institute</span>
                        <span class="client-text">AIR TV</span>
                        <span class="client-text">AIR Agencies</span>
                    </div>
                    <div class="marquee marquee2">
                        <span class="client-text">AIR Finance</span>
                        <span class="client-text">AIR Pay</span>
                        <span class="client-text">AIR Exchange</span>
                        <span class="client-text">AIR Express</span>
                        <span class="client-text">AIR Entertainment</span>
                        <span class="client-text">AIR Institute</span>
                        <span class="client-text">AIR TV</span>
                        <span class="client-text">AIR Agencies</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <p class="section-subtitle">Our Services</p>
                <h2 class="section-title">Comprehensive AIR Solutions</h2>
                <p class="section-description">Discover our range of specialized services for businesses across industries.</p>
            </div>
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://lntedutech.com/wp-content/uploads/2024/04/Personal-Finance-Management-scaled-1.jpg" alt="AIR Finance Service" class="service-image" loading="lazy">
                    <div class="service-content">
                        <h3 class="service-title">AIR Finance</h3>
                        <p class="service-description">Innovative financial solutions for businesses and individuals.</p>
                        <a href="https://airfinance.lk" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://staxpayments.com/wp-content/uploads/2020/02/7-Features-To-Look-For-In-A-Payment-Processing-Platform_Web-Ready.jpg" alt="AIR Pay Service" class="service-image" loading="lazy">
                    <div class="service-content">
                        <h3 class="service-title">AIR Pay</h3>
                        <p class="service-description">Secure and seamless payment processing solutions.</p>
                        <a href="#pay" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://www.exportchamber.org/wp-content/uploads/2023/10/Exchange-rate-definition.jpg" alt="AIR Exchange Service" class="service-image" loading="lazy">
                    <div class="service-content">
                        <h3 class="service-title">AIR Exchange</h3>
                        <p class="service-description">Digital asset and currency exchange platform.</p>
                        <a href="#exchange" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <img src="https://patch.com/img/cdn20/shutterstock/714975/20240424/125026/styles/patch_image/public/shutterstock-1549020926___24124846951.jpg" alt="AIR Express Service" class="service-image" loading="lazy">
                    <div class="service-content">
                        <h3 class="service-title">AIR Express</h3>
                        <p class="service-description">Fast and reliable logistics and delivery services.</p>
                        <a href="#express" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                    <img src="https://play-lh.googleusercontent.com/fRzky_TeloB6t_WfFahWzRxpMY2w6M1M7ZffDZhGR2W3SkvMRzl2olKKRS-LbRXQ6g" alt="AIR Entertainment Service" class="service-image" loading="lazy">
                    <div class="service-content">
                        <h3 class="service-title">AIR Entertainment</h3>
                        <p class="service-description">Cutting-edge entertainment solutions and platforms.</p>
                        <a href="http://airentertainment.vip/" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpjb8szgUD8FSggz7K82OBTRB3IuSF7YdfEA&s" alt="AIR Institute Service" class="service-image" loading="lazy">
                    <div class="service-content">
                        <h3 class="service-title">AIR Institute</h3>
                        <p class="service-description">Educational programs and professional development.</p>
                        <a href="#institute" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="700">
                    <img src="https://uplay.se/wp-content/uploads/2025/02/best-iptv-apps-2025.webp" alt="AIR TV Service" class="service-image" loading="lazy">
                    <div class="service-content">
                        <h3 class="service-title">AIR TV</h3>
                        <p class="service-description">Streaming platform with premium content.</p>
                        <a href="https://airtv.lk/" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="800">
                    <img src="https://travelprofessionalnews.com/wp-content/uploads/2019/04/AdobeStock_203970462.jpeg" alt="AIR Agencies Service" class="service-image" loading="lazy">
                    <div class="service-content">
                        <h3 class="service-title">AIR Agencies</h3>
                        <p class="service-description">Strategic marketing and business development services.</p>
                        <a href="#agencies" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="900">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/223583449.jpg?k=4241a2b4cb2aa260048e722587db48cece25180a600c8489f06871cd759c083c&o=&hp=1" alt="AIR Hotels Service" class="service-image" loading="lazy">
                    <div class="service-content">
                        <h3 class="service-title">AIR Hotels</h3>
                        <p class="service-description">Premium hotel and restaurant services.</p>
                        <a href="#hotels" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <p class="section-subtitle">Why Choose AIR</p>
                <h2 class="section-title">Advanced Features</h2>
                <p class="section-description">Cutting-edge technology for the best client experience.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="feature-title">Enterprise-grade Security</h3>
                    <p class="feature-description">Advanced encryption to protect your data.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                    <h3 class="feature-title">Real-time Analytics</h3>
                    <p class="feature-description">Data insights for informed decisions.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon"><i class="fas fa-globe"></i></div>
                    <h3 class="feature-title">Global Reach</h3>
                    <p class="feature-description">Seamless international operations.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3 class="feature-title">Mobile-first Design</h3>
                    <p class="feature-description">Optimized for all devices.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-icon"><i class="fas fa-code"></i></div>
                    <h3 class="feature-title">API Integration</h3>
                    <p class="feature-description">Seamless system integration.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-icon"><i class="fas fa-headset"></i></div>
                    <h3 class="feature-title">24/7 Support</h3>
                    <p class="feature-description">Round-the-clock assistance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats" id="stats">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <p class="section-subtitle">Our Impact</p>
                <h2 class="section-title">AIR by the Numbers</h2>
                <p class="section-description">Global impact in numbers.</p>
            </div>
            <div class="stats-grid">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-number">50M+</div>
                    <div class="stat-label">Users Worldwide</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Countries Served</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-number">$1B+</div>
                    <div class="stat-label">Transactions</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-number">99.9%</div>
                    <div class="stat-label">Uptime</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta" id="cta">
        <div class="container">
            <div class="cta-container">
                <div class="cta-content" data-aos="fade-right">
                    <h2 class="cta-title">Transform Your Business</h2>
                    <p class="cta-description">Join businesses trusting AIR for growth and innovation.</p>
                    <div class="cta-buttons">
                        <a href="#get-started" class="btn btn-primary">Get Started</a>
                        <a href="#contact-sales" class="btn btn-outline">Contact Sales</a>
                    </div>
                </div>
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="AIR Solutions" class="cta-image floating" data-aos="fade-left" loading="lazy">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-about">
                    <h4>About AIR</h4>
                    <p>AIR provides innovative digital solutions across industries to help businesses transform and succeed.</p>
                    <div class="footer-social">
                        <a href="https://facebook.com" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://linkedin.com" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://instagram.com" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>AIR Services</h4>
                    <ul class="footer-links">
                        <li><a href="#finance">AIR Finance</a></li>
                        <li><a href="#pay">AIR Pay</a></li>
                        <li><a href="#exchange">AIR Exchange</a></li>
                        <li><a href="#express">AIR Express</a></li>
                        <li><a href="#entertainment">AIR Entertainment</a></li>
                        <li><a href="#institute">AIR Institute</a></li>
                        <li><a href="#tv">AIR TV</a></li>
                        <li><a href="#agencies">AIR Agencies</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Resources</h4>
                    <ul class="footer-links">
                        <li><a href="#documentation">Documentation</a></li>
                        <li><a href="#api">API References</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#case-studies">Case Studies</a></li>
                        <li><a href="#help">Help Center</a></li>
                        <li><a href="#careers">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul class="footer-links">
                        <li><a href="https://maps.google.com" target="_blank"><i class="fas fa-map-marker-alt"></i> 123 Business Ave, NY</a></li>
                        <li><a href="tel:+15551234567"><i class="fas fa-phone"></i> +1 (555) 123-4567</a></li>
                        <li><a href="mailto:info@airgroup.com"><i class="fas fa-envelope"></i> info@airgroup.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="copyright">© 2025 AIR Group. All rights reserved.</p>
                <div class="bottom-links">
                    <a href="#privacy">Privacy Policy</a>
                    <a href="#terms">Terms of Service</a>
                    <a href="#cookies">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobile-nav">
        <a href="#home" class="mobile-nav-item active" aria-label="Home">
            <i class="fas fa-home"></i><span>Home</span>
        </a>
        <a href="#services" class="mobile-nav-item" aria-label="Services">
            <i class="fas fa-th"></i><span>Services</span>
        </a>
        <a href="#features" class="mobile-nav-item" aria-label="Features">
            <i class="fas fa-briefcase"></i><span>Features</span>
        </a>
        <a href="#stats" class="mobile-nav-item" aria-label="Stats">
            <i class="fas fa-chart-bar"></i><span>Stats</span>
        </a>
        <a href="#contact" class="mobile-nav-item" aria-label="Contact">
            <i class="fas fa-envelope"></i><span>Contact</span>
        </a>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script>
        // Preloader
        window.addEventListener('load', () => {
            setTimeout(() => {
                const preloader = document.getElementById('preloader');
                preloader.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 6000);
        });

        // AOS Initialization
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const desktopMenuBtn = document.getElementById('desktop-menu-btn');
        const menu = document.getElementById('menu');

        function toggleMenu(btn) {
            if (btn) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('active');
                    const isActive = menu.classList.contains('active');
                    btn.innerHTML = isActive ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
                    btn.setAttribute('aria-expanded', isActive);
                    document.body.style.overflow = isActive ? 'hidden' : 'auto';
                });
            }
        }

        toggleMenu(mobileMenuBtn);
        toggleMenu(desktopMenuBtn);

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const target = document.getElementById(targetId);
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 60,
                        behavior: 'smooth'
                    });
                    if (menu.classList.contains('active')) {
                        menu.classList.remove('active');
                        [mobileMenuBtn, desktopMenuBtn].forEach(btn => {
                            if (btn) {
                                btn.innerHTML = '<i class="fas fa-bars"></i>';
                                btn.setAttribute('aria-expanded', false);
                            }
                        });
                    }
                }
            });
        });

        // Sticky Header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 50);
            header.style.backgroundColor = window.scrollY > 50 ? 'rgba(26, 37, 37, 0.95)' : 'rgba(26, 37, 37, 0.8)';
        });

        // Active Link Highlighting
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.menu a, .mobile-nav-item');

        function updateActiveLink() {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (window.pageYOffset >= sectionTop - 60) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveLink);

        // Mobile Navigation
        const mobileNavItems = document.querySelectorAll('.mobile-nav-item');
        mobileNavItems.forEach(item => {
            item.addEventListener('click', function() {
                mobileNavItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Hero Animations
        gsap?.from('.hero-subtitle', {
            opacity: 0,
            y: 30,
            duration: 0.8,
            ease: 'power2.out',
            delay: 6
        });

        gsap?.from('.hero-title', {
            opacity: 0,
            y: 40,
            duration: 1,
            delay: 6.2,
            ease: 'power2.out'
        });

        gsap?.from('.hero-description', {
            opacity: 0,
            y: 30,
            duration: 0.8,
            delay: 6.4,
            ease: 'power2.out'
        });

        gsap?.from('.hero-buttons a', {
            opacity: 0,
            y: 20,
            duration: 0.6,
            delay: 6.6,
            stagger: 0.2,
            ease: 'back.out(1.7)'
        });

        // Network Effect
        const canvas = document.getElementById('networkCanvas');
        const ctx = canvas.getContext('2d');
        let particles = [];
        const particleCount = Math.min(50, window.innerWidth / 20);

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 3 + 1;
                this.speedX = Math.random() * 1 - 0.5;
                this.speedY = Math.random() * 1 - 0.5;
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
                if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
            }

            draw() {
                ctx.fillStyle = 'rgba(46, 204, 113, 0.7)';
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        function initParticles() {
            particles = [];
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach((p, i) => {
                p.update();
                p.draw();
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = p.x - particles[j].x;
                    const dy = p.y - particles[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);
                    if (distance < 100) {
                        ctx.strokeStyle = `rgba(52, 152, 219, ${1 - distance / 100})`;
                        ctx.lineWidth = 1;
                        ctx.beginPath();
                        ctx.moveTo(p.x, p.y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            });
            requestAnimationFrame(animateParticles);
        }

        initParticles();
        animateParticles();

        // Pull-to-Refresh
        let touchStartY = 0;
        document.addEventListener('touchstart', e => {
            if (window.scrollY === 0) touchStartY = e.touches[0].clientY;
        });

        document.addEventListener('touchmove', e => {
            if (window.scrollY === 0 && e.touches[0].clientY - touchStartY > 100) {
                location.reload();
            }
        });

        // Lazy Load Images
        document.querySelectorAll('img').forEach(img => {
            img.setAttribute('loading', 'lazy');
        });
    </script>
</body>
</html>
