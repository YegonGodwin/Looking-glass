<DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
<?php 
session_start();
?>

<!-- #Social Media End -->

<title>About Us section</title>

</head>

<!-- End Head -->

<body>

    <main>

        <section class="section-parallax page-image-title"
            style="background-image: url(https://pack2net.com/assets/img/images/about-01.webp);">
            <div class="section-mask"></div>
            <div class="section-content">
                <div class="container">
                    <h1 class="text-white">About us</h1>
                    <p class="text-success">Hello <?php echo $_SESSION['user']; ?>!</p>
                </div>
            </div>
        </section>

        <div class="container" data-animate="fadeInUpBig">
                <div class="col-md-12">
                    <div class="box slideshow">
                        <h3>Get The Best</h3>
                        <p class="lead">Come for the best of networking, web design, system development e.t.c</p>
                        <div id="get-inspired" class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="../Assets_c/img/getinspired2.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../Assets_c/img/getinspired3.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../Assets_c/img/internet1.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <section class="section-parallax page-image-sec"
            style="background-image: url(https://pack2net.com/assets/img/images/about-02.webp);"></section>

        <section>
            <div class="container-fluid p-0">
                <div class="row">

                    <div class="col-lg-4 p-md-0">
                        <div class="p-5 section-dark section-first">
                            <div class="vh-20">
                                <div class="section-content-v">
                                    <h2 class="font-size-3 text-white text-center">Philosophy</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 p-md-0">
                        <div class="px-3 py-5 section-light-gradient section-first">
                            <div class="vh-20 vh-auto">
                                <div class="section-content-v">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-6 px-md-4 px-0 mb-5">
                                            <h6 class="mb-2 text-dark">Put people first</h6>
                                            <p>It’s our design philosophy, and the way we approach our work, our team
                                                and our clients</p>
                                        </div>

                                        <div class="col-lg-4 col-md-6 px-md-4 px-0 mb-5">
                                            <h6 class="mb-2 text-dark">Keep things in proportion</h6>
                                            <p>Not too big, not too small. We’are motivated by doing good work, not
                                                growing our business</p>
                                        </div>

                                        <div class="col-lg-4 col-md-6 px-md-4 px-0 mb-5">
                                            <h6 class="mb-2 text-dark">Think globally</h6>
                                            <p>Our international clients and colleagues inspire us with new perspectives
                                                on work and life</p>
                                        </div>

                                        <div class="col-lg-4 col-md-6 px-md-4 px-0 mb-5 mb-lg-0">
                                            <h6 class="mb-2 text-dark">See the bigger picture</h6>
                                            <p>Understanding where you’re coming from helps us to go in the right
                                                direction together</p>
                                        </div>

                                        <div class="col-lg-4 col-md-6 px-md-4 px-0 mb-5 mb-lg-0 mb-md-0">
                                            <h6 class="mb-2 text-dark">Make great work</h6>
                                            <p>We always care about the quality and the result. We make great results
                                                for the business</p>
                                        </div>

                                        <div class="col-lg-4 col-md-6 px-md-4 px-0">
                                            <h6 class="mb-2 text-dark">Never stop learning</h6>
                                            <p>Technology moves fast. Design moves on. So it’s important to keep
                                                learning. It’s fun too</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 p-md-0">
                        <div class="p-5 section-blue section-first">
                            <div class="vh-20">
                                <div class="section-content-v">
                                    <h2 class="font-size-3 text-white text-center">Say Hi!</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 p-md-0">
                        <div class="p-5 section-light section-first counter-up">
                            <div class="vh-20">
                                <div class="section-content-v">
                                    <h3 class="font-size-2-5">create project</h3>
                                    <p class="py-2-5 text-dark">Customer care is at the top of our priorities list, it
                                        worked well for us, our very first clients are still with us after more than 20
                                        years, in that time they have grown enormously and we have grown too, but we
                                        still give them the same quality of service we always have.</p>
                                    <a href="get-quote.php" class="btn-eff-03">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 p-md-0">
                        <div class="p-5 section-white section-first">
                            <div class="vh-20">
                                <div class="section-content-v">
                                    <h3 class="font-size-2-5">We’re <span class="text-blue">here</span> for you</h3>
                                    <p class="py-4 text-text">We’re always happy to help and answer questions you might
                                        have, do you have a question?
                                        <br>just ask and get answers we’re here to help and answer any question you
                                        might have, we look forward to hearing from you.
                                    </p>
                                    <a href="contacts.php" class="btn-eff-01 btn-eff-01-pre">Say Hi</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        </section>

    </main>
    <button class="nav-link btn btn-outline-secondary m-5" href="#" data-toggle="modal" data-target="#loginModal"><i class="bi bi-box-arrow-in-left"></i> Log Out</button>
    <section>
        <div class="modal fade" role="dialog" tabindex="-1" aria-hidden="true" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-primary"></h4>
                        <div class="modal-body">
                        <h5 class="text-secondary">Are you sure you wanna exit?</h5>
                        <a href="../Out/logout.php" class="btn btn-danger">Yes</a>&nbsp;
                        <button class="btn btn-outline-secondary" data-dismiss="modal" aria-label="close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/front.js"></script>
</body>
</html>