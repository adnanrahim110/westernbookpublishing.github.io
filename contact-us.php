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
    <title>Contact - WESTERN BOOK PUBLISHING</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
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
        <section id="hero" class="contact-hero">
            <button class="popup-trigger get-in-touch-wrap" id="popup-trigger">
                Get started
            </button>
            <?php include("includes/navbar.php"); ?>
            <header class="contact-us">
                <div class="video-wrap">
                    <video autoplay loop muted class="custom-video">
                        <source src="assets/images/bookwritingvideo-1.webm" type="video/mp4" />

                        Your browser does not support the video tag.
                    </video>
                </div>
                <section class="contact-header">
                    <div class="container contact-pg">
                        <h1>Have a Book Idea to Discuss? Connect with Us!</h1>
                        <p>
                            Your feedback is our inspiration. Connect with us for queries, comments, or concerns 
                            using the contact details below. We strive to respond promptly to each inquiry. 
                            Share detailed information in your message for meaningful communication. Your privacy 
                            is a priority for us, and we safeguard your information from third parties.
                        </p>
                    </div>
                </section>
            </header>
        </section>
        <?php include("includes/contact-form.php"); ?>
    </main>
    <?php include("includes/footer.php"); ?>
