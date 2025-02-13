<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanTech ideals</title>
    <link rel="icon" href="Assets/Images/iot.jpeg" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital@0;1&family=Oswald:wght@500&display=swap" />
    <link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/plugins/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/plugins/magnific-isotope/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/plugins/sweetalert/sweetalert.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="shortcut icon" href="..Assets/Images/stephen.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</head>
<body style="background-color: lightgray;">
    <header class="header contain-to-grid bg-secondary shadow-lg">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h3 class="fst-italic" style="font-family: 'Times New Roman', Times, serif; background: linear-gradient(to right, #ff6e7f, #bfe9ff); color: transparent; font-size: 2em; font-weight: bold; -webkit-background-clip: text;" data-animate-hover="shake" id="gradient-text"></h3>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown"><!--lass="collapse navbar-collapse" id="navbarNavDropdown---->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="#"><i class="bi bi-house-fill"></i>Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#services"><i class="bi bi-gear-fill"></i>Services</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#"><i class="bi bi-book-fill"></i>Short Novels</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#aboutUs"><i class="bi bi-info-circle-fill"></i>About Us</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#contact"><i class="bi bi-envelope-fill"></i>Contact</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-success text-light" href="#" data-toggle="modal" data-target="#registerModal"><i class="bi bi-box-arrow-in-right"></i>Register</a></li>
                    &nbsp;
                    <li class="nav-item"><a class="nav-link btn btn-primary text-light" href="#" data-toggle="modal" data-target="#loginmodal"><i class="bi bi-person-plus-fill"></i>Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background: #f7f7f7;">
                <div class="modal-header">
                    <h5 class="modal-title text-primary fw-bold" id="loginModalLabel"><i class="bi bi-person-fill"></i>Sign IN</h5>
                     <button class="close" data-dismiss="modal" arai-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./Include/login.php" id="loginForm" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter email address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pword" id="" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-outline-success"><i class="fa fa-sign-in"></i>
                            &nbsp;
                            <button class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="registerModal" tabindex="-1" aria-hidden="true" aria-labelledby="registerModalLabel">
        <div class="modal-dialog" style="background: #f7f7f7;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-primary fst-italic">Sign Up</h4>
                    <button data-dismiss="modal" aria-label="close" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./Include/register.php" id="registerform" method="post">
                        <div class="form-group">
                            <input type="text" name="name" id="" class="form-control" placeholder="Enter username"required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="" class="form-control" placeholder="Email address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pword" id="" class="form-control" placeholder="Set password" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Register" class="btn btn-outline-primary">
                            &nbsp;
                            <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section id="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Assets/Images/lukas.jpg" alt="First slide">
                    <div class="carousel-caption d-md-block di-1 me-md-3 me-2">
                        <div data-swiper-parallax="-300">
                            <h5 class="slide-text text-white animated" 
                                data-animation="fadeInUp">Welcome to Our Store<br> <span class="text-primary fst-italic">Being Smart is Our Game</span></h5>
                                <p class="slide-text mt-3 mb-4 text-white animated di-1-5 me-3"
                                                data-animation="fadeInUp">We provide innovative, eye-catching solutions
                                                that help brands to stand out from the crowd</p>
                                                <br><br>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Assets/Images/analytics.jpg" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <h5 id="typed">Discover Unique Items<br>
                            <span id="element"  class="text-success"></span></h5>
                            <p class="text-light">Getting the most out of this website company</p>
                    </div>
                    <!--- ---->
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Assets/Images/scott.jpg" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <h5>Buy and Enjoy</h5>
                        <p class="slide-text mt-3 mb-4 text-success animated di-1-5 me-3"
                                                data-animation="fadeInUp">Every great business idea takes wings with the
                                                launch of a professionally designed website</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="section-top-first mb-5" id="aboutUs">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 mt-3 p-md-0 rounded border" style="background-color: yellow; color: gray;">
                    <div class="p-5 section-yellow">
                        <h4 class="fw-bold text-primary">Strategy</h4>
                        <p class="pt-4">This is where we validate your future users and define the project
                            It consists of a working plan in which the users' needs are met with a solution that
                            fulfils the business goals 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 p-md-0 bg-light  rounded border">
                    <div class="p-5 section-light">
                        <h4>Marketing</h4>
                        <p class="pt-4 text-text">Digital marketing is the only way to stay ahead, when you're a
                                business owner the online world can seem intimidating, we provides your business a
                                successful digital planning throw our marketing team</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 p-md-0 bg-primary rounded border">
                    <div class="p-5 section-blue text-light">
                        <h4>Technology</h4>
                        <p class="pt-4">
                            CleanTech corporation has technical impressive experts.
                            They will dig into your business, discuss the work scope, challenges and consult on the most appropriate
                            technological solutions
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class="page-image-title" id="services" style="background-image: url('Assets/Images/watts.jpg'); 
    background-size: cover; background-repeat: no-repeat;">

<section class="section">
    <div class="section"></div>
    <div class="section content">
        <div class="container">
            <h1 class="text-warning fst-italised">Our Services</h1>
        </div>
    </div>
</section>
<section class="section-light section-padding-08">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-light">
                <h2 class="font-size-2-5 mb-4">We design, develop and market digital products
                    <br>that give brands a competitive advantage
                </h2>
                <p class="text-light font-size-1-06">Our focus is on solving business challenges with
                    cutting-edge solutions</p>
                    <a href="" class="btn btn-outline-warning mb-2">Discover</a>
            </div>
        </div>
    </div>
</section>
</main>
<!------
<div class="slideshow-container">
        <div class="mySlides fade">
            <img src="img/camera.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="img/coffee.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="img/color.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="img/horse.png" style="width:100%">
        </div>

        <div class="header2">
            <h1 class="wel">WELCOME TO</h1>
            <br><br>
            <h1 class="angle">HAVANA HOTEL</h1>
            <p>Feels like home</p>
        </div>
    </div>
------>
    <section id="featured-items" class="container mt-1">
        <h2 class="text-center">Featured Items</h2>
        <div class="row justify-content-center">
            <!-- Featured odds and novels will go here -->
        </div>
    </section>
    <!---contact us section----->
    <main class="page-image-title mb-3 mt-2 bg-secondary" style="background-image: url('Assets/Images/.jpg');
    background-size: cover; background-position: center; 
    background-repeat: no-repeat; border-radius: 9px;">

        <section class="section-parallax page-image-title" id="contact">
            <div class="section-mask"></div>
            <div class="section-content">
                <div class="container">
                    <h1 class="text-white">Contact us</h1>
                </div>
            </div>
        </section>

        <section class="section-white section-padding-08">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 px-md-5 mb-5 mb-lg-0">
                        <h4 class="text-dark">Say Hi!</h4>
                        <h2 class="text-dark font-size-3">Whenever you need us, we’re <span
                                class="text-blue">here</span> for you</h2>
                        <p class="pt-4 pb-5 text-text">We’re here to help and answer any question you might have, we
                            look forward to hearing from you.</p>
                        <h6 class="d-inline-block me-5"><a href="tel:+254" class="text-white">+254
                            163</a></h6>
                        <h6 class="d-inline-block"><a href="mailto:clean@technet.com"
                                class="text-white">clean@technet.com</a></h6>
                    </div>

                    <div class="col-lg-6 px-md-5 mt-2 mb-2 rounded border" style="background-color: lightblue;">
                        <h3 class="mb-4">Post a Comment</h3>
                        <form action="./include/contactform.php" id="contactform" method="post">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" id="contactformcomment" name="contactformcomment"
                                            placeholder="Comment"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="contactformname"
                                            name="contactformname" placeholder="Name" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="contactformemail"
                                            name="contactformemail" placeholder="Email" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="contactformphone"
                                            name="contactformphone" placeholder="Phone" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control" id="contactformcountry"
                                            name="contactformcountry" placeholder="Country" />
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-2">
                                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <section class="bg-info mb-2 rounded border">
    <div class="container">
        <div class="row justify-content-center footer">
            <div class="col-5 text-center text-light">
            <p>&COPY;2024 My Website. All rights reserved.</p>
            </div>
            <div class="col-6 text-center text-light">
            <p class="text-light"><em>Get in touch with us</em> <strong>in:</strong></p>
            <a href="https://wa.me/0727014233" target="_blank"><i class="fab fa-whatsapp"></i></a>&nbsp;&nbsp;
            <a href="https://facebook.com/yourfacebookpage" target="_blank"><i class="fab fa-facebook"></i></a>&nbsp;&nbsp;
            <a href="https://twitter.com/yourtwitterhandle" target="_blank"><i class="fab fa-twitter"></i></a>&nbsp;&nbsp;
            <a href="https://instagram.com/instagramhandle" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
    </div>
    </div>
</section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./JS/script.js"></script>
    <script src="./JS/front.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                            
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                    
        });
    });
});
    var typed = new Typed('#gradient-text', {
        strings : ['Clean Technology'],
        typeSpeed: 129,
        backSpeed: 139,
        looped: true,
    });
    var element = new Typed('#element', {
        strings: ['Simply Inspiring Creativity'],
        typeSpeed: 150,
        looped: true,
    })
    </script>
</body>
</html>
