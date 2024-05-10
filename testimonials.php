<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon_io/site.webmanifest">
    <title>Testimonials - WESTERN BOOK PUBLISHING</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/unicons.css">
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <?php
    if (isset($_SESSION['message']) && ($_SESSION['topheading'])) {
    ?>
        <style>
            .alert {
                margin: auto;
                z-index: 2147483647;
                position: fixed;
                margin-top: 20px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border-radius: 20px;
                background-color: #fff;
                box-shadow: 0 0 400px 500px rgba(0, 0, 0, 0.5);
                max-width: 350px;
            }

            .btn-close {
                position: absolute;
                top: 1rem;
                right: 1rem;
                border-radius: 0;
                opacity: 1;
            }

            .alert p {
                font-size: .9rem;
            }
        </style>
        <div class="text-center alert alert-dismissable" role="alert">
            <h4 class="alert-heading text-primary"><?= $_SESSION['topheading']; ?></h4>
            <p class="py-5 fw-bold"><?= $_SESSION['message']; ?></p>
            <button type="button" class="btn-close btn-close-danger" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['topheading']);
        unset($_SESSION['message']);
    }
    ?>
    <main>
        <section id="hero" class="hero">
            <button class="popup-trigger get-in-touch-wrap" id="popup-trigger">
                Get started
            </button>
            <?php include("includes/navbar.php"); ?>
            <header class="header-hero">
                <div class="video-wrap">
                    <img src="assets/images/women.png" alt="">
                </div>
                <section class="header">
                    <div class="header-sec1 col-lg-6 col-12">
                        <div class="main-text">
                            <h1>
                                <span class="">
                                    Western Book Publishing <br>
                                </span>
                                <span class="hh-span">
                                    redefines the way Books Are Published
                                </span>
                                <style>
                                    .main-text h1 .hh-span {
                                        animation:
                                            typing 5s steps(50, end),
                                            blink-caret 1s step-end infinite;
                                    }
                                    /* The typing effect */
                                    @keyframes typing {
                                        from {width: 0}
                                        to {width: 100%}
                                    }
                                    /* The typewriter cursor effect */
                                    @keyframes blink-caret {
                                        from,
                                        to {border-color: transparent}
                                        50% {border-color: orange;}
                                    }
                                </style>
                            </h1>
                            <p>
                                We take pleasure in building relationships based on trust and a shared passion for 
                                creating outstanding content. It's no surprise that the majority of authors return 
                                to us for second novels and other publishing needs. Join us in our pursuit of 
                                excellence, where every narrative finds its voice and each author realises their 
                                full potential.
                            </p>
                            <div class="amz-img">
                                <img src="assets/images/testi.webp" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="header-sec2 col-lg-4">
                        <div class="get-started col-lg-9 col-10 mt-0 mt-lg-2">
                            <h1>let's get started</h1>
                            <div class="form">
                                <form action="config/send" method="POST">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-md-12">
                                            <div class="form-control wave-group">
                                                <input type="text" name="c-name" id="name" class="input"
                                                    placeholder="Your Name" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-control wave-group">
                                                <input type="email" name="c-email" id="email" class="input"
                                                    placeholder="Email Address" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-control wave-group">
                                                <input type="phone" name="c-phone" id="phone" class="input"
                                                    placeholder="Phone Number" required />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-control wave-group wave-text">
                                                <textarea type="text" name="c-message" id="message" class="input"
                                                    placeholder="I'm Looking For........." rows="3" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 check-box pt-2 pb-1">
                                            <label class="check me-2">
                                                <input type="checkbox" name="c-check"/>
                                                <div class="checkmark"></div>
                                            </label>
                                            <p class="mb-0">
                                                Please CHECK THE BOX to COMMUNICATE VIA SMS OR
                                            </p>
                                        </div>
                                        <div class="col-12 text-center subs-text">
                                            <p class="mb-lg-3 mb-0">
                                                EMAIL ( PRIVACY POLICY & TERMS AND CONDITIONS ) -
                                                Carrier charges may apply for SMS. Reply STOP or
                                                UNSUBSCRIBEtoSTOP to unsubscribe anytime.
                                            </p>
                                        </div>
                                        <a href="#" class="contact-btn d-flex justify-content-center">
                                            <button class="custom-btn" type="submit" name="c_sub_btn">
                                                <span class="button__text">Send Message</span>
                                                <span class="button__icon" style="color: #fff;"><i
                                                        class="fa-solid fa-paper-plane"></i></span>
                                            </button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </header>
        </section>
        <section class="test-section">
            <div class="container testimonials">
                <div class="row g-5">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="test-card">
                            <div class="test-card-body">
                                <h5 class="test-card-title">Kristen James</h5>
                                <div class="quote"><i class="fa fa-quote-right" aria-hidden="true"></i><h6>Author</h6></div>
                                <p class="test-card-text">
                                    Thank you for all of your help, suggestions, and excellent service. It is a 
                                    pleasure working with you, and I hope this is just the beginning of a wonderful 
                                    long-term partnership
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="test-card">
                            <div class="test-card-body">
                                <h5 class="test-card-title">Ariel Johnson</h5>
                                <div class="quote"><i class="fa fa-quote-right" aria-hidden="true"></i><h6>Author</h6></div>
                                <p class="test-card-text">
                                    It's difficult enough to write, edit, and proofread a book. It is far harder to 
                                    find a publisher for it. Western Book Publishing saved me the trouble of having 
                                    to hunt for other services. Everything I needed was in one place.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="test-card">
                            <div class="test-card-body">
                                <h5 class="test-card-title">Dean Edward</h5>
                                <div class="quote"><i class="fa fa-quote-right" aria-hidden="true"></i><h6>Author</h6></div>
                                <p class="test-card-text">
                                    It was a pleasure to collaborate with Western Book Publishing on my debut book. 
                                    They gained a lifetime dedication customer because of the outstanding content 
                                    they provided for me! With their outstanding client service.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="test-card">
                            <div class="test-card-body">
                                <h5 class="test-card-title">Tom Richard</h5>
                                <div class="quote"><i class="fa fa-quote-right" aria-hidden="true"></i><h6>Author</h6></div>
                                <p class="test-card-text">
                                    Western Book provided me with outstanding help throughout the publishing process.
                                     They simply outperform. The steps necessary to finish such a project are huge. 
                                     I'm grateful to them for their assistance and pleased of the work we created 
                                     together. My book looks wonderful! What wonderful experience! Today, I'm a very
                                      happy author!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="test-card">
                            <div class="test-card-body">
                                <h5 class="test-card-title">Kim Warner</h5>
                                <div class="quote"><i class="fa fa-quote-right" aria-hidden="true"></i><h6>Author</h6></div>
                                <p class="test-card-text">
                                    Western book publishing did an excellent job of proofreading our book manuscript.
                                    The Western book publishing crew is very cooperative and responsive, and they 
                                    answered all of our problems. We are pleased with the work and would hire 
                                    Western again.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="test-card">
                            <div class="test-card-body">
                                <h5 class="test-card-title">Rosy Lee</h5>
                                <div class="quote"><i class="fa fa-quote-right" aria-hidden="true"></i><h6>Author</h6></div>
                                <p class="test-card-text">
                                    My book was published smoothly and painlessly thanks to Western. I sincerely
                                     appreciate their assistance with the cover design and whole book design.
                                      I was very grateful for the assistance of the copy editor, whose reasonably
                                       priced skills were priceless to me. We value your ongoing assistance and
                                        guidance with marketing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("includes/contact-form.php"); ?>
    </main>
    <?php include("includes/footer.php"); ?>