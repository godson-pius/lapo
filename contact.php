
    <?php $page = 'Contact'; require_once 'inc/header.php'; ?>
    <!-- Header end-->


    <main>
        <!-- BreadCrumb start -->
        <section class="breadcrumb-area">
            <div class="breadcrumb-widget  breadcrumb-widget-3 pt-200 pb-200"
                style="background-image: url(img/breadcrumb/bg-4.jpg);">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
                            <div class="breadcrumb-content pt-100">
                                <h1>We're here to help.</h1>
                                <ul>
                                    <li><a href="index.html">home</a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BreadCrumb end -->

        <!-- Get In Touch start -->
        <section class="pt-140 pb-140 get-touch-area bg_white">
            <div class="container">
                <div class="row gy-4 gy-lg-0">
                    <div class="col-lg-5">
                        <div class="section-title text-start">
                            <h2>Get in touch with us.</h2>
                            <p>Want to get in touch? We'd love to hear from you. Here's how you can reach us...</p>
                        </div>
                        <div class="row mt-55">
                            <div class="col-sm-6">
                                <div class="get-touch-box">
                                    <div class="icon">

                                        <img src="img/contact/call-outline.png" alt="call icon">
                                    </div>
                                    <div>
                                        <p>Call the helpline:</p>
                                        <span>(234) 7063 3495 77</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="get-touch-box">
                                    <div class="icon">

                                        <img src="img/contact/mail-open-outline.png" alt="mail icon">
                                    </div>
                                    <div>
                                        <p>Email us:</p>
                                        <span>hello@lapo.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="get-touch-box mt-30">
                                    <div class="icon">

                                        <i class="icon_pin_alt "></i>
                                    </div>
                                    <div>
                                        <p>Location</p>
                                        <span>Enugu, Nigeria</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="get-touch-box mt-30">
                                    <div class="icon">

                                        <i class="icon_clock_alt "></i>
                                    </div>
                                    <div>
                                        <p>Work Hours</p>
                                        <span>Monday - Saturday: 9am - 7pm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="contact-form-widget">
                            <form action="mail.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="f-name">Full Name</label>
                                        <input type="text" id="f-name" name="name" class="form-control"
                                            placeholder="What's your name?" required>
                                    </div>
                                    <div class="col-md-6 mt-20 mt-md-0">
                                        <label for="email-address">Email</label>
                                        <input type="email" id='email-address' name="email" class="form-control"
                                            placeholder="yourname@example.com" required>
                                    </div>
                                    <div class="col-md-12 mt-20">
                                        <label for="form-sub">Subject</label>
                                        <input type="text" id="form-sub" name="subject" class="form-control"
                                            placeholder="Your subject" required>
                                    </div>
                                    <div class="col-md-12 mt-20">
                                        <label for="form-text">Messages</label>
                                        <textarea cols="30" rows="5" name="message" id="form-text"
                                            class="form-control pt-15" placeholder="Your message......"
                                            required></textarea>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <p class="policy-text">
                                            By submitting this form you consent to us emailing you occasionally about
                                            our products and services. You can unsubscribe from emails at any time, and
                                            we will never pass your email onto third parties. Privacy Policy
                                        </p>
                                    </div>
                                    <div class="col-12 mt-35">
                                        <button type="submit" class="theme-btn theme-btn-lg w-100">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Get In Touch end -->

        <!-- need more help start -->
        <section class="pt-125 pb-140 bg_disable">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 mx-auto">
                        <div class="section-title">
                            <h2 class="wow fadeInUp">Need more help?</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">We would love to connect with you.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-60 gy-lg-0 gy-4">
                    <div class="col-lg-4">
                        <div class="feature-card-widget-4 wow fadeInUp" data-wow-delay="0.1s">
                            <img src="img/contact/help-icon-1.svg" alt="icon">
                            <h5 class="mt-4 mb-10">Articles & Guides</h5>
                            <p>100+ articles to get the information you need when you need it.</p>
                            <a href="#" class="theme-btn theme-btn-outlined mt-30">Visit Knowledge Base</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-card-widget-4 wow fadeInUp" data-wow-delay="0.3s">
                            <img src="img/contact/help-icon-2.svg" alt="icon">
                            <h5 class="mt-4 mb-10">Technical Support</h5>
                            <p>If you ever need help, you can chat directly with our support team!</p>
                            <a href="#" class="theme-btn theme-btn-outlined mt-30">Chat With Support</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-card-widget-4 wow fadeInUp" data-wow-delay="0.5s">
                            <img src="img/contact/help-icon-3.svg" alt="icon">
                            <h5 class="mt-4 mb-10">Social Media Support</h5>
                            <p>Doing customer support on social media requires a dedicated strategy. </p>
                            <div class="social-button mt-35 mb-10">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- need more help end -->

        <!-- Frequently Asked Question start -->
        <section class="faq-area-2 pt-125 pb-200 bg_white">
            <div class="container">
                <div class="section-title">
                    <h2 class="wow fadeInUp">Frequently asked questions</h2>
                </div>
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="faq-widget">
                            <div class="accordion" id="accordionExample">
                                <div class="single-widget-one wow fadeInUp px-sm-5 px-4" data-wow-delay="0.1s">
                                    <div class="widget-icon">
                                        <i class="icon_question_alt2 "></i>
                                    </div>
                                    <div class="w-100">
                                        <div class="faq-header" id="headingOne">

                                            <h4 class="mb-0" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                Can I pay off my loan early?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body pr-lg-130">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp px-sm-5 px-4" data-wow-delay="0.3s">
                                    <div class="widget-icon">
                                        <i class="icon_question_alt2 "></i>
                                    </div>
                                    <div class="w-100">
                                        <div class="faq-header" id="headingTwo">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                How much can I Lapo?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>

                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body pr-lg-130">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp px-sm-5 px-4" data-wow-delay="0.5s">
                                    <div class="widget-icon">
                                        <i class="icon_question_alt2 "></i>
                                    </div>
                                    <div class="w-100">
                                        <div class="faq-header" id="headingThree">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseThree">
                                                Do you offer refinancing ?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body pr-lg-130">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp px-sm-5 px-4" data-wow-delay="0.7s">
                                    <div class="widget-icon">
                                        <i class="icon_question_alt2 "></i>
                                    </div>
                                    <div class="w-100">
                                        <div class="faq-header" id="headingFour">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="true"
                                                aria-controls="collapseFour">
                                                Can I do all of my banking with you?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body pr-lg-130">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-widget-one wow fadeInUp px-sm-5 px-4" data-wow-delay="0.9s">
                                    <div class="widget-icon">
                                        <i class="icon_question_alt2 "></i>
                                    </div>
                                    <div class="w-100">
                                        <div class="faq-header" id="headingFive">
                                            <h4 class="mb-0 collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="true"
                                                aria-controls="collapseFive">
                                                When should i apply?<i class="icon_plus"></i><i
                                                    class=" icon_minus-06"></i>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                            data-bs-parent="#accordionExample">
                                            <div class="faq-body pr-lg-130">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                                    terry
                                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                                    skateboard
                                                    dolor brunch.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Frequently Asked Question end -->

        <!-- Call To Action start -->
        <section class="cta-area pt-60 bg_white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 position-relative">
                        <div class="cta cta-bg-violet" style="background-image: url(img/cta/wave.png);">


                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="cta-content wow fadeInRight text-center text-lg-start">
                                        <h2 class="mb-0">Meet Lapo, the financial partner you can depend on.</h2>
                                    </div>
                                </div>

                                <div class="col-lg-5 mt-4 mt-lg-0 text-center ">
                                    <div class="cta-content  text-center text-lg-end">
                                        <a href="loan.php" class="theme-btn theme-btn-alt wow fadeInLeft cta-text-violet">Get Loan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action end -->
    </main>

    <!-- footer -->
    <?php require_once 'inc/footer.php'; ?>
    <!-- footer end -->

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- JS here -->
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/preloader.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery.smoothscroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>