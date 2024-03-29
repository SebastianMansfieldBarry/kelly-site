<?php 
 include("includes/header.php");
 include("includes/navbar.php");
?>
    <!-- Start contact Area -->
    <div class="contact-area" id="kellyContact">
      <!-- <div class="contact-inner area-padding"> -->
      <div class="contact-inner">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2 style="font-size:5vw">Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon contactFont">
                  <i class="fas fa-phone contactFont"></i>
                  <p class="contactFont">
                    Call: (011) 485 0352<br>
                    <span class="contactFont">Monday-Friday (9am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon contactFont">
                  <i class="fas fa-envelope contactFont"></i>
                  <p class="contactFont">
                    Email: info@kropmanlaw.co.za<br>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon contactFont">
                  <i class="fas fa-map-marker contactFont"></i>
                  <p class="contactFont">
                    Location: Greater Johannesburg, Gauteng<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!-- Start Map -->
               <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d916347.7912464394!2d27.40379304738674!3d-26.21347308749976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950966aff4e0fb%3A0x2dc747f800e591b0!2sCity+of+Johannesburg+Metropolitan+Municipality!5e0!3m2!1sen!2sza!4v1560953327608!5m2!1sen!2sza"
                width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form contact-form">
                <div id="sendmessage" class="contactFont">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                      data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                      data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                      data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                      data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center" style="margin-bottom:15px;"><button type="submit">Send Message</button></div>
                </form>

              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Area -->
    <?php
  //footer area
        include("includes/footer.php");
        include("includes/scripts.php");