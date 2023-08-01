<?php include('assets/header.php'); ?>

<!-- contact Banner -->
<section class="cont-bnr container-fluid">
    <div class="container">
        <div class="row">
            <div class="info">
                <h2 class="text-white">Contact Us</h2>
            </div>
        </div>
    </div>
</section>
<!-- contact Banner Ends -->

<!-- Contact-cards -->
<section class="cont-cards padding-90">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="inr-card">
                    <div class="img-chnge">
                        <img class="icon" src="images/black-phone.png">
                        <img src="./images/white-phone.png" alt="phn-white-icn.png" class="icon-w">
                    </div>
                    <h4>Call us <img src="images/ero.png" class="position-absolute ero-b"><img
                            src="images/white-arrow.png" class="position-absolute ero-w"> </h4>

                    <label>Account: <a href="tel:0498606606"> 0498 606 606</a></label><br>
                    <label> Support: <a href="tel:0498606606"> 0498 606 606</a></label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="inr-card">
                    <div class="img-chnge">
                        <img class="icon" src="images/mail.png">
                        <img src="./images/msg-white-icn.png" alt="msg-white-icn.png" class="icon-w">
                    </div>
                    <h4 class="position-relative">Write us <img src="images/ero.png" class="position-absolute ero-b">
                        <img src="images/white-arrow.png" class="ero-w position-absolute">
                    </h4>

                    <label>Business: <a href="mailto:redsandtruck@gmail.com">redsandtruck@gmail.com</a></label>
                    <label>Support: <a href="mailto:redsandtruck@gmail.com">redsandtruck@gmail.com</a></label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="inr-card">
                    <div class="img-chnge">
                        <img class="icon" src="images/location.png">
                        <img src="./images/loc-white-icn.png" alt="loc-white-icn.png" class="icon-w">
                    </div>
                    <h4>Location<img src="images/ero.png" class="position-absolute ero-b"><img
                            src="images/white-arrow.png" class="position-absolute ero-w"> </h4>

                    <label>Address 1: <a
                            href="https://www.google.com/maps/place/33+Rothschild+Pl,+Midvale+WA+6056,+Australia/@-31.8893718,116.027517,17z/data=!4m13!1m7!3m6!1s0x2a32b80e2a99983b:0x576027d9f5cca5d2!2s33+Rothschild+Pl,+Midvale+WA+6056,+Australia!3b1!8m2!3d-31.8893718!4d116.0297057!3m4!1s0x2a32b80e2a99983b:0x576027d9f5cca5d2!8m2!3d-31.8893718!4d116.0297057">33
                            Rothschild Pl, Midvale, WA 6056 Red Sand United Pty Ltd</a></label>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact-cards Ends -->

<!--start-contact-form-->
<div class="contact-form padding-50 pt-0">
    <div class="container">
        <div class="info">
            <p>CONTACT FORM</p>
            <h3>Don't Hesitate To Contact Us</h3>
        </div>

        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="feild">
                        <input type="text" placeholder="Full Name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feild">
                        <input type="number" placeholder="Mobile No." required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="feild">
                        <input type="text" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feild">
                        <select required>
                            <option value=""  disabled selected hidden>
                                select the courses
                            </option>
                            <option value="1">
                                HR-A (AUTO)
                            </option>
                            <option value="2">
                                HR-B (MANUAL/SYNCHRO)
                            </option>
                            <option value="3">
                                HR (OPEN/ROAD RANGER)
                            </option>
                            <option value="4">
                                HC
                            </option>
                            <option value="5">
                                MC
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="feild">
                        <textarea placeholder="Message-Optional"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="feild pt-0">
                        <button class="blk-btn" type="submit">Send now </button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>
<!--end-contact-form-->


<!--start-map-->
<section class="map-sec">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3387.6338315101502!2d116.027517!3d-31.8893718!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32b80e2a99983b%3A0x576027d9f5cca5d2!2s33%20Rothschild%20Pl%2C%20Midvale%20WA%206056%2C%20Australia!5e0!3m2!1sen!2sin!4v1668403109589!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!--start-map-->



<?php include('assets/footer.php'); ?>