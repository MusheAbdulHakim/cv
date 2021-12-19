<section data-id="contact" class="animated-section">
    <div class="page-title">
      <h2>Contact</h2>
    </div>

    <div class="section-content">
      <div class="row">
        <!-- Contact Info -->
        <div class="col-xs-12 col-sm-4">
          <div class="lm-info-block gray-default">
            <i class="lnr lnr-map-marker"></i>
            <h4>{{$about->address}}</h4>
            <span class="lm-info-block-value"></span>
            <span class="lm-info-block-text"></span>
          </div>

          <div class="lm-info-block gray-default">
            <i class="lnr lnr-phone-handset"></i>
            <h4>{{$about->phone}}</h4>
            <span class="lm-info-block-value"></span>
            <span class="lm-info-block-text"></span>
          </div>

          <div class="lm-info-block gray-default">
            <i class="lnr lnr-envelope"></i>
            <h4>{{$about->email}}</h4>
            <span class="lm-info-block-value"></span>
            <span class="lm-info-block-text"></span>
          </div>

          <div class="lm-info-block gray-default">
            <i class="lnr lnr-checkmark-circle"></i>
            <h4>Freelance Available</h4>
            <span class="lm-info-block-value"></span>
            <span class="lm-info-block-text"></span>
          </div>
        </div>
        <!-- End of Contact Info -->

        <!-- Contact Form -->
        <div class="col-xs-12 col-sm-8">
          <div id="map" class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3936.024378856124!2d-0.8768382852104187!3d9.419262993250749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfd43c54df4ce9dd%3A0x8311c32d90f0eeb8!2sSagnarigu%20Chief%20Palace!5e0!3m2!1sen!2sgh!4v1639190259261!5m2!1sen!2sgh"  allowfullscreen="" loading="lazy"></iframe>
          </div>

          <div class="block-title">
            <h3>How Can I <span>Help You?</span></h3>
          </div>


          <form
            id="contact_form"
            class="contact-form"
            action=""
            method="post"
          >
          <div class="messages"></div>

            <div class="controls two-columns">
              <div class="fields clearfix">
                <div class="left-column">
                  <div class="form-group form-group-with-icon">
                    <input
                      id="form_name"
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder=""
                      required="required"
                      data-error="Name is required."
                    />
                    <label>Full Name</label>
                    <div class="form-control-border"></div>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group form-group-with-icon">
                    <input
                      id="form_email"
                      type="email"
                      name="email"
                      class="form-control"
                      placeholder=""
                      required="required"
                      data-error="Valid email is required."
                    />
                    <label>Email Address</label>
                    <div class="form-control-border"></div>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group form-group-with-icon">
                    <input
                      id="form_subject"
                      type="text"
                      name="subject"
                      class="form-control"
                      placeholder=""
                      required="required"
                      data-error="Subject is required."
                    />
                    <label>Subject</label>
                    <div class="form-control-border"></div>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="right-column">
                  <div class="form-group form-group-with-icon">
                    <textarea
                      id="form_message"
                      name="message"
                      class="form-control"
                      placeholder=""
                      rows="7"
                      required="required"
                      data-error="Please, leave me a message."
                    ></textarea>
                    <label>Message</label>
                    <div class="form-control-border"></div>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>


              <button class="button btn-send" type="submit">Send Message</button>
            </div>
          </form>
        </div>
        <!-- End of Contact Form -->
      </div>
    </div>
</section>