<?php get_header();
  $zipCode = $_POST["zip-code"];
?>
    <main>
      <header class="hero">
        <div class="container container--narrow">
          <?php if (!empty($_POST)) { ?>
            <h1>Sweet, I can work in <?php echo $zipCode; ?></h1>
            <?php
          } else { ?>
            <h1>Get a Free Quote</h1>
          <?php } ?>
        <p class="subtitle">I just need a little bit more information about your yard... and then what?</p>
        </div>
      </header>
      <section>
        <div class="container container--narrow">
          <form action="#" class="form">
            <div class="two-column-grid">
              <div class="col">
                <h3>Service Information</h3>
                  <p>Placeat occaecati repudiandae veritatis ratione et et aperiam maxime et.</p>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="name">Zip Code</label>
                  <input
                    type="text"
                    id="zip-code"
                    placeholder="Enter your Zip Code"
                    name="zip-code"
                    <?php if (!empty($_POST)) { ?> value="<?php echo $zipCode; ?>" <?php } ?>
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="how-often">Select how often to clean</label>
                  <select name="how-often" id="how-often">
                    <option value="once">One Time Cleanup</option>
                    <option value="once-per-week">Once Per Week</option>
                    <option value="twice-per-week">Twice Per Week</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="cleaned-last">When was the last time your yard was cleaned?</label>
                  <select name="cleaned-last" id="cleaned-last">
                    <option value="1-2-weeks">1-2 Weeks</option>
                    <option value="3-4-weeks">3-4 Weeks</option>
                    <option value="1-2-months">1-2 Months</option>
                    <option value="3-4-months">3-4 Months</option>
                    <option value="5-months-or-more">5+ Months</option>
                  </select>
                </div>
                <div class="form-group">
                  <p>What is the size of your yard?</p>
                  <div class="custom-inputs">
                    <div class="custom-input">
                      <input type="radio" name="yard-size" id="quarter-acre" value="quarter-acre">
                      <label for="quarter-acre">1/4 Acre</label>
                    </div>
                    <div class="custom-input">
                      <input type="radio" name="yard-size" id="half-acre" value="half-acre">
                      <label for="half-acre">1/2 Acre</label>
                    </div>
                    <div class="custom-input">
                      <input type="radio" name="yard-size" id="more-than-half-acre" value="more-than-half-acre">
                      <label for="more-than-half-acre">1/2 Acre +</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <p>What area needs scooping?</p>
                  <div class="custom-inputs">
                    <div class="custom-input">
                      <input type="radio" name="what-area" id="back-yard" value="back-yard">
                      <label for="back-yard">Back Yard</label>
                    </div>
                    <div class="custom-input">
                      <input type="radio" name="what-area" id="front-yard" value="front-yard">
                      <label for="front-yard">Front Yard</label>
                    </div>
                    <div class="custom-input">
                      <input type="radio" name="what-area" id="both" value="both">
                      <label for="both">Both</label>
                    </div>
                  </div>
                </div>
              </div>
              <section class="form__full-width text-center">
                <h2>Estimated Cost</h2>
                <div class="price-blocks">
                  <div class="price-block">
                    <h4 class="price-block__title">One-time Cleanup</h4>
                    <h3 class="price-block__price">$20.00*</h3>
                    <p class="price-block__text">*This is just an estimate. I’ll give you the exact quote when I see the yard.</p>
                  </div>
                  <div class="price-block disabled">
                    <h4 class="price-block__title">Once per week</h4>
                    <h3 class="price-block__price">$10.00*</h3>
                    <p class="price-block__text">*per cleanup</p>
                  </div>
                  <div class="price-block disabled">
                    <h4 class="price-block__title">Twice per week</h4>
                    <h3 class="price-block__price">$6.00*</h3>
                    <p class="price-block__text">*per cleanup</p>
                  </div>
                </div>
                <p>No payment is necessary at this time. Contact us to receive your exact quote! </p>
              </section>
              <div class="col">
                <h3>Contact Information</h3>
                <p>Placeat occaecati repudiandae veritatis ratione et et aperiam maxime et.</p>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="first-name">First Name</label>
                  <input
                    type="text"
                    id="first-name"
                    placeholder="Enter your first name"
                    name="first-name"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="last-name">Last Name</label>
                  <input
                    type="text"
                    id="last-name"
                    placeholder="Enter your last name"
                    name="last-name"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="email-address">Email Address</label>
                  <input
                    type="text"
                    id="email-address"
                    placeholder="Enter your email address"
                    name="email-address"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="phone-number">Phone Number</label>
                  <input
                    type="tel"
                    id="phone-number"
                    placeholder="Enter your phone number"
                    name="phone-number"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="address-1">Address</label>
                  <input
                    type="text"
                    id="address-1"
                    placeholder="Address Line 1"
                    name="address-1"
                    class="mb-2"
                    required
                  />
                  <input
                    type="text"
                    id="address-2"
                    placeholder="Address Line 2"
                    name="address-2"
                    required
                  />
                </div>
              </div>
              <div class="col">
                <h3>Pet Information</h3>
                <p>Placeat occaecati repudiandae veritatis ratione et et aperiam maxime et.</p>
              </div>
              <div class="col">
              <div class="form-group">
                  <p>Is it safe for us to be in the yard with your dog?</p>
                  <div class="custom-inputs">
                    <div class="custom-input">
                      <input type="radio" name="yard-safe" id="yes" value="yes">
                      <label for="yes">Yes</label>
                    </div>
                    <div class="custom-input">
                      <input type="radio" name="yard-safe" id="no" value="no">
                      <label for="no">No</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <p>How would you like me to contact you?</p>
                  <div class="custom-inputs">
                    <div class="custom-input">
                      <input type="checkbox" name="call" id="call">
                      <label for="call">Call Me</label>
                    </div>
                    <div class="custom-input">
                      <input type="checkbox" name="text" id="text">
                      <label for="text">Text Me</label>
                    </div>
                    <div class="custom-input">
                      <input type="checkbox" name="email" id="email">
                      <label for="email">Email Me</label>
                    </div>
                  </div>
                </div>
                <button class="button button__primary mt-4">Get Started</button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
