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
    <title>Privacy Policy - WESTERN BOOK PUBLISHING</title>

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
    .accordion-button::after{
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
            <?php include ("includes/navbar.php"); ?>
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
        <section class="privacy">
            <div class="container" data-aos="fade-up" data-aos-duration="1500">
                <h1>Privacy policy</h1>
                <p class="text-center mb-5">
                    The privacy policy assists both you and us in keeping your information private. Our privacy policy
                    will assist you
                    in understanding the steps we take to protect your privacy both before and after the work process.
                </p>
                <div class="policies">
                    <h2>USER INFORMATION</h2>
                    <h6>For your identification and peaceful partnership, we may gather the following information.</h6>
                    <ul>
                        <li>Name, business name and job title.</li>
                        <li>Contact information, including phone numbers, email addresses or website.</li>
                    </ul>
                    <h6>We need your information to understand your needs better and offer you a better service, namely
                        for the following reasons:</h6>
                    <ul>
                        <li>The information may be used to enhance our goods and services.</li>
                        <li>We may also contact you to solicit feedback on our services based on the information you
                            supply.</li>
                        <li>We can utilize the information to tailor the website to your preferences.</li>
                    </ul>
                </div>
                <div class="policies">
                    <h2>Security</h2>
                    <h6>
                        We are dedicated to keeping your information safe. To prevent unauthorized access or disclosure,
                        we have established
                        appropriate physical, administrative systems and technological to protect and secure the
                        information we collect online.
                    </h6>
                    <ul>
                        <li>
                            Clients' Information at Western Book Publishing is kept extremely secure during
                            transmission by using the
                            Secure Sockets Layer (SSL) Software, which encrypts the client's information.
                        </li>
                        <li>
                            Western Book Publishing adheres to widely established industry standards to safeguard the
                            personal information
                            submitted by the customer both during transmission and after received. However, because no
                            Internet transmission
                            or computer storage method is completely safe, we cannot guarantee its perfect security
                            despite utilizing commercially
                            reasonable efforts to protect your personal information.
                        </li>
                    </ul>
                </div>
                <div class="policies">
                    <h2>3RD PARTY SHARING</h2>
                    <ul>
                        <li>We do not disclose any personally identifiable information to other parties.</li>
                        <li>We do not provide or sell our client's personal information to third parties.</li>
                        <li>Western Book Publishing bills you for services using the services of credit card processing
                            firms. These businesses
                            never disclose, save, preserve, or use confidential information for any other reason.
                        </li>
                    </ul>
                </div>
                <div class="policies">
                    <h2>COOKIES AND THEIR USE</h2>
                    <ul>
                        <li>
                            Cookies, alphanumeric identifiers, allow our systems to recognize our clients' browsers and
                            save products in their Shopping Carts during visits.
                        </li>
                        <li>
                            The Help section of the toolbar on most browsers is useful for preventing the browser from
                            accepting new cookies,
                            disabling cookies, and notifying the user when a new cookie is received.
                        </li>
                        <li>
                            Clients usually do not prohibit cookies since they allow you to benefit from our site's key
                            features fully.
                            According to our findings, clients leave cookies to be accepted.
                        </li>
                        <li>
                            Western Book Publishing logs your IP address to diagnose server problems and administer our
                            website.
                            In addition, your IP address is used to collect broad demographic data regarding you, such
                            as your location
                            and Internet service provider.
                        </li>
                        <li>
                            Clients' aggregate information on how our visitors utilize the site may be obtained. This
                            information might
                            include specific visitor patterns on the site and search queries. There is no connection
                            between IP address,
                            log file data, and Personally Identifiable Information (PII).
                        </li>
                        <li>
                            Third parties can only obtain information about browser kinds, access times, URLs used to
                            reach our site,
                            and URLs visited by visitors on our site if combined.
                        </li>
                    </ul>
                </div>
                <div class="policies">
                    <h2>Consumer Data Safety Measures</h2>
                    <ul>
                        <p>
                            Your privacy is important to us. As a result, we do not disclose your name or contact
                            information to any third party.
                            Furthermore, we keep the information you supply secret. The information you enter is solely
                            used to understand your
                            needs better and tailor our services to meet them. We make every effort to adhere to PCI and
                            consumer data protection
                            regulations.
                        </p>
                        <p>
                            Our organization does not permit its agents to get sensitive consumer information like
                            credit card numbers. As a result,
                            we strongly warn our clients not to discuss any personal or sensitive information with our
                            workers. If you do so, you do
                            it at your own risk, and our firm is not accountable for any abuse.
                        </p>
                        <p>
                            Your requested work may be sent to one of our worldwide manufacturing or service facilities
                            for excellent delivery.
                            However, an NDA requires them to keep consumer information strictly secret.
                        </p>
                    </ul>
                </div>
                <div class="policies">
                    <h2>Pseudonym Policy</h2>
                    <h6>We have a policy of employing aliases to ensure the following:</h6>
                    <ul>
                        <p>
                            We employ pseudonyms to eliminate unnecessary confusion and inconvenience for our clients
                            when they are allocated a
                            new account manager; it allows our customers to stay connected with a single point of
                            contact while easily remembering
                            their names. Moreover, as our staff comprises people from different regions and cultures,
                            using pseudonyms helps us
                            present a uniform culture of the organization.
                        </p>
                    </ul>
                </div>
            </div>
            <div class="container mt-5" data-aos="fade-up" data-aos-duration="1500">
                <h1>Frequently Asked <span>Questions</span></h1>
                <p class="mb-4 text-center">Before contacting us you might want to check whether your question is one of our FAQs.</p>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Q: What types of book design and illustration services do you offer?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Q: What types of book design and illustration services do you offer?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Q: What types of publishing platforms do you work with?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                Q: What is your pricing structure for your services?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                Q: How long does the publishing process take?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                Q: Can I retain ownership of my book?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                Q: What makes Western Book Publishing different from other publishing companies?
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
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
        <?php include ("includes/about-portfolio.php"); ?>
        <?php include ("includes/contact-form.php"); ?>
    </main>
    <?php include ("includes/footer.php"); ?>