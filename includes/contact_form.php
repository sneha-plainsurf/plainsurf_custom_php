<section class="contact py-5">
    <div class="container py-sm-3">
        <h3 class="heading text-capitalize mb-lg-5 mb-4"> Contact Us - <span>Get In Touch</span> </h3>
        <div class="address row">
            <div class="col-md-4 address-grid">
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="far fa-map"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Address</h6>
                        <p> 2466H 5th Street Parking, King Block, New York City.

                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 address-grid">
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Email</h6>
                        <a href="mailto:example@email.com"> mail@example.com</a>
                        <a href="mailto:example@email.com"> mail@example.com</a>
                    </div>

                </div>
            </div>
            <div class="col-md-4 address-grid">
                <div class="address-info">
                    <div class="address-left text-center">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="address-right text-center">
                        <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                        <p>+1 234 567 8901</p>
                        <p>+1 234 567 8901</p>

                    </div>
                </div>
            </div>
        </div>
        <form action="/controller/contact.php" name="" method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Firstname *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Lastname *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_phone">Phone</label>
                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Discription *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required data-error="Please,leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-3">
                            <p>You know about us from</p>
                            </div>
                            <div class="col-lg-3">
                            <label class="radio-inline">
                                <input type="radio" name="optradio" > Website
                            </label>
                            </div>
                            <div class="col-lg-3">
                            <label class="radio-inline">
                                <input type="radio" name="optradio"> linkedIn
                            </label>
                            </div>
                            <div class="col-lg-3">
                            <label class="radio-inline">
                                <input type="radio" name="optradio">  Other
                            </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row f">
                    <div class="col-md-12 text-right">
                        <input type="submit" class="btn btn-success btn-send  " value="Submit">
                    </div>

                </div>
            </div>

        </form>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12 mt-lg-0 mt-5">
                        <div class="bg-img">
                            <div class="contact-layer">
                                <h3 class="mb-3">Dont hesitate to contact us for any kind of information</h3>
                                <p><i class="fas mr-2 fa-phone"></i> +12 327 8976 2334</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
                style="border:0"></iframe>
    </div>

</section>