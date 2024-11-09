<?php
// Start the session at the very top of the file, before any HTML
session_start();
?>

<?php include('header.php') ?>

<div class="page-title-area shadow dark bg-fixed text-center text-light"
    style="background-image: url(assets/img/contactbanner.png);">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<div class="contact-area default-padding-top bottom-half">
    <div class="container">
        <div class="contact-items">
            <div class="row">
                <div class="col-md-12">
                    <?php
            
                    if (isset($_SESSION['message'])) {
                        $message_type = $_SESSION['message_type'];
                        echo "<div class='alert alert-$message_type'>{$_SESSION['message']}</div>";
                        // Clear the session message after displaying
                        unset($_SESSION['message']);
                        unset($_SESSION['message_type']);
                    }
                    ?>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 address">
                    <div class="address-items text-center text-light" style="background-image: url(assets/img/13.jpg);">
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
                    <h2>Let's talk about your idea</h2>
                    <p>
                        Our next drew much you with rank. Tore many held age hold rose than our. She literature
                        sentiments any contrasted. Set aware joy sense young now tears china shy.
                    </p>
                    <form action="sendmail.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text"
                                        required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email" required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text"
                                        required>
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="Tell Us About Project *" required></textarea>
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
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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

<?php include('footer.php') ?>