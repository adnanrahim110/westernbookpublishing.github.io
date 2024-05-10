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
    <title>Terms & Conditions - WESTERN BOOK PUBLISHING</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/unicons.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<style>
    .privacy {
        margin: 3rem 0;
        padding: 0 2rem;
    }

    .privacy h1 {
        font-size: 40px;
        text-align: center;
        color: #003ac2;
        font-weight: 900;
        margin-bottom: 15px;
    }

    .privacy h1 span {
        color: #ed1c21;
    }

    .policies {
        margin-bottom: 30px;
    }

    .policies h2 {
        margin-bottom: 15px;
        font-size: 1.5rem;
    }

    .policies h6 {
        color: #383838;
        font-size: 1rem;
    }

    .policies ul li {
        list-style: square;
        font-size: .9rem;
        margin: 10px 0;
    }

    .policies ol li {
        list-style: lower-roman;
        margin: 20px 0;
    }

    .policies p {
        font-size: .9rem;
    }

    .accordion-item {
        border: 1px solid rgba(255 0 0 / 30%);
    }

    .accordion-button {
        padding: 1.5rem 1.25rem;
        font-size: .9rem;
    }

    .accordion-button::after {
        width: 1rem;
        height: 1rem;
        background-size: 1rem;
    }

    .accordion-button:focus {
        z-index: 3;
        border-color: #86b7fe;
        outline: 0;
        box-shadow: none;
    }

    .accordion-button:not(.collapsed) {
        background-color: #f97c7c;
        color: #fff;
    }

    .accordion-body {
        font-size: .9rem;
    }
</style>

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
        <section class="privacy">
            <div class="container" data-aos="fade-up" data-aos-duration="1500">
                <h1>Terms & Conditions</h1>
                <p class="text-center mb-5">
                    The aforementioned terms and conditions apply to www.americanpublishersinc.com projects.
                </p>
                <div class="policies">
                    <h2>COPYRIGHT</h2>
                    <p>
                        You shall have complete ownership of the material that we create for you and supply in accordance with
                        the parameters agreed upon. We will have no copyright on the content, and you are free to publish and
                        use it as you see fit.
                    </p>
                </div>
                <div class="policies">
                    <h2>PAYMENT</h2>
                    <p>
                        All services listed on the website need a 100% upfront payment. The customer is responsible for any
                        transaction fees and taxes (where applicable).
                    </p>
                </div>
                <div class="policies">
                    <h2>REVISIONS</h2>
                    <p>
                        We provide limitless changes on provided work as long as the requests are submitted within 7 days of the work
                        being delivered and, in extreme situations, within 14 days of the work being delivered. All modification
                        requests for client orders will be fulfilled in accordance with the order's urgency, with a typical minimum
                        turnaround time of 24 hours.
                    </p>
                    <h6>
                        The following is the revision turnaround time based on urgency:
                    </h6>
                    <ul>
                        <li>For orders up to 24 hours of urgency, the Revision turnaround time would be 24 hours.</li>
                        <li>For orders between 24-48 hours of urgency, the Revision turnaround time would be 48 hours.</li>
                        <li>For orders of 48 hours and above, the Revision turnaround time would be 72 hours.</li>
                    </ul>
                </div>
                <div class="policies">
                    <h2>PROJECT REQUIREMENTS</h2>
                    <p>
                        Before beginning a project, any project needs will be reviewed with the clients. Service-level disputes
                        shall be resolved in accordance with the terms and requirements agreed upon at the start of a project, these
                        terms and conditions, and reasonable business practices.
                    </p>
                </div>
                <div class="policies">
                    <h2>REFUND POLICY</h2>
                    <p>
                        You may request a complete refund before we begin work on your project. However, after work on a project has
                        begun, the refund will be executed after any relevant transaction charges have been deducted from the amount.
                        If you join up utilizing a limited-time or reduced offer, you will not be eligible for a refund. A refund
                        request can be submitted if you are unsatisfied with any product or service provided by American
                        Publishers Inc. within 5 days of your order completion. If we are unable to perform the requested
                        service due to our unlimited revision policy, we will issue a percentage-based refund. If no refund
                        request is received within five days of your purchase's delivery, both parties will presume your
                        satisfaction with the supplied goods.
                    </p>
                </div>
                <div class="policies">
                    <h2>TERM OF USE OF THIS WEBSITE</h2>
                    <ul>
                    <li>
                        The content on www.americanpublishersinc.com includes, but is not limited to, the company's services and does
                        not constitute advice, certificates, guarantees, or warranties.
                    </li>
                    <li>
                        The firm, its affiliates, associates, or employees are not liable for any loss or harm caused by an unintended
                        inaccuracy in the information on this website.
                    </li>
                    <li>
                        The company and its affiliates and associates are not liable for any failure of performance, omission,
                        interruption, error, deletion, defect, delay in operation or transmission, theft or destruction, computer
                        virus, communications line failure, or unauthorized access to, alteration of, or use of information contained
                        on the website at any time.
                    </li>
                    <li>
                        You agree to defend, indemnify, and hold harmless the business and its affiliated companies,
                        partners, officers, representatives, and employees from and against any claims, liabilities,
                        damages, losses, and expenditures arising out of or in any way connected with
                        <ol>
                            <li>your access to or use of the website and its services;</li>
                            <li>your violation of these Terms of Use; or</li>
                            <li>
                                your violation of any third party right, including without limitation any intellectual property
                                right, publicity right, or any other right.
                            </li>
                        </ol>
                    </li>
                    <li>
                        This Agreement or your use of this Site does not create a partnership, joint venture, employment,
                        or agency relationship between you and the firm.
                    </li>
                    </ul>
                </div>
            </div>
            <div class="container my-5 py-5" data-aos="fade-up" data-aos-duration="1500">
                <h1>Frequently Asked <span>Questions</span></h1>
                <p class="mb-4 text-center">Before contacting us you might want to check whether your question is one of our FAQs.</p>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Q: What types of book design and illustration services do you offer?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                At Western Book Publishing, we offer a comprehensive range of writing and editing
                                services,
                                including ghostwriting, developmental editing, copy editing, and proofreading. Our team
                                of
                                experienced professionals works closely with you to ensure that your work is polished
                                and ready for
                                publication.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Q: What types of book design and illustration services do you offer?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Our book design and illustration services include cover design, interior layout design,
                                and custom illustrations. We work with you to ensure that your book is visually
                                appealing
                                and professionally designed.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Q: What types of publishing platforms do you work with?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                We work with a variety of publishing platforms, including Amazon Kindle Direct
                                Publishing,
                                Barnes & Noble Press, IngramSpark, and many others. Our team is knowledgeable about the
                                various
                                requirements and guidelines for each platform and will help you navigate the publishing
                                process.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Q: What is your pricing structure for your services?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                We offer customized pricing based on your individual needs and the scope of your
                                project.
                                We provide transparent pricing and detailed estimates so that you know exactly what to
                                expect.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Q: How long does the publishing process take?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                The publishing process timeline varies depending on the scope of your project,
                                but we strive to deliver on time and on schedule. Our team works efficiently and
                                effectively
                                to ensure that your book is published in a timely manner.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                Q: Can I retain ownership of my book?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Yes, absolutely! At Western Book Publishing, we believe that you should have 100%
                                ownership of
                                your book. We do not take any sales royalties, and you retain complete control over your
                                work.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                Q: What makes Western Book Publishing different from other publishing companies?
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                We take pride in our personalized and comprehensive approach to publishing. Our team of
                                experienced professionals works closely with you to bring your vision to life, and we
                                are committed to delivering high-quality work on time and on budget. Plus, with our 0%
                                sales royalty policy, you can be confident that your hard work will pay off in the end.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("includes/about-portfolio.php"); ?>
        <?php include("includes/contact-form.php"); ?>
    </main>
    <?php include("includes/footer.php"); ?>