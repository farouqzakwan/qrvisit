<!-- Contact Section Start -->
<section id="contact" class="section-padding">    
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Contact</h2>
        </div>
        </div>
    </div>
    <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
        <div class="col-md-6 col-lg-6 col-sm-12">
        <div class="contact-block wow bounceInLeft">
            <h2>Contact Form</h2>
            <form id="contactForm">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                </div>                                 
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                </div> 
                </div>
                <div class="col-md-12">
                <div class="form-group">
                    <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                    <div class="help-block with-errors"></div>
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-group"> 
                    <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button">
                    <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                    <div class="clearfix"></div> 
                </div>
                </div>
            </div>            
            </form>
        </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
        <div class="contact-right-area wow bounceInRight">
            <h2>Get In Touch</h2>
            <div class="contact-right">
            <div class="single-contact">
                <div class="contact-icon">
                <i class="lni-map-marker"></i>
                </div>
                <p><?php echo APPLICATION_OFFICE_ADDRESS; ?></p>
            </div>
            <div class="single-contact">
                <div class="contact-icon">
                <i class="lni-envelope"></i>
                </div>
                <p><a href="#"><?php echo APPLICATION_CONTACT_EMAIL; ?></a></p>
            </div>
            <div class="single-contact">
                <div class="contact-icon">
                <i class="lni-phone-handset"></i>
                </div>
                <p><a href="#"><?php echo APPLICATION_OFFICE_PHONE_NUMBER; ?></a></p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div> 
</section>
<!-- Contact Section End -->