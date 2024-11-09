<!-- Star Footer
    ============================================= -->
<footer class="bg-dark">
    <div class="container">
        <div class="footer-content default-padding">
            <div class="row">

                <div class="equal-height col-md-4 col-sm-6 item">
                    <div class="f-item about">
                        <h4 class="widget-title">About</h4>
                        <p>
                            Required honoured trifling eat pleasure man relati Assurance yet bed was improving
                            furniture man Distrusts delighted services and a high degre tobiscotuition end of
                            imposition.
                        </p>
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="equal-height col-md-2 col-sm-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Usefull Links</h4>
                        <ul>
                            <li>
                                <a href="#">Classic Business</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Gallery</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="equal-height col-md-2 col-sm-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Company</h4>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                            <li>
                                <a href="#">Gallery</a>
                            </li>
                            <li>
                                <a href="#">Faq</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="equal-height col-md-4 col-sm-6 item">
                    <div class="f-item contact address">
                        <h4 class="widget-title">Contact Us</h4>
                        <ul>
                            <li>
                                <div class="icon"><i class="flaticon-location"></i></div>
                                <span>22 Baker Street, Koenigstrasse 65, Bad Sülze, Mecklenburg-Vorpommern,
                                    Philippines</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-call-center"></i>
                                </div>
                                <span>+123 456 7890 <br>+456 123 4455 </span>
                            </li>
                            <li>
                                <div class="icon"><i class="flaticon-email"></i> </div>
                                <span>support@buscom.com</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyrigh &copy; 2021 Buscom, All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
</div>
<!-- End Footer-->

<!-- jQuery Frameworks
    ============================================= -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script>

document.addEventListener("DOMContentLoaded",function(){
     const navLinks = document.querySelectorAll('.nav-link');
     
     const currentUrl =window.location.href;

     navLinks.forEach(link=>{
          if(link.href === currentUrl){
             link.classList.add('active');
          }
          else{
            link.classList.remove("active");
          }
     });
});


$('.timer').countTo();
    $('.fun-fact').appear(function () {
        $('.timer').countTo();
    }, {
        accY: -100
    });
</script>

<script>
    $('.services-carousel').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        dots: true,
        autoplay: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    $('.expertise-carousel').owlCarousel({
        loop: false,
        nav: false,
        dots: true,
        autoplay: true,
        items: 1,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
    });

</script>
<script src="assets/js/equal-height.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/modernizr.custom.13711.js"></script>

<script src="assets/js/progress-bar.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>

<script src="assets/js/count-to.js"></script>
<script src="assets/js/YTPlayer.min.js"></script>
<script src="assets/js/circle-progress.js"></script>
<script src="assets/js/bootsnav.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://kit.fontawesome.com/38c43e86be.js" crossorigin="anonymous"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollToPlugin.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ once: true });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var smoother = ScrollSmoother.create({
            content: ".smooth",
            smooth: 2,
            smoothTouch: 0.5,
            effects: true
        });
    })
    window.addEventListener("load", function () {

        let device_width = window.innerWidth;

        if (device_width > 1000) {

            var why_us = document.querySelector('.horizontal-scroll-1')
            let sections = gsap.utils.toArray('.h-section');
            //        var elemWidth = why_us.offsetWidth * 2;

            gsap.to(sections, {
                xPercent: -100 * (sections.length - 0.96),
                ease: "none",
                scrollTrigger: {
                    trigger: why_us,
                    start: 'top top+=80',
                    end: '+=4000',
                    scrub: true,
                    pin: true,
                    //            snap: 1 / (sections.length - 1),
                    //            end: () => "+=" + elemWidth,
                    //            end: () => "+=5000",
                    pinSpacing: true,
                    //            markers: true,
                    invalidateOnRefresh: true
                },
            });
        }

    });
   

</script>

</body>

</html>