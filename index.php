<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon_io/favicon-16x16.png">
    <link rel="stylesheet" href="assets/">
    <link rel="manifest" href="assets/images/favicon_io/site.webmanifest">
    <title>Home - WESTERN BOOK PUBLISHING</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/unicons.css">
    <link rel="stylesheet" href="assets/css/animate.css">
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
                                        from {
                                            width: 0
                                        }

                                        to {
                                            width: 100%
                                        }
                                    }

                                    /* The typewriter cursor effect */
                                    @keyframes blink-caret {

                                        from,
                                        to {
                                            border-color: transparent
                                        }

                                        50% {
                                            border-color: orange;
                                        }
                                    }
                                </style>
                            </h1>
                            <p class="mt-lg-4">
                                Welcome to Western Book publishing, a visionary force reshaping the core
                                of traditional publishing methods. Our groundbreaking approach dares to challenge
                                norms and establish new industry benchmarks. With an unwavering commitment to
                                creativity, efficiency, an author empowerment, we are revolutionizing the very
                                essence of bringing books to life. Come along on this thrilling adventure with us
                                as we daringly transform the book industry and experience a game-changing period
                                where greatness is just around the corner and creativity has no boundaries.
                            </p>
                            <div class="amz-img">
                                <img src="assets/images/testi.webp" alt="">
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
                                                <input type="text" name="c-name" id="name" class="input" placeholder="Your Name" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-control wave-group">
                                                <input type="email" name="c-email" id="email" class="input" placeholder="Email Address" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-control wave-group">
                                                <input type="phone" name="c-phone" id="phone" class="input" placeholder="Phone Number" required />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-control wave-group wave-text">
                                                <textarea type="text" name="c-message" id="message" class="input" placeholder="I'm Looking For........." rows="3" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 check-box pt-2 pb-1">
                                            <label class="check me-2">
                                                <input type="checkbox" name="c-check" />
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
                                                <span class="button__icon" style="color: #fff;"><i class="fa-solid fa-paper-plane"></i></span>
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

        <section class="platforms">
            <div class="container">
                <div class="ads_sponsors">
                    <div>
                        <img src="assets/images/Platform Logos/slide1.png" alt="" />
                    </div>
                    <div>
                        <img src="assets/images/Platform Logos/slide2.png" alt="" />
                    </div>
                    <div>
                        <img src="assets/images/Platform Logos/slide3.png" alt="" />
                    </div>
                    <div>
                        <img src="assets/images/Platform Logos/slide4.png" alt="" />
                    </div>
                    <div>
                        <img src="assets/images/Platform Logos/slide5.png" alt="" />
                    </div>
                    <div>
                        <img src="assets/images/Platform Logos/slide6.png" alt="" />
                    </div>
                    <div>
                        <img src="assets/images/Platform Logos/slide8.png" alt="" />
                    </div>
                    <div>
                        <img src="assets/images/Platform Logos/slide9.png" alt="" />
                    </div>
                    <div>
                        <img src="assets/images/Platform Logos/slide10.png" alt="" />
                    </div>
                    <div>
                        <img src="assets/images/Platform Logos/slide11.png" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="bg-img">
                <img src="assets/images/9216429 copy.png" alt="" />
            </div>
            <div class="container">
                <div class="row align-items-center overflow-hidden">
                    <div class="col-lg-6 col-md-6 col-12 mt-5 pt-3 sec-1">
                        <h3 class="text-capitalize">
                            A book publishing company redefines the way books are
                            published
                        </h3>
                        <p>
                            Welcome to Western Book Publishing, where we redefine traditional publishing methods.
                            Our groundbreaking approach challenges norms and sets new industry benchmarks.
                            With a focus on creativity, efficiency, and author empowerment, we revolutionize the
                            process of bringing books to life. Join us on this thrilling adventure as we transform
                            the book industry, ushering in a game-changing era of limitless creativity and
                            greatness just around the corner.
                        </p>
                        <a href="#">
                            <button class="custom-btn mt-4" type="button">
                                <span class="button__text">Get Free Consultation</span>
                                <span class="button__icon"><img src="assets/images/chat.png" alt="" /></span>
                            </button>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 sec-2 mt-lg-5 ">
                        <img src="assets/images/WBP-Web-Template-3.jpg" />
                    </div>
                </div>
            </div>
        </section>

        <section class="serve">
            <div class="bg-img">
                <img src="assets/images/9216429 copy.png" alt="" />
            </div>
            <div class="container">
                <div class="row align-items-center overflow-hidden">
                    <div class="col-lg-7 col-md-6 col-12 sec-2 mt-lg-5 ms-2">
                        <img src="assets/images/3.png" alt="" />
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 mt-3 pt-3 sec-1">
                        <h3 class="text-capitalize">
                            Give the Western Book Publishing Service a glimpse into your memory
                        </h3>
                        <p>
                            Take advantage of this unique opportunity with Western Book Publishing.
                            Raise your profile, impact your knowledge, and make a lasting impact globally.
                            Our expert publishing services are expertly designed to help you become an author
                            and achieve unmatched success and fulfillment. Take advantage of this chance to be
                            creative, inspirational, and a shining light in the world of literature.
                            Let’s spark a creative revolution and make clear the obvious route to success.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section">
            <div class="mb-3 pb-2">
                <h1 class="heading text-center my-3">Our Comprehensive Book Marketing Services Include</h1>
                <p class="text-center mb-5 para">Our Process Is Simple And Aims At Delivering Flawless Results For Every
                    Project.</p>
            </div>
            <div class="container justify-content-center align-items-center text-center mt-3">
                <div class="row">
                    <div class="serv-content serr col-md-12">
                        <ul class="services-main col-md-12">
                            <li class="col-12 col-md-5 col-lg-3">
                                <a href="#" class="serv-card s3">
                                    <div class="card-overlay"></div>
                                    <div class="circle">
                                        <img src="assets/images/services/s4.png" alt="" />
                                    </div>
                                    <h1>Book Publishing and Distribution</h1>
                                </a>
                            </li>
                            <li class="col-12 col-md-5 col-lg-3">
                                <a href="#" class="serv-card s2">
                                    <div class="card-overlay"></div>
                                    <div class="circle">
                                        <img src="assets/images/services/s2.png" alt="" />
                                    </div>
                                    <h1>e-Book Publishing</h1>
                                </a>
                            </li>
                            <li class="col-12 col-md-5 col-lg-3">
                                <a href="#" class="serv-card s4">
                                    <div class="card-overlay"></div>
                                    <div class="circle">
                                        <img src="assets/images/services/s3.png" alt="" />
                                    </div>
                                    <h1>Proofreading and Editing</h1>
                                </a>
                            </li>
                            <li class="col-12 col-md-5 col-lg-3">
                                <a href="#" class="serv-card s7">
                                    <div class="card-overlay"></div>
                                    <div class="circle">
                                        <img src="assets/images/services/s7.png" alt="" />
                                    </div>
                                    <h1>Book Promotions and Marketing</h1>
                                </a>
                            </li>
                            <li class="col-12 col-md-5 col-lg-3">
                                <a href="#" class="serv-card s9">
                                    <div class="card-overlay"></div>
                                    <div class="circle">
                                        <img src="assets/images/services/s9.png" alt="" />
                                    </div>
                                    <h1>Author Website Design and Development</h1>
                                </a>
                            </li>
                        </ul>
                        <ul class="services-main col-md-12">
                            <li class="col-12 col-md-5 col-lg-3">
                                <a href="#" class="serv-card s6">
                                    <div class="card-overlay"></div>
                                    <div class="circle">
                                        <img src="assets/images/services/s6.png" alt="" />
                                    </div>
                                    <h1>Customized Illustrations</h1>
                                </a>
                            </li>
                            <li class="col-12 col-md-5 col-lg-3">
                                <div href="#" class="serv-card s5">
                                    <div class="card-overlay"></div>
                                    <div class="circle">
                                        <img src="assets/images/services/s5.png" alt="" />
                                    </div>
                                    <h1>Book Cover Art</h1>
                                </div>
                            </li>
                            <li class="col-12 col-md-5 col-lg-3">
                                <a href="#" class="serv-card s8">
                                    <div class="card-overlay"></div>
                                    <div class="circle">
                                        <img src="assets/images/services/s8.png" alt="" />
                                    </div>
                                    <h1>Audiobook Narration and Publishing</h1>
                                </a>
                            </li>
                            <li class="col-12 col-md-5 col-lg-3">
                                <a href="#" class="serv-card s10">
                                    <div class="card-overlay"></div>
                                    <div class="circle">
                                        <img src="assets/images/services/s10.png" alt="" />
                                    </div>
                                    <h1>Formatting and Layout</h1>
                                </a>
                            </li>
                            <li class="col-12 col-md-5 col-lg-3">
                                <div class="serv-card s1">
                                    <div class="card-overlay"></div>
                                    <div class="circle">
                                        <img src="assets/images/services/s1.png" alt="" />
                                    </div>
                                    <h1>Ghost Writing</h1>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="key-feature">
                <h3 class="text-center fw-medium my-3 py-3">Key Features</h3>
                <div class="container justify-content-center align-items-center text-center">
                    <div class="row">
                        <div class="serv-content col-md-12">
                            <ul class="services-main features">
                                <li class="col-6 col-md-3 col-lg">
                                    <div class="serv-card s1">
                                        <div class="circle">
                                            <img src="assets/images/services/f1.png" alt="" />
                                        </div>
                                        <h1>100% Satisfaction Guarantee</h1>
                                    </div>
                                </li>
                                <li class="col-6 col-md-3 col-lg">
                                    <a href="#" class="serv-card s2">
                                        <div class="circle">
                                            <img src="assets/images/services/f2.png" alt="" />
                                        </div>
                                        <h1>Unique Design Guarantee</h1>
                                    </a>
                                </li>
                                <li class="col-6 col-md-3 col-lg">
                                    <a href="#" class="serv-card s3">
                                        <div class="circle">
                                            <img src="assets/images/services/f3.png" alt="" />
                                        </div>
                                        <h1>100% Money Back Guarantee</h1>
                                    </a>
                                </li>
                                <li class="col-6 col-md-3 col-lg">
                                    <a href="#" class="serv-card s4">
                                        <div class="circle">
                                            <img src="assets/images/services/f4.png" alt="" />
                                        </div>
                                        <h1>24/7 Design Consultancy</h1>
                                    </a>
                                </li>
                                <li class="col-6 col-md-3 col-lg">
                                    <a href="#" class="serv-card s4">
                                        <div class="circle">
                                            <img src="assets/images/services/f5.png" alt="" />
                                        </div>
                                        <h1>Award Winning Designers</h1>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio-section">
            <div class="bg-pic">
                <img src="assets/images/portfolio-bg.jpg" alt="">
            </div>
            <div class="text-heading">
                <h1>A Glimpse Into Our Award-Winning Portfolio</h1>
                <p>We pride ourselves on our ability to produce quality and creative content at a fraction of the
                    cost.
                    We have a long history in the industry and have won many awards.
                </p>
            </div>
            <div class="container">
                <div class="carousel">
                    <div class="slide1">
                        <div class="item"></div>
                    </div>
                    <div class="slide2">
                        <div class="item"></div>
                    </div>
                    <div class="slide3">
                        <div class="item"></div>
                    </div>
                    <div class="slide4">
                        <div class="item"></div>
                    </div>
                    <div class="slide5">
                        <div class="item"></div>
                    </div>
                    <div class="slide6">
                        <div class="item"></div>
                    </div>
                    <div class="slide7">
                        <div class="item"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("includes/contact-form.php"); ?>
    </main>
    <?php include("includes/footer.php"); ?>