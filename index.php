<?php include('header.php') ?>
<style>
    .h-section {
        background: var(--bg-color);
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 90vh;
        margin: 0 10px;
        overflow: hidden;
        border-radius: 15px;
    }

    .h-section.first h2.why-choose-title {
        font-weight: 600;
        font-size: 28px;
        line-height: 1.3;
        letter-spacing: 0.5px text-transform: uppercase;
        color: #000;
    }

    .h-section.third {
        background-image: url("./images/home_page/why-need-website.webp");
        background-repeat: no-repeat;
        background-position: bottom right;
        background-size: 30%;
    }

    .h-section.third .wc-title {
        margin: 0 0 80px 0;
    }

    .wc-subtitle {
        color: var(--theme-pink);
    }

    .wc-title {
        font-weight: 600;
        font-size: 42px;
        margin: 50px 0;
    }

    .h-section.fourth {
        background-image: url("./images/h-fourth.png");
        background-repeat: no-repeat;
        background-position: bottom right;
        background-size: cover;
    }

    .horizontal-scroll-1 {
        display: grid;
        grid-auto-flow: column;
        grid-template-columns: repeat(6, 100%);
        grid-template-rows: auto;
    }

    .grouplogo {
        width: 600px;
    }

    .buinesslogo {
        width: 300px;
    }

    .leftpattern {
        width: 270px;
        bottom: 2px;
        position: absolute;
    }

    .buisnesspara {
        font-size: 17px;
    }
</style>

<div class="banner-area video-bg-live">
    <div class="player"
        data-property="{videoURL:'https://www.youtube.com/watch?v=gOqlwlQjVis',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:4, opacity:1, quality:'default'}">
    </div>
    <div class="item transparent-nav text-light bg-fixed" style="background-image: url(assets/img/12.jpg);">
        <div class="box-table inc-top-heading text-medium">
            <div class="box-cell shadow dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="content">
                                <h2 data-animation="animated slideInDown">Now time to make awesome
                                    <strong>planning</strong>
                                </h2>
                                <p data-animation="animated slideInLeft">
                                    Arrived Size now easy eat hand how. Unwilling he departure elsewhere dejection
                                    at. Heart large seems may purse means few blind.
                                </p>
                                <a data-animation="animated slideInUp" class="btn circle  btn-light border btn-md"
                                    href="#">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start Our About
    ============================================= -->
<div class="about-area fixed-features default-padding-bottom">
    <div class="container">
        <div class="row">
            <!-- Start About -->

            <!-- Start Our Features -->
            <div class="col-md-12 text-center about-items">
                <div class="features-items">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-md-3 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="flaticon-rocket"></i>
                                    <h5>First Working Prosses</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-3 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="flaticon-meeting"></i>
                                    <h5>IT Control Solutions</h5>
                                </a>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- End Single Item -->
                        <div class="col-md-3 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="flaticon-contract"></i>
                                    <h5>Audit & Assurance</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-3 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="flaticon-support-2"></i>
                                    <h5>24/7 Live Support</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
            <!-- End Our Features -->

        </div>

        <div class="row about-items item-flex center">
            <div class="col-md-7 about-info">
                <h2>We're knowledgeable about <br> <strong>making benefits</strong> higher</h2>
                <p>
                    Dashwoods eagerness oh extensive as discourse sportsman frankness. Husbands see disposed
                    surprise likewise humoured yet pleasure. Fifteen no inquiry cordial so resolve garrets as.
                    Impression was estimating surrounded solicitude indulgence son shy.
                </p>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="flaticon-times"></i>
                        </div>
                        <div class="info">
                            <h5>First Working Prosses</h5>
                            <p>
                                Power visit charm money add heard new other on Attended.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="flaticon-web-development"></i>
                        </div>
                        <div class="info">
                            <h5>IT Control Solutions</h5>
                            <p>
                                Power visit charm money add heard new other on Attended.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="flaticon-contract"></i>
                        </div>
                        <div class="info">
                            <h5>Audit & Assurance</h5>
                            <p>
                                Power visit charm money add heard new other on Attended.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="flaticon-support-2"></i>
                        </div>
                        <div class="info">
                            <h5>24/7 Live Support</h5>
                            <p>
                                Power visit charm money add heard new other on Attended.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-5 thumb">
                <img src="assets/img/7.jpg" alt="Thumb">
            </div>
        </div>

    </div>
</div>
<!-- End Our About -->

<!-- Start Expertise Area
    ============================================= -->
<div class="expertise-area shape-theme default-padding bg-cover" style="background-image: url(assets/img/1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-6 our-expertise text-light">
                <h4>Our expertise</h4>
                <div class="expertise-items expertise-carousel owl-carousel owl-theme">
                    <!--Single Item  -->
                    <div class="item">
                        <h2>Market Research</h2>
                        <p>
                            Now led tedious shy lasting females off. Dashwood marianne in of entrance be on wondered
                            possible building. Wondered sociable he carriage in speedily margaret. Up devonshire of
                            he thoroughly insensible alteration. An mr settling occasion insisted distance ladyship
                            so. Not attention say frankness intention out dashwoods now curiosity. Stronger ecstatic
                            as no judgment daughter speedily thoughts. Worse downs nor might she court did nay forth
                            these.
                        </p>
                        <ul>
                            <li>
                                <h4>Completed projects</h4>
                                <span>30K</span>
                            </li>
                            <li>
                                <h4>Success Rate</h4>
                                <span>90%</span>
                            </li>
                        </ul>
                        <a class="btn btn-light border btn-md" href="#">Get Started</a>
                    </div>
                    <!-- End Single Item  -->
                    <!--Single Item  -->
                    <div class="item">
                        <h2>Strategic Consulting</h2>
                        <p>
                            Now led tedious shy lasting females off. Dashwood marianne in of entrance be on wondered
                            possible building. Wondered sociable he carriage in speedily margaret. Up devonshire of
                            he thoroughly insensible alteration. An mr settling occasion insisted distance ladyship
                            so. Not attention say frankness intention out dashwoods now curiosity. Stronger ecstatic
                            as no judgment daughter speedily thoughts. Worse downs nor might she court did nay forth
                            these.
                        </p>
                        <ul>
                            <li>
                                <h4>Completed projects</h4>
                                <span>20K</span>
                            </li>
                            <li>
                                <h4>Success Rate</h4>
                                <span>88%</span>
                            </li>
                        </ul>
                        <a class="btn btn-light border btn-md" href="#">Get Started</a>
                    </div>
                    <!-- End Single Item  -->
                    <!--Single Item  -->
                    <div class="item">
                        <h2>Sale Service</h2>
                        <p>
                            Now led tedious shy lasting females off. Dashwood marianne in of entrance be on wondered
                            possible building. Wondered sociable he carriage in speedily margaret. Up devonshire of
                            he thoroughly insensible alteration. An mr settling occasion insisted distance ladyship
                            so. Not attention say frankness intention out dashwoods now curiosity. Stronger ecstatic
                            as no judgment daughter speedily thoughts. Worse downs nor might she court did nay forth
                            these.
                        </p>
                        <ul>
                            <li>
                                <h4>Completed projects</h4>
                                <span>18K</span>
                            </li>
                            <li>
                                <h4>Success Rate</h4>
                                <span>98%</span>
                            </li>
                        </ul>
                        <a class="btn btn-light border btn-md" href="#">Get Started</a>
                    </div>
                    <!-- End Single Item  -->
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container-fluid">
        <div class="wrapper">
            <div class="horizontal-scroll-1">
                <div class="h-section first" style="--bg-color: #fff1f4;">
                    <div class="container text-center">
                        <!-- <h2 class="why-choose-title wow flipInX" data-wow-offset="300">Swayam Groups
                        </h2> -->
                        <img src="assets/img/buisness/swayam_group.png" class="img-fluid grouplogo" alt="">
                    </div>
                </div>
                <div class="h-section second relative" style="--bg-color: #f3ecec">
                    <img src="assets/img/left-pattern.png" alt="left pattern"
                        class="img-fluid position-absolute leftpattern">
                    <div class="container text-center">
                        <div class="col-12">
                            <div class="row justify-content-center align-items-center">
                                <img src="assets/img/buisness/swayam_infra.png" class="img-fluid buinesslogo" alt="">
                                <p class="buisnesspara">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Nesciunt quo, maiores soluta explicabo corporis nostrum voluptatum autem suscipit in
                                    laudantium exercitationem illo repellat ut aliquid incidunt velit adipisci sunt?
                                    Dolores.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="h-section third" style="--bg-color: #fffaf0">
                    <div class="container text-center">
                        <div class="col-12">
                            <div class="row justify-content-center align-items-center">
                                <img src="assets/img/buisness/swayam_foundation.png" class="img-fluid buinesslogo"
                                    alt="">
                                <p class="buisnesspara">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Nesciunt quo, maiores soluta explicabo corporis nostrum voluptatum autem suscipit in
                                    laudantium exercitationem illo repellat ut aliquid incidunt velit adipisci sunt?
                                    Dolores.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="h-section fifth" style="--bg-color: #fff1fd">
                    <div class="container text-center">
                        <div class="col-12">
                            <div class="row justify-content-center align-items-center">
                                <img src="assets/img/buisness/swayam_reality.png" class="img-fluid buinesslogo" alt="">
                                <p class="buisnesspara">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Nesciunt quo, maiores soluta explicabo corporis nostrum voluptatum autem suscipit in
                                    laudantium exercitationem illo repellat ut aliquid incidunt velit adipisci sunt?
                                    Dolores.</p>
                            </div>
                        </div>

                    </div>
                </div>
</section>


<div class="services-area text-center carousel-shadow default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h4>What we do</h4>
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-medium">
        <div class="row">
            <div class="col-md-12">
                <div class="services-items services-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <div class="shape-box">
                                <span class="dot-shape"></span>
                                <span class="dot-shape"></span>
                                <span class="dot-shape"></span>
                            </div>
                            <i class="flaticon-analysis"></i>
                        </div>
                        <h4>Business Strategy</h4>
                        <p>
                            Minuter believe service arrived civilly add all. Acuteness allowance an at
                            eagerness
                            favourite in extensive exquisite ye.
                        </p>
                        <a href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <div class="shape-box">
                                <span class="dot-shape"></span>
                                <span class="dot-shape"></span>
                                <span class="dot-shape"></span>
                            </div>
                            <i class="flaticon-meeting"></i>
                        </div>
                        <h4>Resource Allocation</h4>
                        <p>
                            Minuter believe service arrived civilly add all. Acuteness allowance an at
                            eagerness
                            favourite in extensive exquisite ye.
                        </p>
                        <a href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <div class="shape-box">
                                <span class="dot-shape"></span>
                                <span class="dot-shape"></span>
                                <span class="dot-shape"></span>
                            </div>
                            <i class="flaticon-money-1"></i>
                        </div>
                        <h4>Capital Markets</h4>
                        <p>
                            Minuter believe service arrived civilly add all. Acuteness allowance an at
                            eagerness
                            favourite in extensive exquisite ye.
                        </p>
                        <a href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <div class="shape-box">
                                <span class="dot-shape"></span>
                                <span class="dot-shape"></span>
                                <span class="dot-shape"></span>
                            </div>
                            <i class="flaticon-result"></i>
                        </div>
                        <h4>Business Strategy</h4>
                        <p>
                            Minuter believe service arrived civilly add all. Acuteness allowance an at
                            eagerness
                            favourite in extensive exquisite ye.
                        </p>
                        <a href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Our Services -->

<!-- Start Fun Fact Area 
    ============================================= -->
<div class="fun-factor-box bg-dark text-center text-light default-padding">
    <div class="fun-fact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 item">
                    <div class="fun-fact">
                        <div class="content">
                            <div class="timer" data-to="38" data-speed="5000">38</div>
                            <span class="medium">Employees</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item">
                    <div class="fun-fact">
                        <div class="content">
                            <div class="timer" data-to="2348" data-speed="5000">2348</div>
                            <span class="medium">Projects with 100%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item">
                    <div class="fun-fact">
                        <div class="content">
                            <div class="timer" data-to="43" data-speed="5000">43</div>
                            <span class="medium">Award</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 item">
                    <div class="fun-fact">
                        <div class="content">
                            <div class="timer" data-to="50" data-speed="5000">50</div>
                            <span class="medium">Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="contact-area default-padding-top bottom-half">
    <div class="container">
        <div class="contact-items">
            <div class="row">
                <div class="col-md-6 address">
                    <div class="address-items text-center text-light"
                        style="background-image: url(assets/img/about/5.jpg);">
                        <ul class="info">
                            <li>
                                <div class="icon"><i class="flaticon-location"></i></div>
                                <h4>Office Location</h4>
                                <span>22 Baker Street,<br> London, United Kingdom,<br> W1U 3BW</span>
                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-call-center"></i></div>
                                <h4>Phone</h4>
                                <span>+44-20-7328-4499 <br>+99-34-8878-9989</span>
                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-email"></i> </div>
                                <h4>Email</h4>
                                <span>info@yourdomain.com<br>admin@yourdomain.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 form-box">
                    <h2>Let's lalk about your idea</h2>
                    <p>
                        Our next drew much you with rank. Tore many held age hold rose than our. She
                        literature
                        sentiments any contrasted. Set aware joy sense young now tears china shy.
                    </p>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- Star Google Maps
    ============================================= -->
<div class="maps-area">
    <div class="container-full">
        <div class="row">
            <div class="google-maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const logo = document.querySelector(".rotatelogo");
        let previousScrollY = window.scrollY;
        let rotationAngle = 0;

        window.addEventListener("scroll", function () {
            const currentScrollY = window.scrollY;

            // Check if scrolling down or up
            if (currentScrollY > previousScrollY) {
                // Scrolling down, increase the rotation angle
                rotationAngle += 5; // Increase the rotation angle for smoother screw-like effect
            } else if (currentScrollY < previousScrollY) {
                // Scrolling up, decrease the rotation angle
                rotationAngle -= 5;
            }

            // Apply rotation and make logo visible after 1px scroll
            if (currentScrollY > 1) {
                logo.classList.add("visible");
                logo.style.transform = `rotate(${rotationAngle}deg)`;
            } else {
                logo.classList.remove("visible");
                logo.style.transform = "rotate(0deg)"; // Reset rotation
            }

            // Update previous scroll position
            previousScrollY = currentScrollY;
        });
    });


</script>


<?php include('footer.php') ?>