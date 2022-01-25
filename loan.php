

<?php $page = 'Loan'; require_once 'inc/header.php'; ?>

    <main>
        <!-- Banner start -->
        <section class="banner-area-2 loan-banner pt-145" style="background-image: url(img/banner/loan-banner.png)">
            <div class="container">
                <div class="row align-items-center  pt-165 pb-200">
                    <div class="col-lg-7 mx-auto">
                        <div class="banner-content text-center">
                            <div class="section-title">
                                <h1 class="wow fadeInUp">Get your loan approved in 3 steps</h1>
                            </div>
                            <a class="theme-btn theme-btn-lg theme-btn-alt mt-50 wow fadeInUp" data-wow-delay='0.2s'
                                href="#">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row position-relative pt-70 d-lg-block d-none">
                    <div class="col-md-12">
                        <div class="floated-widget">
                            <div class="row gy-4 gy-lg-0 gx-5">
                                <div class="col-lg-4 border-end">
                                    <div class="steps-widget pr-30 pl-30 wow fadeInUp" data-wow-delay="0.1s">
                                        <img src="img/steps/icon-1.png" alt="icon">
                                        <h4><a href="#">Check Eligibility</a></h4>
                                        <p>Select your loan amount, answer a few questions and get instant loan amount
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4  border-end">
                                    <div class="steps-widget pr-30 pl-30 wow fadeInUp" data-wow-delay="0.3s">
                                        <img src="img/steps/icon-2.png" alt="icon">
                                        <h4><a href="#">Submit Guarantors BVN</a></h4>
                                        <p>Submit two guarantors BVN to Lapo Loan Team
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="steps-widget pr-30 pl-30 wow fadeInUp" data-wow-delay="0.5s">
                                        <img src="img/steps/icon-3.png" alt="icon">
                                        <h4><a href="#">Approval in Principle</a></h4>
                                        <p>Lapo Loan Team will approve your application
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner end -->

        <!-- Apply Loan start -->
        <section class="apply-loan-area pt-200 pb-140 bg_disable">
            <div class="container">
                <div class="row pt-3">
                    <div class="col-xl-6 mx-auto">
                        <div class="section-title">
                            <h2 class="wow fadeInUp">One step closer to finding your perfect Home!</h2>
                        </div>
                    </div>
                </div>
                <form action="personal-details.html">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="row pt-35  gy-lg-0 gy-3">
                                <div class="col-lg-4">
                                    <div class="loan-apply-widget wow fadeInRight" data-wow-delay="0.1s">
                                        <div class="icon">
                                            <img src="img/apply-loan/icon-1.1.png" alt="icon-1">
                                            <img src="img/apply-loan/icon-1.2.png" alt="icon-1.2">
                                        </div>
                                        <div class="apply-content">
                                            <span class="title">How much do you need?</span>
                                            <p class="d-flex">$ <input class="w-100" type="text" value="5,000"> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="loan-apply-widget wow fadeInRight" data-wow-delay="0.3s">
                                        <div class="icon">
                                            <img src="img/apply-loan/icon-2.1.png" alt="icon-2">
                                            <img src="img/apply-loan/icon-2.2.png" alt="icon-2.2">
                                        </div>
                                        <div class="apply-content">
                                            <span class="title">Type of Loan</span>
                                            <select name="select-loan-type" id="select-loan-type">
                                                <option>Select your Loan</option>
                                                <option value="Home Loan">Home Loan</option>
                                                <option value="Loan Against Property">Loan Against Property</option>
                                                <option value="Loan Renovation">Loan Renovation</option>
                                                <option value="Commercial Property">Commercial Property</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="loan-apply-widget wow fadeInRight" data-wow-delay="0.5s">
                                        <div class="icon">
                                            <img src="img/apply-loan/icon-3.1.png" alt="icon-3">
                                            <img src="img/apply-loan/icon-3.2.png" alt="icon-3.2">
                                        </div>
                                        <div class="apply-content">
                                            <span class="title">Where do you currently live?</span>
                                            <div class="select-location d-flex align-items-center"
                                                id="locationSlectParent">
                                                <select class="w-100" name="select-location" id="locationSelect">
                                                    <option value="Bagerhat">Bagerhat</option>
                                                    <option value="Bandarban" selected>Bandarban</option>
                                                    <option value="Barguna">Barguna</option>
                                                    <option value="Barisal">Barisal</option>
                                                    <option value="Bhola">Bhola</option>
                                                    <option value="Barishal Metro">Barishal Metro</option>
                                                    <option value="Bogra">Bogra</option>
                                                    <option value="Brahmmanbaria">Brahmmanbaria</option>
                                                    <option value="Chandpur">Chandpur</option>
                                                    <option value="Chapai Nawabganj">Chapai Nawabganj</option>
                                                    <option value="Chittagong">Chittagong</option>
                                                    <option value="Chuadanga">Chuadanga</option>
                                                    <option value="Chottogram Metro">Chottogram Metro</option>
                                                    <option value="Cox&#039;s Bazar">Cox&#039;s Bazar</option>
                                                    <option value="Coxsbazar">Coxsbazar</option>
                                                    <option value="Cumilla">Cumilla</option>
                                                    <option value="Dhaka">Dhaka</option>
                                                    <option value="Dinajpur">Dinajpur</option>
                                                    <option value="Dhaka Metro">Dhaka Metro</option>
                                                    <option value="Faridpur">Faridpur</option>
                                                    <option value="Feni">Feni</option>
                                                    <option value="Gaibandha">Gaibandha</option>
                                                    <option value="Gazipur">Gazipur</option>
                                                    <option value="Gazipur Metro">Gazipur Metro</option>
                                                    <option value="Gopalgonj">Gopalgonj</option>
                                                    <option value="Habigonj">Habigonj</option>
                                                    <option value="Jaflong">Jaflong</option>
                                                    <option value="Jamalpur">Jamalpur</option>
                                                    <option value="Jessore">Jessore</option>
                                                    <option value="Jhalokathi">Jhalokathi</option>
                                                    <option value="Jhenaidah">Jhenaidah</option>
                                                    <option value="Joypurhat">Joypurhat</option>
                                                    <option value="Khagrachari">Khagrachari</option>
                                                    <option value="Khulna">Khulna</option>
                                                    <option value="Kishoregonj">Kishoregonj</option>
                                                    <option value="Khulna Metro">Khulna Metro</option>
                                                    <option value="Kurigram">Kurigram</option>
                                                    <option value="Kustia">Kustia</option>
                                                    <option value="Lalmonirhat">Lalmonirhat</option>
                                                    <option value="Laxmipur">Laxmipur</option>
                                                    <option value="Madaripur">Madaripur</option>
                                                    <option value="Magura">Magura</option>
                                                    <option value="Manikgonj">Manikgonj</option>
                                                    <option value="Meherpur">Meherpur</option>
                                                    <option value="Moulabhibazar">Moulabhibazar</option>
                                                    <option value="Munshigonj">Munshigonj</option>
                                                    <option value="Mymensingh">Mymensingh</option>
                                                    <option value="Naogaon">Naogaon</option>
                                                    <option value="Narail">Narail</option>
                                                    <option value="Narayangonj">Narayangonj</option>
                                                    <option value="Narsingdi">Narsingdi</option>
                                                    <option value="Natore">Natore</option>
                                                    <option value="Netrokona">Netrokona</option>
                                                    <option value="Nilphamari">Nilphamari</option>
                                                    <option value="Noakhali">Noakhali</option>
                                                    <option value="Pabna">Pabna</option>
                                                    <option value="Panchagarh">Panchagarh</option>
                                                    <option value="Patuakhali">Patuakhali</option>
                                                    <option value="Pirojpur">Pirojpur</option>
                                                    <option value="Rajbari">Rajbari</option>
                                                    <option value="Rajshahi">Rajshahi</option>
                                                    <option value="Rangamati">Rangamati</option>
                                                    <option value="Rangpur">Rangpur</option>
                                                    <option value="Rajshahi Metro ">Rajshahi Metro </option>
                                                    <option value="Rangpur Metro ">Rangpur Metro </option>
                                                    <option value="Saint Martin">Saint Martin</option>
                                                    <option value="Satkhira">Satkhira</option>
                                                    <option value="Shariatpur">Shariatpur</option>
                                                    <option value="Sherpur">Sherpur</option>
                                                    <option value="Sirajgonj">Sirajgonj</option>
                                                    <option value="Sylhet Metro">Sylhet Metro</option>
                                                    <option value="Srimangal">Srimangal</option>
                                                    <option value="Sunamgonj">Sunamgonj</option>
                                                    <option value="Sylhet">Sylhet</option>
                                                    <option value="Tangail">Tangail</option>
                                                    <option value="Teknaf">Teknaf</option>
                                                    <option value="Thakurgaon">Thakurgaon</option>
                                                </select>
                                                <span class="close" id="readOnlyClose">
                                                    <i class="icon_close"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mt-3">
                                    <div class="loan-apply-widget wow fadeInRight" data-wow-delay="0.1s">
                                        <div class="icon">
                                            <img src="img/apply-loan/icon-4.1.png" alt="icon-1">
                                            <img src="img/apply-loan/icon-4.1.png" alt="icon-1.2">
                                        </div>
                                        <div class="apply-content">
                                            <span class="title">Add Guarantor BVN (1)</span>
                                            <p class="d-flex"> <input class="w-100" type="text" value="64736473647"> </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 mt-3">
                                    <div class="loan-apply-widget wow fadeInRight" data-wow-delay="0.1s">
                                        <div class="icon">
                                            <img src="img/apply-loan/icon-4.1.png" alt="icon-1">
                                            <img src="img/apply-loan/icon-4.1.png" alt="icon-1.2">
                                        </div>
                                        <div class="apply-content">
                                            <span class="title">Add Guarantor BVN (2)</span>
                                            <p class="d-flex"> <input class="w-100" type="text" value="64736473647"> </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-15 d-flex wow fadeInLeft">
                                    <div class="icon">
                                        <img class="img=fluid" src="img/steps/sheild.png" alt="sheild">
                                    </div>
                                    <p class="security-info d-inline-block ms-2">
                                        Your information is 100% secure. We do not share your info with other
                                        parties.
                                    </p>
                                </div>

                                <div class="col-12 text-center mt-35">
                                    <button class="theme-btn theme-btn-lg wow fadeInUp" type="submit">
                                        apply now <i class="arrow_right"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Apply Loan end -->

        <!-- Emi Calculator start -->
        <section class="pt-125 pb-140 bg_white">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 mx-auto">
                        <div class="section-title">
                            <h2 class="wow fadeInUp">Calculator</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Get an approximate figure for the total
                                monthly instalment payments along with a complete
                                break-up of the home loan.</p>
                        </div>
                    </div>
                </div>
                <div class="calculator-widget mt-50">
                    <div class="row  gy-lg-0 gy-3">
                        <div class="col-lg-7">
                            <div class="single-calculator-widget wow fadeInUp" data-wow-delay="0.1s">
                                <div class="single-range">
                                    <div class="range-header d-flex justify-content-between align-items-center mb-25">
                                        <h6>Loan Amount</h6>

                                        <input type="text" id="SetRange">
                                    </div>
                                    <div id="RangeSlider"></div>
                                </div>
                                <div class="single-range mt-85 mb-95">
                                    <div
                                        class="range-header d-flex flex-wrap justify-content-between align-items-center mb-25">
                                        <h6>Loan Duration</h6>


                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li><span class="active_bar"></span></li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active month-tab" id="monthTab" data-bs-toggle="tab"
                                                    href="#monthTabId" role="tab" aria-controls="monthTabId"
                                                    aria-selected="true">Month</a>
                                            </li>
                                            <li class="nav-item " role="presentation">
                                                <a class="nav-link year-tab" id="yearTab" data-bs-toggle="tab"
                                                    href="#yearTabId" role="tab" aria-controls="yearTabId"
                                                    aria-selected="false">Year</a>
                                            </li>

                                        </ul>

                                        <input type="text" id="SetMonthRange">
                                    </div>


                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="monthTabId" role="tabpanel"
                                            aria-labelledby="monthTab">

                                            <div id="MonthRangeSlider"></div>
                                        </div>
                                        <div class="tab-pane fade" id="yearTabId" role="tabpanel"
                                            aria-labelledby="yearTab">

                                            <div id="YearRangeSlider"></div>
                                        </div>

                                    </div>
                                </div>

                                <div class="bg_disable px-4 py-2 mb-5 interestBox">
                                    <p>Rate of Interest</p>
                                    <span id="InterestAmount"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 pl-lg-35">
                            <div class="calculator-result-widget bg_disable wow fadeInUp" data-wow-delay="0.3s">

                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-8 col-sm-7">
                                        <div class="emi-amount">
                                            <h6>EMI Amount</h6>
                                            <span>Principal + Interest</span>
                                            <p class="mt-10" id="TotalAmount"></p>
                                        </div>
                                        <div class="interest-payable mt-20">
                                            <h6>Interest Payable</h6>
                                            <p class="mt-10" id="InterestPayable"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-5 col-7 mx-auto">
                                        <svg class="radial-progress" id="LoanGraph" viewBox="0 0 80 80">
                                            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                            <circle class="complete" cx="40" cy="40" r="30"></circle>
                                        </svg>
                                    </div>
                                </div>
                                <div class="row mt-lg-60 mt-25 text-center">
                                    <div class="col-12">
                                        <h4 class="mb-1">Your EMI Amount</h4>
                                        <h1 class="m-0" id="emiAmount">$ 3,495*</h1>

                                        <a href="personal-details.html" class="theme-btn theme-btn-lg mt-40">Apply Now
                                            <i class="arrow_right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Emi Calculator end -->

        <!-- Testimonial start -->
        <section class="pt-140 pb-140 testimonial-area bg_disable">
            <div class="container-fluid px-0">
                <div class="testimonial-slider">
                    <div class="single-slider container px-0">
                        <div class="testimonial-widget">
                            <div class="row">
                                <div class="col-4">
                                    <div class="author-img">
                                        <img src="img/testimonial/img-2.png" alt="image">
                                    </div>
                                </div>
                                <div class="col-8 d-flex align-items-center">
                                    <div class="testimonial-content">
                                        <div class="watch-button">
                                            <a data-fancybox href="https://www.youtube.com/watch?v=xcJtL7QggTI">
                                                <i class="fa fa-play"></i>
                                                watch the video
                                            </a>
                                        </div>
                                        <h2>Making dreams a reality!</h2>
                                        <p class="pr-lg-60">We were looking for a home of happiness and peace. Thanks to
                                            the
                                            Grihashakti
                                            team, who helped us to realise this dream of ours. Our home has been
                                            very
                                            lucky for us – as we shifted to our new home, prosperity followed!
                                        </p>
                                        <div class="author-info">
                                            <h4>Albert Kingsley</h4>
                                            <span>Enugu, Nigeria</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider container px-0">
                        <div class="testimonial-widget">
                            <div class="row">
                                <div class="col-4">
                                    <div class="author-img">
                                        <img src="img/testimonial/img-1.png" alt="image">
                                    </div>
                                </div>
                                <div class="col-8 d-flex align-items-center">
                                    <div class="testimonial-content">
                                        <div class="watch-button">
                                            <a data-fancybox href="https://www.youtube.com/watch?v=xcJtL7QggTI">
                                                <i class="fa fa-play"></i>
                                                watch the video
                                            </a>
                                        </div>
                                        <h2>Making dreams a reality!</h2>
                                        <p class="pr-lg-60">We were looking for a home of happiness and peace. Thanks to
                                            the
                                            Grihashakti
                                            team, who helped us to realise this dream of ours. Our home has been
                                            very
                                            lucky for us – as we shifted to our new home, prosperity followed!
                                        </p>
                                        <div class="author-info">
                                            <h4>Jane Nifer</h4>
                                            <span>Enugu, Nigeria</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider container px-0">
                        <div class="testimonial-widget">
                            <div class="row">
                                <div class="col-4">
                                    <div class="author-img">
                                        <img src="img/testimonial/img-2.png" alt="image">
                                    </div>
                                </div>
                                <div class="col-8 d-flex align-items-center">
                                    <div class="testimonial-content">
                                        <div class="watch-button">
                                            <a data-fancybox href="https://www.youtube.com/watch?v=xcJtL7QggTI">
                                                <i class="fa fa-play"></i>
                                                watch the video
                                            </a>
                                        </div>
                                        <h2>Making dreams a reality!</h2>
                                        <p class="pr-lg-60">We were looking for a home of happiness and peace. Thanks to
                                            the
                                            Grihashakti
                                            team, who helped us to realise this dream of ours. Our home has been
                                            very
                                            lucky for us – as we shifted to our new home, prosperity followed!
                                        </p>
                                        <div class="author-info">
                                            <h4>Alade Olawande</h4>
                                            <span>Enugu, Nigeria</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider container px-0">
                        <div class="testimonial-widget">
                            <div class="row">
                                <div class="col-4">
                                    <div class="author-img">
                                        <img src="img/testimonial/img-1.png" alt="image">
                                    </div>
                                </div>
                                <div class="col-8 d-flex align-items-center">
                                    <div class="testimonial-content">
                                        <div class="watch-button">
                                            <a data-fancybox href="https://www.youtube.com/watch?v=xcJtL7QggTI">
                                                <i class="fa fa-play"></i>
                                                watch the video
                                            </a>
                                        </div>
                                        <h2>Making dreams a reality!</h2>
                                        <p class="pr-lg-60">We were looking for a home of happiness and peace. Thanks to
                                            the
                                            Grihashakti
                                            team, who helped us to realise this dream of ours. Our home has been
                                            very
                                            lucky for us – as we shifted to our new home, prosperity followed!
                                        </p>
                                        <div class="author-info">
                                            <h4>Jeremiah John</h4>
                                            <span>Enugu, Nigeria</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Testimonial end -->
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
    <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/nouislider.min.js"></script>
    <script type="text/javascript" src="js/wNumb.js"></script>
    <script type="text/javascript" src="js/jquery-editable-select.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>