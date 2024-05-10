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
    <title>About - WESTERN BOOK PUBLISHING</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/uikit.min.css" />
    <link rel="stylesheet" href="assets/css/unicons.css">
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
        <section id="hero" class="hero about-hero">
            <button class="popup-trigger get-in-touch-wrap" id="popup-trigger">
                Get started
            </button>
            <?php include("includes/navbar.php"); ?>
            <div class="header">

                <div class="video-wrap">
                    <video autoplay loop muted class="custom-video">
                        <source src="assets/images/bookwritingvideo-1.webm" type="video/mp4" />

                        Your browser does not support the video tag.
                    </video>
                </div>
                <header class="about-us">
                    <div class="aboutus-header">
                        <div class="conatiner about-text text-center">
                            <h6 class="text-uppercase text-white">INFUSING INNOVATION WITH UNRIVALLED PERFECTION</h6>
                            <h1 class="mb-0 text-white">WESTERN BOOK PUBLISHING</h1>
                            <!-- TEXT SLIDER -->
                            <section id="porque-sec" class=" uk-light">
                                <div>
                                    <div uk-slider="velocity:1.3; easing: cubic-bezier(.4,0,.2,1); 
                                     autoplay: true; autoplay-interval: 3000">
                                        <div class="uk-position-relative">
                                            <div class="uk-slider-container uk-light" uk-slider=" finite: true">
                                                <ul class="uk-slider-items uk-child-width-1-1">
                                                    <li>
                                                        <div class="uk-container uk-container-small"
                                                            uk-slider-parallax="opacity: 0,1,0">
                                                            <p>Welcome to Western Book Publishing Portal, 
                                                                where endless opportunities await. Our goal is to 
                                                                revolutionize the book publishing industry with a 
                                                                dedicated team creating captivating literary works. 
                                                                Join us where creativity knows no bounds and every 
                                                                word holds power and charm. 
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="uk-container uk-container-small"
                                                            uk-slider-parallax="opacity: 0,1,0">
                                                            <p>Our vision is to make #1 global self-publishing 
                                                                platform. It’s ambitious, but we thrive on 
                                                                challenges. We push ourselves to the next level, 
                                                                knowing our work makes a difference for our 
                                                                customers and the publishing landscape at large. 
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="uk-container uk-container-small"
                                                            uk-slider-parallax="opacity: 0,1,0">
                                                            <p>Our team brings your story to life, 
                                                                understanding how images can capture your readers' 
                                                                imaginations.
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- TEXT SLIDER -->
                            <div class="head-btns">
                                <a href="#" class="btn ab-btn1">
                                    <span>START PROJECT</span>
                                </a>
                                <a href="#" class="btn ab-btn2">
                                    <span>let's chat</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
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
        <section class="about-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2>GET IN TOUCH WITH <span>WESTERN BOOK PUBLISHING</span></h2>
                        <p>
                            Ready to take the next step in your writing career? Western Book Publishing excels 
                            at turning writers into renowned authors. Our team of publishing experts will guide you 
                            every step of the way, ensuring your voice resonates in the literary world. Join us on 
                            this journey and let your story captivate the world. Embrace the famous author status 
                            with Western Book Publishing and showcase your talent to a global audience. With us by 
                            your side, the path to literary success is illuminated, offering you the chance to 
                            make a lasting impact in the dynamic world of literature. Connect Western Book 
                            Publishing and let your literary aspirations soar to new horizons. Your success story 
                            starts here!
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="counter-wrap" id="counter">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <div class="counter-item">
                                        <img src="assets/images/rate.png" alt="">
                                        <h3><span class="count" data-count="120">120</span>+</h3>
                                        <p>years of experiance</p>
                                    </div>
                                    <div class="counter-item">
                                        <img src="assets/images/books.png" alt="">
                                        <h3><span class="count" data-count="280">280</span>+</h3>
                                        <p>Books Internationally Acclaimed</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="counter-item">
                                        <img src="assets/images/literature.png" alt="">
                                        <h3><span class="count" data-count="1500">1500</span>+</h3>
                                        <p>Books Written</p>
                                    </div>
                                    <div class="counter-item">
                                        <img src="assets/images/quill-pen.png" alt="">
                                        <h3><span class="count" data-count="550">550</span>+</h3>
                                        <p>Native Writers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="amz-portal">
                            <div class="amz-textbox">
                                <h2>Everlasting Tales via <span>western book publishing</span></h2>
                                <p>
                                    Becoming an author starts a journey that goes well beyond the writing of a 
                                    single book. The spark of inventions has no limitations. As an author, your 
                                    drive to write more stories, thoughts, and experiences is limitless. 
                                    Western Book Publishing Portal is here to keep the flame burning and assist 
                                    your ongoing journey of self-expression. Our Commitment is to assist you in 
                                    realizing and living that ideal, book after book.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="d-flex flex-lg-row flex-column">
                                        <li>
                                            <a href="#">
                                                <button class="custom-btn mt-4" type="button">
                                                    <span class="button__text">Contact Us</span>
                                                    <span class="button__icon"><i class="fa fa-id-badge"></i></span>
                                                </button>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="+1 (346) 469 4226">
                                                <button class="custom-btn mt-lg-4" type="button">
                                                    <span class="button__text">+1 (346) 469 4226</span>
                                                    <span class="button__icon"><i class="fa fa-phone"
                                                            aria-hidden="true"></i></span>
                                                </button>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <img class="cta-img" src="assets/images/cta-book.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-5 amaz-imgg">
                        <div class="amazone-img">
                            <img src="assets/images/amazone.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'includes/about-portfolio.php'; ?>
        <?php include ('includes/booking.php'); ?>
        <?php include("includes/contact-form.php"); ?>
    </main>
    <?php include("includes/footer.php"); ?>