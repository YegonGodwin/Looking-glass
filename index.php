<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanTech Ideals - Innovative Technology Solutions</title>
    <link rel="icon" href="Assets/Images/premium.avif" type="image/x-icon">
    
    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #00b4d8;
            --secondary-color: #0077b6;
            --accent-color: #90e0ef;
            --dark-color: #03045e;
            --light-color: #caf0f8;
            --gradient-blue: linear-gradient(135deg, #00b4d8 0%, #0077b6 100%);
            --gradient-purple: linear-gradient(135deg, #03045e 0%, #023e8a 100%);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        /* Navbar */
        .navbar {
            padding: 15px 0;
            transition: all 0.3s ease;
            background: var(--gradient-blue) !important;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            background: var(--gradient-purple) !important;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            background: linear-gradient(to right, #fff, var(--light-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .nav-link {
            color: white !important;
            font-weight: 500;
            margin: 0 8px;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            transform: translateY(-3px);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .btn-nav {
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-nav:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        /* Hero Section */
        .hero-section {
            height: 100vh;
            min-height: 600px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            max-width: 700px;
        }
        
        .hero-btn {
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        
        .hero-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        /* Features Section */
        .features-section {
            padding: 100px 0;
            background: white;
        }
        
        .feature-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .feature-title {
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        /* Services Section */
        .services-section {
            padding: 100px 0;
            background: linear-gradient(rgba(0, 180, 216, 0.05), rgba(0, 119, 182, 0.05));
            position: relative;
        }
        
        .service-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .service-icon {
            width: 70px;
            height: 70px;
            background: var(--gradient-blue);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }
        
        /* Contact Section */
        .contact-section {
            padding: 100px 0;
            background: var(--gradient-purple);
            color: white;
        }
        
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .form-control {
            height: 50px;
            border-radius: 8px;
            border: 1px solid #eee;
            padding-left: 20px;
        }
        
        textarea.form-control {
            height: auto;
            padding-top: 15px;
        }
        
        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .contact-info-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.2rem;
        }
        
        /* Footer */
        .footer {
            background: var(--dark-color);
            color: white;
            padding: 60px 0 20px;
        }
        
        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(to right, #fff, var(--light-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .footer-links h5 {
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-links h5::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background: var(--primary-color);
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background: var(--primary-color);
            transform: translateY(-5px);
        }
        
        /* Animations */
        .animate-up {
            animation: fadeInUp 1s ease;
        }
        
        .animate-down {
            animation: fadeInDown 1s ease;
        }
        
        .animate-left {
            animation: fadeInLeft 1s ease;
        }
        
        .animate-right {
            animation: fadeInRight 1s ease;
        }
        
        .delay-1 {
            animation-delay: 0.2s;
        }
        
        .delay-2 {
            animation-delay: 0.4s;
        }
        
        .delay-3 {
            animation-delay: 0.6s;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .navbar-brand {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">CleanTech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3 my-2 my-lg-0">
                        <a class="btn btn-light btn-nav" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    </li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-outline-light btn-nav" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-overlay"></div>
        <div id="heroCarousel" class="carousel slide h-100" data-bs-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" class="d-block w-100 h-100 object-fit-cover" alt="CleanTech Solutions">
                </div>
                <div class="carousel-item h-100">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="d-block w-100 h-100 object-fit-cover" alt="Innovative Technology">
                </div>
                <div class="carousel-item h-100">
                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" class="d-block w-100 h-100 object-fit-cover" alt="Digital Solutions">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <div class="container h-100">
            <div class="hero-content">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="hero-title animate__animated animate__fadeInDown">Innovative Technology Solutions</h1>
                        <p class="hero-subtitle animate__animated animate__fadeInDown delay-1">We provide cutting-edge digital solutions that help your business stand out in the competitive market. Our team of experts delivers quality and innovation.</p>
                        <div class="animate__animated animate__fadeInDown delay-2">
                            <a href="#services" class="btn btn-primary btn-lg hero-btn me-3">Our Services</a>
                            <a href="#contact" class="btn btn-outline-light btn-lg hero-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-3 animate__animated animate__fadeIn">Why Choose CleanTech</h2>
                    <p class="lead text-muted animate__animated animate__fadeIn delay-1">We combine innovation, technology and strategy to deliver outstanding results for our clients</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp">
                    <div class="feature-card p-4 text-center">
                        <div class="feature-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="feature-title">Innovative Strategy</h3>
                        <p class="text-muted">We validate your future users and define the project with a working plan that meets user needs while fulfilling business goals.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp delay-1">
                    <div class="feature-card p-4 text-center">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="feature-title">Digital Marketing</h3>
                        <p class="text-muted">Our marketing team provides successful digital planning to help your business stay ahead in the online world.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp delay-2">
                    <div class="feature-card p-4 text-center">
                        <div class="feature-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3 class="feature-title">Advanced Technology</h3>
                        <p class="text-muted">Our technical experts analyze your business challenges and consult on the most appropriate technological solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-3 text-dark animate__animated animate__fadeIn">Our Services</h2>
                    <p class="lead text-muted animate__animated animate__fadeIn delay-1">We design, develop and market digital products that give brands a competitive advantage</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInLeft">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Web Development</h3>
                        <p class="text-muted">Custom websites and web applications built with the latest technologies to ensure performance, security and scalability.</p>
                        <a href="#" class="text-primary text-decoration-none">Learn more <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInLeft delay-1">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile Apps</h3>
                        <p class="text-muted">Cross-platform mobile applications that provide seamless user experiences across iOS and Android devices.</p>
                        <a href="#" class="text-primary text-decoration-none">Learn more <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInLeft delay-2">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h3>Digital Marketing</h3>
                        <p class="text-muted">Comprehensive digital marketing strategies including SEO, social media, PPC and content marketing to grow your business.</p>
                        <a href="#" class="text-primary text-decoration-none">Learn more <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInRight">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3>UI/UX Design</h3>
                        <p class="text-muted">Beautiful, intuitive user interfaces designed to enhance user experience and drive engagement with your product.</p>
                        <a href="#" class="text-primary text-decoration-none">Learn more <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInRight delay-1">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3>Cloud Solutions</h3>
                        <p class="text-muted">Secure and scalable cloud infrastructure solutions tailored to your business needs and growth objectives.</p>
                        <a href="#" class="text-primary text-decoration-none">Learn more <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 animate__animated animate__fadeInRight delay-2">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h3>Data Analytics</h3>
                        <p class="text-muted">Powerful data analytics and business intelligence solutions to help you make informed, data-driven decisions.</p>
                        <a href="#" class="text-primary text-decoration-none">Learn more <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-light" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 animate__animated animate__fadeInLeft">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Our Team" class="img-fluid rounded-3 shadow">
                </div>
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <h2 class="display-5 fw-bold mb-4">About CleanTech</h2>
                    <p class="lead text-muted mb-4">We are a team of passionate technologists, designers and strategists dedicated to helping businesses thrive in the digital age.</p>
                    <p>Founded in 2015, CleanTech has grown from a small startup to a leading technology solutions provider, serving clients across multiple industries worldwide. Our approach combines technical expertise with creative thinking to deliver solutions that are both functional and beautiful.</p>
                    <div class="d-flex align-items-center mt-4">
                        <div class="me-4">
                            <h3 class="text-primary mb-0">150+</h3>
                            <p class="text-muted mb-0">Projects</p>
                        </div>
                        <div class="me-4">
                            <h3 class="text-primary mb-0">50+</h3>
                            <p class="text-muted mb-0">Clients</p>
                        </div>
                        <div>
                            <h3 class="text-primary mb-0">98%</h3>
                            <p class="text-muted mb-0">Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-3">What Our Clients Say</h2>
                    <p class="lead text-muted">Don't just take our word for it - hear from some of our satisfied clients</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="swiper testimonialSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card border-0 shadow-sm p-4">
                                    <div class="card-body text-center">
                                        <div class="mb-4">
                                            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle" width="80" height="80" alt="Client">
                                        </div>
                                        <p class="lead mb-4">"CleanTech transformed our online presence with a stunning new website and digital marketing strategy that doubled our leads in just 3 months."</p>
                                        <h5 class="mb-1">Sarah Johnson</h5>
                                        <p class="text-muted">CEO, TechSolutions</p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border-0 shadow-sm p-4">
                                    <div class="card-body text-center">
                                        <div class="mb-4">
                                            <img src="https://randomuser.me/api/portraits/men/45.jpg" class="rounded-circle" width="80" height="80" alt="Client">
                                        </div>
                                        <p class="lead mb-4">"The mobile app developed by CleanTech has been a game-changer for our business, with user engagement increasing by 150% since launch."</p>
                                        <h5 class="mb-1">Michael Chen</h5>
                                        <p class="text-muted">Director, RetailPlus</p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border-0 shadow-sm p-4">
                                    <div class="card-body text-center">
                                        <div class="mb-4">
                                            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle" width="80" height="80" alt="Client">
                                        </div>
                                        <p class="lead mb-4">"Their cloud migration services saved us thousands in infrastructure costs while improving our system reliability and performance."</p>
                                        <h5 class="mb-1">Emily Rodriguez</h5>
                                        <p class="text-muted">CTO, FinTech Global</p>
                                        <div class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-3 text-white">Get In Touch</h2>
                    <p class="lead text-light">Have a project in mind or want to learn more about our services? We'd love to hear from you.</p>
                </div>
            </div>
            
            <div class="row g-5">
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <div class="pe-lg-5">
                        <h3 class="text-white mb-4">Contact Information</h3>
                        <p class="text-light mb-5">Fill out the form or reach out to us directly through the contact information below.</p>
                        
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-1">Location</h5>
                                <p class="text-light mb-0">123 Tech Street, Silicon Valley, CA 94025</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-1">Phone</h5>
                                <p class="text-light mb-0">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-1">Email</h5>
                                <p class="text-light mb-0">info@cleantech.com</p>
                            </div>
                        </div>
                        
                        <div class="mt-5">
                            <h5 class="text-white mb-3">Follow Us</h5>
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <div class="contact-form">
                        <h3 class="mb-4 text-dark">Send Us a Message</h3>
                        <form>
                            <div class="mb-4">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <a href="#" class="footer-logo">CleanTech</a>
                    <p class="text-light mt-3">Innovative technology solutions to help your business grow and succeed in the digital world.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <div class="footer-links">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h5>Services</h5>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Mobile Apps</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Cloud Solutions</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h5>Contact Info</h5>
                        <ul>
                            <li class="text-light">123 Tech Street, Silicon Valley</li>
                            <li class="text-light">CA 94025, United States</li>
                            <li class="text-light">info@cleantech.com</li>
                            <li class="text-light">+1 (555) 123-4567</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <hr class="my-5 bg-light opacity-10">
            
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-light mb-0">&copy; 2023 CleanTech. All rights reserved.</p>
                </div>

                </div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-light">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#" class="text-light">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>